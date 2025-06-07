import { refreshLoad } from "./function.js";

const $inputSearch = $('#filter input');
const $selectSort = $('#filter select');
const $filter = $('#filter');
const $containerBody = $('.champions__list');

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

function returnResult(row, array, $container, wrap) {
    if (!$container) return;
    $container.empty();
    if (wrap) {
        let temp = 0;
        while (temp < array.length) {
            const $row = $('<div>');
            $row.addClass('row');
            if (
                (temp > 0 &&
                    temp < array.length &&
                    array[temp].dataset.region !== array[temp - 1].dataset.region
                ) || temp == 0
            ) {
                const $div = $('<div>');
                $div.addClass('container__head');
                const $h1 = $('<h1>');
                $h1.text(array[temp].dataset.regionName);
                $div.append($h1);
                $row.append($div);
            }
            $container.append($row);

            let count = 0;
            $row.append(array[temp]);

            count++;
            temp++;

            while (
                temp < array.length &&
                count < row &&
                array[temp].dataset.region === array[temp - 1].dataset.region
            ) {
                $row.append(array[temp]);
                temp++;
                count++;
            }
        }
    } else {
        for (let i = 0; i < array.length; i += row) {
            const $row = $('<div>');
            $row.addClass('row');
            $container.append($row);

            const items = array.slice(i, i + row);
            items.forEach(item => $row.append(item));
        }
    }
}

// function scrollFilter() {
//     $(window).on('scroll', function () {
//         const currentScrollY = window.scrollY;
//         if (currentScrollY > lastScrollY) {
//             $filter.css('top', 'calc(80px + 1vh)');
//         } else if (currentScrollY < lastScrollY) {
//             $filter.css('top', 'calc(80px + 6vh)');
//         }
//         lastScrollY = currentScrollY;
//     });
// }



function init() {

    function actionFilter() {

        const index = $selectSort[0].selectedIndex;
        const wrap = index == 2;

        const valueInput = $inputSearch.val().trim().toLowerCase();
        const resultSearch = filterSearch(valueInput, listItems);
        const resultSorted = sortData(index, resultSearch);

        returnResult(5, resultSorted, $containerBody, wrap);
        window.scrollTo(0, 0);
    }

    $inputSearch.on('input', actionFilter);

    $selectSort.on('change', actionFilter);

    scrollFilter();
    refreshLoad();
}

init();