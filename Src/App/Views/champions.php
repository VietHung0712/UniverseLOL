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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="../../Assets/Css/header_footer.css">
    <link rel="stylesheet" href="../../Assets/Css/reset.css">
    <link rel="stylesheet" href="../../Assets/Css/champions.css">
    <link rel="icon" href="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Icon/LOL.png">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"></script>
    <title>Champions - League of Legends</title>
</head>

<body>
    <header id="header"></header>
    <main id="main" class="position-relative">
        <div class="background z-0 position-absolute top-0 w-100" style="background-image: linear-gradient(to bottom, #000,rgba(0, 0, 0, 0.7), #000), url(https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Others/championsBackground.jpg);"></div>
        <section class="search transition position-sticky z-1 w-100">
            <div class="search__border m-auto h-100 d-flex align-items-center">
                <img class="object-fit-contain me-2" src="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Icon/content_type_icon_champion__3nwJQ.png" alt="">
                <input type="search" placeholder="Find a champion">
                <i class="fa-filter fa-solid"></i>
                <select name="sort">
                    <option value="">A->Z</option>
                    <option value="">Z->A</option>
                    <option value="">Region</option>
                </select>
            </div>
        </section>
        <section class="main__list position-relative w-100 h-100">
            <div class="main__list--head mb-5 w-100 d-flex flex-column justify-content-end align-items-center gap-1">
                <img src="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Icon/content_type_icon_champion__3nwJQ.png" alt="">
                <h1 class="position-relative text-uppercase">Champions</h1>
            </div>
            <div class="main__list--body">
                <?php
                if (isset($champions)) {
                    foreach ($champions as $champion) {
                ?>
                        <a
                            href="./champion.php?champion=<?php echo $champion->getId(); ?>"
                            class="item transition"
                            data-id="<?php echo $champion->getId(); ?>"
                            data-region="<?php echo $champion->getRegion(); ?>">
                            <div class="item__img transition" style="background-image: url(<?php echo $config->getAssetURL() . "/" . $champion->getSplashArt(); ?>);
                                    background-position: <?php echo $champion->getPositionX() . '% ' . $champion->getPositionY() . '%'; ?>;"></div>
                            <div class="item__inf transition">
                                <h3><?php echo $champion->getName(); ?></h3>
                                <h5><?php echo getRegionName($champion->getRegion()); ?></h5>
                            </div>
                            <div class="item__explore transition">
                                <h5>Explore</h5>
                                <i class="fa-right-long fa-solid"></i>
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
<script type="module" src="../../Assets/Javascript/function.js"></script>
<script type="module" src="../../Assets/Javascript/champions.js"></script>
<script type="module" src="../../Assets/Javascript/load-header-footer.js"></script>