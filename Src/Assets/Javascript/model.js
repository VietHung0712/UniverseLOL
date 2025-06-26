import { SceneManager } from "./sceneManager.js";
import { ModelLoader } from "./modelLoader.js";
import { ControlsManager } from "./controlsManager.js";
import { AnimationManager } from "./animationManager.js";
import * as THREE from "../Library/three.module.min.js";
const clock = new THREE.Clock();

const $container = $("#container3D");
const $btnViewFullScreen = $('#viewFullScreen');
const $selectAnimations = $("#animationSelector");
let animationManager;

const sceneManager = new SceneManager($container[0]);
const modelLoader = new ModelLoader(sceneManager.scene);
const controlsManager = new ControlsManager(sceneManager.camera, sceneManager.renderer.domElement);

modelLoader.loadModel($container[0].dataset.model, (model, animations) => {
    console.log(model);
    console.log(animations);
    animationManager = new AnimationManager(model, animations);

    if ($selectAnimations && animations.length > 0) {
        animations.forEach((clip) => {
            const $option = $("<option>")
                .val(clip.name)
                .text(clip.name);
            $selectAnimations.append($option);
        });

        $selectAnimations.on("change", (e) => {
            animationManager.play(e.target.value);
        });

        const matchedAnimation = animations.find(clip => clip.name.includes("Idle1"));

        if (matchedAnimation) {
            animationManager.play(matchedAnimation.name);
            $selectAnimations.val(matchedAnimation.name);
        }
    }
});

function animate() {
    requestAnimationFrame(animate);
    const delta = clock.getDelta();

    if (animationManager) animationManager.update(delta);
    controlsManager.update();
    sceneManager.render();

    $btnViewFullScreen.on('click', function () {
        enterFullscreen($container[0]);
    });
}

animate();

window.addEventListener('resize', () => {
    sceneManager.onResize();
});

document.addEventListener("fullscreenchange", () => {
    sceneManager.onResize();
});

async function enterFullscreen(elem) {
    if (elem.requestFullscreen) {
        elem.requestFullscreen();
    } else if (elem.webkitRequestFullscreen) {
        elem.webkitRequestFullscreen();
    } else if (elem.msRequestFullscreen) {
        elem.msRequestFullscreen();
    }
}