// #: Live-Animation für den Vortrag "Wie lang ist der Moment in Zenons Pfeilflug?" - ein Pfeil fliegt auf eine
// Zielscheibe; die Flugbahn wird physikalisch berechnet (Schwerkraft, leichter Luftwiderstand, der Abschusswinkel so
// gewählt, dass die Spitze die Mitte der Zielscheibe trifft). Der Regler unten ist wie bei den übrigen Animationen die
// Zeit t. Über die Schaltflächen "Zeitfenster Δt" wird gewählt, wie lange man hinschaut: Der Pfeil wird dann zusätzlich
// an den Orten gezeigt, die er im Zeitfenster [t - Δt, t] durchlaufen hat; eine beschriftete Maßlinie zeigt den Weg Δx,
// daraus folgt die Geschwindigkeit Δx / Δt. Bei Δt = 0 gibt es keinen Weg und die Geschwindigkeit ist als Quotient
// 0 / 0 nicht bestimmbar (Zenons Pfeil). Klick in die Grafik oder das Symbol links vor dem Regler hält die Zeit an.
// Die Kamera folgt dem Pfeil und lässt sich mit der Maus frei um ihn drehen (Ziehen) und zoomen (Mausrad); Doppelklick
// stellt die Ausgangsansicht wieder her. Eigene Szene mit Perspektivkamera (Himmel, Gras, Hügel, Bäume, Schütze, Zielscheibe,
// Schatten); Three.js-Quelle wie die übrigen Animationen im Projekt.
import * as THREE from 'three';
import { OrbitControls } from 'three/addons/controls/OrbitControls.js';
import { addPlayControl, whenSized } from './Animation-Werkzeuge.js?v=2';

// --- Physik -----------------------------------------------------------------------------------------------------------
const G = 9.81;                 // m/s²
const DRAG = 0.0015;            // 1/m: Luftwiderstand a = -DRAG * |v| * v (Verlust von etwa 4 % der Geschwindigkeit auf 30 m)
const V0 = 55;                  // m/s Abschussgeschwindigkeit
const START = { x: 0.65, y: 1.5 };      // Mitte des Pfeils beim Abschuss (an der Bogenhand)
const TARGET_X = 26;            // Mitte der Zielscheibe
const TARGET_Y = 1.25;
const TARGET_RADIUS = 0.61;     // 122-cm-Scheibe
const TARGET_DEPTH = 0.15;
const FACE_X = TARGET_X - TARGET_DEPTH / 2;   // Vorderseite der Scheibe (Richtung Schütze)
const ARROW_HALF = 0.44;        // halbe Pfeillänge samt Spitze
const SIM_DT = 0.0005;
const ARROW_THICK = 3.75;       // Verdickung des Pfeils (nur zur Sichtbarkeit)

// #: Berechnet die Flugbahn für einen Abschusswinkel; endet, sobald die Pfeilspitze die Scheibe erreicht.
function simulate(theta) {
  let x = START.x, y = START.y, vx = V0 * Math.cos(theta), vy = V0 * Math.sin(theta);
  const xs = [x], ys = [y], vxs = [vx], vys = [vy];
  let tipY = y;
  for (let i = 0; i < 40000; i++) {
    const speed = Math.hypot(vx, vy);
    vx += -DRAG * speed * vx * SIM_DT;
    vy += (-G - DRAG * speed * vy) * SIM_DT;
    x += vx * SIM_DT; y += vy * SIM_DT;
    xs.push(x); ys.push(y); vxs.push(vx); vys.push(vy);
    const phi = Math.atan2(vy, vx);
    if (x + ARROW_HALF * Math.cos(phi) >= FACE_X) { tipY = y + ARROW_HALF * Math.sin(phi); break; }
  }
  return { xs, ys, vxs, vys, tipY };
}

// #: Abschusswinkel per Intervallhalbierung so, dass die Spitze auf Höhe der Scheibenmitte trifft.
function solveFlight() {
  let lo = -0.05, hi = 0.25, best = simulate(0.02);
  for (let i = 0; i < 40; i++) {
    const mid = (lo + hi) / 2;
    best = simulate(mid);
    if (best.tipY > TARGET_Y) hi = mid; else lo = mid;
  }
  return best;
}

