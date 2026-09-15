// !!! does not work in a way that it makes all more easy and have lesser lines !!!


// import * as THREE from 'three' // is needed as module with this name in deeper three.js structures

// import { objectValuesToArray } from 'utilities' // with 'es-module-shims.js' using the relative local path './js/utilities.js' gives an error: TypeError: Module name, './js/utilities.js' does not resolve to a valid URL.


// /*--------
// Light, additional */
// const spotLightSecondParamsObj = {
//   color: 0xffffff,
//   intensity: 0.5,
//   // distance: Float,
//   // angle: Radians,
//   // penumbra: Float,
//   // decay: Float,
// }
// const spotLightSecondParams = objectValuesToArray(spotLightSecondParamsObj)

// /*--------
// Dimension Bowls */
// const bowlGeometryFactor = 1 / 16
// const bowlRadius = 1 * bowlGeometryFactor
// const bowlColor = 0xe01010
// const bowlMeshPhysicalMaterialParams = {
//   color: bowlColor,
//   // opacity: 0.5,
//   // transparent: true,
//   emissive: 0x000000,
//   // metalness: 0.7,
//   metalness: 0.2,
//   flatShading: false,
//   // roughness: 0.7,
//   roughness: 0.9,
//   // envMap: textureCube,
//   // reflectivity: 1,
//   reflectivity: 0.5,
//   side: THREE.DoubleSide,
// }
// const bowlMaterial = new THREE.MeshPhysicalMaterial( bowlMeshPhysicalMaterialParams )
// const bowlSphereGeometryParamsObj = {
//   radius: bowlRadius,
//   widthSegments: 20,
//   heightSegments: 20,
//   // phiStart: Float,
//   // phiLength: Float,
//   // thetaStart: Float,
//   // thetaLength: Float,
// }
// const bowlSphereGeometryParams = objectValuesToArray(bowlSphereGeometryParamsObj)
// const bowlSphereGeometry = new THREE.SphereGeometry( ...bowlSphereGeometryParams )

// /*--------
// Plates */
// const plateThickness = 0.025
// const plateWidth = 0.5
// const plateHeight = 0.25
// const plateBoxGeometryParamsObj = {
//   width: plateWidth,
//   height: plateHeight,
//   dept: plateThickness,
//   // widthSegments: Integer,
//   // heightSegments: Integer,
//   // depthSegments: Integer,
// }
// const plateBoxGeometryParams = objectValuesToArray( plateBoxGeometryParamsObj )

// /*--------
// Mirrors */
// const mirrorBoxColor = 0xe0e0e0
// const mirrorBoxGeometry = new THREE.BoxGeometry( ...plateBoxGeometryParams )
// const mirrorBoxMeshLambertMaterialParams = { color: mirrorBoxColor, side: THREE.DoubleSide }
// const mirrorMaterial = new THREE.MeshLambertMaterial( mirrorBoxMeshLambertMaterialParams )
// // const mirrorHalfMaterial = new THREE.MeshLambertMaterial({
// //   ...mirrorBoxMeshLambertMaterialParams,
// //   opacity: 0.5,
// //   transparent: true,
// // })
// const mirrorHalfGeometryParamsObj = {
//   ...plateBoxGeometryParamsObj,
//   dept: plateBoxGeometryParamsObj.dept / 2,
// }
// const mirrorHalfGeometryParams = objectValuesToArray( mirrorHalfGeometryParamsObj )
// const mirrorHalfGeometry = new THREE.BoxGeometry( ...mirrorHalfGeometryParams )
// const mirrorHalfMeshPhysicalMaterialParams = {
//   color: mirrorBoxColor,
//   // opacity: 0.5,
//   // transparent: true,
//   emissive: 0x000000,
//   metalness: 0.7,
//   flatShading: false,
//   roughness: 0.5,
//   // envMap: textureCube,
//   reflectivity: 1,
//   side: THREE.DoubleSide,
// }
// const mirrorHalfMaterial = new THREE.MeshPhysicalMaterial({
//   ...mirrorHalfMeshPhysicalMaterialParams,
//   opacity: 0.5,
//   transparent: true,
// })
// const mirrorPlaneGeometryParams = objectValuesToArray({
//   width: plateWidth,
//   height: plateHeight,
//   // widthSegments: Integer,
//   // heightSegments: Integer,
// })
// const mirrorPlaneGeometry = new THREE.PlaneGeometry( ...mirrorPlaneGeometryParams )
// // const mirrorPlaneMaterial = new THREE.MeshLambertMaterial({ color: 0xff0000, side: THREE.DoubleSide })
// const mirrorPlaneMeshPhysicalMaterialParams = {
//   ...mirrorHalfMeshPhysicalMaterialParams,
//   // color: 0xffd700,
//   color: 0xffff00,
//   side: THREE.FrontSide,
// }
// const mirrorPlaneMaterial = new THREE.MeshPhysicalMaterial( mirrorPlaneMeshPhysicalMaterialParams )

