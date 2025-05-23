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
    <link rel="stylesheet" href="../../Assets/Css/header_footer.css">
    <link rel="stylesheet" href="../../Assets/Css/champion.css">
    <link rel="icon" href="<?php echo $config->getAssetsURL(); ?>/Icon/LOL.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../Assets/Javascript/function.js"></script>
    <script type="module" src="../../Assets/Javascript/load-header-footer.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title><?php echo $this_champion->getName(); ?> - Champions - Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <main id="main">
        <section id="slide" class="position-relative w-100 overflow-hidden">
            <div class="slide__splashArt position-relative h-100 w-100">
                <img class="position-absolute top-0 h-100 w-100 object-fit-cover transition" style="object-position: <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?>;" src="<?php echo $config->getAssetsURL() . "/" . $this_champion->getSplashArt(); ?>" loading="lazy" alt="">
                <video class="position-absolute top-0 h-100 w-100 object-fit-cover" style="object-position: <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?>;" src="<?php echo $this_champion->getAnimatedSplashArt(); ?>" autoplay muted loop></video>
                <div class="position-absolute h-100 w-100"></div>
            </div>
            <div class="slide__title position-absolute z-2 w-100 bottom-0 d-flex flex-column transition">
                <h1 class="w-100 text-uppercase text-center fw-semibold"><?php echo $this_champion->getName(); ?></h1>
                <img class="w-100 object-fit-contain" src="<?php echo $config->getAssetsURL(); ?>/Others/t1HeaderDivider.png" loading="lazy" alt="">
                <h3 class="w-100 text-uppercase text-center letter-spacing-3 fw-bolder pt-3"><?php echo $this_champion->getTitle(); ?></h3>
            </div>
        </section>
        <section id="container">
            <div class="container__border d-grid h-100 w-100 gap-2">
                <div class="container__col col__1 overflow-hidden">
                    <div class="col__head col__item col__1--head flex__center">
                        <h6 class="text-uppercase letter-spacing-2">Related Champions</h6>
                    </div>
                    <div class="col__body col__item col__1--body overflow-auto w-100">
                        <div class="relations__border mh-100 w-100 py-4 d-flex flex__center flex-column justify-content-around">
                            <?php
                            if (!empty($championRelationsArr)) {
                                foreach ($championRelationsArr as $item) {
                            ?>
                                    <a class="relation__item transition flex__center flex-column text-decoration-none"
                                        href="./champion.php?champion=<?php echo $item->getId(); ?>">
                                        <div class="relation__item--img rounded-circle flex__center">
                                            <img class="object-fit-cover rounded-circle" style="object-position: <?php echo $item->getPositionX() . "%" . $item->getPositionY() . "%"; ?>;"
                                                src="<?php echo $config->getAssetsURL() . "/" . $item->getSplashArt(); ?>" loading="lazy" alt="">
                                        </div>
                                        <h6 class="text-uppercase"><?php echo $item->getName(); ?></h6>
                                    </a>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <div class="container__col col__2 flex__center flex-column gap-2">
                    <div class="col__head col__item col__2--head flex__center w-100 position-relative">
                        <div class="avatar position-absolute bg-center-cover-norepeat flex__center"
                            style="background-image: url(<?php echo $config->getAssetsURL() . '/Icon/ChampionIconFrame.jpg'; ?>);">
                            <img class="avatar__img object-fit-cover"
                                src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>"
                                style="object-position: <?php echo $this_champion->getPositionX() . '% ' . $this_champion->getPositionY() . '%'; ?>;" alt="">
                        </div>
                        <div class="voice flex__center flex-column h-75 w-75 text-center gap-2">
                            <h6 class="fw-bold letter-spacing-1">"<?php echo $this_champion->getVoice(); ?>"</h6>
                            <h5 class="fw-bold letter-spacing-1">~<?php echo $this_champion->getName(); ?></h5>
                        </div>
                    </div>
                    <div class="col__body col__item col__2--body w-100 flex__center bg-center-cover-norepeat"
                        style="background-image: linear-gradient(rgba(0, 0, 0, 0.8)), url(<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>);">
                        <h6 class="letter-spacing-1"><?php echo $this_champion->getStory(); ?></h6>
                    </div>
                </div>
                <div class="container__col col__3 flex__center flex-column gap-2">
                    <div class="col__head col__item col__3--head w-100 flex__center">
                        <img class="h-100 w-25 object-fit-contain p-2" src="<?php echo $config->getAssetsURL() . '/' . $role->getIcon(); ?>" loading="lazy" alt="">
                        <div class="role flex__center flex-column h-100 w-75">
                            <h5 class="text-uppercase letter-spacing-2">Role</h5>
                            <h6 class="text-uppercase letter-spacing-2"><?php echo $role->getName(); ?></h6>
                        </div>
                    </div>
                    <div class="col__body col__item col__3--body w-100 position-relative transition">
                        <div class="col__3--background position-absolute h-100 w-100 flex__center bg-center-cover-norepeat"
                            style="background-image: linear-gradient(rgba(0, 0, 0, 0.88)), url(<?php echo $config->getAssetsURL() . '/' . $region->getBackground(); ?>);">
                            <img class="z-2 h-75 w-75 object-fit-contain transition" src="<?php echo $config->getAssetsURL() . '/' . $region->getAvatar(); ?>" loading="lazy" alt="">
                        </div>
                        <a class="position-absolute bottom-0 w-100 flex__center text-decoration-none" href="./region.php?region=<?php echo $region->getId(); ?>">
                            <div class="region flex__center flex-column h-100 w-75">
                                <h5 class="text-uppercase letter-spacing-2">Region</h5>
                                <h6 class="text-uppercase letter-spacing-2"><?php echo $region->getName(); ?></h6>
                            </div>
                            <img class="h-100 w-25 object-fit-contain p-2" src="<?php echo $config->getAssetsURL() . '/' . $region->getIcon(); ?>" loading="lazy" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="splashArt" class="position-relative bg-light">
            <div class="splashArt__head w-100 flex__center flex-column gap-1">
                <i class="bi bi-brush fw-bold"></i>
                <h1 class="position-relative fw-bold text-uppercase position-relative letter-spacing-3">Splash Art</h1>
            </div>
            <div class="splashArt__body m-auto">
                <div class="splashArt__frame position-relative w-100 flex__center flex-column">
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
                <div class="splashArt__list m-auto overflow-x-auto">
                    <div class="splashArt__list--border h-100 flex__center justify-content-around align-items-start">
                        <button type="button" class="flex__center transition flex-column bg-transparent border-0 active">
                            <img class="object-fit-cover w-100"
                                src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" loading="lazy" alt="">
                            <h5 class="w-100 text-uppercase"><?php echo $this_champion->getName(); ?></h5>
                        </button>
                        <?php
                        if (!empty($skinsArr)) {
                            foreach ($skinsArr as $item) {
                        ?>
                                <button type="button" class="flex__center transition flex-column bg-transparent border-0">
                                    <img class="object-fit-cover w-100"
                                        src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" loading="lazy" alt="">
                                    <h5 class="w-100 text-uppercase"><?php echo $item->getName(); ?></h5>
                                </button>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer"></footer>
</body>

</html>
<script type="module" src="../../Assets/Javascript/champion.js"></script>