// --- Hilfen -----------------------------------------------------------------------------------------------------------
function deNum(n, decimals = 2) { return n.toFixed(decimals).replace('.', ','); }
function canvasTexture(w, h, draw, repeat) {
  const c = document.createElement('canvas');
  c.width = w; c.height = h;
  draw(c.getContext('2d'), w, h);
  const t = new THREE.CanvasTexture(c);
  t.colorSpace = THREE.SRGBColorSpace;
  if (repeat) { t.wrapS = t.wrapT = THREE.RepeatWrapping; t.repeat.set(repeat[0], repeat[1]); }
  t.anisotropy = 4;
  return t;
}
function rand(seed) { // einfacher, wiederholbarer Zufall für die Szene
  let s = seed;
  return () => { s = (s * 16807) % 2147483647; return (s - 1) / 2147483646; };
}

// --- Szene: Bauteile --------------------------------------------------------------------------------------------------
function makeSky() {
  return canvasTexture(4, 512, (ctx, w, h) => {
    const g = ctx.createLinearGradient(0, 0, 0, h);
    g.addColorStop(0, '#2f78cf'); g.addColorStop(0.55, '#7db8ea'); g.addColorStop(0.85, '#cfe6f7'); g.addColorStop(1, '#e8f2f8');
    ctx.fillStyle = g; ctx.fillRect(0, 0, w, h);
  });
}
function makeCloudTexture() {
  return canvasTexture(256, 128, (ctx, w, h) => {
    const rnd = rand(7);
    for (let i = 0; i < 14; i++) {
      const cx = 40 + rnd() * (w - 80), cy = h / 2 + (rnd() - 0.5) * 30, r = 22 + rnd() * 26;
      const g = ctx.createRadialGradient(cx, cy, 0, cx, cy, r);
      g.addColorStop(0, 'rgba(255,255,255,0.85)'); g.addColorStop(1, 'rgba(255,255,255,0)');
      ctx.fillStyle = g; ctx.fillRect(0, 0, w, h);
    }
  });
}
function makeGrassTexture() {
  return canvasTexture(512, 512, (ctx, w, h) => {
    ctx.fillStyle = '#4c8a2b'; ctx.fillRect(0, 0, w, h);
    const rnd = rand(11);
    for (let i = 0; i < 5000; i++) {
      const x = rnd() * w, y = rnd() * h, l = 4 + rnd() * 10;
      const shade = Math.floor(60 + rnd() * 70);
      ctx.strokeStyle = 'rgb(' + Math.floor(shade * 0.55) + ',' + (shade + 55) + ',' + Math.floor(shade * 0.3) + ')';
      ctx.lineWidth = 1 + rnd() * 1.2;
      ctx.beginPath(); ctx.moveTo(x, y); ctx.lineTo(x + (rnd() - 0.5) * 3, y - l); ctx.stroke();
    }
  }, [70, 22]);
}
function makeTargetFaceTexture() {
  return canvasTexture(512, 512, (ctx, w, h) => {
    const rings = ['#f2f2f2', '#f2f2f2', '#222222', '#222222', '#2f6fd0', '#2f6fd0', '#d63a2f', '#d63a2f', '#f5c518', '#f5c518'];
    for (let i = 0; i < rings.length; i++) {
      ctx.fillStyle = rings[i];
      ctx.beginPath(); ctx.arc(w / 2, h / 2, (w / 2) * (1 - i / rings.length), 0, Math.PI * 2); ctx.fill();
      ctx.strokeStyle = 'rgba(0,0,0,0.45)'; ctx.lineWidth = 1.5; ctx.stroke();
    }
  });
}

function buildTree(x, z, scale, parent) {
  const g = new THREE.Group();
  const trunk = new THREE.Mesh(new THREE.CylinderGeometry(0.22, 0.32, 2.2, 8), new THREE.MeshStandardMaterial({ color: 0x6b4a2a, roughness: 1 }));
  trunk.position.y = 1.1; g.add(trunk);
  const leafMat = new THREE.MeshStandardMaterial({ color: 0x2f6f2a, roughness: 1 });
  [[3.0, 1.8], [4.3, 1.4], [5.4, 0.9]].forEach(([y, r]) => {
    const cone = new THREE.Mesh(new THREE.ConeGeometry(r, 2.2, 10), leafMat);
    cone.position.y = y; g.add(cone);
  });
  g.position.set(x, 0, z); g.scale.setScalar(scale);
  parent.add(g);
}

