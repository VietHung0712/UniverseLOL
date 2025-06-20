import { intersectionObserver, refreshLoad } from "./function.js";

const $championArr = $('#container > .container-fluid > .row > .item');
const $btnMore = $('.container__more > button');
const $ctrMore = $('.container__more');
const $ctrBody = $('#container > .container-fluid');
const $ctr = $('#container');

function init() {
    $btnMore.on('click', function () {
        $ctrMore.addClass('active');
        $championArr.each(function () {
            $(this).addClass('active');
        });
    });

    intersectionObserver($ctr[0], $ctrBody[0]);
    refreshLoad();
}

init();