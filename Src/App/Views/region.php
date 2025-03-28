<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Assets/assets.php";
    require_once "../Controllers/regionController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/Font/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../Assets/Css/header_footer.css">
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/region.css">
    <link rel="icon" href="<?php echo $assetsURL; ?>/Icon/LOL.png">
    <title><?php echo $this_region->getName(); ?> - Regions - Universe League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <div id="main">
        <section id="slide">
            <div class="silde__splashArt">
                <img src="<?php echo $assetsURL . '/' . $this_region->getIcon(); ?>" alt="">
                <video src="<?php echo $assetsURL . '/' . $this_region->getAnimatedBackground(); ?>" autoplay muted loop></video>
            </div>
            <div class="slide__title transition">
                <h1><?php echo $this_region->getName(); ?></h1>
                <img src="<?php echo $assetsURL; ?>/Others/t1HeaderDivider.png" alt="">
            </div>
        </section>
        <section id="lore">
            <p>
                <?php echo $this_region->getStory(); ?>
            </p>
        </section>
        <section id="champions">
            <div class="champions__head">
                <img src="<?php echo $assetsURL . '/' . $this_region->getAvatar(); ?>" alt="">
                <img src="<?php echo $assetsURL; ?>/Icon/content_type_icon_champion__3nwJQ.png" alt="">
                <div>Champions of <?php echo $this_region->getName(); ?></div>
            </div>
            <div class="champions__body">
                <?php
                if (2 > 1) {
                    foreach ($champions as $champion) {
                ?>
                        <a
                            href="./champion.php?champion=<?php echo $champion->getId(); ?>"
                            class="item transition"
                            data-id="<?php echo $champion->getId(); ?>">
                            <div class="item__img transition" style="background-image: url(<?php echo $assetsURL . "/" . $champion->getSplashArt(); ?>);
                                    background-position: <?php echo $champion->getPositionX() . '% ' . $champion->getPositionY() . '%'; ?>;"></div>
                            <div class="item__inf transition">
                                <h3><?php echo $champion->getName(); ?></h3>
                                <h5><?php echo $this_region->getName(); ?></h5>
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
    <footer id="footer"></footer>
</body>

</html>
<script src="../../Assets/Javascript/function.js"></script>
<script src="../../Assets/Javascript/load-header-footer.js"></script>
<script src="../../Assets/Javascript/region.js"></script>