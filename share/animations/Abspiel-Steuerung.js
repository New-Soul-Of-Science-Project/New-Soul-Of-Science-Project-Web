// #: Gemeinsame Abspiel-Steuerung der Three.js-Animationen: ein Symbol (Pause/Abspielen) links vor dem
// Schieberegler, dazu Klick in die Grafik zum Umschalten. Das Symbol zeigt den Zustand (Pause-Symbol, solange
// die Animation läuft; Abspielen-Symbol, wenn sie steht), ist blass und wird beim Überfahren kräftiger.
// "slider" muss bereits im "container" liegen; seine Breite wird für das Symbol verkürzt.
export const PLAY_CONTROL_WIDTH = 28; // px, die das Symbol links vor dem Regler beansprucht

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

  slider.style.left = (8 + PLAY_CONTROL_WIDTH) + 'px';
  slider.style.width = 'calc(100% - ' + (8 + PLAY_CONTROL_WIDTH + 12) + 'px)';

  function refresh() {
    const running = isRunning();
    svg.innerHTML = running
      ? '<rect x="5" y="4" width="5" height="16" rx="1"/><rect x="14" y="4" width="5" height="16" rx="1"/>'
      : '<path d="M7 4 L20 12 L7 20 Z"/>';
    const text = running ? 'Animation anhalten' : 'Animation fortsetzen';
    button.title = text;
    button.setAttribute('aria-label', text);
  }
  button.addEventListener('click', () => { onToggle(); refresh(); });
  canvas.style.cursor = 'pointer';
  canvas.addEventListener('click', () => { onToggle(); refresh(); });
  refresh();
  return { refresh };
}
