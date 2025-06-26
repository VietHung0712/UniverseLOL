import * as THREE from "../Library/three.module.min.js";

export class AnimationManager {
    constructor(model, animations = []) {
        this.model = model;
        this.animations = animations;
        this.mixer = new THREE.AnimationMixer(model);
        this.currentAction = null;
    }

    play(nameOrIndex, loop = THREE.LoopRepeat) {
        if (typeof nameOrIndex === "number") {
            if (!this.animations[nameOrIndex]) {
                return;
            }
            nameOrIndex = this.animations[nameOrIndex].name;
        }

        const clip = THREE.AnimationClip.findByName(this.animations, nameOrIndex);
        if (!clip) {
            return;
        }

        const action = this.mixer.clipAction(clip);
        if (this.currentAction) {
            this.currentAction.fadeOut(0.3);
        }

        action.reset();
        action.setLoop(loop);
        action.fadeIn(0.3);
        action.play();

        this.currentAction = action;
    }

    stop() {
        if (this.currentAction) {
            this.currentAction.stop();
            this.currentAction = null;
        }
    }

    update(deltaTime) {
        if (this.mixer) {
            this.mixer.update(deltaTime);
        }
    }

    getAvailableAnimations() {
        return this.animations.map((clip) => clip.name);
    }
}
