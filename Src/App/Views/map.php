<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../Controllers/mapController.php";
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
    <title>Map of Runeterra - Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <main id="map">
        <div class="map-pc position-relative">
            <svg viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                <image href="<?php echo $config->getAssetsURL(); ?>/Others/Runeterra_Terrain_map.webp" x="0" y="0" width="1000" height="1000" />
                <?php
                if (!empty($maps)) {
                    foreach ($maps as $region => $items) {
                        foreach ($items as $value) {
                ?>
                            <polygon
                                points="<?php echo $value; ?>"
                                fill="transparent"
                                stroke="wheat"
                                stroke-width="1"
                                data-group="<?php echo $region; ?>"
                                class="area" />
                <?php
                        }
                    }
                } ?>
            </svg>
            <ul class="position-absolute h-100 w-100 top-0">
                <?php
                if (!empty($regions)) {
                    foreach ($regions as $index => $item) {
                ?>
                        <li class="<?php echo $item->getId(); ?> item position-absolute list-unstyled"
                            data-title=""
                            data-group="<?php echo $item->getId(); ?>">
                            <a class="h-100 w-100 text-decoration-none"
                                href="./region.php?region=<?php echo $item->getId(); ?>">
                                <div class="h-75 w-100 position-relative flex__center">
                                    <img class="position-absolute h-100 object-fit-contain rounded-circle transition p-2 bg-black" src="<?php echo $config->getAssetsURL() . '/' . $item->getIcon(); ?>" loading="lazy" alt="">
                                    <img class="position-absolute h-100 object-fit-contain rounded-circle transition opacity-0" src="<?php echo $config->getAssetsURL() . '/' . $item->getAvatar(); ?>" loading="lazy" alt="">
                                </div>
                                <h1 class="h-25 w-100 text-uppercase fw-bold text-center letter-spacing-2 text-white"><?php echo $item->getName(); ?></h1>
                            </a>
                            <div class="title position-absolute z-3">
                                <img class="h-100 w-100 position-absolute z-0"
                                    src="<?php echo $config->getAssetsURL() . '/' . $item->getBackground(); ?>" loading="lazy" alt="">
                                <div class="position-relative h-100 w-100 z-1">
                                    <p class="text-white text-uppercase font-size-12 fw-bold letter-spacing-1 mx-2">
                                        <span>
                                            <?php echo $item->getTitle(); ?>
                                        </span>
                                    </p>
                                </div>
                            </div>
                        </li>
                <?php
                    }
                } ?>
            </ul>
        </div>
    </main>
    <footer id="footer"></footer>
</body>

</html>
<script type="module" src="../../Assets/Javascript/map.js"></script>