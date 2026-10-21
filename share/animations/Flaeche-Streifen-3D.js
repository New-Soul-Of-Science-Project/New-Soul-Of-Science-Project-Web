// #: Live-Animation für die Folie "Warum diese Suche?" - zeigt die Fläche unter y = x^2 (zwischen
// x = 0 und x = 1), die aus Streifen aufgebaut wird: erst wenige breite, dann immer mehr und
// schmalere Streifen. Jeder Streifen teilt sich dabei in zwei, deren rechte Hälfte sich an die
// Kurve anhebt - bis die Streifen so schmal sind, dass sie wie eine zusammenhängende Fläche
// aussehen. Bewusst ohne Formeln und ohne h/s: nur die Anschauung und ein Zähler. Gleiche Technik
// und gleiches Verhalten wie "Sekante-Tangente-3D.js" (orthografische Kamera, Fat Lines, Autoplay
// in Schleife, Schieberegler, läuft nur, solange die reveal.js-Folie sichtbar ist).
import * as THREE from 'three';
import { Line2 } from 'https://unpkg.com/three@0.186.0/examples/jsm/lines/Line2.js';
import { LineMaterial } from 'https://unpkg.com/three@0.186.0/examples/jsm/lines/LineMaterial.js';
import { LineGeometry } from 'https://unpkg.com/three@0.186.0/examples/jsm/lines/LineGeometry.js';

const N_START = 4;            // Anzahl der Streifen am Anfang
const DOUBLINGS = 6;          // 4 -> 8 -> 16 -> 32 -> 64 -> 128 -> 256
const N_MAX = N_START * Math.pow(2, DOUBLINGS);
const DOUBLING_SECONDS = 1.3; // Dauer pro Verdopplung (Ruhephase + Teilen)
const SPLIT_START = 0.4;      // Anteil der Dauer, in dem die Streifen zunächst ruhig stehen bleiben
const HOLD_END_SECONDS = 2.2; // Pause bei der feinsten Unterteilung, bevor die Schleife neu beginnt

const VIEW = { xMin: -0.2, xMax: 1.2, yMin: -0.14, yMax: 1.18 };
// #: Verschiebt das Koordinatenkreuz nach rechts (Kamera nach links) - links daneben bleibt Platz für
// den Zähler, ohne dass er über die y-Achse läuft. Höchstens 0,32: darüber würde VIEW.xMax rechts
// aus dem Kamerabild fallen.
const CAMERA_SHIFT_X = 0.3;
const COLORS = { axis: 0x6d6d6d, curve: 0x111111, strip: 0x2255aa };
const ARROW_SIZE = 0.045;
const AXIS_END_GAP = 0.02;
const SLIDER_AREA = 34;       // px unten exklusiv für den Schieberegler

function f(x) { return x * x; }
function smoothstep(a, b, x) { const t = Math.min(1, Math.max(0, (x - a) / (b - a))); return t * t * (3 - 2 * t); }
function lerp(a, b, t) { return a + (b - a) * t; }

