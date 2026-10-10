// #: Live-Animation für Folie 4 ("Der Schritt wird immer kleiner") - zeigt den Graphen von
// f(x)=x^2, die Punkte P=(x,f(x)) und Q=(x+h,f(x+h)), das Steigungsdreieck (Katheten h und
// f(x+h)-f(x)) sowie die Sekante zwischen P und Q, die bei schrumpfendem h sichtbar gegen die
// Tangente in P läuft. Läuft automatisch in Schleife, per Schieberegler aber auch manuell
// steuerbar. Eigene, schlanke Szene (orthografische Kamera, kein OrbitControls/Schatten/
// Spotlight) statt der vollen Render-Klasse aus "share/animations/js/render-v0.186.0.js" - die
// ist für frei drehbare 3D-Objekte gedacht, hier reicht eine flache 2D-Ansicht. Three.js-Quelle
// (CDN, Version) bewusst identisch zur aktuellsten bestehenden Animation im Projekt
// (Zwei-Konstruktionen-von-s-3D.html) gewählt. Linien als "Fat Lines" (Line2/LineMaterial aus
// three/examples/jsm/lines/) statt THREE.Line, weil LineBasicMaterial.linewidth von den meisten
// WebGL-Implementierungen ignoriert wird (auf 1px gekappt) - Line2 zeichnet echte, einstellbare
// Pixel-Breiten.
import * as THREE from 'three';
import { Line2 } from 'https://unpkg.com/three@0.186.0/examples/jsm/lines/Line2.js';
import { LineMaterial } from 'https://unpkg.com/three@0.186.0/examples/jsm/lines/LineMaterial.js';
import { LineGeometry } from 'https://unpkg.com/three@0.186.0/examples/jsm/lines/LineGeometry.js';

const X0 = 1;                 // Punkt P liegt fest bei x=1 (damit P=(1,1) - runde Zahlen)
const H_MAX = 0.5;             // #: bewusst kleiner als vorher (war 1.3) - siehe VIEW weiter unten:
                                // kleinerer H_MAX erlaubt einen deutlich engeren Kamera-Ausschnitt
                                // (fast doppelt so großer Füllgrad der Box), ohne die eigentliche
                                // Pointe (Sekante läuft bei h->0 sichtbar gegen Tangente) zu verlieren
const H_MIN = 0.015;
const CYCLE_SECONDS = 4.5;    // Zeit für ein Schrumpfen von H_MAX auf H_MIN (Autoplay)
const HOLD_SECONDS = 1.2;     // Pause bei kleinstem h, bevor der Autoplay-Zyklus neu beginnt

// #: Eng um den tatsächlich benötigten Bereich (P, Q-Bahn, Dreieck) gelegt statt eines großen
// Sicherheitsabstands - vergrößert den sichtbaren Ausschnitt deutlich ("Ausschnitt vergrößern").
const VIEW = { xMin: -0.25, xMax: 1.75, yMin: -0.25, yMax: 2.6 };
const LOG_MAX = Math.log(H_MAX), LOG_MIN = Math.log(H_MIN);
// #: Die Box ist breiter als VIEW (siehe Kamera-Aufweitung unten) - der überschüssige
// Leerraum verteilt sich sonst symmetrisch links/rechts; dieser Versatz schiebt das
// Koordinatensystem weiter nach rechts in diesen Leerraum.
const CAMERA_SHIFT_X = 0.6;

const COLORS = {
  axis: 0x6d6d6d,
  curve: 0x111111,
  tangent: 0x9a9a8a,
  secant: 0xcc3333,    // Rot, auf Wunsch statt Grün
  triangle: 0x2255aa,  // Blau, auf Wunsch statt Braun
  projection: 0x8a8a8a,
  point: 0x111111,
};

// #: Abstand von der eigentlichen VIEW-Grenze, den Achsenpfeile einhalten - ohne diesen Puffer
// reicht die Pfeilspitze (an der Kamera-Kante, siehe y-Achse) teils über den sichtbaren Bereich
// hinaus und wird abgeschnitten.
const ARROW_SIZE = 0.09;
const AXIS_END_GAP = 0.04;

