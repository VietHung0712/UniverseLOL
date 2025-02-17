const champions = $$('.champions__body>.item');
const btnShow = $('.champions__showAll>button');

window.addEventListener('load', () => {
    if(champions.length > 10){
        EventAddActive($('.champions__showAll'));
    }
    champions.forEach((element, index) => {
        if (index < 10) {
            EventAddActive(element);
        }
    });
})

btnShow.addEventListener('click', () => {
    champions.forEach((element) => {
        EventAddActive(element);
    });
    EventRemoveActive($('.champions__showAll'));
})