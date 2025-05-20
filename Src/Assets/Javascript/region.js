import { $, $$, EventAddActive, intersectionObserver, refreshLoad } from "./function.js";

const champions = Array.from($$('.container__body > .item'));
const btnMore = $('.container__more > button');
const containerMore = $('.container__more');
const containerBody = $('.container__body');
const container = $('#container');

btnMore.addEventListener('click', () => {
    EventAddActive(containerMore);
    champions.forEach(element => {
        EventAddActive(element);
    });
})

intersectionObserver(container, containerBody);
refreshLoad();