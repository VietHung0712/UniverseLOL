<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "./Assets/assets.php";
    require_once "./Php/Controller/regionController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Font/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./Css/head_footer.css">
    <link rel="stylesheet" href="./Css/reset.css">
    <link rel="icon" href="<?php echo $assetsURL; ?>/Icon/LOL.png">
    <link rel="stylesheet" href="./Css/region.css">
    <title><?php echo $this_region->getName(); ?> - Regions - Universe League of Legends</title>
</head>

<body>
    <?php require_once "./Components/head.php"; ?>
    <div id="main">
        <section id="slide">
            <div class="silde__splashArt">
                <img src="<?php echo $assetsURL . '/' . $this_region->getIcon(); ?>" alt="">
                <video src="<?php echo $this_region->getAnimatedBackground(); ?>" autoplay muted loop></video>
            </div>
            <div class="slide__title transition">
                <h1><?php echo $this_region->getName(); ?></h1>
                <img src="<?php echo $assetsURL; ?>/Others/t1HeaderDivider.png" alt="">
                <p><?php echo $this_region->getStory(); ?></p>
            </div>
        </section>
        <section id="champions">
            <div class="champions__head">
                <img src="<?php echo $assetsURL . '/' . $this_region->getAvatar(); ?>" alt="">
                <img src="<?php echo $assetsURL; ?>/Icon/content_type_icon_champion__3nwJQ.png" alt="">
                <div>Champions of <?php echo $this_region->getName(); ?></div>
            </div>
            <div class="champions__body">
                <?php
                if (2>1) {
                    foreach ($champions as $champion) {
                ?>
                        <a
                            href="./champion.php?champion=<?php echo $champion->getId(); ?>"
                            class="item transition"
                            style="background-image: url(<?php echo $assetsURL . "/" . $champion->getSplashArt(); ?>);
                                    background-position: <?php echo $champion->getPositionX() . '% ' . $champion->getPositionY() . '%'; ?>;"
                            data-id="<?php echo $champion->getId(); ?>">
                            <div class="item__inf transition">
                                <h3><?php echo $champion->getName(); ?></h3>
                                <h5><?php echo getRegionName($champion->getRegion()); ?></h5>
                            </div>
                            <div class="item__explore transition">
                                <h5>Explore</h5>
                                <i class="fa-solid fa-right-long"></i>
                            </div>
                        </a>
                <?php
                    }
                }
                ?>
            </div>
            <div class="champions__showAll">
                <button>View all champions <i class="fa-solid fa-arrow-right-long fa-rotate-90"></i></button>
            </div>
        </section>
    </div>
    <?php require_once "./Components/footer.php"; ?>
</body>

</html>
<script src="./Javascript/region.js"></script>