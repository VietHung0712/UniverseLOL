import { loadToElement } from './function.js';

const $main = $('#main');
const $itemArr = $('li.item');

$itemArr.each(() => {
    const group = this.dataset.group;

    $(this).on('mouseenter mouseleave', () => {
        $(`.area[data-group="${group}"]`).toggleClass('active');
    });
});

loadToElement($main[0]);