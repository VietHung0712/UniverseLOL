var menubar = $(".menubar-btn");
var bordernav = $(".border-nav");
var nav = $(".nav");
var menubarClose = $(".menubar-btn-close");
const navItems = $$(".nav-item");
const subnavs = $$(".subnav");

menubar.addEventListener('click', () => {
    menubarClose.style.visibility = "visible";
    EventToggle(nav);
    EventToggle(bordernav);
})

menubarClose?.addEventListener('click', () => {
    menubarClose.style.visibility = "hidden";
    EventToggle(nav);
    EventToggle(bordernav);

    $(".subnav.active")?.classList.remove("active");
    $(".nav-arrow-down.active")?.classList.remove("active");
})

navItems.forEach((tab, index) => {
    const navArrowDowns = $$(".nav-arrow-down");
    const navArrowDown = navArrowDowns[index];
    const subnav = subnavs[index];
    tab.onclick = function () {
        if (!this.classList.contains("active")) {
            $(".subnav.active")?.classList.remove("active");
            $(".nav-item.active")?.classList.remove("active");
            $(".nav-arrow-down.active")?.classList.remove("active");

            navArrowDown.classList.add("active");
            subnav.classList.add("active");
            this.classList.add("active");
        } else {
            this.classList.remove("active");
            subnav.classList.remove("active");
            navArrowDown.classList.remove("active");
        }
    };
});

bordernav?.addEventListener('click', () => {
    menubarClose.style.visibility = "hidden";
    EventToggle(nav);
    EventToggle(bordernav);
})

nav?.addEventListener('click', function (event) {
    event.stopPropagation()
})