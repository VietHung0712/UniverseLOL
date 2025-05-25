import { setActive } from './function.js';

const getAssetsURL = "https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/";

const $videoOpen = $('.slide__splashArt > video');
const $btnPOP = $('#music-video > .myContainer > .myContainer__border > button');
const $videoPOP = $('#music-video > .myContainer > .myContainer__border > video');
const $imgPOP = $('#music-video > .myContainer > .myContainer__border > img');
const $btnMembers = $('.members__avatar > button');
const $imgMembers = $('.members__img > div');
const $btnTabs = $('.tabs__inf > li > button');
const $liTabs = $('.tabs__text > li');
const $factsList = $('#8Facts');
const $galleryList = $('#galleryList');
const $galleryShow = $('#galleryShow');
const $btnCloseGallery = $('#galleryShow > div > button');

const fields = {
    brandMember: $('#brandMember'),
    role: $('#role'),
    zodiacSign: $('#zodiacSign'),
    nicknames: $('#nicknames'),
    height: $('#height'),
    title: $('#title'),
    paragraph: $('#paragraph'),
    facts: $('#8Facts > li')
};

function handleVideoOpenEnd() {
    $videoOpen.css('opacity', 0);
}

function handlePOPBtnClick() {
    $btnPOP.hide();
    $imgPOP.hide();
    const videoEl = $videoPOP[0];
    videoEl.controls = true;
    videoEl.play();
}

function handleTabClick(index) {
    setActive($btnTabs, index);
    setActive($liTabs, index);
}

function handleMemberClick(index, memberData) {
    const data = memberData[index];
    setActive($btnMembers, index);
    setActive($imgMembers, index);
    setActive($btnTabs, 0);
    setActive($liTabs, 0);

    Object.entries(fields).forEach(([key, $el]) => {
        if (key !== 'facts') $el.html(data[key] || '');
    });

    $factsList.empty();
    if (Array.isArray(data.facts)) {
        data.facts.forEach(fact => $factsList.append(`<li>${fact}</li>`));
    }
}

async function fetchKDAData() {
    try {
        const res = await fetch('../../Assets/Json/kda.json');
        const json = await res.json();
        return {
            memberData: json.memberData,
            urlGallery: json.urlGallery
        };
    } catch (err) {
        console.error('Error reading JSON:', err);
        return {
            memberData: [],
            urlGallery: []
        };
    }
}

async function init() {
    const { memberData, urlGallery } = await fetchKDAData();

    if (memberData.length > 0) handleMemberClick(0, memberData);

    $videoOpen.on('ended', handleVideoOpenEnd);
    $btnPOP.on('click', handlePOPBtnClick);
    $videoPOP.on('pause', () => $btnPOP.show());
    $videoPOP.on('play', () => $btnPOP.hide());

    $btnTabs.each((i, el) => {
        $(el).on('click', () => handleTabClick(i));
    });

    $btnMembers.each((i, el) => {
        $(el).on('click', () => handleMemberClick(i, memberData));
    });

    urlGallery.forEach((el, i) => {
        const data = getAssetsURL + el;
        $galleryList.append(`<button><img src="${data}" loading="lazy" alt=""></button>`);
    });

    $galleryList.on('click', 'button', function () {
        const index = $(this).index();
        $galleryShow.addClass('active');
        $('html, body').css('overflow', 'hidden');
        $galleryShow.find('img').attr('src', getAssetsURL + urlGallery[index]);
    });

    $btnCloseGallery.on('click', () => {
        $galleryShow.removeClass('active');
        $('html, body').css('overflow', 'auto');
    });
}

init()
