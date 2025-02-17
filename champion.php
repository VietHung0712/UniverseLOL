<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "./Assets/assets.php";
    require_once "./App/Controller/championController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Assets/Font/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./Assets/Css/head_footer.css">
    <link rel="stylesheet" href="./Assets/Css/reset.css">
    <link rel="stylesheet" href="./Assets/Css/champion.css">
    <link rel="icon" href="<?php echo $assetsURL; ?>/Icon/LOL.png">
    <title><?php echo $this_champion->getName(); ?> - Champions - League of Legends</title>
</head>

<body>
    <?php require_once "./Components/head.php"; ?>
    <div id="main">
        <section id="slide">
            <div class="silde__splashArt">
                <video style="object-position: <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?>;" src="<?php echo $this_champion->getAnimatedSplashArt(); ?>" autoplay muted loop></video>
                <img class="transition" style="object-position: <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?>;" src="<?php echo $assetsURL . "/" . $this_champion->getSplashArt(); ?>" alt="">
            </div>
            <div class="slide__title transition">
                <h1><?php echo $this_champion->getName(); ?></h1>
                <img src="<?php echo $assetsURL; ?>/Others/t1HeaderDivider.png" alt="">
                <h5><?php echo $this_champion->getTitle(); ?></h5>
            </div>
        </section>
        <section id="content">
            <div>
                <div class="story__gird">
                    <div>
                        <h4>Related Champions</h4>
                    </div>
                    <div>
                        <div class="relatedChampions__border">
                            <?php
                            if (isset($relations)) {
                                foreach ($relations as $item) {
                            ?>
                                    <a href="./champion.php?champion=<?php echo $item->getId(); ?>">
                                        <div class="transition">
                                            <img src="<?php echo $assetsURL . '/' . $item->getSplashArt(); ?>" alt=""
                                                style="object-position: <?php echo $item->getPositionX() . '%' . ' ' . $item->getPositionY() . '%'; ?>;">
                                        </div>
                                        <h5 class="transition"><?php echo $item->getName(); ?></h5>
                                    </a>
                            <?php
                                }
                            }
                            ?>

                        </div>
                    </div>
                    <div>
                        <div class="story__gird--avatar" style="background-image: url(<?php echo $assetsURL; ?>/Icon/ChampionIconFrame.jpg);">
                            <div>
                                <div class="story__gird--border">
                                    <div class="story__gird--img" style="background: url(<?php echo $assetsURL . '/' . $this_champion->getSplashArt(); ?>) <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?> /400% no-repeat;"></div>
                                </div>
                            </div>
                        </div>
                        <h2>"<?php echo $this_champion->getVoice(); ?>"</h2>

                        <h3>~<?php echo $this_champion->getName(); ?></h3>
                    </div>
                    <div>
                        <div style="background: url(<?php echo $assetsURL . '/' . $this_champion->getSplashArt(); ?>) <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?> /cover no-repeat;"></div>
                        <p><?php echo $this_champion->getStory(); ?></p>
                    </div>
                    <div>
                        <img src="<?php echo $assetsURL . '/' . $this_role->getIcon(); ?>" alt="">
                        <div>
                            <h4>Role</h4>
                            <h4><?php echo $this_champion->getRole(); ?></h4>
                        </div>
                    </div>
                    <div class="transition">
                        <div style="background: linear-gradient(to bottom, #000000d0, #000000d0), url(<?php echo $assetsURL . '/' . $this_region->getBackground(); ?>) center /cover no-repeat;"></div>
                        <div class="story__gird--region-img transition" style="background: url(<?php echo $assetsURL . '/' . $this_region->getAvatar(); ?>) center /contain no-repeat;"></div>
                        <div class="story__gird--region-info story__gird--region-content transition">
                            <div>
                                <h4>Region</h4>
                                <h4><?php echo $this_region->getName(); ?></h4>
                            </div>
                            <div style="background-image: url(<?php echo $assetsURL . '/' . $this_region->getIcon(); ?>);"></div>
                        </div>
                        <a href="region.php?region=<?php echo $this_region->getId(); ?>" class="story__gird--region-view story__gird--region-content transition">
                            <h4>View Region<i class='fa-solid fa-arrow-right'></i></h4>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <section id="skins">
            <div class="skins__head">
                <i class="fa-solid fa-biohazard"></i>
                <h4>AVAILABLE SKINS</h4>
            </div>
            <div class="skins__body">
                <div class="skins__show">
                    <img class="transition" src="<?php echo $assetsURL . '/' . $this_champion->getSplashArt(); ?>" alt="">
                </div>
                <div class="skins__list">
                    <div class="skins__list--items">
                        <div class="skin__item active">
                            <div class="skin__item--img transition" style="background-image: url(<?php echo $assetsURL . '/' . $this_champion->getSplashArt(); ?>);"></div>
                            <h5><?php echo $this_champion->getName(); ?></h5>
                        </div>
                        <?php
                        if (isset($skins)) {
                            foreach ($skins as $item) {
                        ?>
                                <div class="skin__item transition">
                                    <div class="skin__item--img transition" style="background-image: url(<?php echo $assetsURL . '/' . $item->getSplashArt(); ?>);"></div>
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
    </div>
    <?php require_once "./Components/footer.php"; ?>
</body>

</html>
<script src="./Assets/Javascript/champion.js"></script>