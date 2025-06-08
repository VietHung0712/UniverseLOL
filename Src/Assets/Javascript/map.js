import { loadToElement } from './function.js';

const $map = $('#map');
const $itemArr = $('li.item');

$itemArr.each( function() {
    const group = this.dataset.group;

    $(this).on('mouseenter mouseleave', () => {
        $(`.area[data-group="${group}"]`).toggleClass('active');
    });
});

loadToElement($map[0]);