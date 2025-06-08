<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../Controllers/championController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/style.css">
    <link rel="icon" href="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Icon/League_of_Legends_icon.svg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../Assets/Javascript/function.js"></script>
    <script type="module" src="../../Assets/Javascript/load-header-footer.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title><?php echo $this_champion->getName(); ?> - Champions - Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <main id="champion">
        <section id="slide">
            <div class="slide__splashArt">
                <img class="position-absolute top-0 start-0 h-100 w-100 object-fit-cover z-0"
                    style="object-position: <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?>;"
                    src="<?php echo $config->getAssetsURL() . "/" . $this_champion->getSplashArt(); ?>" loading="lazy" alt="">
                <video
                    style="object-position: <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?>;"
                    src="<?php echo $this_champion->getAnimatedSplashArt(); ?>" autoplay muted loop></video>
                <div></div>
            </div>
            <div class="slide__title transition">
                <h1>
                    <span>
                        <?php echo $this_champion->getName(); ?>
                    </span>
                </h1>
                <img src="<?php echo $config->getAssetsURL(); ?>/Others/t1HeaderDivider.png" loading="lazy" alt="">
                <h3>
                    <span>
                        <?php echo $this_champion->getTitle(); ?>
                    </span>
                </h3>
            </div>
        </section>
        <section id="container" class="flex-center flex-column">
            <div class="container h-75">
                <div class="row h-100">
                    <div class="col__item col__1 col-12 col-lg-3 p-1">
                        <div class="col__head col__bg flex-center">
                            <h5 class="text-uppercase font-size-12 m-0 letter-spacing-2">
                                Related Champions
                            </h5>
                        </div>
                        <div class="col__body col__bg">
                            <div class="h-100 w-100 overflow-auto scrollbar">
                                <ul class="mt-4 list-unstyled flex-center flex-column gap-4">
                                    <?php
                                    if (!empty($championRelationsArr)) {
                                        foreach ($championRelationsArr as $i => $item) {
                                    ?>
                                            <li class="w-100">
                                                <a class="h-100 w-100 flex-center flex-column justify-content-between text-decoration-none"
                                                    href="./champion.php?champion=<?php echo $item->getId(); ?>">
                                                    <div class="border__img flex-center rounded-circle transition">
                                                        <div class="rounded-circle overflow-hidden">
                                                            <img class="h-100 w-100 object-fit-cover"
                                                                src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" alt=""
                                                                style="object-position: <?php echo $item->getPositionX() . '% ' . $item->getPositionY() . '%'; ?>;
                                                            transform-origin: <?php echo $item->getPositionX() . '% ' . $item->getPositionY() . '%'; ?>;">
                                                        </div>
                                                    </div>
                                                    <h5 class="text-uppercase font-size-12 m-0 letter-spacing-2 transition">
                                                        <span><?php echo $item->getName(); ?></span>
                                                    </h5>
                                                </a>
                                            </li>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col__item col__2 col-12 col-lg-6 p-1 flex-center flex-column gap-2">
                        <div class="col__head col__bg w-100 position-relative">
                            <div class="img position-absolute col__bg rounded-circle">
                                <div class="border__img flex-center rounded-circle">
                                    <div class="rounded-circle overflow-hidden">
                                        <img class="h-100 w-100 object-fit-cover"
                                            src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" alt=""
                                            style="object-position: <?php echo $this_champion->getPositionX() . '% ' . $this_champion->getPositionY() . '%'; ?>;
                                                            transform-origin: <?php echo $this_champion->getPositionX() . '% ' . $this_champion->getPositionY() . '%'; ?>;">
                                    </div>
                                </div>
                                <img class="position-absolute top-0 start-0 h-100 w-100"
                                    src="<?php echo $config->getAssetsURL() . '/Icon/ChampionIconFrame.jpg'; ?>" alt="">
                            </div>
                            <div class="content h-100 col-11 m-auto mt-3 mt-lg-0 flex-center flex-column justify-content-center p-lg-0 p-5">
                                <p class="fs-5 fw-bold letter-spacing-1 text-center">"<?php echo $this_champion->getVoice(); ?>"</p>
                                <h5 class="fs-5 fw-bold letter-spacing-1 m-0">
                                    <span>
                                        ~<?php echo $this_champion->getName(); ?>
                                    </span>
                                </h5>
                            </div>
                        </div>
                        <div class="col__body col__bg position-relative w-100 flex-center">
                            <img class="img__filter position-absolute top-0 start-0 h-100 w-100 object-fit-cover z-0"
                                src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" alt="">
                            <div class="position-relative col-11">
                                <p class="paragraph font-size-14"><?php echo $this_champion->getStory(); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col__item col__3 col-12 col-lg-3 p-1 flex-center flex-column gap-2">
                        <div class="col__head col__bg w-100 flex-center justify-content-start">
                            <div class="h-100 p-3">
                                <img class="h-100 w-100"
                                    src="<?php echo $config->getAssetsURL() . '/' . $role->getIcon(); ?>" alt="">
                            </div>
                            <div class="h-100" style="width: 1px; background-color: var(--color4-);"></div>
                            <div class="m-auto">
                                <h5 class="font-size-12 text-uppercase text-center letter-spacing-1">
                                    Role
                                </h5>
                                <h6 class="font-size-12 text-uppercase text-center letter-spacing-1">
                                    <span>
                                        <?php echo $role->getName(); ?>
                                    </span>
                                </h6>
                            </div>
                        </div>
                        <div class="col__body col__bg w-100 position-relative overflow-hidden transition">
                            <img class="img__filter position-absolute h-100 w-100 object-fit-cover"
                                src="<?php echo $config->getAssetsURL() . '/' . $region->getBackground(); ?>" alt="">
                            <div class="h-100 w-100 flex-center">
                                <img class="transition" width="200"
                                    src="<?php echo $config->getAssetsURL() . '/' . $region->getAvatar(); ?>" alt="">
                            </div>
                            <a class="position-absolute w-100 text-decoration-none transition"
                            href="./region.php?region=<?php echo $region->getId(); ?>">
                                <div class="col__head col__bg border-end-0 border-start-0 w-100 flex-center justify-content-start">
                                    <div class="m-auto">
                                        <h5 class="font-size-12 text-uppercase text-center letter-spacing-1">
                                            Region
                                        </h5>
                                        <h6 class="font-size-12 text-uppercase text-center letter-spacing-1">
                                            <span>
                                                <?php echo $region->getName(); ?>
                                            </span>
                                        </h6>
                                    </div>
                                    <div class="h-100" style="width: 1px; background-color: var(--color4-);"></div>
                                    <div class="h-100 p-3">
                                        <img class="h-100 w-100"
                                            src="<?php echo $config->getAssetsURL() . '/' . $region->getIcon(); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col__bg flex-center border-0 gap-2 p-3 font-size-12 animationView">
                                    <h5 class="m-0 letter-spacing-2 font-size-12 text-uppercase">
                                        View Region
                                    </h5>
                                    <span>
                                        <svg version="1.0" x="0px" y="0px" viewBox="0 0 162 70.28" fill="#937341" style="width: 12.5px;">
                                            <circle fill="#937341" cx="31.57" cy="35.21" r="11.57"></circle>
                                            <g>
                                                <polygon fill="#937341" points="124.18,70.39 118.31,64.09 149.37,35.22 118.31,6.35 124.18,0.05 162,35.22"></polygon>
                                                <rect x="84.61" y="29.76" fill="#937341" width="65" height="11.06"></rect>
                                            </g>
                                        </svg>
                                    </span>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="splashArt" class="position-relative bg-light">
            <div class="container__head vh-25">
                <i class="bi bi-brush fw-bold"></i>
                <h1>Splash Art</h1>
            </div>
            <div class="container">
                <div class="row">
                    <div class="splashArt__frame col-lg-12 col-11 m-auto position-relative">
                        <img class="position-absolute top-0 start-0 h-100 w-100 object-fit-contain active" src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" loading="lazy" alt="">
                        <?php
                        if (!empty($skinsArr)) {
                            foreach ($skinsArr as $item) {
                        ?>
                                <img class="position-absolute top-0 start-0 h-100 w-100 object-fit-contain" src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" loading="lazy" alt="">
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="splashArt__list col-11 scrollbar m-auto overflow-x-auto">
                        <div class="splashArt__list--border h-100 flex-center gap-4">
                            <button type="button" class="flex-center transition flex-column bg-transparent border-0 active">
                                <img class="object-fit-contain"
                                    src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" loading="lazy" alt="">
                                <h5 class="w-100 text-uppercase font-size-14">
                                    <span>
                                        <?php echo $this_champion->getName(); ?>
                                    </span>
                                </h5>
                            </button>
                            <?php
                            if (!empty($skinsArr)) {
                                foreach ($skinsArr as $item) {
                            ?>
                                    <button type="button" class="flex-center transition flex-column bg-transparent border-0">
                                        <img class="object-fit-contain"
                                            src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" loading="lazy" alt="">
                                        <h5 class="w-100 text-uppercase font-size-14">
                                            <span>
                                                <?php echo $item->getName(); ?>
                                            </span>
                                        </h5>
                                    </button>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer"></footer>
</body>

</html>
<script type="module" src="../../Assets/Javascript/champion.js"></script>