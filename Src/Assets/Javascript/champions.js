function filterSearch() {
    const searchValue = $('.search__border>input').value.trim().toLowerCase();
    $$('.main__list--body>.item').forEach((champion) => {
        const testSearch = searchValue === '' || champion.dataset.id.trim().toLowerCase().startsWith(searchValue);
        if (testSearch) {
            champion.style.display = 'flex';
        } else {
            champion.style.display = 'none';
        }
    });
    if (window.innerWidth > 768) {
        updateGrid();
    }
}

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

$('.search__border>input').addEventListener('input', filterSearch);