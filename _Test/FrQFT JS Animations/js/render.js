import * as THREE from 'three' // is needed as module with this name in deeper three.js structures
import { OrbitControls } from 'https://unpkg.com/three@0.140.2/examples/jsm/controls/OrbitControls.js'
// as local module file, like I would prefer
// !!! SyntaxError: Importing binding name 'TOUCH' is not found.
// import { OrbitControls } from './js/three.js/r140-0.140.2/examples/jsm/controls/OrbitControls.js'

import {
  backgroundColor,
  cameraFov,
} from 'const' // with 'es-module-shims.js' using the relative local path './js/const.js' gives an error: TypeError: Module name, './js/const.js' does not resolve to a valid URL.

import { objectValuesToArray } from 'utilities' // with 'es-module-shims.js' using the relative local path './js/utilities.js' gives an error: TypeError: Module name, './js/utilities.js' does not resolve to a valid URL.

export class Render {
  constructor(width, height)
  {
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
    this.renderer.outputEncoding = THREE.sRGBEncoding
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
		this.spotLightParamsObj = {
			color: 0xffffff,
			intensity: 1.0,
			// distance: Float,
			// angle: Radians,
			// penumbra: Float,
			// decay: Float,
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
