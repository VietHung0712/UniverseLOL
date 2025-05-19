import { $, $$, EventAddActive, EventRemoveActive, scrollToCenter,scrollMouseList } from "./function.js";

const img = $$('.splashArt__frame > img');
const buttons = $$('.splashArt__list--border > button');
const listScrolls = $('.splashArt__list');

buttons.forEach((element, index) => {
    element.addEventListener('click', () => {
        EventRemoveActive($('.splashArt__list--border > button.active'));
        EventRemoveActive($('.splashArt__frame > img.active'));
        EventAddActive(element);
        EventAddActive(img[index]);
        scrollToCenter(element , listScrolls);
    })
});
scrollMouseList(listScrolls);
