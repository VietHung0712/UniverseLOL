import { scrollToCenter, scrollMouseList } from "./function.js";

const $imgArr = $('.splashArt__frame > img');
const $btnArr = $('.splashArt__list--border > button');
const $listScrolls = $('.splashArt__list');

$btnArr.each((index, element) => {
    $(element).on('click', function () {
        $btnArr.removeClass('active');
        $imgArr.removeClass('active');

        $(element).addClass('active');
        $imgArr.eq(index).addClass('active');

        scrollToCenter(element, $listScrolls[0]);
    });
});
scrollMouseList($listScrolls[0]);
