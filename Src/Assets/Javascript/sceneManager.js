import * as THREE from "../Library/three.module.min.js";

export class SceneManager {
    constructor(container) {
        this.container = container;

        this.renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
        this.renderer.setSize(container.clientWidth, container.clientHeight);
        this.renderer.setPixelRatio(window.devicePixelRatio);
        this.renderer.shadowMap.enabled = true;
        this.renderer.shadowMap.type = THREE.PCFSoftShadowMap;
        this.container.appendChild(this.renderer.domElement);

        this.scene = new THREE.Scene();

        this.camera = new THREE.PerspectiveCamera(60, container.clientWidth / container.clientHeight, 0.1, 1000);
        this.camera.position.set(-30, 150, 250);

        this.ambientLight = new THREE.AmbientLight(0xffffff, 0.6);

        this.directionalLight = new THREE.DirectionalLight(0xffffff, 1);
        this.directionalLight.position.set(5, 10, 5);


        this.scene.add(this.ambientLight, this.directionalLight);
    }

    onResize() {
        this.camera.aspect = this.container.clientWidth / this.container.clientHeight;
        this.camera.updateProjectionMatrix();
        this.renderer.setSize(this.container.clientWidth, this.container.clientHeight);
    }

    render() {
        this.renderer.render(this.scene, this.camera);
    }
}