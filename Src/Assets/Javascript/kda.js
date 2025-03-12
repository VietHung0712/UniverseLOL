let indexStory = 0;

    function playMedia(item) {
        setTimeout(() => {
            item.play();
        }, 300)
    }

    $('.slide__video>video').playbackRate = 1.3;

    $('.slide__video>video').addEventListener('ended', function () {
        this.style.display = 'none';
    });

    $('#video>.video__main>button').addEventListener('click', () => {
        $('#video button').style.visibility = 'hidden';
        $('#music video').pause();
        $('#video video').controls = true;
        playMedia($('#video video'));
    })

    $('#music>.video__main>button').addEventListener('click', () => {
        $('#music button').style.visibility = 'hidden';
        $('#video video').pause();
        $('#music video').controls = true;
        playMedia($('#music video'));
    })

    const imageStory = ['Ahri_KDA.png', 'Evelynn_KDA.png', 'Kaisa_KDA.png', 'Akali_KDA.png'];

    function translateImage(element, index) {
        element.style.backgroundImage = `url(https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/KDA/Image/${imageStory[index]})`;
    }

    $$('.story__info--button>button').forEach((element, index) => {
        const elementItems = $$('.story__button--border');
        element.onclick = function () {
            indexStory = index;

            EventRemoveActive($('.story__info--button>button.active'));
            EventRemoveActive($('.story__button--border.active'));
            EventAddActive(element);
            EventAddActive(elementItems[index]);

            translateImage($('.story__image'), index);

            translateStory(index);

            EventRemoveActive($('.story__content--button>button.active'));
            EventAddActive($('.story__content--button>button'));
            $('.story__content--main').innerHTML = dataContent[indexStory];
        }
    });

    const dataTextStory = [
        ["Ahri", "Lead Vocalist", "Sagittarius", "Foxy, Gumiho", "167.6 cm (5’5”)", "BEAUTY AND FASHION"],
        ["Evelynn", "Lead Vocalist", "Taurus", "Siren, Eve", "164 cm (5’4”)", "NO 1 DIVA"],
        ["Kai'Sa", "Lead Dancer", "Pisces", "小笼包, Bokkie", "169.6 cm (5’6”)", "@KDAKAISA"],
        ["Akali", "Rapper", "Taurus", "Rogue, 힙합검객", "163 cm (5’3”)", "HIP HOP NINJA"]
    ];

    function translateStory(index) {
        $('.story__container--bandmember').dataset.text = dataTextStory[index][0];
        $('.story__container--role').dataset.text = dataTextStory[index][1];
        $('.story__container--zodiacsign').dataset.text = dataTextStory[index][2];
        $('.story__container--nicknames').dataset.text = dataTextStory[index][3];
        $('.story__container--height').dataset.text = dataTextStory[index][4];
        $('.story__content--button>button:first-child').textContent = dataTextStory[index][5];
    }

    const dataContent = [
        "After rising to fame as a teenage pop star, Ahri tossed aside her girly and young look to reveal her new self: a high fashion, elegant, and stunning celebrity. Ahri’s sleek new look attracts top fashion designers. During fashion week, Ahri graces runways around the world in finale gowns. She is the face of FOXY cosmetics and launched her own fragrance, Charmed last year. When she isn’t with K/DA or training, Ahri is shopping, drinking tea with designers, and testing out new beauty products.",
        "Eve’s reputation paints her as a demanding diva. She told Pop Shine, “I’m an artist, not a socialite. I won’t apologize for high standards.” Eve once walked off the stage of a live performance when her vocals were backed by an audio track she didn’t approve. Though her presence in the industry is turbulent, she has a diehard fan base who call themselves “Deeva.” Prior to K/DA, Evelynn released two hit singles, Agony’s Embrace and Ecstasy.",
        "@KDAKaiSa<br><br>K/DA_GLOBALFANS @KDAFans<br>@KDAKaiSa why do you dance?<br><br>KAISAOFFICIAL @KDAKaiSa<br>replying to @KDAFans<br>When the music begins, a symphony of movement stirs in my being. It begins as a rumble, like a calling from the void, hungry and demanding release. My body reacts to the call, jumping to weave a story. A story to leave the void behind, and fall into the steps of life.",
        "Akali makes appearances next to other street performers in cities she is visiting. Combining mixed martial arts and the beat of her own rap lyrics, she delights audiences with her bold lyrical rap and punk ninja style. She started practicing on the streets before rising to fame and returns to her roots whenever she can. Her unruly hair and untamed style made Akali an instant K/DA fan favorite."
    ]

    const data8Fact = [
        [
            "Ahri is the leader and lead singer of K/DA.",
            "She was labeled the most talented new Kpop artist in the 2013 Pop Shine Awards.",
            "After releasing five singles she spent time away from the industry to reinvent herself.",
            "Ahri is a muse for multiple clothing lines. Designers can’t stop making outfits for her.",
            "Her Chinese zodiac sign is a Dog.",
            "She prefers shopping over working out.",
            "She has known Evelynn of K/DA for many years.",
            "Ahri was voted one of the most beautiful faces in Pop."
        ],
        [
            "Evelynn is known for her uncompromising vision, rich vocals, and “bad girl” attitude.",
            "After disagreements in other musical groups, Evelynn worked alone to write her own music before reconnecting with Ahri.",
            "Her Chinese zodiac sign is a Rooster.",
            "Evelynn is very mysterious about her diet and workouts and usually declines to comment on her routine.",
            "Evelynn values friends. She is close to few people and very protective of them.",
            "She has a collection of very fast cars.",
            "She has been romantically linked with several missing male celebrities but never confirmed a relationship.",
            "Karthus is an artist she takes inspiration from."
        ],
        [
            "Kai’Sa is called the “dreamer” of K/DA by Ahri.",
            "She lived in ten countries before pursuing her dreams of becoming a pop star.",
            "Kai’Sa won Hong Kong’s Can You Dance in 2018.",
            "Her Chinese zodiac sign is a Rat.",
            "She speaks Chinese, Afrikaans, Korean, and English fluently.",
            "She spends hours in the studio creating choreography for K/DA. She believes each step must convey vulnerability and power through movement.",
            "She can be found cooking large meals in the K/DA house.",
            "Her favorite food is Sichuan dry hot pot."
        ],
        [
            "Akali is the youngest and newest member of K/DA.",
            "She was discovered at the age of 15 in an infamous rap battle that went viral.",
            "She wasn’t mainstream enough to sign with a label until Ahri found her through social media.",
            "Akali’s favorite food is Spicy Ramyun.",
            "Akali performs rap on street corners regularly to practice her lyrics.",
            "Her Chinese zodiac sign is an Ox.",
            "She speaks English, Korean, and Japanese.",
            "Akali was born into a martial arts dojo. She left to find her calling as an artist, but still knows how to use a kama.",
        ]
    ];

    function getString8Fact(index) {
        let String = '';
        data8Fact[index].forEach(j => {
            String += '<li>' + j + '</li>';
        })
        return String;
    }

    $$('.story__content--button>button').forEach((e, i) => {
        e.onclick = function () {
            EventRemoveActive($('.story__content--button>button.active'));
            EventAddActive(e);
            if (i == 0) {
                $('.story__content--main').innerHTML = dataContent[indexStory];
            } else {
                $('.story__content--main').innerHTML = getString8Fact(indexStory);
            }
        }
    });

    const imageMemberPrestige = ["Splash_Art/A/Akali/Akali_10", "Splash_Art/A/Ahri/Ahri_14", "Splash_Art/K/KaiSa/KaiSa_5", "Splash_Art/E/Evelynn/Evelynn_7"];
    const imageMemberNormal = ["Splash_Art/A/Akali/Akali_9", "Splash_Art/A/Ahri/Ahri_13", "Splash_Art/K/KaiSa/KaiSa_4", "Splash_Art/E/Evelynn/Evelynn_6"];
    let prestige = false;

    function loadMembers() {
        $('.member__main .member0').style.backgroundImage = `url(https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/${imageMemberNormal[0]}.jpg)`;
        $('.member__main .member1').style.backgroundImage = `url(https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/${imageMemberNormal[1]}.jpg)`;
        $('.member__main .member2').style.backgroundImage = `url(https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/${imageMemberNormal[2]}.jpg)`;
        $('.member__main .member3').style.backgroundImage = `url(https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/${imageMemberNormal[3]}.jpg)`;
    }

    window.addEventListener('load', () => {
        loadMembers();
    })

    $('.member__head>button').onclick = function () {
        prestige = !prestige;
        if (prestige) {
            this.textContent = 'Prestige K/DA'
            $('.member__main .member0').style.backgroundImage = `url(https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/${imageMemberPrestige[0]}.jpg)`;
            $('.member__main .member1').style.backgroundImage = `url(https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/${imageMemberPrestige[1]}.jpg)`;
            $('.member__main .member2').style.backgroundImage = `url(https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/${imageMemberPrestige[2]}.jpg)`;
            $('.member__main .member3').style.backgroundImage = `url(https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/${imageMemberPrestige[3]}.jpg)`;
        } else {
            this.textContent = 'K/DA'
            loadMembers();
        }
    }