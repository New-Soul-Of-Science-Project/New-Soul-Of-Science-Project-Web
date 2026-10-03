// Debug-Zugriff für die Konsole: manuell (per Maus) die gewünschte Kameraperspektive einstellen,
// dann in der Browser-Konsole "copy(getCameraInfo())" ausführen - liefert Position, Blickziel,
// daraus abgeleitete Distanz/Richtung und FOV zum Zurückmelden (zum Übernehmen im Quelltext als
// feste "cameraDir"/"cameraDistance"/"cameraTarget"-Werte).
export function exposeCameraDebug( render ) {
  window.__camera = render.camera
  window.__controls = render.controls
  window.getCameraInfo = () => {
    const pos = render.camera.position
    const tgt = render.controls.target
    const dir = pos.clone().sub( tgt )
    const distance = dir.length()
    dir.normalize()
    return JSON.stringify( {
      cameraPosition: { x: pos.x, y: pos.y, z: pos.z },
      target: { x: tgt.x, y: tgt.y, z: tgt.z },
      cameraDir: { x: dir.x, y: dir.y, z: dir.z },
      distance,
      fov: render.camera.fov,
    }, null, 2 )
  }
}
