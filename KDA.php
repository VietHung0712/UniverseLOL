<?php
require_once "Assets/assets.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Font/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./Css/head_footer.css">
    <link rel="stylesheet" href="./Css/reset.css">
    <link rel="stylesheet" href="./Css/index.css">
    <link rel="icon" href="https://wiki.leagueoflegends.com/en-us/images/League_of_Legends_Icon.png?3c899">
    <link rel="stylesheet" href="./Css/KDA.css">
    <title>K/DA - Universe League of Legends</title>
</head>

<body>
    <?php require_once "./Components/head.php"; ?>
    <div id="body">
        <section id="slide">
            <div class="slide__video">
                <img class="transition" src="<?php echo $assetsURL; ?>/KDA/KDA.jpg" alt="">
                <div class="slide__video--logo" style="background-image: url(<?php echo $assetsURL; ?>/KDA/kda-logo.png);"></div>
            </div>
            <div class="slide__content">
                <h1>POP/STARS</h1>
                <p>K/DA exploded into the music scene with their hit song “POP/STARS.” Fans of K/DA can’t get <br>enough of their unconventional flair, from the trademark tails (which fans suspect are real)<br> to otherworldly decor in their studio. “Our songs are for you to remember-always be true <br>to yourself,” says lead singer Ahri. K/DA hopes to take their music around the world in a <br>global tour.</p>
            </div>
        </section>
        <section id="video">
            <div class="video__head section__head">
                <h3>featured video</h3>
                <h1>POP/STARS</h1>
            </div>
            <div class="video__main section__main">
                <div class="video__main--background" style="background-image: url(<?php echo $assetsURL; ?>/KDA/electronic-music.png);"></div>
                <div class="video__main--background" style="background-image: url(<?php echo $assetsURL; ?>/KDA/electronic-music.png);"></div>
                <iframe
                    src="https://www.youtube.com/embed/UOxkGD8qRB4"
                    title="YouTube/KDA" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
                <img src="<?php echo $assetsURL; ?>/KDA/KDA_2.jpg" alt="">
                <button><i class="fa-solid fa-play"></i></button>
            </div>
        </section>
        <section id="story" style="background-image: url(<?php echo $assetsURL; ?>/KDA/kda-splash-background.jpg);">
            <div class="story__image" style="background-image: url(<?php echo $assetsURL; ?>/KDA/Ahri_KDA.png);"></div>
            <div class="story__info">
                <div class="story__info--button">
                    <button data-text="AHRI" class="active">
                        <div class="story__button--border active">
                            <div class="story__button--img" style="background-image: url(<?php echo $assetsURL; ?>/KDA/Ahri_KDA_Avatar.jpg);"></div>
                        </div>
                    </button>
                    <button data-text="EVELYNN">
                        <div class="story__button--border">
                            <div class="story__button--img" style="background-image: url(<?php echo $assetsURL; ?>/KDA/Evelynn_KDA_Avatar.jpg);"></div>
                        </div>
                    </button>
                    <button data-text="KAI'SA">
                        <div class="story__button--border">
                            <div class="story__button--img" style="background-image: url(<?php echo $assetsURL; ?>/KDA/Kaisa_KDA_Avatar.jpg);"></div>
                        </div>
                    </button>
                    <button data-text="AKALI">
                        <div class="story__button--border">
                            <div class="story__button--img" style="background-image: url(<?php echo $assetsURL; ?>/KDA/Akali_KDA_Avatar.jpg);"></div>
                        </div>
                    </button>
                </div>
                <div class="story__container">
                    <div class="story__container--bandmember" data-text="Ahri">Band Member</div>
                    <div class="story__container--role" data-text="Lead Vocalist">Role</div>
                    <div class="story__container--zodiacsign" data-text="Sagittarius">Zodiac sign</div>
                    <div class="story__container--nicknames" data-text="Foxy, Gumiho">Nicknames</div>
                    <div class="story__container--height" data-text="167.6 cm (5’5”)">Height</div>
                </div>
                <div class="story__content">
                    <div class="story__content--button">
                        <button class="active">BEAUTY AND FASHION</button>
                        <button>8 FACTS</button>
                    </div>
                    <ul class="story__content--main active">
                        After rising to fame as a teenage pop star, Ahri tossed aside her girly and young look to reveal her new self: a high fashion, elegant, and stunning celebrity.
                        Ahri’s sleek new look attracts top fashion designers. During fashion week, Ahri graces runways around the world in finale gowns.
                        She is the face of FOXY cosmetics and launched her own fragrance, Charmed last year.
                        When she isn’t with K/DA or training, Ahri is shopping, drinking tea with designers, and testing out new beauty products.
                    </ul>
                </div>
            </div>
        </section>
        <section id="music" style="background-image: url(<?php echo $assetsURL; ?>/KDA/kda-music-background-1.jpg);">
            <div class="music__head section__head">
                <h3>K/DA's New Hit Single</h3>
                <h1>POP/STARS</h1>
            </div>
            <div class="music__main section__main">
                <iframe
                    src="https://www.youtube.com/embed/RkID8_gnTxw"
                    title="YouTube/KDA" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen>
                </iframe>
                <img src="<?php echo $assetsURL; ?>/KDA/KDA_3.jpg" alt="">
                <button><i class="fa-solid fa-play"></i></button>
            </div>
        </section>
        <section id="member" style="background-image: url(<?php echo $assetsURL; ?>/KDA/kda-music-background.jpg);">
            <div class="member__head section__head">
                <h3>K/DA Members</h3>
                <h1>POP/STARS</h1>
                <button class="transition">K/DA</button>
            </div>

            <div class="member__main transition section__main">
                <div class="member member0 transition"></div>
                <div class="member member1 transition"></div>
                <div class="member member2 transition"></div>
                <div class="member member3 transition"></div>
            </div>
        </section>
    </div>
    <?php require_once "./Components/footer.php"; ?>
