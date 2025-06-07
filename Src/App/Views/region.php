<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../Controllers/regionController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/region.css">
    <link rel="icon" href="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Icon/League_of_Legends_icon.svg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../Assets/Javascript/function.js"></script>
    <script type="module" src="../../Assets/Javascript/load-header-footer.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title><?php echo $this_region->getName(); ?> - Regions - Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <main id="main">
        <section id="slide" class="position-relative w-100 overflow-hidden">
            <div class="slide__splashArt position-relative h-100 w-100">
                <video class="position-absolute h-100 w-100 object-fit-cover top-0" src="<?php echo $config->getAssetsURL() . '/' . $this_region->getAnimatedBackground(); ?>" autoplay muted loop></video>
                <div class="position-absolute h-100 w-100"></div>
            </div>
            <div class="slide__title transition z-2 position-absolute w-100 bottom-0 d-flex flex-column gap-1">
                <h1 class="w-100 text-uppercase text-center fw-bolder"><?php echo $this_region->getName(); ?></h1>
                <img class="object-fit-contain w-100" src="<?php echo $config->getAssetsURL(); ?>/Others/t1HeaderDivider.png" loading="eager" alt="">
            </div>
        </section>
        <section id="story" class="m-auto">
            <p><?php echo $this_region->getStory(); ?></p>
        </section>
        <section id="container" class="position-relative">
            <div class="container__head mb-5 w-100 position-relative flex-center flex-column justify-content-end gap-1">
                <img src="<?php echo $config->getAssetsURL(); ?>/Icon/content_type_icon_champion__3nwJQ.png" alt="">
                <h1 class="position-relative text-uppercase position-relative letter-spacing-3">Champions of <?php echo $this_region->getName(); ?></h1>
                <img class="position-absolute w-100 top-0 object-fit-contain"
                    src="<?php echo $config->getAssetsURL() . '/' . $this_region->getAvatar(); ?>" alt="">
            </div>
            <div class="container__body d-grid m-auto">
                <?php
                if (isset($regionChampionsArr)) {
                    foreach ($regionChampionsArr as $index => $item) {
                ?>
                        <a
                            href="./champion.php?champion=<?php echo $item->getId(); ?>"
                            class="item overflow-hidden position-relative transition <?php if ($index < 10) {
                                                                                            echo 'active';
                                                                                        } ?>"
                            data-id="<?php echo $item->getId(); ?>"
                            data-region="<?php echo $item->getRegion(); ?>">
                            <img class="item__img h-100 transition object-fit-cover" loading="lazy"
                                style="object-position: <?php echo $item->getPositionX() . '% ' . $item->getPositionY() . '%'; ?>;"
                                src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" alt="">
                            <div class="item__more position-absolute flex-center text-uppercase transition">
                                <div class="item__more--inf flex-center gap-2 flex-column transition">
                                    <h1 class="m-0 letter-spacing-1"><?php echo $item->getName(); ?></h1>
                                    <h2 class="m-0 letter-spacing-1"><?php echo $getNameRegionById[$item->getRegion()]; ?></h2>
                                </div>
                                <div class="item__more--explore flex-center gap-2 transition">
                                    <h1 class="m-0 letter-spacing-1">Explore</h1>
                                    <i class="bi bi-arrow-right m-0 letter-spacing-1"></i>
                                </div>
                            </div>
                        </a>
                <?php
                    }
                }
                ?>
            </div>
            <div class="container__more position-absolute w-100 bottom-0 flex-center">
                <button id="btnMore" class="flex-center transition">
                    <p class="text-uppercase d-block m-0 letter-spacing-1">
                        View all <?php echo $this_region->getName(); ?> champions <i class="bi bi-arrow-down"></i>
                    </p>
                </button>
            </div>
        </section>
    </main>
    <footer id="footer"></footer>
</body>

</html>
<script type="module" src="../../Assets/Javascript/region.js"></script>