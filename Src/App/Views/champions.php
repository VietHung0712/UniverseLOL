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
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/style.css">
    <link rel="icon" href="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Icon/League_of_Legends_icon.svg">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <script type="module" src="../../Assets/Javascript/load-header-footer.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Champions - Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>

    <main id="champions" class="position-relative">

        <div class="background z-0 position-fixed w-100 h-100 bg-center-cover-norepeat" style="background-image: linear-gradient(to bottom, #000,rgba(0, 0, 0, 0.7), #000), url(<?php echo $config->getAssetsURL(); ?>/Others/championsBackground.jpg);"></div>

        <section id="filter" class="transition position-absolute z-1 w-100">
            <div class="container h-100 flex-center">
                <div class="row w-100">
                    <div class="col-md-8 h-100 flex-center justify-content-start">
                        <img class="object-fit-contain me-4" src="<?php echo $config->getAssetsURL(); ?>/Icon/content_type_icon_champion__3nwJQ.png" height="35" width="35" alt="">
                        <input class="border-0 w-50 fw-bold text-uppercase text-color-1 font-monospace font-size-16 letter-spacing-2 bg-transparent" type="input" placeholder="Find a champion">
                    </div>
                    <div class="col-md-4 h-100 flex-center justify-content-around">
                        <h2 class="m-0 text-color-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-sort-down" viewBox="0 0 16 16">
                                <path d="M3.5 2.5a.5.5 0 0 0-1 0v8.793l-1.146-1.147a.5.5 0 0 0-.708.708l2 1.999.007.007a.497.497 0 0 0 .7-.006l2-2a.5.5 0 0 0-.707-.708L3.5 11.293zm3.5 1a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5M7.5 6a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1zm0 3a.5.5 0 0 0 0 1h1a.5.5 0 0 0 0-1z" />
                            </svg>
                        </h2>
                        <h1 class="font-size-16 m-0 fw-bold text-uppercase text-color-3 letter-spacing-1">Sort by</h1>
                        <select name="sort" class=" p-2 border-0 w-50 fw-bold text-uppercase text-color-1 font-monospace font-size-16 letter-spacing-2">
                            <option value="">A->Z</option>
                            <option value="">Newest</option>
                            <option value="">Region</option>
                        </select>
                    </div>
                </div>
            </div>
        </section>
        <section id="container">
            <header class="container__head justify-content-end pb-3">
                <img src="<?php echo $config->getAssetsURL(); ?>/Icon/content_type_icon_champion__3nwJQ.png" width="30" alt="">
                <h1>Champions</h1>
            </header>
            <div class="container-fluid champions__list">
                <div class="row">
                    <?php
                    if (isset($champions)) {
                        foreach ($champions as $i => $item) {
                    ?>
                            <a
                                class="item col-12 col-md-2 transition"
                                href="./champion.php?champion=<?php echo $item->getId(); ?>"
                                data-id="<?php echo $item->getId(); ?>"
                                data-region="<?php echo $item->getRegion(); ?>"
                                data-release-date="<?php echo $item->getReleaseDate(); ?>"
                                data-region-name="<?php echo $getNameRegionById[$item->getRegion()]; ?>">
                                <img loading="lazy"
                                    style="object-position: <?php echo $item->getPositionX() . '% ' . $item->getPositionY() . '%'; ?>;"
                                    src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" alt="">
                                <div class="item__more transition">
                                    <div>
                                        <h1>
                                            <span>
                                                <?php echo $item->getName(); ?>
                                            </span>
                                        </h1>
                                        <h2>
                                            <span>
                                                <?php echo $getNameRegionById[$item->getRegion()]; ?>
                                            </span>
                                        </h2>
                                    </div>
                                    <div class="animationView">
                                        <h1>Explore</h1>
                                        <span>
                                            <svg version="1.0" x="0px" y="0px" viewBox="0 0 162 70.28" fill="#937341" style="width: 12.5px;">
                                                <circle fill="#937341" cx="31.57" cy="35.21" r="11.57"></circle>
                                                <g>
                                                    <polygon fill="#937341" points="124.18,70.39 118.31,64.09 149.37,35.22 118.31,6.35 124.18,0.05 162,35.22"></polygon>
                                                    <rect x="84.61" y="29.76" fill="#937341" width="65" height="11.06"></rect>
                                                </g>
                                            </svg>
                                        </span>
                                    </div>
                                </div>
                            </a>
                            <?php
                            if (($i + 1) % 5 == 0) {
                            ?>
                </div>
                <div class="row">
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