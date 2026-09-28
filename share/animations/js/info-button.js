// Kleiner "i"-Knopf (oben rechts im Animations-Container) mit Klick-Popup, das kurz erklärt,
// wie sich die 3D-Ansicht per Maus/Touch verändern lässt (OrbitControls-Standardbelegung,
// s. "render-v0.186.0.js" - kein "enableKeys"/"listenToKeyEvents", also keine Tastatursteuerung).
export function createInfoButton( container ) {
  const button = document.createElement( 'div' )
  button.textContent = 'i'
  button.title = 'Steuerung der 3D-Ansicht'
  Object.assign( button.style, {
    position: 'absolute',
    right: '8px',
    top: '8px',
    width: '22px',
    height: '22px',
    lineHeight: '22px',
    borderRadius: '50%',
    background: 'rgba(0,0,0,0.55)',
    color: '#ffffff',
    fontFamily: 'Georgia, "Times New Roman", serif',
    fontStyle: 'italic',
    fontWeight: 'bold',
    fontSize: '14px',
    textAlign: 'center',
    cursor: 'pointer',
    userSelect: 'none',
    zIndex: 2,
  })

  const popup = document.createElement( 'div' )
  popup.innerHTML =
    '<div style="font-weight:bold;margin-bottom:6px;">Ansicht steuern</div>' +
    '<div>Drehen: Ziehen (linke Maustaste bzw. ein Finger)</div>' +
    '<div>Zoomen: Scrollen (Mausrad bzw. zwei Finger zusammen-/auseinanderziehen)</div>' +
    '<div>Verschieben: Ziehen (rechte Maustaste bzw. zwei Finger)</div>'
  Object.assign( popup.style, {
    position: 'absolute',
    right: '8px',
    top: '36px',
    maxWidth: '230px',
    padding: '10px 12px',
    borderRadius: '6px',
    background: 'rgba(0,0,0,0.82)',
    color: '#ffffff',
    fontFamily: '"Open Sans", Arial, sans-serif',
    fontSize: '12px',
    lineHeight: '1.5',
    display: 'none',
    zIndex: 2,
  })

  button.addEventListener( 'click', ( event ) => {
    event.stopPropagation()
    popup.style.display = popup.style.display === 'none' ? 'block' : 'none'
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

  container.appendChild( button )
  container.appendChild( popup )
}
