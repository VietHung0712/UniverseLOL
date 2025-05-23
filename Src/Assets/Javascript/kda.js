import { } from './function.js';

const $videoOpen = $('.slide__splashArt > video');
const $btnPOP = $('#music-video > .content > .content__border > button');
const $posterPOP = $('#music-video > .content > .content__border > img');
const $videoPOP = $('#music-video > .content > .content__border > video');
const $btnMembers = $('.members__avatar > button');
const $imgMembers = $('.members__img > div');
const $brandMember = $('#brandMember');
const $role = $('#role');
const $zodiacSign = $('#zodiacSign');
const $nicknames = $('#nicknames');
const $height = $('#height');
const $title = $('#title');
const $paragraph = $('#paragraph');
const $btnTabs = $('.tabs__inf > li > button');
const $phTabs = $('.tabs__p > li > p');

let brandMember = [`Ahri`, `Evelynn`, `Kai'Sa`, `Akali`];
let role = ['Lead Vocalist', 'Lead Vocalist', 'Lead Dancer', 'Rapper'];
let zodiacSign = ['Sagittarius', 'Taurus', 'Pisces', 'Taurus'];
let nicknames = ['Foxy, Gumiho', 'Siren, Eve', '小笼包, Bokkie', 'Rogue, 힙합검객'];
let height = ['167.6 cm (5’5”)', '164 cm (5’4”)', '169.6 cm (5’6”)', '163 cm (5’3”)'];
let title = ['Beauty and Fashion', 'No 1 Diva', '@KDAKaisa', 'Hip Hop Ninja'];
let paragraph = [
    'After rising to fame as a teenage pop star, Ahri tossed aside her girly and young look to reveal her new self: a high fashion, elegant, and stunning celebrity. Ahri’s sleek new look attracts top fashion designers. During fashion week, Ahri graces runways around the world in finale gowns. She is the face of FOXY cosmetics and launched her own fragrance, Charmed last year. When she isn’t with K/DA or training, Ahri is shopping, drinking tea with designers, and testing out new beauty products.',
    'Eve’s reputation paints her as a demanding diva. She told Pop Shine, “I’m an artist, not a socialite. I won’t apologize for high standards.” Eve once walked off the stage of a live performance when her vocals were backed by an audio track she didn’t approve. Though her presence in the industry is turbulent, she has a diehard fan base who call themselves “Deeva.” Prior to K/DA, Evelynn released two hit singles, Agony’s Embrace and Ecstasy.',
    '@KDAKaiSa<br><br>K/DA_GLOBALFANS @KDAFans<br>@KDAKaiSa why do you dance?<br><br>KAISAOFFICIAL @KDAKaiSa<br>replying to @KDAFans<br>When the music begins, a symphony of movement stirs in my being. It begins as a rumble, like a calling from the void, hungry and demanding release. My body reacts to the call, jumping to weave a story. A story to leave the void behind, and fall into the steps of life.',
    'Akali makes appearances next to other street performers in cities she is visiting. Combining mixed martial arts and the beat of her own rap lyrics, she delights audiences with her bold lyrical rap and punk ninja style. She started practicing on the streets before rising to fame and returns to her roots whenever she can. Her unruly hair and untamed style made Akali an instant K/DA fan favorite.'
]

function toggleVideoBtn(btn, show) {
    btn.style.display = show ? 'block' : 'none';
}

$videoOpen.on('ended', function () {
    $(this).css('opacity', 0);
});

$btnPOP.on('click', function () {
    $(this).css('display', 'none');
    $posterPOP.hide();
    $videoPOP[0].controls = true;
    $videoPOP[0].play();
})

$videoPOP.on('pause', () => {
    toggleVideoBtn($btnPOP[0], true);
});

$videoPOP.on('play', () => {
    toggleVideoBtn($btnPOP[0], false);
});

$btnMembers.each((index, element) => {
    $(element).on('click', function () {
        $btnMembers.removeClass('active');
        $imgMembers.removeClass('active');

        $(element).addClass('active');
        $imgMembers.eq(index).addClass('active');
        $brandMember.html(brandMember[index]);
        $role.html(role[index]);
        $zodiacSign.html(zodiacSign[index]);
        $nicknames.html(nicknames[index]);
        $height.html(height[index]);
        $title.html(title[index]);
        $paragraph.html(paragraph[index]);
    })
})

$btnTabs.each((index, element) => {
    $(element).on('click', function () {
        $btnTabs.removeClass('active');
        $phTabs.removeClass('active');

        $(element).addClass('active');
        $phTabs.eq(index).addClass('active');
    })
})