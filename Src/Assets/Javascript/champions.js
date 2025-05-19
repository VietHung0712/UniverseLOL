import { filterSearch, $, $$ } from "./function.js";

const champions = Array.from($$('.container__body > .item'));
const inputSearch = $('.filter__input > input');
const selectSort = $('.filter__sort > select');
const filter = $('#filter');
const listBody = $('.container__body');

function updateGrid(count) {
    if (count < 5) {
        listBody.style.width = `calc(85% * ${count} / 5)`;
        listBody.style.gridTemplateColumns = `repeat(${count}, 1fr)`;
    } else {
        listBody.style.width = `85%`;
        listBody.style.gridTemplateColumns = `repeat(5, 1fr)`;
    }
}

inputSearch.addEventListener('input', () => {
    const valueInput = inputSearch.value.trim().toLowerCase();
    const count = filterSearch(valueInput, champions, 'flex');
    if (window.innerWidth > 768) {
        updateGrid(count);
    }
});

selectSort.addEventListener('change', () => {
    let index = selectSort.selectedIndex;
    const championsElement = Array.from(champions);
    if (index == 0) {
        championsElement.sort((a, b) => a.dataset.id.localeCompare(b.dataset.id));
    } else if (index == 1) {
        championsElement.sort((a, b) => b.dataset.id.localeCompare(a.dataset.id));
    } else if (index == 2) {
        championsElement.sort((a, b) => a.dataset.region.localeCompare(b.dataset.region));
    }
    const parent = listBody;
    parent.innerHTML = '';
    championsElement.forEach((champion) => {
        parent.appendChild(champion);
    });
});

let lastScrollY = window.scrollY;
window.addEventListener("scroll", function () {
    let currentScrollY = window.scrollY;
    if (currentScrollY > lastScrollY) {
        filter.style.top = `calc(80px + 1vh)`;
    } else if (currentScrollY < lastScrollY) {
        filter.style.top = `calc(80px + 6vh)`;
    }
    lastScrollY = currentScrollY;
});