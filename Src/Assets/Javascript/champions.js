const champions = $$('.main__list--body>.item');
const inputSearch = $('.search__border>input');
const selectSort = $('.search__border>select');
const search = $('.search');

function updateGrid() {
    const visibleItems = $$(".main__list--body>.item:not([style*='display: none'])");
    const count = visibleItems.length;
    if (count < 5) {
        $('.main__list--body').style.width = 90 * count / 5 + '%';
        $('.main__list--body').style.gridTemplateColumns = `repeat(${count}, 1fr)`;
    } else {
        $('.main__list--body').style.width = 90 + '%';
        $('.main__list--body').style.gridTemplateColumns = `repeat(5, 1fr)`;
    }
}

inputSearch.addEventListener('input', () => {
    const searchValue = inputSearch.value.trim().toLowerCase();
    filterSearch(searchValue, champions, 'flex');
    if (window.innerWidth > 768) {
        updateGrid();
    }
});

selectSort.addEventListener('change', () => {
    let index = selectSort.selectedIndex;

    const championsElement = Array.from(champions);

    if (index == 0) {
        championsElement.sort((a, b) => b.dataset.id - a.dataset.id);
    } else if (index == 1) {
        championsElement.sort((a, b) => a.dataset.region.localeCompare(b.dataset.region));
    }

    const parent = $('.main__list--body');
    parent.innerHTML = '';
    championsElement.forEach((champion) => {
        parent.appendChild(champion);
    });
});

let lastScrollY = window.scrollY;

window.addEventListener("scroll", function () {
    let currentScrollY = window.scrollY;

    if (currentScrollY > lastScrollY) {
        search.style.top = '70px';
    } else if (currentScrollY < lastScrollY) {
        search.style.top = 'calc(70px + 6vh)';
    }
    
    lastScrollY = currentScrollY;
});