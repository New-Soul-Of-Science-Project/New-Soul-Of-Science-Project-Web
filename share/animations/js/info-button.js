// Kleiner "i"-Knopf mit Klick-Popup, das kurz erklärt, wie sich die 3D-Ansicht per Maus/Touch
// verändern lässt (OrbitControls-Standardbelegung, s. "render-v0.186.0.js" - kein
// "enableKeys"/"listenToKeyEvents", also keine Tastatursteuerung).
//
// Zwei Varianten:
// - Ohne "panelTitle": oben rechts im Container (für Animationen ohne Einstellungen-Leiste unten links).
// - Mit "panelTitle" (das ".title"-Element des lil-gui-Panels, s. Aufruf nach "createPanel()" in den
//   anderen Animationen): der Knopf wird ein echtes Kind-Element dieser Titelleiste und bewegt sich
//   dadurch automatisch mit ihr mit - auch während lil-guis eigener Auf-/Zuklapp-Animation -, statt
//   an einer festen, nur für den eingeklappten Zustand passenden Position im Container zu kleben.
export function createInfoButton( container, panelTitle ) {
  const alignedWithPanel = !!panelTitle
  const buttonSize = 18

  const button = document.createElement( 'div' )
  button.textContent = 'i'
  button.title = 'Steuerung der 3D-Ansicht'
  Object.assign( button.style, {
    position: 'absolute',
    width: buttonSize + 'px',
    height: buttonSize + 'px',
    lineHeight: buttonSize + 'px',
    borderRadius: '50%',
    fontFamily: 'Georgia, "Times New Roman", serif',
    fontStyle: 'italic',
    fontWeight: 'bold',
    fontSize: '13px',
    textAlign: 'center',
    cursor: 'pointer',
    userSelect: 'none',
    zIndex: 1000,
  })

  const popup = document.createElement( 'div' )
  popup.innerHTML =
    '<div style="font-weight:bold;margin-bottom:6px;">Ansicht steuern</div>' +
    '<div>Drehen: Ziehen (linke Maustaste bzw. ein Finger)</div>' +
    '<div>Zoomen: Scrollen (Mausrad bzw. zwei Finger zusammen-/auseinanderziehen)</div>' +
    '<div>Verschieben: Ziehen (rechte Maustaste bzw. zwei Finger)</div>'
  Object.assign( popup.style, {
    position: 'absolute',
    maxWidth: '230px',
    padding: '10px 12px',
    borderRadius: '6px',
    background: 'rgba(0,0,0,0.82)',
    color: '#ffffff',
    fontFamily: '"Open Sans", Arial, sans-serif',
    fontSize: '12px',
    lineHeight: '1.5',
    display: 'none',
    zIndex: 1000,
  })

  if ( alignedWithPanel ) {
    // heller statt dunkler Kreis - auf der ohnehin schwarzen Titelleiste wäre ein dunkler Knopf
    // (wie in der Variante ohne Panel) praktisch unsichtbar
    Object.assign( button.style, {
      right: '6px',
      top: '50%',
      transform: 'translateY(-50%)',
      background: 'rgba(255,255,255,0.4)',
      color: '#ffffff',
    })
    // ".title" ist bei lil-gui normalerweise "position: relative" (Text im Fluss) - für die absolute
    // Positionierung unseres Knopfs relativ dazu wird das hier zur Sicherheit erzwungen.
    panelTitle.style.position = 'relative'
    panelTitle.appendChild( button )
  } else {
    Object.assign( button.style, { right: '8px', top: '8px', background: 'rgba(0,0,0,0.55)', color: '#ffffff' })
    container.appendChild( button )
  }

  // Popup-Position erst beim Öffnen berechnen (statt fest im CSS), da sich die Lage des Knopfs
  // relativ zum Container ändert, sobald das Panel auf-/zugeklappt wird.
  function positionPopup() {
    const containerRect = container.getBoundingClientRect()
    const buttonRect = button.getBoundingClientRect()
    popup.style.right = Math.max( 0, containerRect.right - buttonRect.right ) + 'px'
    popup.style.left = 'auto'
    const spaceAbove = buttonRect.top - containerRect.top
    const spaceBelow = containerRect.bottom - buttonRect.bottom
    if ( spaceAbove > spaceBelow ) {
      popup.style.bottom = ( spaceBelow + buttonRect.height + 6 ) + 'px'
      popup.style.top = 'auto'
    } else {
      popup.style.top = ( spaceAbove + buttonRect.height + 6 ) + 'px'
      popup.style.bottom = 'auto'
    }
  }

  button.addEventListener( 'click', ( event ) => {
    event.stopPropagation()
    const opening = popup.style.display === 'none'
    if ( opening ) positionPopup()
    popup.style.display = opening ? 'block' : 'none'
  })
  document.addEventListener( 'click', () => { popup.style.display = 'none' } )
  popup.addEventListener( 'click', ( event ) => event.stopPropagation() )
  // Diese Animationen laufen meist eingebettet in einem iframe auf der eigentlichen Seite - ein
  // Klick AUSSERHALB des iframes (auf der umgebenden Seite) würde vom obigen "document"-Listener
  // nicht erfasst, da er nur auf das eigene Dokument hört. Bei Gleicher-Origin-Einbettung (hier immer
  // der Fall) lässt sich zusätzlich auch auf Klicks im Elterndokument hören.
  if ( window.parent && window.parent !== window ) {
    try {
      window.parent.document.addEventListener( 'click', () => { popup.style.display = 'none' } )
    } catch ( error ) {
      // unerreichbares/fremdes Elterndokument - der eigene Listener oben reicht dann weiterhin aus
    }
  }

  container.appendChild( popup )
}
