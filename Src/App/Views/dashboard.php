<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../Controllers/dashboardController.php";
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
    <title>Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>

    <main id="dashboard" class="position-relative">
        <section id="latest">
            <div class="container-fluid position-relative h-100 overflow-hidden">
                <div class="row">
                    <div id="btnLate" class="col-12 col-lg-9 position-absolute start-50 z-1">
                        <button class="position-relative rounded-circle bg-black transition">
                            <div class="position-absolute start-50 top-50 rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                    <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                                </svg>
                            </div>
                        </button>
                        <button class="position-relative rounded-circle bg-black float-end transition">
                            <div class="position-absolute start-50 top-50 rounded-circle">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                    <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                                </svg>
                            </div>
                        </button>
                    </div>
                </div>
                <div class="row h-100">
                    <div id="slideLate" class="ctr col-9 col-lg-7 position-relative bottom-0 m-auto">
                        <?php
                        if (isset($champions)) {
                            foreach ($champions as $i => $item) {
                        ?>
                                <div class="item h-100">
                                    <img class="h-100 w-100 object-fit-cover" alt=""
                                        style="object-position: <?php echo $item->getPositionX() . '% ' . $item->getPositionY() . '%'; ?>;"
                                        src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>">
                                </div>
                        <?php
                            }
                        } ?>
                    </div>
                    <div id="titleLate" class="ctr col-11 col-lg-4 position-absolute start-50 z-1">
                        <?php
                        if (isset($champions)) {
                            foreach ($champions as $i => $item) {
                        ?>
                                <div class="item">
                                    <div class="position-absolute z-2 top-50 w-100 flex-center flex-column text-uppercase">
                                        <img class="object-fit-contain" width="40" height="40" loading="lazy" alt=""
                                            src="<?php echo $config->getAssetsURL(); ?>/Icon/content_type_icon_champion__3nwJQ.png">
                                        <h2><?php echo $item->getTitle(); ?></h2>
                                        <h1 class="letter-spacing-3 fw-bold"><?php echo $item->getName(); ?></h1>
                                    </div>
                                    <a class="position-absolute top-0 start-0 w-100 h-100"
                                        href="champion.php?champion=<?php echo $item->getId(); ?>"></a>
                                    <canvas class="hexCanvas z-1 position-absolute top-0 start-0 w-100 h-100"></canvas>
                                </div>
                        <?php
                            }
                        } ?>
                    </div>
                </div>
            </div>
        </section>
        <section id="map">
            <script type="module" src="https://unpkg.com/@google/model-viewer/dist/model-viewer.min.js"></script>

            <model-viewer src="<?php echo $config->getAssetsURL(); ?>/Model/A/Ahri/ahri.glb" auto-rotate autoplay camera-controls background-color="#fff" style="width: 600px; height: 400px;"></model-viewer>

        </section>
        <section id="altUniverse">

        </section>
    </main>
    <footer id="footer" class="footer"></footer>
</body>

</html>

<script type="module" src="../../Assets/Javascript/dashboard.js"></script>