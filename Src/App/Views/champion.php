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
    <link rel="stylesheet" href="../../Assets/Css/champion.css">
    <link rel="icon" href="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Icon/League_of_Legends_icon.svg">
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
        <section id="container" class="flex-center flex-column">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col__item col__1 col-12 col-lg-3 h-100">
                        <div class="col__head col__bg">

                        </div>
                        <div class="col__body col__bg">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="splashArt" class="position-relative bg-light">
            <div class="splashArt__head w-100 flex-center flex-column gap-1">
                <i class="bi bi-brush fw-bold"></i>
                <h1 class="position-relative fw-bold text-uppercase position-relative letter-spacing-3">Splash Art</h1>
            </div>
            <div class="splashArt__body m-auto">
                <div class="splashArt__frame position-relative w-100 flex-center flex-column">
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
                    <div class="splashArt__list--border h-100 flex-center justify-content-around align-items-start">
                        <button type="button" class="flex-center transition flex-column bg-transparent border-0 active">
                            <img class="object-fit-cover w-100"
                                src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" loading="lazy" alt="">
                            <h5 class="w-100 text-uppercase"><?php echo $this_champion->getName(); ?></h5>
                        </button>
                        <?php
                        if (!empty($skinsArr)) {
                            foreach ($skinsArr as $item) {
                        ?>
                                <button type="button" class="flex-center transition flex-column bg-transparent border-0">
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