// /*--------
// Screen */
// const screenColor = 0xffffff
// const screenGeometry = new THREE.BoxGeometry( ...plateBoxGeometryParams )
// const screenParamsMeshLambertMaterial = { color: screenColor, side: THREE.DoubleSide }
// const screenMaterial = new THREE.MeshLambertMaterial( screenParamsMeshLambertMaterial )

// /*--------
// Laser */
// const laserAnimated = true
// const laserColor = 0x00ff00
// const laserOpacity = 0.5
// const laserDiscsInside = false
// const laserPartsCount = 41
// const laserGeometryFactor = 0.125 * 0.1
// const laserCylinderGeometryParamsObj = {
//   radiusTop: 1 * laserGeometryFactor,
//   radiusBottom: 1 * laserGeometryFactor,
//   height: (8 * laserGeometryFactor) / laserPartsCount,
//   radialSegments: 40,
//   heightSegments: 1,
//   // openEnded: true,
//   // thetaStart: Float,
//   // thetaLength: Float,
// }
// const laserCylinderGeometryParams = objectValuesToArray(laserCylinderGeometryParamsObj)
// const laserGeometry = new THREE.CylinderGeometry( ...laserCylinderGeometryParams )
// const laserMeshLambertMaterialParams = {
//   color: laserColor,
//   opacity: laserOpacity,
//   transparent: true,
//   side: THREE.DoubleSide
// }
// const laserClearMeshLambertMaterialParams = {
//   ...laserMeshLambertMaterialParams,
//   opacity: !laserDiscsInside ? 0.0 : laserOpacity,
//   transparent: true
// }
// const laserClosedTopMaterialsParams = [
//   laserMeshLambertMaterialParams,
//   laserMeshLambertMaterialParams,
//   laserClearMeshLambertMaterialParams,
// ]
// const laserOpenEndedMaterialsParams = [
//   laserMeshLambertMaterialParams,
//   laserClearMeshLambertMaterialParams,
//   laserClearMeshLambertMaterialParams,
// ]
// const laserClosedBottomMaterialsParams = [
//   laserMeshLambertMaterialParams,
//   laserClearMeshLambertMaterialParams,
//   laserMeshLambertMaterialParams,
// ]

// /*--------
// Sender */
// const senderGeometryFactor = 0.25
// const senderColor = 0x2050ff
// const senderCorpusSize = 0.5
// // const senderMeshLambertMaterialParams = { color: senderColor, side: THREE.DoubleSide }
// // const senderMaterial = new THREE.MeshLambertMaterial( senderMeshLambertMaterialParams )
// const senderMeshPhysicalMaterialParams = {
//   color: senderColor,
//   // opacity: 0.5,
//   // transparent: true,
//   emissive: 0x000000,
//   metalness: 0.7,
//   flatShading: false,
//   roughness: 0.7,
//   // envMap: textureCube,
//   reflectivity: 1,
//   side: THREE.DoubleSide,
// }
// const senderMaterial = new THREE.MeshPhysicalMaterial( senderMeshPhysicalMaterialParams )
// const senderCorpusBoxGeometryParamsObj = {
//   width: senderCorpusSize * senderGeometryFactor,
//   height: senderCorpusSize * senderGeometryFactor,
//   dept: senderCorpusSize * senderGeometryFactor,
//   // widthSegments: Integer,
//   // heightSegments: Integer,
//   // depthSegments: Integer,
// }
// const senderCorpusBoxGeometryParams = objectValuesToArray(senderCorpusBoxGeometryParamsObj)
// const senderCorpusGeometry = new THREE.BoxGeometry( ...senderCorpusBoxGeometryParams )
// const senderPyramidCylinderGeometryParamsObj = {
//   radiusTop: 0.25 * senderGeometryFactor,
//   radiusBottom: 0.5 * senderGeometryFactor,
//   height: 1 * senderGeometryFactor,
//   radialSegments: 4,
//   heightSegments: 30,
//   openEnded: true,
//   // thetaStart: Float,
//   // thetaLength: Float,
// }
// const senderPyramidCylinderGeometryParams = objectValuesToArray(senderPyramidCylinderGeometryParamsObj)
// const senderPyramidGeometry = new THREE.CylinderGeometry( ...senderPyramidCylinderGeometryParams )

// /*--------
// Scene Basics */
// const centerDistance = 1
// const centerHeightPosition = plateHeight / 2
