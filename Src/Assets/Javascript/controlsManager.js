import { OrbitControls } from "../Library/OrbitControls.js";

export class ControlsManager {
    constructor(camera, domElement) {
        this.controls = new OrbitControls(camera, domElement);

        this.controls.enableDamping = true;
        this.controls.dampingFactor = 0.05;
        this.controls.enableZoom = true;
        this.controls.enablePan = true;
        this.controls.target.set(0, 0, 0);
        this.controls.update();
    }

    update() {
        this.controls.update();
    }
}
