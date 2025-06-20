// export function EventToggle(object) {
//     object.classList.toggle("active");
// }
// export function EventAddActive(object) {
//     object.classList.add("active");
// }
// export function EventRemoveActive(object) {
//     object.classList.remove("active");
// }

export function setActive($collection, index) {
    $collection.removeClass('active');
    $collection.eq(index).addClass('active');
}

export function addActive($collection, index) {
    $collection.eq(index).addClass('active');
}

export function removeActive($collection, index) {
    $collection.eq(index).removeClass('active');
}

export function toggleActive($collection, index) {
    $collection.eq(index).toggleClass('active');
}


// Cuộn tự động căn giữa
export function scrollToCenter(element, container) {
    if (element && container) {
        const containerRect = container.getBoundingClientRect();
        const elementRect = element.getBoundingClientRect();

        const offset = (elementRect.left + elementRect.right) / 2 - (containerRect.left + containerRect.right) / 2;

        container.scrollTo({
            left: container.scrollLeft + offset,
            behavior: 'smooth'
        });
    }
}


// Cuộn kéo thả chuột
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

// Bắt sự kiện cuộn đến 1 thẻ cho navbar
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

//Tải Js vào Header
export function createElementScriptHeader() {
    let script = document.createElement("script");
    script.src = "../../Assets/Javascript/header.js";
    document.body.appendChild(script);
}

// Load
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

// Cuộn đến 1 thẻ
export function intersectionObserver(params, object) {
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                object.classList.add("active");
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.4
    });
    if (params instanceof Element) {
        observer.observe(params);
    }
}

// refreshLoad kéo lên đầu trang
export function refreshLoad() {
    window.addEventListener('load', () => {
        window.scrollTo(0, 0);
    });
}

// refreshLoad đến 1 thẻ
export function loadToElement(params) {
    window.addEventListener('load', function () {
        if (params) {
            params.scrollIntoView({ behavior: 'smooth', block: 'center' });
        }
    });
}