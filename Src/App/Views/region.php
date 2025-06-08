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
    <link rel="stylesheet" href="../../Assets/Css/style.css">
    <link rel="icon" href="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Icon/League_of_Legends_icon.svg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../Assets/Javascript/function.js"></script>
    <script type="module" src="../../Assets/Javascript/load-header-footer.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title><?php echo $this_region->getName(); ?> - Regions - Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <main id="region">
        <section id="slide">
            <div class="slide__splashArt flex-center">
                <img class="z-2 object-fit-contain" height="150" loading="lazy" alt=""
                    src="<?php echo $config->getAssetsURL() . "/" . $this_region->getIcon(); ?>">
                <video
                    src="<?php echo $config->getAssetsURL() . "/" . $this_region->getAnimatedBackground(); ?>" autoplay muted loop></video>
                <div></div>
            </div>
            <div class="slide__title transition">
                <h1>
                    <span>
                        <?php echo $this_region->getName(); ?>
                    </span>
                </h1>
                <img src="<?php echo $config->getAssetsURL(); ?>/Others/t1HeaderDivider.png" loading="lazy" alt="">
                <h3>
                    <span>
                        <?php echo $this_region->getTitle(); ?>
                    </span>
                </h3>
            </div>
        </section>
        <section id="story" class="container">
            <div class="row">
                <p class="col-12 col-md-8 col-xl-5 paragraph m-auto">
                    <?php echo $this_region->getStory(); ?>
                </p>
            </div>
        </section>
        <section id="container" class="position-relative">
            <div class="container__head vh-25 position-relative">
                <img class="z-1" src="<?php echo $config->getAssetsURL(); ?>/Icon/content_type_icon_champion__3nwJQ.png" width="30" alt="">
                <h1 class="z-1 font-size-16">
                    Champions of
                    <span>
                        <?php echo $this_region->getName(); ?>
                    </span>
                </h1>
                <div class="position-absolute z-0 top-0">
                    <img class="img__filter opacity-75" alt=""
                        src="<?php echo $config->getAssetsURL() . '/' . $this_region->getAvatar(); ?>">
                </div>
            </div>
            <div class="container-fluid champions__list">
                <div class="row">
                    <?php
                    if (isset($regionChampionsArr)) {
                        $active = "";
                        foreach ($regionChampionsArr as $i => $item) {
                            $active = ($i < 10) ? "active" : "";
                    ?>
                            <a
                                class="item col-12 col-md-2 transition <?php echo $active; ?>"
                                href="./champion.php?champion=<?php echo $item->getId(); ?>"
                                data-id="<?php echo $item->getId(); ?>"
                                data-region="<?php echo $item->getRegion(); ?>"
                                data-region-name="<?php echo $getNameRegionById[$item->getRegion()]; ?>">
                                <img loading="lazy"
                                    style="object-position: <?php echo $item->getPositionX() . '% ' . $item->getPositionY() . '%'; ?>;"
                                    src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" alt="">
                                <div class="item__more transition">
                                    <div>
                                        <h1>
                                            <span>
                                                <?php echo $item->getName(); ?>
                                            </span>
                                        </h1>
                                        <h2>
                                            <span>
                                                <?php echo $getNameRegionById[$item->getRegion()]; ?>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="animationView">
                                        <h1>Explore</h1>
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
                                </div>
                            </a>
                            <?php
                            if (($i + 1) % 5 == 0) {
                            ?>
                </div>
                <div class="row">
        <?php
                            }
                        }
                    }
        ?>
                </div>
            </div>
            <div class="container__more position-absolute w-100 bottom-0 flex-center transition">
                <button id="btnMore" class="flex-center py-3 px-5 transition">
                    <p class="text-uppercase d-block m-0 letter-spacing-1">
                        View all
                        <span><?php echo $this_region->getName(); ?></span>
                        champions
                        <i class="bi bi-arrow-down"></i>
                    </p>
                </button>
            </div>
        </section>
    </main>
    <footer id="footer"></footer>
</body>

</html>
<script type="module" src="../../Assets/Javascript/region.js"></script>