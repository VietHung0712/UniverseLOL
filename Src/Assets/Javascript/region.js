import { intersectionObserver, refreshLoad } from "./function.js";

const $championArr = $('.container__body > .item');
const $btnMore = $('.container__more > button');
const $containerMore = $('.container__more');
const $containerBody = $('.container__body');
const $container = $('#container');

$btnMore.on('click', function () {
    $containerMore.addClass('active');
    $championArr.each(function () {
        $(this).addClass('active');
    });
});

intersectionObserver($container[0], $containerBody[0]);
refreshLoad();