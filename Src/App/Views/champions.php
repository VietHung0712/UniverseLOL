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
    <link rel="stylesheet" href="../../Assets/Css/header_footer.css">
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/champions.css">
    <link rel="icon" href="<?php echo $config->getAssetsURL(); ?>/Icon/LOL.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../Assets/Javascript/function.js"></script>
    <script type="module" src="../../Assets/Javascript/load-header-footer.js"></script>
    <script type="module" src="../../Assets/Javascript/champions.js"></script>
    <title>Champions - Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <main id="main" class="position-relative">
        <div class="background z-0 position-absolute top-0 w-100 vh-100 bg-center-cover-norepeat" style="background-image: linear-gradient(to bottom, #000,rgba(0, 0, 0, 0.7), #000), url(<?php echo $config->getAssetsURL(); ?>/Others/championsBackground.jpg);"></div>
        <section id="filter" class="transition position-sticky z-1 w-100">
            <div class="filter__border h-100 flex__center justify-content-between m-auto">
                <div class="filter__input h-100 w-75 flex__center justify-content-start">
                    <img class="object-fit-contain me-4" src="<?php echo $config->getAssetsURL(); ?>/Icon/content_type_icon_champion__3nwJQ.png" alt="">
                    <input class="border-0 w-50 fw-bold text-uppercase letter-spacing-2 bg-transparent" type="input" placeholder="Find a champion">
                </div>
                <div class="filter__sort h-100 w-25 flex__center justify-content-around">
                    <i class="fa-filter fa-solid"></i>
                    <select name="sort" class="border-0 w-50 fw-bold text-uppercase p-2 letter-spacing-2">
                        <option value="">A->Z</option>
                        <option value="">Z->A</option>
                        <option value="">Region</option>
                    </select>
                </div>
            </div>
        </section>
        <section id="container" class="position-relative w-100 h-100">
            <div class="container__head mb-5 w-100 flex__center flex-column justify-content-end gap-1">
                <img src="<?php echo $config->getAssetsURL(); ?>/Icon/content_type_icon_champion__3nwJQ.png" alt="">
                <h1 class="position-relative text-uppercase position-relative letter-spacing-3">Champions</h1>
            </div>
            <div class="container__body d-grid m-auto">
                <?php
                if (isset($champions)) {
                    foreach ($champions as $item) {
                ?>
                        <a
                            href="./champion.php?champion=<?php echo $item->getId(); ?>"
                            class="item overflow-hidden position-relative transition"
                            data-id="<?php echo $item->getId(); ?>"
                            data-region="<?php echo $item->getRegion(); ?>">
                            <img class="item__img h-100 transition object-fit-cover" loading="lazy"
                                style="object-position: <?php echo $item->getPositionX() . '% ' . $item->getPositionY() . '%'; ?>;"
                                src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" alt="">
                            <div class="item__more position-absolute flex__center text-uppercase transition">
                                <div class="item__more--inf flex__center gap-2 flex-column transition">
                                    <h1 class="m-0 letter-spacing-1"><?php echo $item->getName(); ?></h1>
                                    <h2 class="m-0 letter-spacing-1"><?php echo $getNameRegionById[$item->getRegion()]; ?></h2>
                                </div>
                                <div class="item__more--explore flex__center gap-2 transition">
                                    <h1 class="m-0 letter-spacing-1">Explore</h1>
                                    <i class="bi bi-arrow-right m-0 letter-spacing-1"></i>
                                </div>
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