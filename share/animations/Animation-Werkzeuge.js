// #: Gemeinsame Werkzeuge der Three.js-Animationen.
// "whenSized": ruft den Aufbau erst auf, wenn der Container eine Größe hat (siehe dort).
// "addPlayControl": Abspiel-Steuerung - ein Symbol (Pause/Abspielen) links vor dem Schieberegler, dazu Klick in die
// Grafik zum Umschalten. Das Symbol zeigt den Zustand (Pause-Symbol, solange die Animation läuft; Abspielen-Symbol,
// wenn sie steht), ist blass und wird beim Überfahren kräftiger. Der Hinweis beim Überfahren ist ein eigenes Tooltip
// im Stil der Seite (".to-hint-tooltip" in "main.css"), nicht das native "title": die Animationen laufen im iframe
// ohne "main.css"/"Tools.js", daher hier nachgebildet. "slider" muss bereits im "container" liegen; seine Breite
// wird für das Symbol verkürzt.
export const PLAY_CONTROL_WIDTH = 28; // px, die das Symbol links vor dem Regler beansprucht

// #: Ruft "fn" auf, sobald der Container eine Größe hat (z. B. wenn reveal.js die Folie einblendet).
export function whenSized(container, fn) {
  const observer = new ResizeObserver(() => {
    if (container.clientWidth > 0 && container.clientHeight > 0) {
      observer.disconnect();
      fn();
    }
  });
  observer.observe(container);
}

export function addPlayControl({ container, canvas, slider, accent, isRunning, onToggle }) {
  const NS = 'http://www.w3.org/2000/svg';
  const button = document.createElement('button');
  button.type = 'button';
  button.style.cssText = 'position:absolute; left:8px; bottom:4px; width:' + (PLAY_CONTROL_WIDTH - 4) + 'px; height:26px; padding:0; border:0; background:none; cursor:pointer; opacity:0.45; transition:opacity 0.15s;';
  button.addEventListener('mouseenter', () => { button.style.opacity = '1'; });
  button.addEventListener('mouseleave', () => { button.style.opacity = '0.45'; });
  const svg = document.createElementNS(NS, 'svg');
  svg.setAttribute('viewBox', '0 0 24 24');
  svg.setAttribute('width', '20');
  svg.setAttribute('height', '20');
  svg.style.cssText = 'display:block; margin:auto; fill:' + accent + ';';
  button.appendChild(svg);
  container.appendChild(button);

  // #: Tooltip dunkel mit Pfeilspitze nach unten, über dem Symbol; erscheint wie auf der Seite nach 300 ms.
  const tip = document.createElement('div');
  tip.setAttribute('role', 'tooltip');
  tip.style.cssText = 'position:absolute; left:8px; bottom:' + (4 + 26 + 10) + 'px; display:none; z-index:10; white-space:nowrap; background:rgba(0,0,0,0.85); color:#fff; font-family:"Trebuchet MS",Arial,Helvetica,sans-serif; font-size:14px; line-height:1.45; padding:6px 12px; border-radius:8px; box-shadow:0 2px 8px rgba(0,0,0,0.3); pointer-events:none;';
  const tipText = document.createElement('span');
  const tipArrow = document.createElement('div');
  tipArrow.style.cssText = 'position:absolute; left:8px; bottom:-4px; width:8px; height:8px; background:rgba(0,0,0,0.85); transform:rotate(45deg);';
  tip.appendChild(tipText);
  tip.appendChild(tipArrow);
  container.appendChild(tip);
  let tipTimer = null;
  function showTip() { clearTimeout(tipTimer); tipTimer = setTimeout(() => { tip.style.display = 'block'; }, 300); }
  function hideTip() { clearTimeout(tipTimer); tip.style.display = 'none'; }
  button.addEventListener('mouseenter', showTip);
  button.addEventListener('mouseleave', hideTip);
  button.addEventListener('click', hideTip);
  button.addEventListener('blur', hideTip);

  slider.style.left = (8 + PLAY_CONTROL_WIDTH) + 'px';
  slider.style.width = 'calc(100% - ' + (8 + PLAY_CONTROL_WIDTH + 12) + 'px)';

  function refresh() {
    const running = isRunning();
    svg.innerHTML = running
      ? '<rect x="5" y="4" width="5" height="16" rx="1"/><rect x="14" y="4" width="5" height="16" rx="1"/>'
      : '<path d="M7 4 L20 12 L7 20 Z"/>';
    const text = running ? 'Animation anhalten' : 'Animation fortsetzen';
    tipText.textContent = text;
    button.setAttribute('aria-label', text);
  }
  button.addEventListener('click', () => { onToggle(); refresh(); });
  canvas.style.cursor = 'pointer';
  canvas.addEventListener('click', () => { onToggle(); refresh(); });
  refresh();
  return { refresh };
}
