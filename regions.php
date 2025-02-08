<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "./Assets/assets.php";
    require_once "./Php/Controller/regionsController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./Font/fontawesome-free-6.6.0-web/fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="./Css/head_footer.css">
    <link rel="stylesheet" href="./Css/reset.css">
    <link rel="stylesheet" href="./Css/champion.css">
    <link rel="icon" href="<?php echo $assetsURL; ?>/Icon/LOL.png">
    <link rel="stylesheet" href="./Css/regions.css">
    <title>Regions - Universe League of Legends</title>
</head>

<body>
    <?php require_once "./Components/head.php"; ?>

    <div id="body">
        <div id="pageBackground" style="background-image: linear-gradient(to top right, #000000, #000000c4, #000000c4), url(<?php echo $assetsURL; ?>/Others/map_runeterra.png)"></div>
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
            <?php require_once "./Components/footer.php"; ?>
        </div>

    </div>
</body>

</html>