export function initAreaStripsAnimation(containerId) {
  const container = document.getElementById(containerId);
  if (!container) return;

  const width = container.clientWidth;
  const height = container.clientHeight;
  const renderW = width, renderH = height - SLIDER_AREA;

  const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
  renderer.setPixelRatio(window.devicePixelRatio);
  renderer.setSize(renderW, renderH);
  container.appendChild(renderer.domElement);

  const scene = new THREE.Scene();
  const resolution = new THREE.Vector2(renderW, renderH);

  // #: Kamera-Fenster nie kleiner als VIEW, damit der Ausschnitt unabhängig vom Seitenverhältnis
  // der Box vollständig sichtbar bleibt (wie bei der Sekanten-Animation).
  const viewW = VIEW.xMax - VIEW.xMin, viewH = VIEW.yMax - VIEW.yMin;
  const aspect = renderW / renderH;
  let camW = viewW, camH = viewH;
  if (aspect > viewW / viewH) { camW = viewH * aspect; } else { camH = viewW / aspect; }
  const cx = (VIEW.xMin + VIEW.xMax) / 2 - CAMERA_SHIFT_X, cy = (VIEW.yMin + VIEW.yMax) / 2;
  const camera = new THREE.OrthographicCamera(cx - camW / 2, cx + camW / 2, cy + camH / 2, cy - camH / 2, 0.1, 10);
  camera.position.z = 5;
  // #: Linker Rand des Kamerabilds - x-Achse und Parabel reichen bis dorthin, sonst endeten sie wegen der
  // Verschiebung mitten im Bild.
  const camLeft = cx - camW / 2;

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
    scene.add(line);
    return line;
  }

  // #: Achsen mit Pfeilspitzen, wie bei der Sekanten-Animation.
  const xAxisEnd = VIEW.xMax - ARROW_SIZE - AXIS_END_GAP;
  const yAxisEnd = VIEW.yMax - ARROW_SIZE - AXIS_END_GAP;
  fatLine([new THREE.Vector3(camLeft, 0, 0), new THREE.Vector3(xAxisEnd, 0, 0)], COLORS.axis, 1.5, { opacity: 0.5 });
  fatLine([new THREE.Vector3(0, VIEW.yMin, 0), new THREE.Vector3(0, yAxisEnd, 0)], COLORS.axis, 1.5, { opacity: 0.5 });
  function makeArrowHead(color) {
    const s = new THREE.Shape();
    s.moveTo(ARROW_SIZE, 0); s.lineTo(-ARROW_SIZE * 0.5, ARROW_SIZE * 0.42); s.lineTo(-ARROW_SIZE * 0.5, -ARROW_SIZE * 0.42); s.lineTo(ARROW_SIZE, 0);
    return new THREE.Mesh(new THREE.ShapeGeometry(s), new THREE.MeshBasicMaterial({ color }));
  }
  const axisArrowX = makeArrowHead(COLORS.axis);
  axisArrowX.position.set(xAxisEnd, 0, 0.001);
  scene.add(axisArrowX);
  const axisArrowY = makeArrowHead(COLORS.axis);
  axisArrowY.rotation.z = Math.PI / 2;
  axisArrowY.position.set(0, yAxisEnd, 0.001);
  scene.add(axisArrowY);

  // #: Streifen - ein Pool aus N_MAX Rechtecken, pro Bild passend skaliert/positioniert. Liegen
  // unter der Kurve (Höhe = Funktionswert am linken Rand), damit zunächst sichtbare Lücken zur Kurve
  // bleiben, die mit schmaler werdenden Streifen verschwinden.
  const stripGeometry = new THREE.PlaneGeometry(1, 1);
  const stripMaterial = new THREE.MeshBasicMaterial({ color: COLORS.strip, transparent: true, opacity: 0.5 });
  const strips = [];
  for (let i = 0; i < N_MAX; i++) {
    const m = new THREE.Mesh(stripGeometry, stripMaterial);
    m.position.z = 0.005;
    m.visible = false;
    scene.add(m);
    strips.push(m);
  }

  // #: Parabel y = x^2 über den ganzen sichtbaren x-Bereich, über den Streifen.
  const curvePoints = [];
  const STEPS = 120;
  for (let i = 0; i <= STEPS; i++) {
    const x = camLeft + (VIEW.xMax - camLeft) * (i / STEPS);
    curvePoints.push(new THREE.Vector3(x, f(x), 0.01));
  }
  fatLine(curvePoints, COLORS.curve, 3);

  function makeLabel(cssText) {
    const el = document.createElement('div');
    el.style.cssText = 'position:absolute; font-family:"Open Sans",Arial,sans-serif; pointer-events:none; ' + cssText;
    container.appendChild(el);
    return el;
  }
  // #: Schriftgrößen skalieren mit der Höhe (Referenz: 516 px im Vortrag), damit der Zähler in der kleineren
  // Einbindung (660x450) nicht in die y-Achse ragt.
  const uiScale = renderH / 516;
  const labelBase = 'font-size:' + (17 * uiScale).toFixed(1) + 'px; font-weight:600; color:#222; white-space:nowrap; transform:translate(-50%,-50%);';
  const axisXLabel = makeLabel(labelBase + 'color:#555; font-weight:400; font-style:italic;');
  { const p = worldToScreen(xAxisEnd, 0.07); axisXLabel.style.left = p.left + 'px'; axisXLabel.style.top = p.top + 'px'; axisXLabel.textContent = 'x'; }
  // #: Die Eins auf der x-Achse - rechter Rand der Fläche, Strich plus Zahl (aufrecht, wie eine Zahl).
  fatLine([new THREE.Vector3(1, -0.03, 0), new THREE.Vector3(1, 0.03, 0)], COLORS.axis, 1.5, { opacity: 0.7 });
  const axisOneLabel = makeLabel(labelBase + 'color:#555; font-weight:400;');
  { const p = worldToScreen(1, -0.085); axisOneLabel.style.left = p.left + 'px'; axisOneLabel.style.top = p.top + 'px'; axisOneLabel.textContent = '1'; }
  const axisYLabel = makeLabel(labelBase + 'color:#555; font-weight:400; font-style:italic;');
  { const p = worldToScreen(0.07, yAxisEnd); axisYLabel.style.left = p.left + 'px'; axisYLabel.style.top = p.top + 'px'; axisYLabel.textContent = 'y'; }

  // #: Kurvenbeschriftung wie bei der Sekanten-Animation: links oberhalb der Parabel, frei von den Streifen
  // (die liegen darunter).
  const curveLabel = makeLabel(labelBase + 'color:#111; font-size:' + (19 * uiScale).toFixed(1) + 'px;');
  { const cxp = 0.45, cyp = f(cxp); const p = worldToScreen(cxp, cyp); curveLabel.style.left = (p.left - 85 * uiScale) + 'px'; curveLabel.style.top = (p.top - 40 * uiScale) + 'px'; curveLabel.innerHTML = '<i style="font-style:italic">f</i>(<i style="font-style:italic">x</i>) = <i style="font-style:italic">x</i>²'; }

  const countPanel = document.createElement('div');
  // #: Zähler links oben, links von der (nach rechts verschobenen) y-Achse.
  countPanel.style.cssText = 'position:absolute; left:10px; top:8px; font-family:"Open Sans",Arial,sans-serif; font-size:' + (19 * uiScale).toFixed(1) + 'px; font-weight:600; line-height:1.5; color:#111; pointer-events:none;';
  container.appendChild(countPanel);

  // #: u in [0, DOUBLINGS]: ganzzahliger Teil = Verdopplungsstufe, Nachkomma = Fortschritt darin.
  // Zunächst ruhen die Streifen (SPLIT_START), danach teilt sich jeder in zwei, deren rechte
  // Hälfte sich von der Höhe des Elternstreifens auf die Höhe der Kurve am eigenen linken Rand hebt.
  function gapFraction(n) { // Abstand zwischen Streifen, verschwindet bei sehr schmalen Streifen
    const t = (Math.log2(n) - Math.log2(N_START)) / DOUBLINGS;
    return 0.12 * (1 - Math.min(1, Math.max(0, t * 1.25)));
  }

  function updateScene(u) {
    const clamped = Math.min(DOUBLINGS, Math.max(0, u));
    const stage = Math.min(DOUBLINGS - 1, Math.floor(clamped));
    const t = clamped - stage;
    const atEnd = clamped >= DOUBLINGS;
    const nOld = atEnd ? N_START * Math.pow(2, DOUBLINGS) : N_START * Math.pow(2, stage);
    const e = atEnd ? 0 : smoothstep(SPLIT_START, 1, t);
    const splitting = !atEnd && e > 0;
    const nNew = splitting ? nOld * 2 : nOld;
    const gap = lerp(gapFraction(nOld), gapFraction(nNew), e);

    const w = 1 / nNew;
    for (let i = 0; i < N_MAX; i++) {
      const m = strips[i];
      if (i >= nNew) { m.visible = false; continue; }
      let h = f(i * w);
      if (splitting && i % 2 === 1) {
        const parentH = f(Math.floor(i / 2) / nOld);
        h = lerp(parentH, f(i * w), e);
      }
      const drawW = w * (1 - gap);
      m.visible = h > 0.0005;
      m.scale.set(drawW, Math.max(h, 0.0001), 1);
      m.position.set((i + 0.5) * w, h / 2, 0.005);
    }

    const shown = (splitting && e > 0.5) ? nNew : nOld;
    countPanel.innerHTML =
      'Anzahl der Streifen: <span style="font-variant-numeric:tabular-nums;">' + shown + '</span><br>' +
      'Breite eines Streifens: <span style="font-variant-numeric:tabular-nums;">1/' + shown + '</span>';
  }

  // #: Schieberegler wie bei der Sekanten-Animation: Zugriff pausiert den Autoplay (bis die Folie
  // verlassen und wieder betreten wird).
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
  slider.setAttribute('aria-label', 'Anzahl der Streifen manuell einstellen');
  slider.style.cssText = 'position:absolute; left:12px; right:12px; bottom:6px; width:calc(100% - 24px); accent-color:#2255aa;';
  container.appendChild(slider);

  let manual = false;
  slider.addEventListener('input', () => {
    manual = true;
    stop();
    updateScene(parseFloat(slider.value) * DOUBLINGS);
    renderer.render(scene, camera);
  });

  const CYCLE_MS = DOUBLINGS * DOUBLING_SECONDS * 1000;
  const TOTAL_MS = CYCLE_MS + HOLD_END_SECONDS * 1000;
  let startTime = performance.now();
  function currentU(elapsedMs) {
    const t = elapsedMs % TOTAL_MS;
    if (t >= CYCLE_MS) return DOUBLINGS;
    return (t / CYCLE_MS) * DOUBLINGS;
  }

  let rafId = null;
  let running = false;
  function animate(now) {
    if (!running) return;
    const u = currentU(now - startTime);
    updateScene(u);
    slider.value = String(u / DOUBLINGS);
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

  // #: Läuft nur, solange die reveal.js-Folie sichtbar ist (Klasse "present"); beim Verlassen wird
  // die manuelle Steuerung zurückgesetzt, damit beim erneuten Betreten wieder der Autoplay läuft.
  function syncWithSlide() {
    const section = container.closest('section');
    if (section && section.classList.contains('present')) { start(); }
    else { stop(); manual = false; }
  }
  syncWithSlide();
  if (window.Reveal && typeof window.Reveal.on === 'function') {
    window.Reveal.on('slidechanged', syncWithSlide);
    window.Reveal.on('ready', syncWithSlide);
  } else {
    start();
  }

  updateScene(0);
  renderer.render(scene, camera);
}
