const champions = $$('.main__list--body>.item');
const inputSearch = $('.search__border>input');

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