function buildArcher(parent) {
  const g = new THREE.Group();
  const skin = new THREE.MeshStandardMaterial({ color: 0xd9a47a, roughness: 0.8 });
  const shirt = new THREE.MeshStandardMaterial({ color: 0x3f6b3a, roughness: 0.9 });
  const trousers = new THREE.MeshStandardMaterial({ color: 0x3a3f55, roughness: 0.9 });
  const wood = new THREE.MeshStandardMaterial({ color: 0x7a4a24, roughness: 0.5 });
  function limb(a, b, r, mat) { // Zylinder zwischen zwei Punkten
    const d = new THREE.Vector3().subVectors(b, a), len = d.length();
    const m = new THREE.Mesh(new THREE.CylinderGeometry(r, r, len, 10), mat);
    m.position.copy(a).addScaledVector(d, 0.5);
    m.quaternion.setFromUnitVectors(new THREE.Vector3(0, 1, 0), d.normalize());
    m.castShadow = true; g.add(m); return m;
  }
  // Beine (Stand quer zur Zielrichtung), Rumpf, Kopf
  limb(new THREE.Vector3(-0.22, 0, 0.02), new THREE.Vector3(-0.1, 0.95, 0), 0.09, trousers);
  limb(new THREE.Vector3(0.22, 0, 0.02), new THREE.Vector3(0.1, 0.95, 0), 0.09, trousers);
  const torso = new THREE.Mesh(new THREE.CapsuleGeometry(0.2, 0.5, 6, 12), shirt);
  torso.position.set(0, 1.3, 0); torso.scale.set(1.1, 1, 0.8); torso.castShadow = true; g.add(torso);
  const head = new THREE.Mesh(new THREE.SphereGeometry(0.12, 16, 12), skin);
  head.position.set(0.04, 1.82, 0); head.castShadow = true; g.add(head);
  const cap = new THREE.Mesh(new THREE.SphereGeometry(0.125, 16, 8, 0, Math.PI * 2, 0, Math.PI / 2), new THREE.MeshStandardMaterial({ color: 0x8a2d25, roughness: 0.9 }));
  cap.position.set(0.04, 1.85, 0); cap.castShadow = true; g.add(cap);
  // Arme: linker (Bogen-)Arm gestreckt zur Scheibe, rechter Arm nach dem Lösen angewinkelt zurück
  const shoulderL = new THREE.Vector3(0.2, 1.5, 0), handL = new THREE.Vector3(0.64, 1.52, 0);
  limb(shoulderL, handL, 0.05, skin);
  const shoulderR = new THREE.Vector3(-0.2, 1.5, 0), elbowR = new THREE.Vector3(-0.5, 1.58, 0.03), handR = new THREE.Vector3(-0.32, 1.72, 0.04);
  limb(shoulderR, elbowR, 0.05, shirt); limb(elbowR, handR, 0.045, skin);
  // Bogen: Kreisbogen in der x-y-Ebene (von der Seite gesehen), nach vorn (zur Scheibe) gewölbt, Sehne auf der Schützenseite
  const R = 1.0, arc = 1.9;
  const bow = new THREE.Mesh(new THREE.TorusGeometry(R, 0.022, 8, 40, arc), wood);
  bow.rotation.z = -arc / 2; bow.position.set(handL.x - R + 0.02, handL.y, 0); bow.castShadow = true; g.add(bow);
  const tipX = bow.position.x + R * Math.cos(arc / 2), tipY = R * Math.sin(arc / 2);
  limb(new THREE.Vector3(tipX, handL.y + tipY, 0), new THREE.Vector3(tipX, handL.y - tipY, 0), 0.004, new THREE.MeshStandardMaterial({ color: 0xeeeeee }));
  g.position.set(0, 0, 0);
  parent.add(g);
}

