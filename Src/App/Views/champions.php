<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Assets/assets.php";
    require_once "../Controllers/championsController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/Font/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../Assets/Css/header_footer.css">
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/champions.css">
    <link rel="icon" href="<?php echo $assetsURL; ?>/Icon/LOL.png">
    <title>Champions - League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <main id="main">
        <div class="background" style="background-image: linear-gradient(to bottom, #000,rgba(0, 0, 0, 0.7), #000), url(<?php echo $assetsURL; ?>/Others/championsBackground.jpg);"></div>
        <section class="search">
            <div class="search__border">
                <img src="<?php echo $assetsURL; ?>/Icon/content_type_icon_champion__3nwJQ.png" alt="">
                <input type="search" placeholder="Find a champion">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
        </section>
        <section class="main__list">
            <div class="main__list--head">
                <img src="<?php echo $assetsURL; ?>/Icon/content_type_icon_champion__3nwJQ.png" alt="">
                <div>Champions</div>
            </div>
            <div class="main__list--body">
                <?php
                if (isset($champions)) {
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
        </section>
    </main>
    <footer id="footer"></footer>
</body>

</html>
<script src="../../Assets/Javascript/function.js"></script>
<script src="../../Assets/Javascript/load-header-footer.js"></script>
<script src="../../Assets/Javascript/champions.js"></script>