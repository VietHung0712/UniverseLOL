function playMedia(item) {
    setTimeout(() => {
        item.play();
    }, 300)
}

$('.slide__video>video').playbackRate = 1.3;

$('.slide__video>video').addEventListener('ended', function () {
    this.style.display = 'none';
});

$('.video__main>button').addEventListener('click', () => {
    $('.video__main>button').style.visibility = 'hidden';
    $('.video__main>video').controls = true;
    playMedia($('.video__main>video'));
})


function getSrcVideo(data) {
    return 'https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/KDA/Video/' + data + '_KDA_ALLOUT.mp4';
}

function resetExplore() {
    $$('.explore__main--list>button').forEach(allButton => {
        allButton.style.filter = 'grayscale(70%)';
        allButton.style.opacity = '0.7';
    });
    $('.explore__main--lore p.active')?.classList.remove('active');
    $('.explore__main--video video').load();
};

$$('.explore__main--list>button').forEach((button, index) => {
    const pLore = $$('.explore__main--lore p');
    button.onclick = function () {
        resetExplore();

        EventAddActive(pLore[index]);

        button.style.opacity = '1';
        button.style.filter = 'grayscale(0%)';

        $('.explore__main--video video').src = getSrcVideo(button.dataset.text);
        behavior: 'smooth';
    }
});

const imgGallery = [
    'KDA_AllOut_ConCept_1.jpg',
    'Ahri_KDA_ALLOUT_Concept_1.png',
    'Akali_KDA_ALLOUT_Concept_1.png',
    'Evelynn_KDA_ALLOUT_Concept_1.png',
    'KaiSa_KDA_ALLOUT_Concept_1.png',
    'Seraphine_KDA_ALLOUT_Concept_1.png',
    'KDA_AllOut_Promo_0.jpg',
    'KDA_AllOut_Promo_1.jpg',
    'KDA_AllOut_Promo_2.jpg'
]

$('.media__main>button').addEventListener('click', () => {
    EventToggle($('#media-more'));
    $$('.media-more__main--watch>img').forEach((element, index) => {
        element.src = `https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/KDA/Image/` + imgGallery[index];
    });
    $$('.media-more__main--button>button>img').forEach((element, index) => {
        element.src = `https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/KDA/Image/` + imgGallery[index];
    });
})
$('.media-more__btnclose').addEventListener('click', () => {
    EventToggle($('#media-more'));
})
$$('.media-more__main--button button').forEach((element, index) => {
    const imgMedia = $$('.media-more__main--watch>img');
    element.onclick = function() {
        $('.media-more__main--button>button.active')?.classList.remove('active');
        $('.media-more__main--watch>img.active')?.classList.remove('active');
        EventAddActive(imgMedia[index]);
        EventAddActive(this);
    }
    behavior: 'smooth';
});