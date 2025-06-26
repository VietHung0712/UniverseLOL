<!DOCTYPE html>
<html lang="en">
<?php
try {
    require_once "../Controllers/championController.php";
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
    <title><?php echo $this_champion->getName(); ?> - Champions - Universe of League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <main id="model">
        <section id="display" class="">
            <div class="container">
                <div class="row">
                    <div id="container3D" class="col-12 col-xl-10 vh-100 overflow-hidden"
                        data-model="<?php echo $config->getAssetsURL() . '/' . $this_champion->getModel(); ?>">
                    </div>
                    <div class="col-12 col-xl-2 vh-50 flex-center flex-column justify-content-around">
                        <a class="text-center text-decoration-none"
                            href="./champion.php?champion=<?php echo $this_champion->getId(); ?>">
                            <div class="position-relative rounded-circle m-auto">
                                <div class="position-absolute top-50 start-50 rounded-circle overflow-hidden">
                                    <img class="h-100 w-100 object-fit-cover"
                                        style="object-position: <?php echo $this_champion->getPositionX() . '% ' . $this_champion->getPositionY() . '%'; ?>;
                                            transform-origin: <?php echo $this_champion->getPositionX() . '% ' . $this_champion->getPositionY() . '%'; ?>;"
                                        src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" alt="">
                                </div>
                            </div>
                            <h1 class="font-size-16 text-white text-uppercase fw-bold letter-spacing-2">
                                <span>
                                    <?php echo $this_champion->getName(); ?>
                                </span>
                            </h1>
                        </a>
                        <div class="w-100">
                            <h1 class="font-size-16 text-white text-center text-uppercase fw-bold letter-spacing-2">Animations</h1>
                            <select class="w-100 text-center text-white" name="" id="animationSelector"></select>
                        </div>
                        <button id="viewFullScreen"
                            class="w-100 font-size-16 text-white text-center fw-bold letter-spacing-2">
                            Full Screen
                        </button>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer id="footer"></footer>
</body>

</html>

<script type="module" src="../../Assets/Javascript/model.js"></script>