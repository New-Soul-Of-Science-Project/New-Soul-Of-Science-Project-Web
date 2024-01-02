import * as THREE from 'three' // is needed as module with this name in deeper three.js structures
import { OrbitControls } from 'https://unpkg.com/three@0.160.0/examples/jsm/controls/OrbitControls.js'
// as local module file, like I would prefer
// !!! SyntaxError: Importing binding name 'TOUCH' is not found.
// import { OrbitControls } from './js/three.js/r140-0.160.0/examples/jsm/controls/OrbitControls.js'

import {
  backgroundColor,
  cameraFov,
  intensityLightScaling,
} from 'const' // with 'es-module-shims.js' using the relative local path './js/const.js' gives an error: TypeError: Module name, './js/const.js' does not resolve to a valid URL.

import { objectValuesToArray } from 'utilities' // with 'es-module-shims.js' using the relative local path './js/utilities.js' gives an error: TypeError: Module name, './js/utilities.js' does not resolve to a valid URL.

// opt out of color management:
// THREE.ColorManagement.enabled = false

export class Render {
  constructor(width, height)
  {
    this.dimensions = new Object({ width, height })

    /*--------------------
    Clock
    --------------------*/
    this.clock = new THREE.Clock()

    /*--------------------
    Renderer
    --------------------*/
    this.renderer = new THREE.WebGLRenderer( { antialias: true } )
    this.renderer.setPixelRatio( window.devicePixelRatio )
    this.renderer.setSize( width, height )
    // Updates to Color Management in three.js r152, see: https://discourse.threejs.org/t/updates-to-color-management-in-three-js-r152/50791
    // opt out of color management:
    // this.renderer.outputColorSpace = THREE.LinearSRGBColorSpace
    this.renderer.outputColorSpace = THREE.SRGBColorSpace
    // Wolle this.renderer.useLegacyLights = true
    this.renderer.shadowMap.enabled = true
    document.body.appendChild( this.renderer.domElement )

    /*--------------------
    Scene
    --------------------*/
    this.scene = new THREE.Scene()
    this.scene.background = new THREE.Color( backgroundColor )

    /*--------------------
    Camera
    --------------------*/
    // const camera = new THREE.PerspectiveCamera( 75, window.innerWidth / window.innerHeight, 0.1, 1000 )
    this.camera = new THREE.PerspectiveCamera( cameraFov, width / height, 1, 2000 )

    /*--------------------
    Light
    --------------------*/

    // this.ambientLight = new THREE.AmbientLight(0xffffff, .5)
    // this.scene.add(this.ambientLight)

    this.spotLightParamsObj = {
      color: 0xffffff,
      intensity: 1.0 * Math.PI * intensityLightScaling,
      // distance: Float,
      // angle: Radians,
      // penumbra: Float,
      // decay: 0.0,
    }
    this.spotLightParams = objectValuesToArray(this.spotLightParamsObj)
    this.spotLight = new THREE.SpotLight( ...this.spotLightParams )
    this.spotLight.castShadow = true
    this.scene.add( this.spotLight )
    // this.spotLightHelper = new THREE.SpotLightHelper( this.spotLight )
    // this.scene.add( this.spotLightHelper )

    /*--------------------
    Controls
    --------------------*/
    this.controls = new OrbitControls( this.camera, this.renderer.domElement )
  }
}
