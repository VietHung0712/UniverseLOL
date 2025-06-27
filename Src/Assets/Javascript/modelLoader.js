import { GLTFLoader } from "../Library/GLTFLoader.js";

export class ModelLoader {
    constructor(scene) {
        this.scene = scene;
        this.loader = new GLTFLoader();
        this.model = null;
    }

    loadModel(path, onLoadCallback, onProgressCallback) {
        this.loader.load(
            path,
            (gltf) => {
                this.model = gltf.scene;

                this.model.position.set(0, -100, 0);
                this.model.rotation.set(0, 0, 0);
                this.model.scale.set(1, 1, 1);
                this.model.updateMatrixWorld(true);

                this.scene.add(this.model);

                const animations = gltf.animations;

                if (onLoadCallback) {
                    onLoadCallback(this.model, animations);
                }
            },
            (xhr) => {
                if (onProgressCallback && xhr.lengthComputable) {
                    const percentComplete = (xhr.loaded / xhr.total) * 100;
                    onProgressCallback(percentComplete);
                }
            },
            (error) => {
                console.error("Error load model: ", error);
            }
        );
    }
}
