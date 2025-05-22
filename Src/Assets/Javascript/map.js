import { $, $$, EventToggle } from './function.js';

const items = $$('li.item');
const areas = $$('.area');

items.forEach(controller => {
    const group = controller.dataset.group;

    controller.addEventListener('mouseenter', () => {
        document.querySelectorAll(`.area[data-group="${group}"]`)
            .forEach(el => el.classList.add('active'));
    });

    controller.addEventListener('mouseleave', () => {
        document.querySelectorAll(`.area[data-group="${group}"]`)
            .forEach(el => el.classList.remove('active'));
    });
});