const SLIDER_AREA = 34; // px unten exklusiv für den Schieberegler reserviert, damit die
                         // Achsenbeschriftung nicht vom Regler überdeckt wird

function f(x) { return x * x; }
// #: s in [0,1] -> h, exponentiell (gleiche Abbildung für Autoplay-Fortschritt wie für den
// Schieberegler) - s=0 -> H_MAX, s=1 -> H_MIN.
function sliderToH(s) { return Math.exp(LOG_MAX + (LOG_MIN - LOG_MAX) * s); }
// #: deutsche Zahlschreibweise (Komma statt Punkt) für alle Beschriftungen im Vortrag
function deNum(n, decimals = 2) { return n.toFixed(decimals).replace('.', ','); }

export function initSecantAnimation(containerId) {
  const container = document.getElementById(containerId);
  if (!container) return;

  const width = container.clientWidth;
  const height = container.clientHeight;
  // #: Canvas nutzt nur den oberen Teil der Box - der untere Streifen (SLIDER_AREA) bleibt dem
  // Regler vorbehalten, damit das Koordinatensystem (inkl. x-Achsenbeschriftung) nicht vom Regler
  // überdeckt wird.
  const renderW = width, renderH = height - SLIDER_AREA;

  const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
  renderer.setPixelRatio(window.devicePixelRatio);
  renderer.setSize(renderW, renderH);
  container.appendChild(renderer.domElement);

  const scene = new THREE.Scene();
  const resolution = new THREE.Vector2(renderW, renderH); // für LineMaterial (Pixelbreite der Fat Lines)

  const viewW = VIEW.xMax - VIEW.xMin, viewH = VIEW.yMax - VIEW.yMin;
  const aspect = renderW / renderH;
  const targetAspect = viewW / viewH;
  // Kamera-Fenster ggf. vergrößern (nie verkleinern), damit der komplette VIEW-Bereich immer
  // sichtbar bleibt, unabhängig vom tatsächlichen Seitenverhältnis der Box
  let camW = viewW, camH = viewH;
  if (aspect > targetAspect) { camW = viewH * aspect; } else { camH = viewW / aspect; }
  const cx = (VIEW.xMin + VIEW.xMax) / 2 - CAMERA_SHIFT_X, cy = (VIEW.yMin + VIEW.yMax) / 2;
  const camera = new THREE.OrthographicCamera(cx - camW / 2, cx + camW / 2, cy + camH / 2, cy - camH / 2, 0.1, 10);
  camera.position.z = 5;

  // #: Weltkoordinate -> Pixelposition innerhalb der Box, für die HTML-Beschriftungen (einfacher
  // als Three.js-Textrendering für die paar kurzen Labels).
  const projectVec = new THREE.Vector3();
  function worldToScreen(x, y) {
    projectVec.set(x, y, 0).project(camera);
    return { left: (projectVec.x * 0.5 + 0.5) * renderW, top: (1 - (projectVec.y * 0.5 + 0.5)) * renderH };
  }

  function fatLine(points, color, linewidth, opts = {}) {
    const geom = new LineGeometry();
    geom.setPositions(points.flatMap((p) => [p.x, p.y, p.z || 0]));
    const mat = new LineMaterial({ color, linewidth, resolution, transparent: true, opacity: 1, ...opts });
    const line = new Line2(geom, mat);
    if (opts.dashed) line.computeLineDistances();
    scene.add(line);
    return line;
  }

  // #: Achsen (dünne Referenzlinien bei x=0 und y=0), mit Pfeilspitze am positiven Ende. Die
  // Linien enden etwas vor der eigentlichen VIEW-Grenze (xAxisEnd/yAxisEnd), die Pfeilspitze
  // reicht von dort bis knapp vor die Grenze (AXIS_END_GAP) - ohne diesen Puffer würde die
  // y-Pfeilspitze über den sichtbaren Kamerabereich hinausragen und abgeschnitten werden.
  const xAxisEnd = VIEW.xMax - ARROW_SIZE - AXIS_END_GAP;
  const yAxisEnd = VIEW.yMax - ARROW_SIZE - AXIS_END_GAP;
  fatLine(
    [new THREE.Vector3(VIEW.xMin, 0, 0), new THREE.Vector3(xAxisEnd, 0, 0)],
    COLORS.axis, 1.5, { opacity: 0.5 }
  );
  fatLine(
    [new THREE.Vector3(0, VIEW.yMin, 0), new THREE.Vector3(0, yAxisEnd, 0)],
    COLORS.axis, 1.5, { opacity: 0.5 }
  );

  function makeArrowHead(color, size = ARROW_SIZE) {
    const shape = new THREE.Shape();
    shape.moveTo(size, 0);
    shape.lineTo(-size * 0.5, size * 0.42);
    shape.lineTo(-size * 0.5, -size * 0.42);
    shape.lineTo(size, 0);
    return new THREE.Mesh(new THREE.ShapeGeometry(shape), new THREE.MeshBasicMaterial({ color }));
  }
  const axisArrowX = makeArrowHead(COLORS.axis);
  axisArrowX.position.set(xAxisEnd, 0, 0.001);
  scene.add(axisArrowX);
  const axisArrowY = makeArrowHead(COLORS.axis);
  axisArrowY.rotation.z = Math.PI / 2;
  axisArrowY.position.set(0, yAxisEnd, 0.001);
  scene.add(axisArrowY);

  // #: Parabel y=x^2
  const curvePoints = [];
  const STEPS = 120;
  for (let i = 0; i <= STEPS; i++) {
    const x = VIEW.xMin + (VIEW.xMax - VIEW.xMin) * (i / STEPS);
    curvePoints.push(new THREE.Vector3(x, f(x), 0));
  }
  fatLine(curvePoints, COLORS.curve, 3);

  // #: Tangente in P (Steigung 2*X0, immer sichtbar als gestrichelte Referenz)
  const tangentSlope = 2 * X0;
  const tangentY0 = f(X0);
  fatLine(
    [
      new THREE.Vector3(VIEW.xMin, tangentY0 + tangentSlope * (VIEW.xMin - X0), 0),
      new THREE.Vector3(VIEW.xMax, tangentY0 + tangentSlope * (VIEW.xMax - X0), 0),
    ],
    COLORS.tangent, 2.5, { dashed: true, dashSize: 0.12, gapSize: 0.08 }
  );

  // #: Sekante zwischen P und Q (wird pro Frame aktualisiert) - dünner als die übrigen Linien,
  // auf Wunsch
  const secantLine = fatLine(
    [new THREE.Vector3(VIEW.xMin, 0, 0.02), new THREE.Vector3(VIEW.xMax, 0, 0.02)],
    COLORS.secant, 2.25
  );

  // #: Steigungsdreieck - waagerechte Kathete (Länge h, von P nach rechts) und senkrechte Kathete
  // (Länge f(x+h)-f(x), hoch zu Q), macht Δx/Δy als tatsächliche Streckenlängen sichtbar statt nur
  // algebraisch in der Formel.
  const legH = fatLine([new THREE.Vector3(0, 0, 0.015), new THREE.Vector3(0, 0, 0.015)], COLORS.triangle, 2.5);
  const legV = fatLine([new THREE.Vector3(0, 0, 0.015), new THREE.Vector3(0, 0, 0.015)], COLORS.triangle, 2.5);

  // #: Projektionslinien auf beide Achsen (durchgezogen, dezentes Grau) - für P (fest, einmalig)
  // und für Q (pro Bild aktualisiert). Statt der absoluten Werte an den Lotfußpunkten wird direkt
  // auf der Achse die Differenz zwischen beiden Lotfußpunkten markiert und beschriftet (h bzw.
  // Δy) - dieselbe Größe wie am Dreieck, hier aber unmittelbar auf der Achse selbst sichtbar.
  const px0 = X0, py0 = f(X0);
  fatLine([new THREE.Vector3(px0, py0, 0.01), new THREE.Vector3(px0, 0, 0.01)], COLORS.projection, 1.5, { opacity: 0.7 });
  fatLine([new THREE.Vector3(px0, py0, 0.01), new THREE.Vector3(0, py0, 0.01)], COLORS.projection, 1.5, { opacity: 0.7 });
  const projLineQX = fatLine([new THREE.Vector3(0, 0, 0.01), new THREE.Vector3(0, 0, 0.01)], COLORS.projection, 1.5, { opacity: 0.7 });
  const projLineQY = fatLine([new THREE.Vector3(0, 0, 0.01), new THREE.Vector3(0, 0, 0.01)], COLORS.projection, 1.5, { opacity: 0.7 });

  // Differenz-Markierung direkt auf den Achsen zwischen den beiden Lotfußpunkten
  const diffSegX = fatLine([new THREE.Vector3(0, 0, 0.012), new THREE.Vector3(0, 0, 0.012)], COLORS.triangle, 3.5);
  const diffSegY = fatLine([new THREE.Vector3(0, 0, 0.012), new THREE.Vector3(0, 0, 0.012)], COLORS.triangle, 3.5);

  // #: Punkte P (fest) und Q (bewegt sich) als kleine Kreise
  function makeDot(color) {
    return new THREE.Mesh(new THREE.CircleGeometry(0.035, 24), new THREE.MeshBasicMaterial({ color }));
  }
  const pointP = makeDot(COLORS.point);
  pointP.position.set(X0, f(X0), 0.025);
  scene.add(pointP);
  const pointQ = makeDot(COLORS.secant); // #: höheres z als P, damit der rote Punkt vorne liegt
  scene.add(pointQ);

  // #: HTML-Overlay-Labels. Statische (Achsen, Kurve, P, "Tangente") werden einmal positioniert,
  // dynamische (Q, "Sekante", Dreieck-Katheten, Projektionen, Info-Panel) in updateScene() pro
  // Bild aktualisiert. Kein Hintergrund/Schimmer um die Texte (auf Wunsch) - reiner Text.
  function makeLabel(cssText) {
    const el = document.createElement('div');
    el.style.cssText = 'position:absolute; font-family:"Open Sans",Arial,sans-serif; pointer-events:none; ' + cssText;
    container.appendChild(el);
    return el;
  }
  const labelBase = 'font-size:17px; font-weight:600; color:#222; white-space:nowrap; transform:translate(-50%,-50%);';

  // Info-Panel oben links: h-Wert + Sekanten-/Tangentensteigung, macht die Konvergenz direkt
  // ablesbar statt nur optisch erahnbar.
  const infoPanel = document.createElement('div');
  infoPanel.style.cssText = 'position:absolute; left:10px; top:8px; font-family:"Open Sans",Arial,sans-serif; font-size:17px; font-weight:600; color:#111; line-height:1.5; pointer-events:none;';
  container.appendChild(infoPanel);

  // statische Achsen-Beschriftungen - neben (nicht hinter/über) der Pfeilspitze platziert, damit
  // sie innerhalb des sichtbaren Kamerabereichs bleiben
  const axisXLabel = makeLabel(labelBase + 'color:#555; font-weight:400;');
  { const p = worldToScreen(xAxisEnd, 0.16); axisXLabel.style.left = p.left + 'px'; axisXLabel.style.top = p.top + 'px'; axisXLabel.textContent = 'x'; }
  const axisYLabel = makeLabel(labelBase + 'color:#555; font-weight:400;');
  { const p = worldToScreen(0.16, yAxisEnd); axisYLabel.style.left = p.left + 'px'; axisYLabel.style.top = p.top + 'px'; axisYLabel.textContent = 'y'; }

  // statisches Kurven-Label, rechts von der y-Achse, etwas höher, aber unterhalb der
  // P-Projektionslinie (y=1) - dort frei von Dreieck/P/Q
  const curveLabel = makeLabel(labelBase + 'color:#111; font-size:19px;');
  { const cxp = 0.45, cyp = f(cxp); const p = worldToScreen(cxp, cyp); curveLabel.style.left = (p.left - 25) + 'px'; curveLabel.style.top = (p.top - 40) + 'px'; curveLabel.textContent = 'f(x) = x²'; }

  // statisches P-Label, unten links vom Punkt
  const pLabel = makeLabel(labelBase + 'color:#111;');
  { const p = worldToScreen(X0, f(X0)); pLabel.style.left = (p.left - 58) + 'px'; pLabel.style.top = (p.top + 16) + 'px'; pLabel.textContent = 'P = (1; 1)'; }

  // statisches "Tangente"-Label. Anker knapp rechts vom maximalen Reichweitenpunkt des Dreiecks
  // (X0+H_MAX), linksbündig statt zentriert - der Text wächst dadurch nur nach rechts, in den
  // Bereich, in dem die Parabel wegen der Kamera-Obergrenze gar nicht mehr gezeichnet wird. So
  // bleibt er frei von Kurve, Tangente, Sekante und dem (je nach h wandernden) Dreieck.
  const tangentNameLabel = makeLabel(labelBase + 'color:#6b6b60; transform:translate(0,-50%);');
  { const tx = X0 + H_MAX, ty = tangentY0 + tangentSlope * (tx - X0); const p = worldToScreen(tx, ty); tangentNameLabel.style.left = p.left + 'px'; tangentNameLabel.style.top = (p.top + 25) + 'px'; tangentNameLabel.textContent = 'Tangente'; }

  // dynamische Labels (pro Bild aktualisiert)
  const qLabel = makeLabel(labelBase + 'color:#8a2222;');
  const secantNameLabel = makeLabel(labelBase + 'color:#8a2222;');
  const hLegLabel = makeLabel('font-size:16px; font-weight:600; color:#1a4fa0; transform:translate(-50%,-50%);');
  const dyLegLabel = makeLabel('font-size:16px; font-weight:600; color:#1a4fa0; transform:translate(-50%,-50%);');
  const projXLabel = makeLabel('font-size:15px; font-weight:600; color:#555; transform:translate(-50%,-50%);');
  const projYLabel = makeLabel('font-size:15px; font-weight:600; color:#555; transform:translate(-50%,-50%);');

  const SECANT_LABEL_X = VIEW.xMin + 0.12; // links, wo die Sekante auch bei kleinem h gut sichtbar bleibt

  function updateScene(h) {
    const qx = X0 + h, qy = f(qx), px = X0, py = f(X0);
    const slope = (qy - py) / h;

    // Sekante über P und Q hinaus bis zum Bildrand verlängert, damit es wie eine durchgehende
    // Gerade wirkt
    secantLine.geometry.setPositions([
      VIEW.xMin, py + slope * (VIEW.xMin - X0), 0.02,
      VIEW.xMax, py + slope * (VIEW.xMax - X0), 0.02,
    ]);
    pointQ.position.set(qx, qy, 0.035);

    legH.geometry.setPositions([px, py, 0.015, qx, py, 0.015]);
    legV.geometry.setPositions([qx, py, 0.015, qx, qy, 0.015]);

    // Projektionslinien Q -> x-Achse und Q -> y-Achse
    projLineQX.geometry.setPositions([qx, qy, 0.01, qx, 0, 0.01]);
    projLineQY.geometry.setPositions([qx, qy, 0.01, 0, qy, 0.01]);

    // Differenz zwischen den Lotfußpunkten von P und Q direkt auf der jeweiligen Achse markiert
    // und beschriftet (h auf der x-Achse, Δy auf der y-Achse) - statt der absoluten Werte.
    diffSegX.geometry.setPositions([px, 0, 0.012, qx, 0, 0.012]);
    diffSegY.geometry.setPositions([0, py, 0.012, 0, qy, 0.012]);
    const diffXPos = worldToScreen((px + qx) / 2, 0);
    projXLabel.style.left = diffXPos.left + 'px'; projXLabel.style.top = (diffXPos.top + 16) + 'px';
    projXLabel.textContent = 'h';
    const diffYPos = worldToScreen(0, (py + qy) / 2);
    projYLabel.style.left = (diffYPos.left - 22) + 'px'; projYLabel.style.top = diffYPos.top + 'px';
    projYLabel.textContent = 'Δy';

    infoPanel.innerHTML =
      'h = Δx = ' + deNum(h, 3) + '<br>' +
      'Δy = (x + h)² - x²' + '<br>' +
      'Steigung Sekante = 2x + h = ' + deNum(slope, 3) + '<br>' +
      'Steigung Tangente = 2';

    const hMid = worldToScreen((px + qx) / 2, py);
    hLegLabel.style.left = hMid.left + 'px'; hLegLabel.style.top = (hMid.top + 14) + 'px';
    hLegLabel.textContent = 'h';
    const dyMid = worldToScreen(qx, (py + qy) / 2);
    dyLegLabel.style.left = (dyMid.left + 20) + 'px'; dyLegLabel.style.top = dyMid.top + 'px';
    dyLegLabel.textContent = 'Δy';

    // Q-Label versetzt senkrecht zur tatsächlichen Kurvenrichtung an Q (nicht zur festen Tangente
    // in P) - eine feste Bildschirm-Richtung sieht nur nahe P wie "entlang der Tangente" aus, weil
    // dort Kurve und Tangente fast gleich verlaufen; bei größerem h weicht die Kurve davon spürbar
    // ab, und das Label soll ihr folgen statt der Tangentenrichtung.
    const qPos = worldToScreen(qx, qy);
    const qPosA = worldToScreen(qx - 0.05, f(qx - 0.05));
    const qPosB = worldToScreen(qx + 0.05, f(qx + 0.05));
    let tdx = qPosB.left - qPosA.left, tdy = qPosB.top - qPosA.top;
    const tlen = Math.hypot(tdx, tdy) || 1;
    tdx /= tlen; tdy /= tlen;
    let ndx = tdy, ndy = -tdx; // um -90° gedreht = Normalenrichtung
    if (ndy > 0) { ndx = -ndx; ndy = -ndy; } // stets nach oben (von der Kurve weg) zeigen
    // Kurvennormale mit starker Rechts-Tendenz mischen, dann auf einen festen Radius normieren -
    // damit der Abstand zum roten Punkt konstant bleibt (nicht nur ein zusätzlicher fixer
    // Pixel-Versatz obendrauf, der je nach Kurvensteigung unterschiedlich weit wirkt).
    let bdx = ndx * 0.4 + 1, bdy = ndy * 0.4;
    const blen = Math.hypot(bdx, bdy) || 1;
    bdx /= blen; bdy /= blen;
    const QLABEL_OFFSET = 85;
    qLabel.style.left = (qPos.left + bdx * QLABEL_OFFSET) + 'px';
    qLabel.style.top = (qPos.top + bdy * QLABEL_OFFSET) + 'px';
    qLabel.textContent = 'Q = (' + deNum(qx) + '; ' + deNum(qy) + ')';

    const sy = py + slope * (SECANT_LABEL_X - X0);
    const sPos = worldToScreen(SECANT_LABEL_X, sy);
    secantNameLabel.style.left = sPos.left + 'px'; secantNameLabel.style.top = (sPos.top + 16) + 'px';
    secantNameLabel.textContent = 'Sekante';
  }

  // #: Schieberegler (HTML-Overlay unten in der Box) - erlaubt manuelles Einstellen von h,
  // exponentiell abgebildet wie der Autoplay-Fortschritt (sonst wäre der für h<0.1 interessante
  // Bereich auf der Reglerskala winzig). Ein Zugriff auf den Regler pausiert den Autoplay-Loop
  // dauerhaft (bis die Folie erneut verlassen/betreten wird, siehe "syncWithSlide").
  // #: Eigene Thumb-Größe nur über echte CSS-Regeln (Pseudo-Elemente lassen sich nicht per
  // Inline-style setzen) - einmalig pro Seite eingefügt.
  if (!document.getElementById('secant-slider-style')) {
    const style = document.createElement('style');
    style.id = 'secant-slider-style';
    style.textContent =
      '.secant-slider::-webkit-slider-thumb { width:22px; height:22px; border-radius:50%; }\n' +
      '.secant-slider::-moz-range-thumb { width:22px; height:22px; border-radius:50%; }';
    document.head.appendChild(style);
  }
  const slider = document.createElement('input');
  slider.type = 'range'; slider.min = '0'; slider.max = '1'; slider.step = '0.001'; slider.value = '0';
  slider.className = 'secant-slider';
  slider.setAttribute('aria-label', 'h manuell einstellen');
  slider.style.cssText = 'position:absolute; left:12px; right:12px; bottom:6px; width:calc(100% - 24px); accent-color:#4a7a3a;';
  container.appendChild(slider);

  let manual = false;
  slider.addEventListener('input', () => {
    manual = true;
    stop();
    updateScene(sliderToH(parseFloat(slider.value)));
    renderer.render(scene, camera);
  });

  // #: h schrumpft im Autoplay exponentiell (gefühlt gleichmäßiges Tempo trotz großer
  // Wertespanne) von H_MAX auf H_MIN, hält kurz, springt dann zurück - Dauerschleife, solange
  // niemand den Regler bedient hat.
  let startTime = performance.now();
  function currentH(elapsedMs) {
    const totalCycle = (CYCLE_SECONDS + HOLD_SECONDS) * 1000;
    const t = elapsedMs % totalCycle;
    if (t >= CYCLE_SECONDS * 1000) return H_MIN;
    return sliderToH(t / (CYCLE_SECONDS * 1000));
  }

  let rafId = null;
  let running = false;
  function animate(now) {
    if (!running) return;
    const h = currentH(now - startTime);
    updateScene(h);
    slider.value = String((Math.log(h) - LOG_MAX) / (LOG_MIN - LOG_MAX));
    renderer.render(scene, camera);
    rafId = requestAnimationFrame(animate);
  }

  function start() {
    if (running || manual) return;
    running = true;
    startTime = performance.now();
    rafId = requestAnimationFrame(animate);
  }
  function stop() {
    running = false;
    if (rafId) cancelAnimationFrame(rafId);
  }

  // #: Läuft nur, während die Folie tatsächlich sichtbar ist - reveal.js markiert sie laufend mit
  // der Klasse "present". Spart Rechenleistung auf allen anderen Folien, startet/pausiert beim
  // Folienwechsel automatisch mit. Verlassen der Folie setzt außerdem die manuelle Reglersteuerung
  // zurück, beim erneuten Betreten läuft der Autoplay wieder normal an.
  function syncWithSlide() {
    const section = container.closest('section');
    if (section && section.classList.contains('present')) { start(); }
    else { stop(); manual = false; }
  }
  // #: Sofortiger Check zusätzlich zu den Event-Listenern nötig - "<script type="module">" wird
  // vom Browser immer verzögert ausgeführt (erst nach allen normalen Scripts, auch wenn es früher
  // im Quelltext steht), das spätere "Reveal.initialize()" lief daher bereits, bevor dieser
  // Listener registriert wurde, und das einmalige "ready"-Event wurde verpasst - die Animation
  // startete nie. Der direkte Aufruf hier deckt den Fall ab, in dem reveal.js beim Laden dieses
  // Moduls schon fertig initialisiert ist.
  syncWithSlide();
  if (window.Reveal && typeof window.Reveal.on === 'function') {
    window.Reveal.on('slidechanged', syncWithSlide);
    window.Reveal.on('ready', syncWithSlide);
  } else {
    start();
  }

  // initiale statische Anzeige, bevor der erste Frame läuft (z.B. falls Autoplay noch nicht
  // gestartet ist, weil die Folie beim Laden nicht sichtbar ist)
  updateScene(H_MAX);
  renderer.render(scene, camera);
}
