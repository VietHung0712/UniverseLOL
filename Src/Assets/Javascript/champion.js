import { $, $$, EventAddActive, EventRemoveActive, scrollToCenter,scrollMouseList } from "./function.js";

const skinImgs = $$('.skin__item>.skin__item--img');
const img = $('.skins__show>img');
const skinItems = $$('.skin__item');

skinItems.forEach((element, index) => {
    element.addEventListener('click', () => {
        EventRemoveActive($('.skin__item.active'));
        EventAddActive(element);
        let temp = skinImgs[index].style.backgroundImage;
        img.src = temp.replace('url("', '').replace('")', '');
        scrollToCenter(element , $('.skins__list--items'));
    })
});
scrollMouseList($('.skins__list--items'))
