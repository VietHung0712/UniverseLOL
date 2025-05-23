import { filterSearch } from "./function.js";

const $champions = $('.container__body > .item');
const $inputSearch = $('.filter__input > input');
const $selectSort = $('.filter__sort > select');
const $filter = $('#filter');
const $listBody = $('.container__body');

// Cập nhật Css Grid
function updateGrid(count) {
    if (count < 5) {
        $listBody.css({
            width: `calc(85% * ${count} / 5)`,
            gridTemplateColumns: `repeat(${count}, 1fr)`
        });
    } else {
        $listBody.css({
            width: '85%',
            gridTemplateColumns: 'repeat(5, 1fr)'
        });
    }
}

// Sắp xếp
function sortChampions(championsArray, sortIndex) {
    switch (sortIndex) {
        case 0:
            return championsArray.sort((a, b) => a.dataset.id.localeCompare(b.dataset.id));
        case 1:
            return championsArray.sort((a, b) => b.dataset.id.localeCompare(a.dataset.id));
        case 2:
            return championsArray.sort((a, b) => a.dataset.region.localeCompare(b.dataset.region));
        default:
            return championsArray;
    }
}

// Sự kiện tìm kiếm
$inputSearch.on('input', function () {
    const valueInput = $(this).val().trim().toLowerCase();
    const count = filterSearch(valueInput, $champions.toArray(), 'flex');

    if ($filter.css('display') !== 'none') {
        updateGrid(count);
    }
});

// Sự kiện sắp xếp
$selectSort.on('change', function () {
    const index = this.selectedIndex;
    const sorted = sortChampions($champions.toArray(), index);
    $listBody.empty().append(sorted);
});


// Cuộn thanh filter khi cuộn trang
let lastScrollY = window.scrollY;
$(window).on('scroll', function () {
    const currentScrollY = window.scrollY;
    if (currentScrollY > lastScrollY) {
        $filter.css('top', 'calc(80px + 1vh)');
    } else if (currentScrollY < lastScrollY) {
        $filter.css('top', 'calc(80px + 6vh)');
    }
    lastScrollY = currentScrollY;
});
