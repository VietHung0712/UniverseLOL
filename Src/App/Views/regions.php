<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../../Assets/assets.php";
    require_once "../Controllers/regionsController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../Assets/Font/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../Assets/Css/header_footer.css">
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/champion.css">
    <link rel="stylesheet" href="../../Assets/Css/regions.css">
    <link rel="icon" href="<?php echo $assetsURL; ?>/Icon/LOL.png">
    <title>Regions - Universe League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <div id="pageBackground" style="background-image: linear-gradient(to top right, #000000, #000000c4, #000000c4), url(<?php echo $assetsURL; ?>/Others/map_runeterra.png)"></div>
    <main>
        <div id="app">
            <section id="title">
                <h1>Regions</h1>
            </section>
            <section id="container">
                <?php
                if (isset($regions)) {
                    foreach ($regions as $region) {
                        if ($region->getId() != 'Runeterra') {
                ?>
                            <a href='region.php?region=<?php echo $region->getId(); ?>' class='container__item transition'>
                                <div class='container__item--img transition' style='background: url(<?php echo $assetsURL . '/' . $region->getBackground() ?>) center /100% 100% no-repeat'>

                                </div>
                                <img src='<?php echo $assetsURL . '/' . $region->getIcon(); ?>' alt='' class='transition'>
                                <h3><?php echo $region->getName(); ?></h3>
                            </a>
                <?php
                        }
                    }
                }
                ?>
            </section>
        </div>
    </main>
    <footer id="footer"></footer>
</body>

</html>
<script src="../../Assets/Javascript/function.js"></script>
<script src="../../Assets/Javascript/load-header-footer.js"></script>