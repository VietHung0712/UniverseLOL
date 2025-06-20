<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../Controllers/regionsController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/style.css">
    <link rel="icon" href="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Icon/League_of_Legends_icon.svg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../Assets/Javascript/function.js"></script>
    <script type="module" src="../../Assets/Javascript/load-header-footer.js"></script>
    <title>Regions - Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>

    <main id="regions">
        <div id="theme" class="position-fixed vh-100 w-100 z-0 top-0">
            <div class="position-absolute top-0 w-100 h-100 z-1"></div>
            <img class="position-absolute top-0 h-100 w-100 z-0 object-fit-cover"
                src="<?php echo $config->getAssetsURL(); ?>/Others/Runeterra_Terrain_map.webp" alt="" loading="lazy">
        </div>
        <div id="app" class="position-relative">
            <section id="title">
                <div class="container h-100 d-flex align-items-center">
                    <h1 class="fw-bold text-white z-2">Regions</h1>
                </div>
            </section>
            <section id="container" class="container">
                <div class="row">
                    <?php
                    if (!empty($regions)) {
                        foreach ($regions as $item) {
                            if ($item->getId() != 'Runeterra') {
                    ?>
                                <div class="col-12 col-md-6 col-lg-4 col-xl-3 mt-3">
                                    <a class="d-block position-relative transition h-100 w-100"
                                        href="./region.php?region=<?php echo $item->getId(); ?>">
                                        <img class="position-absolute h-100 w-100 object-fit-cover top-0"
                                            src="<?php echo $config->getAssetsURL() . '/' . $item->getBackground(); ?>" loading="lazy" alt="">
                                        <div class="position-absolute h-75 w-100 object-fit-cover top-0 transition"></div>
                                        <img class="position-absolute h-50 w-100 object-fit-contain transition"
                                            src="<?php echo $config->getAssetsURL() . '/' . $item->getIcon(); ?>" loading="lazy" alt="">
                                        <div class="position-absolute w-100 bottom-0 p-3">
                                            <h3 class="text-center m-0 text-uppercase fw-bold letter-spacing-2">
                                                <span>
                                                    <?php echo $item->getName(); ?>
                                                </span>
                                            </h3>
                                        </div>
                                    </a>
                                </div>
                    <?php
                            }
                        }
                    }
                    ?>
                </div>
            </section>
        </div>
    </main>
    <footer id="footer"></footer>
</body>

</html>