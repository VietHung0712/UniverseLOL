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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../../Assets/Css/header_footer.css">
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/champion.css">
    <link rel="icon" href="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Icon/LOL.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <title><?php echo $this_champion->getName(); ?> - Champions - League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <main id="main">
        <section id="slide">
            <div class="silde__splashArt">
                <video style="object-position: <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?>;" src="<?php echo $this_champion->getAnimatedSplashArt(); ?>" autoplay muted loop></video>
                <img class="transition" style="object-position: <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?>;" src="<?php echo $config->getAssetsURL() . "/" . $this_champion->getSplashArt(); ?>" alt="">
            </div>
            <div class="slide__title transition">
                <h1><?php echo $this_champion->getName(); ?></h1>
                <img src="<?php echo $config->getAssetsURL(); ?>/Others/t1HeaderDivider.png" alt="">
                <h5><?php echo $this_champion->getTitle(); ?></h5>
            </div>
        </section>
        <section id="container">
            <div class="container__border d-grid gap-2">
                <div class="container__col col__1">
                    <div class="col__head col__item col__1--head">
                        <h6>Related Champions</h6>
                    </div>
                    <div class="col__body col__item col__1--body">

                    </div>
                </div>
                <div class="container__col col__2"></div>
                <div class="container__col col__3"></div>
            </div>
        </section>
        <section id="skins">
            <div class="skins__head">
                <i class="fa-solid fa-biohazard"></i>
                <h4>AVAILABLE SKINS</h4>
            </div>
            <div class="skins__body">
                <div class="skins__show">
                    <img class="transition" src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" alt="">
                </div>
                <div class="skins__list">
                    <div class="skins__list--items">
                        <div class="skin__item active">
                            <div class="skin__item--img transition" style="background-image: url(<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>);"></div>
                            <h5><?php echo $this_champion->getName(); ?></h5>
                        </div>
                        <?php
                        if (isset($skins)) {
                            foreach ($skins as $item) {
                        ?>
                                <div class="skin__item transition">
                                    <div class="skin__item--img transition" style="background-image: url(<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>);"></div>
                                    <h5><?php echo $item->getName(); ?></h5>
                                </div>
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
<script type="module" src="../../Assets/Javascript/function.js"></script>
<script type="module" src="../../Assets/Javascript/champion.js"></script>
<script type="module" src="../../Assets/Javascript/load-header-footer.js"></script>