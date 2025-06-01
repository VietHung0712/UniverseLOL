<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../Controllers/championsController.php";
} catch (\Throwable $th) {
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/champions.css">
    <link rel="icon" href="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Icon/League_of_Legends_icon.svg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../Assets/Javascript/function.js"></script>
    <script type="module" src="../../Assets/Javascript/load-header-footer.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Champions - Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>

    <main id="main" class="position-relative">

        <div class="background z-0 position-fixed w-100 h-100 bg-center-cover-norepeat" style="background-image: linear-gradient(to bottom, #000,rgba(0, 0, 0, 0.7), #000), url(<?php echo $config->getAssetsURL(); ?>/Others/championsBackground.jpg);"></div>

        <section id="filter" class="transition position-sticky z-1 w-100">
            <div class="container h-100 flex-center">
                <div class="row w-100">
                    <div class="col-md-8 h-100 flex-center justify-content-start">
                        <img class="object-fit-contain me-4" src="<?php echo $config->getAssetsURL(); ?>/Icon/content_type_icon_champion__3nwJQ.png" height="35" width="35" alt="">
                        <input class="border-0 w-50 fw-bold text-uppercase letter-spacing-2 bg-transparent" type="input" placeholder="Find a champion">
                    </div>

                    <div class="col-md-4 h-100 flex-center justify-content-around">
                        <h2 class="m-0"><i class="bi bi-sort-down"></i></h2>
                        <h1 class="font-size-16 m-0 fw-bold text-uppercase letter-spacing-1">Sort by</h1>
                        <select name="sort" class="border-0 w-50 fw-bold text-uppercase p-2 letter-spacing-2">
                            <option value="">A->Z</option>
                            <option value="">Z->A</option>
                            <option value="">Region</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>


        <section id="container" class="position-relative m-auto h-100">
            <div class="container__head mb-5 flex-center flex-column justify-content-end gap-1">
                <img src="<?php echo $config->getAssetsURL(); ?>/Icon/content_type_icon_champion__3nwJQ.png" alt="">
                <h1 class="position-relative text-uppercase letter-spacing-3">Champions</h1>
            </div>
            <div class="container-fluid container__body h-auto m-auto">
                <div class="row position-relative flex-center h-100 mt-md-5 gap-md-2">
                    <?php
                    if (isset($champions)) {
                        foreach ($champions as $index => $item) {
                    ?>
                            <a
                                class="item col-12 col-md-2 p-0 m-md-1 overflow-hidden transition"
                                href="./champion.php?champion=<?php echo $item->getId(); ?>"
                                data-id="<?php echo $item->getId(); ?>"
                                data-region="<?php echo $item->getRegion(); ?>"
                                data-region-name="<?php echo $getNameRegionById[$item->getRegion()]; ?>">
                                <div class="container-fluid position-relative w-100 h-100 p-0">
                                    <div class="row h-100 m-0">
                                        <img class="item__img col-3 col-md-12 p-0 h-100 transition object-fit-cover" loading="lazy"
                                            style="object-position: <?php echo $item->getPositionX() . '% ' . $item->getPositionY() . '%'; ?>;"
                                            src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" alt="">
                                        <div class="item__more col-9 col-md-12 p-0 flex-center justify-content-between position-absolute text-uppercase transition">
                                            <div class="item__more--inf flex-center justify-content-start justify-content-lg-center gap-2 flex-column p-3 transition">
                                                <h1 class="m-0 letter-spacing-1 fw-bold font-size-14"><?php echo $item->getName(); ?></h1>
                                                <h2 class="m-0 letter-spacing-1 fw-bold font-size-12"><?php echo $getNameRegionById[$item->getRegion()]; ?></h2>
                                            </div>
                                            <div class="item__more--explore flex-center gap-2 p-3 font-size-12 transition">
                                                <h1 class="m-0 letter-spacing-2 fw-bold font-size-12">Explore</h1>
                                                <i class="bi bi-arrow-right m-0"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            <?php
                            if (($index + 1) % 5 == 0) {
                            ?>
                </div>
                <div class="row flex-center h-100 mt-md-5 gap-md-2">
        <?php
                            }
                        }
                    }
        ?>
                </div>
            </div>
        </section>
    </main>
    <footer id="footer"></footer>
</body>

</html>
<script type="module" src="../../Assets/Javascript/champions.js"></script>