</body>

<script>
    let indexStory = 0;

    $('.video__main>button').addEventListener('click', () => {
        $('.video__main>button').style.visibility = 'hidden';
        $('.video__main > iframe').setAttribute('src', $('.video__main > iframe').getAttribute('src') + "?autoplay=1");
        $('.video__main>img').style.display = 'none';
    })

    $('.music__main>button').addEventListener('click', () => {
        $('.music__main>button').style.visibility = 'hidden';
        $('.music__main > iframe').setAttribute('src', $('.music__main > iframe').getAttribute('src') + "?autoplay=1");
        $('.music__main>img').style.display = 'none';
    })

    const imageStory = ['Ahri_KDA.png', 'Evelynn_KDA.png', 'Kaisa_KDA.png', 'Akali_KDA.png'];

    function translateImage(element, index) {
        element.style.backgroundImage = `url(<?php echo $assetsURL; ?>/KDA/${imageStory[index]})`;
    }

    $$('.story__info--button>button').forEach((element, index) => {
        const elementItems = $$('.story__button--border');
        element.onclick = function() {
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
        e.onclick = function() {
            EventRemoveActive($('.story__content--button>button.active'));
            EventAddActive(e);
            if (i == 0) {
                $('.story__content--main').innerHTML = dataContent[indexStory];
            } else {
                $('.story__content--main').innerHTML = getString8Fact(indexStory);
            }
        }
    });

    const imageMemberPrestige = ["Splash_Art/A/Ahri/Ahri_14", "Splash_Art/E/Evelynn/Evelynn_7", "Splash_Art/K/KaiSa/KaiSa_5", "Splash_Art/A/Akali/Akali_10"];
    const imageMemberNormal = ["Splash_Art/A/Ahri/Ahri_13", "Splash_Art/E/Evelynn/Evelynn_6", "Splash_Art/K/KaiSa/KaiSa_4", "Splash_Art/A/Akali/Akali_9"];
    let prestige = false;

    function loadMembers() {
        $('.member__main .member0').style.backgroundImage = `url(<?php echo $assetsURL; ?>/${imageMemberNormal[0]}.jpg)`;
        $('.member__main .member1').style.backgroundImage = `url(<?php echo $assetsURL; ?>/${imageMemberNormal[1]}.jpg)`;
        $('.member__main .member2').style.backgroundImage = `url(<?php echo $assetsURL; ?>/${imageMemberNormal[2]}.jpg)`;
        $('.member__main .member3').style.backgroundImage = `url(<?php echo $assetsURL; ?>/${imageMemberNormal[3]}.jpg)`;
    }

    window.addEventListener('load', () => {
        loadMembers();
    })

    $('.member__head>button').onclick = function() {
        prestige = !prestige;
        if (prestige) {
            this.textContent = 'K/DA Prestige'
            $('.member__main .member0').style.backgroundImage = `url(<?php echo $assetsURL; ?>/${imageMemberPrestige[0]}.jpg)`;
            $('.member__main .member1').style.backgroundImage = `url(<?php echo $assetsURL; ?>/${imageMemberPrestige[1]}.jpg)`;
            $('.member__main .member2').style.backgroundImage = `url(<?php echo $assetsURL; ?>/${imageMemberPrestige[2]}.jpg)`;
            $('.member__main .member3').style.backgroundImage = `url(<?php echo $assetsURL; ?>/${imageMemberPrestige[3]}.jpg)`;
        } else {
            this.textContent = 'K/DA'
            loadMembers();
        }
    }
</script>

</html>