function buildTarget(parent) {
  const woodMat = new THREE.MeshStandardMaterial({ color: 0x8a6a3a, roughness: 0.8 });
  const strawMat = new THREE.MeshStandardMaterial({ color: 0xc9a85a, roughness: 1 });
  const faceMat = new THREE.MeshStandardMaterial({ map: makeTargetFaceTexture(), roughness: 0.9 });
  // Zylinderachse entlang x; die Deckfläche (+y vor der Drehung) zeigt nach -x, also zum Schützen.
  const boss = new THREE.Mesh(new THREE.CylinderGeometry(TARGET_RADIUS, TARGET_RADIUS, TARGET_DEPTH, 48), [strawMat, faceMat, strawMat]);
  boss.rotation.z = Math.PI / 2; boss.position.set(TARGET_X, TARGET_Y, 0);
  boss.castShadow = true; boss.receiveShadow = true; parent.add(boss);
  [-0.35, 0.35].forEach((dz) => { // Ständer: zwei schräge Beine nach hinten, ein Querbalken
    const leg = new THREE.Mesh(new THREE.BoxGeometry(0.08, 1.5, 0.08), woodMat);
    leg.position.set(TARGET_X + 0.1, 0.6, dz); leg.rotation.z = -0.12; leg.castShadow = true; parent.add(leg);
  });
  const bar = new THREE.Mesh(new THREE.BoxGeometry(0.06, 0.06, 0.9), woodMat);
  bar.position.set(TARGET_X + 0.05, 0.9, 0); bar.castShadow = true; parent.add(bar);
}

// #: Pfeil entlang der lokalen x-Achse (Spitze bei +x). Schaft, Spitze und Federn sind gegenüber der Wirklichkeit etwa
// 4-fach verdickt (Schaftdurchmesser 3 cm statt 8 mm), sonst wäre der Pfeil aus dieser Entfernung kaum zu erkennen.
function makeArrow(opacity) {
  const g = new THREE.Group();
  const transparent = opacity < 1;
  const mat = (color, rough = 0.6) => new THREE.MeshStandardMaterial({ color, roughness: rough, transparent, opacity, depthWrite: !transparent });
  const shaft = new THREE.Mesh(new THREE.CylinderGeometry(0.006, 0.006, 0.78, 8), mat(0xe6cf98));
  shaft.rotation.z = Math.PI / 2; g.add(shaft);
  const head = new THREE.Mesh(new THREE.ConeGeometry(0.0125, 0.06, 12), mat(0x9a9a9a, 0.3));
  head.rotation.z = -Math.PI / 2; head.position.x = 0.39 + 0.03; g.add(head);
  const nock = new THREE.Mesh(new THREE.CylinderGeometry(0.008, 0.008, 0.02, 8), mat(0xd63a2f));
  nock.rotation.z = Math.PI / 2; nock.position.x = -0.39 - 0.005; g.add(nock);
  const vaneMat = mat(0xd63a2f, 0.8);
  for (let i = 0; i < 3; i++) {
    const wrap = new THREE.Group();
    const vane = new THREE.Mesh(new THREE.BoxGeometry(0.13, 0.042, 0.003), vaneMat);
    vane.position.set(-0.39 + 0.1, 0.024, 0);
    wrap.add(vane); wrap.rotation.x = i * (Math.PI * 2 / 3); g.add(wrap);
  }
  g.traverse((o) => { if (o.isMesh) o.castShadow = !transparent; });
  g.scale.set(1, ARROW_THICK, ARROW_THICK);
  return g;
}

// --- Hauptfunktion ----------------------------------------------------------------------------------------------------
const SLIDER_AREA = 34;       // px unten für den Regler
const WINDOWS = [0.10, 0.03, 0.01, 0];   // s wählbare Zeitfenster Δt
const GHOSTS = 16;
const SLOW = 0.2;             // Zeitlupe: 1 s Pfeilflug dauert 5 s
const PRE = 0.12, HOLD = 0.5; // s (Simulationszeit) Ruhe vor dem Abschuss / nach dem Treffer

