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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/header_footer.css">
    <link rel="stylesheet" href="../../Assets/Css/regions.css">
    <link rel="icon" href="<?php echo $config->getAssetsURL(); ?>/Icon/LOL.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../Assets/Javascript/function.js"></script>
    <script type="module" src="../../Assets/Javascript/load-header-footer.js"></script>
    <title>Regions - Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>

    <main class="overflow-y-auto position-relative">
        <section id="theme" class="position-fixed z-0 top-0">
            <div class="position-absolute top-0 w-100 h-100 z-1"></div>
            <img class="position-absolute top-0 h-100 w-100 z-0 object-fit-cover"
                src="<?php echo $config->getAssetsURL(); ?>/Others/Runeterra_Terrain_map.webp" alt="" loading="lazy">
        </section>
        <section id="title" class="m-auto flex__center justify-content-start z-2">
            <h1 class="fw-bold text-white z-2">Regions</h1>
        </section>
        <section id="container" class="m-auto d-grid z-2">
            <?php
            if (!empty($regions)) {
                foreach ($regions as $item) {
                    if ($item->getId() != 'Runeterra') {
            ?>
                        <a class="transition position-relative" href="./region.php?region=<?php echo $item->getId(); ?>">
                            <img class="position-absolute h-75 w-100 object-fit-cover top-0"
                                src="<?php echo $config->getAssetsURL() . '/' . $item->getBackground(); ?>" loading="lazy" alt="">
                            <div class="position-absolute h-75 w-100 object-fit-cover top-0 transition"></div>
                            <img class="position-absolute h-50 w-100 object-fit-contain transition"
                                src="<?php echo $config->getAssetsURL() . '/' . $item->getIcon(); ?>" loading="lazy" alt="">
                            <div class="position-absolute h-25 w-100 bottom-0 flex__center">
                                <h3 class="text-center m-0 text-uppercase fw-bold letter-spacing-2"><?php echo $item->getName(); ?></h3>
                            </div>
                        </a>
            <?php
                    }
                }
            }
            ?>

        </section>
    </main>
    <footer id="footer"></footer>
</body>

</html>