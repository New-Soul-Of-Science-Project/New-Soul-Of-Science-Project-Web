# three.js (self-hosted, currently unused)

3D graphics library. Kept here as a local copy, but **not currently
loaded by any live animation** — every animation under
`share/animations/` presently imports three.js from the unpkg CDN
instead (e.g. `https://unpkg.com/three@0.186.0/...`). Switch an
animation to this local copy if self-hosting becomes necessary.

- `three.js` r140 (`0.140.2`) — `three.module.js` (ES module, no
  global; `import * as THREE from '...'`)
- `examples/jsm/controls/OrbitControls.js` — matching version of the
  `OrbitControls` add-on module

Source: https://github.com/mrdoob/three.js (MIT, see `LICENSE`).
Copied unchanged from the npm package.