export function initArrowAnimation(containerId) {
  const container = document.getElementById(containerId);
  if (!container) return;
  if (container.clientWidth === 0 || container.clientHeight === 0) {
    whenSized(container, () => initArrowAnimation(containerId));
    return;
  }
  const width = container.clientWidth, height = container.clientHeight;
  const renderW = width, renderH = height - SLIDER_AREA;

  const renderer = new THREE.WebGLRenderer({ antialias: true });
  renderer.setPixelRatio(window.devicePixelRatio);
  renderer.setSize(renderW, renderH);
  renderer.shadowMap.enabled = true;
  renderer.shadowMap.type = THREE.PCFShadowMap;
  container.appendChild(renderer.domElement);

  const scene = new THREE.Scene();
  scene.background = makeSky();
  scene.fog = new THREE.Fog(0xcfe6f5, 45, 150);

  // Boden, Hügel, Bäume, Wolken
  const ground = new THREE.Mesh(new THREE.PlaneGeometry(300, 180), new THREE.MeshStandardMaterial({ map: makeGrassTexture(), roughness: 1 }));
  ground.rotation.x = -Math.PI / 2; ground.position.set(20, 0, -70); ground.receiveShadow = true; scene.add(ground);
  const rnd = rand(3);
  [[-20, 0x5b8f48], [10, 0x6a9a55], [45, 0x58894a], [75, 0x6d9c5a]].forEach(([x, c], i) => {
    const hill = new THREE.Mesh(new THREE.SphereGeometry(34, 28, 14), new THREE.MeshStandardMaterial({ color: c, roughness: 1 }));
    hill.scale.set(1.9, 0.28 + 0.06 * i, 1); hill.position.set(x, -2, -75 - i * 6); scene.add(hill);
  });
  for (let i = 0; i < 7; i++) buildTree(-6 + i * 9 + rnd() * 4, -14 - rnd() * 22, 0.9 + rnd() * 0.7, scene);
  const cloudTex = makeCloudTexture();
  for (let i = 0; i < 7; i++) {
    const s = new THREE.Sprite(new THREE.SpriteMaterial({ map: cloudTex, transparent: true, fog: false, depthWrite: false }));
    s.position.set(-10 + i * 12 + rnd() * 6, 26 + rnd() * 14, -95); s.scale.set(34 + rnd() * 14, 15, 1); scene.add(s);
  }
  buildArcher(scene);
  buildTarget(scene);

  // Licht und Schatten
  scene.add(new THREE.HemisphereLight(0xcfe6ff, 0x4a6b3a, 1.3));
  const sun = new THREE.DirectionalLight(0xfff1d6, 2.6);
  sun.castShadow = true; sun.shadow.mapSize.set(2048, 2048);
  Object.assign(sun.shadow.camera, { left: -16, right: 16, top: 12, bottom: -12, near: 1, far: 90 });
  sun.shadow.camera.updateProjectionMatrix();
  sun.shadow.bias = -0.0004;
  scene.add(sun); scene.add(sun.target);

  // Kamera: nah am Pfeil; sie folgt ihm. Der Pfeil steht in der Ausgangsansicht bei 70 % der Bildbreite (Bildausschnitt
  // per View-Offset verschoben, der Drehpunkt bleibt der Pfeil). OrbitControls: freies Drehen und Zoomen, kein Verschieben.
  const camera = new THREE.PerspectiveCamera(34, renderW / renderH, 0.1, 400);
  camera.setViewOffset(renderW, renderH, -0.2 * renderW, 0, renderW, renderH);
  const INIT_OFFSET = new THREE.Vector3(-5.36, 0.45, 3.65);   // Kamera relativ zum Pfeil: leicht von hinten (Azimut -56°), Höhe 4°, Abstand 6,5 m
  const controls = new OrbitControls(camera, renderer.domElement);
  controls.enablePan = false; controls.enableDamping = false;
  controls.minDistance = 1; controls.maxDistance = 60;
  controls.minPolarAngle = 0; controls.maxPolarAngle = Math.PI;   // ganz frei
  controls.rotateSpeed = 0.8;
  let inRender = false;
  function followArrow(x, y) { // Drehpunkt auf den Pfeil legen, Kamera um dieselbe Strecke mitnehmen
    const target = new THREE.Vector3(x, y, 0), delta = target.clone().sub(controls.target);
    camera.position.add(delta); controls.target.copy(target);
    inRender = true; controls.update(); inRender = false;
    sun.position.set(x - 12, 30, 18); sun.target.position.set(x, 0, 0); sun.target.updateMatrixWorld();
    camera.updateMatrixWorld();
  }
  function resetView(x, y) {
    controls.target.set(x, y, 0); camera.position.set(x, y, 0).add(INIT_OFFSET);
    followArrow(x, y);
  }
  function toScreen(x, y) { // Weltpunkt (z = 0) -> Pixel im Container
    const v = new THREE.Vector3(x, y, 0).project(camera);
    return { px: (v.x * 0.5 + 0.5) * renderW, py: (-v.y * 0.5 + 0.5) * renderH };
  }

  // Pfeile: der scharfe Pfeil und die Bilder der Belichtungszeit
  const flight = solveFlight();
  const T = (flight.xs.length - 1) * SIM_DT;
  const arrow = makeArrow(1); scene.add(arrow);
  const ghosts = [];
  for (let i = 0; i < GHOSTS; i++) { const gh = makeArrow(0.2); gh.visible = false; scene.add(gh); ghosts.push(gh); }
  // Maßlinie unter dem Pfeil für den Weg Δx im Zeitfenster (mit Beschriftung)
  const barMat = new THREE.MeshBasicMaterial({ color: 0xd63a2f });
  const bar = new THREE.Mesh(new THREE.BoxGeometry(1, 0.05, 0.05), barMat);
  const tickA = new THREE.Mesh(new THREE.BoxGeometry(0.05, 0.24, 0.05), barMat);
  const tickB = tickA.clone();
  [bar, tickA, tickB].forEach((m) => { m.visible = false; scene.add(m); });

  function stateAt(t) { // Ort und Richtung des Pfeils zur Flugzeit t (0..T)
    const f = Math.min(Math.max(t, 0), T) / SIM_DT, i = Math.min(Math.floor(f), flight.xs.length - 2), u = f - i;
    const x = flight.xs[i] + (flight.xs[i + 1] - flight.xs[i]) * u;
    const y = flight.ys[i] + (flight.ys[i + 1] - flight.ys[i]) * u;
    const vx = flight.vxs[i] + (flight.vxs[i + 1] - flight.vxs[i]) * u;
    const vy = flight.vys[i] + (flight.vys[i + 1] - flight.vys[i]) * u;
    return { x, y, phi: Math.atan2(vy, vx) };
  }

  // Beschriftung (links oben), Beschriftung der Maßlinie, Auswahl des Zeitfensters (rechts oben)
  const hud = document.createElement('div');
  hud.style.cssText = 'position:absolute; left:14px; top:12px; padding:8px 14px; font-family:"Open Sans",Arial,sans-serif; font-size:19px; line-height:1.55; color:#111; background:rgba(255,255,255,0.82); border-radius:8px; pointer-events:none;';
  container.appendChild(hud);
  const dim = document.createElement('div');
  dim.style.cssText = 'position:absolute; transform:translate(-50%, 0); padding:3px 10px; font-family:"Open Sans",Arial,sans-serif; font-size:19px; font-weight:600; color:#b3261e; background:rgba(255,255,255,0.85); border-radius:6px; white-space:nowrap; pointer-events:none;';
  container.appendChild(dim);
  const it = (s) => '<i style="font-style:italic">' + s + '</i>';

  let tau = 0.03;   // Startwert des Zeitfensters
  const panel = document.createElement('div');
  panel.style.cssText = 'position:absolute; right:14px; top:12px; padding:8px 12px; font-family:"Open Sans",Arial,sans-serif; font-size:17px; color:#111; background:rgba(255,255,255,0.82); border-radius:8px; text-align:right;';
  panel.innerHTML = '<div style="margin-bottom:6px;">Zeitfenster Δ<i>t</i>: Wie lange schauen wir hin?</div>';
  const btnWrap = document.createElement('div');
  panel.appendChild(btnWrap);
  const buttons = WINDOWS.map((w) => {
    const b = document.createElement('button');
    b.type = 'button';
    b.textContent = deNum(w, 2) + ' s';
    b.style.cssText = 'margin-left:6px; padding:4px 12px; font:inherit; border:2px solid #cc3333; border-radius:6px; cursor:pointer;';
    b.addEventListener('click', () => { tau = w; styleButtons(); renderFrame(); });
    btnWrap.appendChild(b);
    return b;
  });
  function styleButtons() {
    buttons.forEach((b, k) => {
      const on = WINDOWS[k] === tau;
      b.style.background = on ? '#cc3333' : '#fff'; b.style.color = on ? '#fff' : '#cc3333';
    });
  }
  styleButtons();
  container.appendChild(panel);

  // Regler: die Zeit t des Flugs (wie bei den übrigen Animationen)
  if (!document.getElementById('arrow-slider-style')) {
    const style = document.createElement('style');
    style.id = 'arrow-slider-style';
    style.textContent =
      '.arrow-slider::-webkit-slider-thumb { width:22px; height:22px; border-radius:50%; }\n' +
      '.arrow-slider::-moz-range-thumb { width:22px; height:22px; border-radius:50%; }';
    document.head.appendChild(style);
  }
  const slider = document.createElement('input');
  slider.type = 'range'; slider.min = '0'; slider.max = '1'; slider.step = '0.001'; slider.value = '0';
  slider.className = 'arrow-slider';
  slider.setAttribute('aria-label', 'Zeit t des Pfeilflugs');
  slider.style.cssText = 'position:absolute; left:12px; right:12px; bottom:6px; width:calc(100% - 24px); accent-color:#cc3333;';
  container.appendChild(slider);

  // Zustand: clock = Simulationszeit der Schleife (Ruhe, Flug, Ruhe)
  let clock = PRE + 0.18 * T, running = false, rafId = null, lastNow = 0;

  function renderFrame() {
    const t = Math.min(Math.max(clock - PRE, 0), T);
    slider.value = String(t / T);
    const cur = stateAt(t);
    arrow.position.set(cur.x, cur.y, 0); arrow.rotation.set(0, 0, cur.phi);
    followArrow(cur.x, cur.y);
    // Zeitfenster [t - Δt, t]; ganz am Anfang (t < Δt) stattdessen [t, t + Δt]
    const tA = t >= tau ? t - tau : t, tB = t >= tau ? t : Math.min(t + tau, T);
    const dtEff = tB - tA;
    const showGhosts = tau > 0 && dtEff > 0.0004;
    ghosts.forEach((gh, k) => {
      gh.visible = showGhosts;
      if (!showGhosts) return;
      const s = stateAt(tB - dtEff * (k + 1) / GHOSTS);
      gh.position.set(s.x, s.y, 0); gh.rotation.set(0, 0, s.phi);
    });
    const pA = stateAt(tA), pB = stateAt(tB);
    const dx = Math.hypot(pB.x - pA.x, pB.y - pA.y);
    // Maßlinie unter dem Pfeil, von Pfeilmitte zu Pfeilmitte
    [bar, tickA, tickB].forEach((m) => { m.visible = showGhosts; });
    if (showGhosts) {
      const ay = Math.min(pA.y, pB.y) - 0.38;
      bar.scale.x = Math.max(dx, 0.001); bar.position.set((pA.x + pB.x) / 2, ay, 0);
      tickA.position.set(pA.x, ay, 0); tickB.position.set(pB.x, ay, 0);
      const sc = toScreen((pA.x + pB.x) / 2, ay);
      dim.innerHTML = 'Weg im Zeitfenster: Δ' + it('x') + ' = ' + deNum(dx, 2) + ' m';
      dim.style.left = sc.px + 'px'; dim.style.top = (sc.py + 18) + 'px'; dim.style.display = 'block';
    } else if (tau === 0) {
      const sc = toScreen(cur.x, cur.y - 0.38);
      dim.innerHTML = 'Kein Weg – der Pfeil ist nur an einem Ort';
      dim.style.left = sc.px + 'px'; dim.style.top = (sc.py + 18) + 'px'; dim.style.display = 'block';
    } else {
      dim.style.display = 'none';
    }
    // Beschriftung
    let text = it('t') + ' = ' + deNum(t, 2) + ' s<br>Zeitfenster Δ' + it('t') + ' = ' + deNum(tau, 2) + ' s<br>';
    if (tau === 0) {
      text += 'Weg Δ' + it('x') + ' = 0 m<br>Geschwindigkeit Δ' + it('x') + ' / Δ' + it('t') + ' = 0 / 0 – nicht bestimmbar';
    } else {
      const v = dtEff > 0 ? dx / dtEff : 0;
      text += 'Weg Δ' + it('x') + ' = ' + deNum(dx, 2) + ' m<br>Geschwindigkeit Δ' + it('x') + ' / Δ' + it('t') + ' = ' + deNum(v, 0) + ' m/s';
    }
    hud.innerHTML = text;
    renderer.render(scene, camera);
  }

  function animate(now) {
    if (!running) return;
    const dt = Math.min(0.05, (now - lastNow) / 1000);
    lastNow = now;
    clock += dt * SLOW;
    if (clock > PRE + T + HOLD) clock = 0;
    renderFrame();
    rafId = requestAnimationFrame(animate);
  }
  function start() {
    if (running) return;
    running = true; lastNow = performance.now();
    rafId = requestAnimationFrame(animate);
    playControl.refresh();
  }
  function stop() {
    running = false;
    if (rafId) cancelAnimationFrame(rafId);
    playControl.refresh();
  }
  slider.addEventListener('input', () => { stop(); clock = PRE + parseFloat(slider.value) * T; renderFrame(); });
  // #: Ein Ziehen (Drehen der Ansicht) soll die Zeit nicht anhalten: Klick nach Ziehen wird verworfen.
  let downX = 0, downY = 0, dragged = false;
  renderer.domElement.addEventListener('pointerdown', (e) => { downX = e.clientX; downY = e.clientY; dragged = false; });
  renderer.domElement.addEventListener('pointermove', (e) => { if (e.buttons && Math.hypot(e.clientX - downX, e.clientY - downY) > 5) dragged = true; });
  container.addEventListener('click', (e) => { if (dragged && e.target === renderer.domElement) { e.stopPropagation(); dragged = false; } }, true);
  const playControl = addPlayControl({
    container, canvas: renderer.domElement, slider, accent: '#cc3333',
    isRunning: () => running,
    onToggle: () => { if (running) stop(); else start(); },
    texts: { pause: 'Zeit anhalten', play: 'Zeit fortsetzen' },
  });
  renderer.domElement.style.cursor = 'grab';

  // #: Nur während die Folie sichtbar ist laufen lassen (reveal.js markiert sie mit "present").
  function syncWithSlide() {
    const section = container.closest('section');
    if (section && section.classList.contains('present')) start(); else stop();
  }
  resetView(stateAt(clock - PRE).x, stateAt(clock - PRE).y);
  controls.addEventListener('change', () => { if (!inRender) renderFrame(); });
  renderer.domElement.addEventListener('dblclick', () => { const c = stateAt(Math.min(Math.max(clock - PRE, 0), T)); resetView(c.x, c.y); renderFrame(); });
  // #: Hilfe zum Festlegen der Ausgangsansicht: "pfeilAnsicht()" in der Konsole gibt die aktuelle Kameralage relativ zum
  // Pfeil aus (als Zeile für "INIT_OFFSET" samt Kugelkoordinaten).
  window.pfeilAnsicht = () => {
    const o = camera.position.clone().sub(controls.target), r = o.length();
    const out = {
      INIT_OFFSET: 'new THREE.Vector3(' + [o.x, o.y, o.z].map((v) => v.toFixed(2)).join(', ') + ')',
      abstand_m: +r.toFixed(2),
      azimut_grad: +THREE.MathUtils.radToDeg(Math.atan2(o.x, o.z)).toFixed(1),   // 0 = Blick von der Seite (z-Achse), + = zur Scheibe hin
      hoehe_grad: +THREE.MathUtils.radToDeg(Math.asin(o.y / r)).toFixed(1),      // 0 = waagerecht, + = von oben
    };
    console.log(out.INIT_OFFSET, out); return out;
  };
  syncWithSlide();
  if (window.Reveal && typeof window.Reveal.on === 'function') {
    window.Reveal.on('slidechanged', syncWithSlide);
    window.Reveal.on('ready', syncWithSlide);
  } else {
    start();
  }
  renderFrame();
}
