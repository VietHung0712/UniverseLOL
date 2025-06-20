import { setActive, toggleActive } from './function.js';

const $btnPOP = $('#music-video button');
const $videoPOP = $('#music-video video');
const $imgPOP = $('#music-video img');
const $btnMembers = $('#btnMembers > button');
const $imgMember = $('#imgMember');
const $btnTabInfoMembers = $('#ulBtnMembers > li > button');
const $infoTabs = $('#ctrInfoMember > div');
const $facts = $('#8Facts');
const $btnSplashArt = $('#btnSplashArt button');
const $splashArt = $('#splashArt .ctr__body > img');
const $galleryList = $('#galleryList');
const $btnScrollGallery = $('#ulBtnGallery button');
const $scrollGalleryList = $('#scrollGalleryList');
const $galleryShow = $('#galleryShow');

const fields = {
    brandMember: $('#brandMember'),
    role: $('#roleMember'),
    zodiacSign: $('#zoSignMember'),
    nicknames: $('#nickNamesMember'),
    height: $('#heightMember'),
    title: $('#titleMember'),
    story: $('#storyMember')
};

function handlePOPBtnClick(srcVideo) {
    $btnPOP.hide();
    $imgPOP.hide();
    const videoEl = $videoPOP[0];
    videoEl.src = srcVideo;
    videoEl.play();
}

function handleTabClick(index) {
    setActive($btnTabInfoMembers, index);
    setActive($infoTabs, index);
}

function handleMemberClick(index, assetsUrl, memberData) {
    const data = memberData[index];
    setActive($btnMembers, index);
    setActive($btnTabInfoMembers, 0);
    setActive($infoTabs, 0);

    Object.entries(fields).forEach(([key, $el]) => {
        $el.html(data[key] || '');
    });

    if (data.imgMember) {
        let src = `url('${assetsUrl}/${data.imgMember}')`;
        $imgMember.css('background-image', src);
    }

    $facts.empty();
    if (Array.isArray(data.facts)) {
        data.facts.forEach(fact => $facts.append(`-${fact}<br>`));
    }
}

function handleSplashArtClick(index, assetsUrl, splashArt) {
    const data = splashArt[index];
    setActive($btnSplashArt, index);
    if (Array.isArray(data)) {
        data.forEach((el, i) => {
            $splashArt[i].src = assetsUrl + '/' + el;
        });
    }
}

function loadGalleryUrl(assetsUrl, url) {
    for (let i = 0; i < url.length; i++) {
        // for (let i = 0; i < 5; i ++) {
        const data = assetsUrl + '/' + url[i];
        const $div = $('<div>').addClass('col-xl-2 col-lg-3 col-md-4 col-6');
        $div.append(`<button><img src="${data}" loading="lazy" alt=""></button>`);
        $galleryList.append($div);
    }
}

function getColumnsCountGallery(count) {
    let width = window.innerWidth;
    let result = 0;
    if (width > 1200) {
        result = count / (12 / 2);
    } else if (width > 992) {
        result = count / (12 / 3);
    } else if (width > 768) {
        result = count / (12 / 4);
    } else {
        result = count / (12 / 6);
    }
    return Math.ceil(result);
}

function loadIndexColumnsGallery(a) {
    for (let i = 0; i < a; i++) {
        const $li = $('<li>');
        const $button = $('<button>').addClass('border-0 transition');
        if (i == 0) {
            $button.addClass('active');
        }
        $li.append($button);
        $('#ulBtnIndexGallery').append($li);
    }
}

function scrollGallery(indexGallery, direction, colsGallery, btnIndexGallery) {
    let isScrolling = true;
    let scrollAmount = $galleryList[0].offsetWidth * direction;

    $scrollGalleryList[0].scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
    });

    $btnScrollGallery.removeClass('active');

    if (indexGallery > 0) {
        toggleActive($btnScrollGallery, 0);
    }
    if (indexGallery < colsGallery - 1) {
        toggleActive($btnScrollGallery, 1);
    }

    setActive(btnIndexGallery, indexGallery);
}

async function fetchKDAData() {
    try {
        const res = await fetch('../../Assets/Json/kda.json');
        const json = await res.json();
        return {
            assetsUrl: json.assetsUrl,
            memberData: json.memberData,
            srcVideoPop: json.srcVideoPop,
            splashArt: json.splashArt,
            galleryUrl: json.galleryUrl
        };
    } catch (err) {
        console.error('Error reading JSON:', err);
        return {
            assetsUrl: "",
            memberData: [],
            srcVideoPop: "",
            splashArt: [],
            galleryUrl: []
        };
    }
}

async function init() {

    const { assetsUrl, memberData, srcVideoPop, splashArt, galleryUrl } = await fetchKDAData();

    if (memberData.length > 0) handleMemberClick(0, assetsUrl, memberData);
    if (splashArt.length > 0) handleSplashArtClick(0, assetsUrl, splashArt);

    loadGalleryUrl(assetsUrl, galleryUrl);
    let colsGallery = getColumnsCountGallery(galleryUrl.length);
    loadIndexColumnsGallery(colsGallery);
    const $btnIndexGallery = $('#ulBtnIndexGallery button');
    const $btnGallery = $('#galleryList button');

    $btnPOP.on('click', () => {
        let srcVideo = assetsUrl + srcVideoPop;
        handlePOPBtnClick(srcVideo);
    });
    $videoPOP.on('pause', () => $btnPOP.show());
    $videoPOP.on('play', () => $btnPOP.hide());

    $btnTabInfoMembers.each((i, el) => {
        $(el).on('click', () => handleTabClick(i));
    });

    $btnMembers.each((i, el) => {
        $(el).on('click', () => handleMemberClick(i, assetsUrl, memberData));
    });

    $btnSplashArt.each((i, el) => {
        $(el).on('click', () => handleSplashArtClick(i, assetsUrl, splashArt));
    });

    let indexGallery = 0;
    let isScrolling = false;

    $btnScrollGallery.each((i, el) => {
        $(el).on('click', () => {
            console.log(isScrolling);
            if (isScrolling) return;

            let direction = i === 0 ? -1 : 1;
            const newIndex = indexGallery + direction;

            if (newIndex < 0 || newIndex >= colsGallery) return;

            isScrolling = true;
            indexGallery = newIndex;

            scrollGallery(indexGallery, direction, colsGallery, $btnIndexGallery);

            setTimeout(() => {
                isScrolling = false;
            }, 500);
        });
    });

    $btnIndexGallery.each((i, el) => {
        $(el).on('click', () => {
            if (isScrolling) return;

            isScrolling = true;

            let direction = i - indexGallery;
            indexGallery = i;

            scrollGallery(indexGallery, direction, colsGallery, $btnIndexGallery);

            setTimeout(() => {
                isScrolling = false;
            }, 500);
        });
    });

    $btnGallery.each((i, el) => {
        $(el).on('click', () => {
            let srcImg = $('#galleryList button img')[i].src;
            let $img = $('#galleryShow img');
            $img.attr('src', srcImg);
            $('html, body').css('overflow', 'hidden');
            toggleActive($galleryShow, 0);
        });
    });

    $('#galleryShow button').on('click', () => {
        toggleActive($galleryShow, 0);
        $('html, body').css('overflow', 'auto');
    });
}

init();
