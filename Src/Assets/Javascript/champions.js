import { refreshLoad } from "./function.js";

const $inputSearch = $('#filter input');
const $selectSort = $('#filter select');
const $filter = $('#filter');
const $containerBody = $('.container__body');

let listItems = $('.item').toArray();
let lastScrollY = window.scrollY;

function sortData(index, array) {
    switch (index) {
        case 0:
            return array.sort((a, b) => a.dataset.id.localeCompare(b.dataset.id));
        case 1:
            return array.sort((a, b) => b.dataset.id.localeCompare(a.dataset.id));
        case 2:
            return array.sort((a, b) => a.dataset.region.localeCompare(b.dataset.region));
        default:
            return array;
    }
}


function filterSearch(keyword, items) {
    keyword = keyword.trim().toLowerCase();
    const result = items.filter(element =>
        element.dataset.id.trim().toLowerCase().startsWith(keyword)
    );
    return result;
}

function returnResult(perRow, array, $container) {
    if (!$container) return;
    $container.empty();
    for (let i = 0; i < array.length; i += perRow) {
        const $row = $('<div>');
        $row.addClass('row flex-center h-100 mt-md-5 gap-md-2');

        const items = array.slice(i, i + perRow);
        items.forEach(item => $row.append(item));

        $container.append($row);
    }
}

function scrollFilter() {
    $(window).on('scroll', function () {
        const currentScrollY = window.scrollY;
        if (currentScrollY > lastScrollY) {
            $filter.css('top', 'calc(80px + 1vh)');
        } else if (currentScrollY < lastScrollY) {
            $filter.css('top', 'calc(80px + 6vh)');
        }
        lastScrollY = currentScrollY;
    });
}

function init() {
    $inputSearch.on('input', function () {
        const valueInput = $(this).val().trim().toLowerCase();
        if (valueInput.length > 0) {

            const indexSort = $selectSort.selectedIndex;
            listItems = sortData(indexSort, listItems);

            const resultSearch = filterSearch(valueInput, listItems);
            returnResult(5, resultSearch, $containerBody);
        } else {
            returnResult(5, listItems, $containerBody);
        }
    });

    $selectSort.on('change', function () {
        const $champions = $('.item');
        const index = this.selectedIndex;
        
        listItems = sortData(index, listItems);

        const resultSorted = sortData(index, $champions.toArray());
        returnResult(5, resultSorted, $containerBody);
    });

    scrollFilter();
    refreshLoad();
}

init();