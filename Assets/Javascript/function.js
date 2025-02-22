const $ = document.querySelector.bind(document);
const $$ = document.querySelectorAll.bind(document);

function EventToggle(object) {
    object.classList.toggle("active");
}
function EventAddActive(object) {
    object.classList.add("active");
}
function EventRemoveActive(object) {
    object.classList.remove("active");
}

function scrollToCenter(element, container) {
    if (element) {
        const containerRect = container.getBoundingClientRect();
        const elementRect = element.getBoundingClientRect();

        const offset = (elementRect.left + elementRect.right) / 2 - (containerRect.left + containerRect.right) / 2;
        container.scrollLeft += offset;
    }
}

function scrollMouseList(container) {
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

function viewPort(sections, item) {
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

function createElementScriptHeader() {
    let script = document.createElement("script");
    script.src = "./Assets/Javascript/header.js";
    document.body.appendChild(script);
}

function load(selector, url, callback) {
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