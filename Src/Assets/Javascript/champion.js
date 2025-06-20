import { setActive, scrollToCenter, scrollMouseList } from "./function.js";

const $imgArr = $('.splashArt__frame > img');
const $btnArr = $('.splashArt__list--border > button');
const $listScrolls = $('.splashArt__list');

function init() {
    $btnArr.each((index, element) => {
        $(element).on('click', function () {
            setActive($btnArr, index);
            setActive($imgArr, index);
            scrollToCenter(element, $listScrolls[0]);
        });
    });
    scrollMouseList($listScrolls[0]);
}

init();
