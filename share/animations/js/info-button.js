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
    '<div>Ziehen (linke Maustaste bzw. ein Finger): Drehen</div>' +
    '<div>Scrollen (Mausrad bzw. zwei Finger zusammen-/auseinanderziehen): Zoomen</div>' +
    '<div>Ziehen (rechte Maustaste bzw. zwei Finger): Verschieben</div>'
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

  container.appendChild( button )
  container.appendChild( popup )
}
