export const $ = document.querySelector.bind(document);
export const $$ = document.querySelectorAll.bind(document);

export function EventToggle(object) {
    object.classList.toggle("active");
}
export function EventAddActive(object) {
    object.classList.add("active");
}
export function EventRemoveActive(object) {
    object.classList.remove("active");
}

export function scrollToCenter(element, container) {
    if (element) {
        const containerRect = container.getBoundingClientRect();
        const elementRect = element.getBoundingClientRect();

        const offset = (elementRect.left + elementRect.right) / 2 - (containerRect.left + containerRect.right) / 2;
        container.scrollLeft += offset;
    }
}

export function scrollMouseList(container) {
    let isDragging = false, startX, scrollLeft;
    container.addEventListener('mousedown', e => {
        isDragging = true;
        startX = e.pageX - container.offsetLeft;
        scrollLeft = container.scrollLeft;
    });
    container.addEventListener('mouseleave', () => isDragging = false);
    container.addEventListener('mouseup', () => isDragging = false);

    container.addEventListener('mousemove', e => {
        if (!isDragging) return;
        container.scrollLeft = scrollLeft - (e.pageX - container.offsetLeft - startX);
    });
}

export function viewPort(sections, item) {
    window.addEventListener('scroll', function () {
        sections.forEach(function (section, index) {
            var rect = section.getBoundingClientRect();
            if (rect.top + 200 < window.innerHeight && rect.bottom > 200) {
                item[index].classList.add('active');
            } else {
                item[index].classList.remove('active');
            }
        });
    });
}

export function filterSearch(searchValue, items, displayValue) {
    let count = 0;
    items.forEach((item) => {
        const testSearch = searchValue === '' || item.dataset.id.trim().toLowerCase().startsWith(searchValue);
        if (testSearch) {
            count++;
            item.style.display = displayValue;
        } else {
            item.style.display = 'none';
        }
    });
    return count;
}

export function createElementScriptHeader() {
    let script = document.createElement("script");
    script.src = "../../Assets/Javascript/header.js";
    document.body.appendChild(script);
}

export function load(selector, url, callback) {
    fetch(url)
        .then(response => {
            if (!response.ok) {
                throw new Error(`HTTP error! Status: ${response.status}`);
            }
            return response.text();
        })
        .then(data => {
            document.querySelector(selector).innerHTML = data;
            if (callback) callback();
        })
        .catch(error => console.error(`Error: ${url}:`, error));
}