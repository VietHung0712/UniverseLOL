$('.slide__video>video').addEventListener('ended', function () {
    this.style.display = 'none';
});

$('.video__main>button').onclick = function () {
    this.style.visibility = 'hidden';
    setTimeout(() => {
        $('.video__main>video').play();
    }, 300)
}
$('.video__main>video').addEventListener("play", function () {
    $('.video__main>video').controls = true;
});

$('.container__main button').addEventListener('click', function () {
    const items = $$('.container__slide--item');
    $('.container__slide').prepend(items[items.length - 1]);
});

function chooseItem() {
    const slideContainer = $('.container__slide');
    const items = $$('.container__slide--item');
    items.forEach((element, index) => {
        let temp;
        element.onclick = function () {
            if (index != 0) {
                temp = index - 1;
            } else {
                temp = items.length - 1;
            }
            slideContainer.appendChild(items[temp]);
            slideContainer.style.backgroundPosition = items[index].style.backgroundPosition;
            slideContainer.style.backgroundImage = items[temp].style.backgroundImage
        }
    });
}
chooseItem();