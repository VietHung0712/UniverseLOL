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
    <main id="champion">
        <section id="slide">
            <div class="slide__splashArt">
                <img class="position-absolute top-0 start-0 vh-100 w-100 object-fit-cover z-0"
                    style="object-position: <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?>;"
                    src="<?php echo $config->getAssetsURL() . "/" . $this_champion->getSplashArt(); ?>" loading="lazy" alt="">
                <video
                    style="object-position: <?php echo $this_champion->getPositionX() . '%' . ' ' . $this_champion->getPositionY() . '%'; ?>;"
                    src="<?php echo $this_champion->getAnimatedSplashArt(); ?>" autoplay muted loop></video>
                <div></div>
            </div>
            <div class="slide__title transition">
                <h1>
                    <span>
                        <?php echo $this_champion->getName(); ?>
                    </span>
                </h1>
                <img src="<?php echo $config->getAssetsURL(); ?>/Others/t1HeaderDivider.png" loading="lazy" alt="">
                <h3>
                    <span>
                        <?php echo $this_champion->getTitle(); ?>
                    </span>
                </h3>
            </div>
        </section>
        <section id="container" class="flex-center flex-column">
            <div class="container h-75">
                <div class="row h-100">
                    <div class="col__item col__1 col-12 col-lg-3 p-1">
                        <div class="col__head col__bg flex-center">
                            <h5 class="text-uppercase font-size-12 m-0 letter-spacing-2">
                                Related Champions
                            </h5>
                        </div>
                        <div class="col__body col__bg">
                            <div class="h-100 w-100 overflow-auto scrollbar">
                                <ul class="mt-4 list-unstyled flex-center flex-column gap-4">
                                    <?php
                                    if (!empty($championRelationsArr)) {
                                        foreach ($championRelationsArr as $i => $item) {
                                    ?>
                                            <li class="w-100">
                                                <a class="h-100 w-100 flex-center flex-column justify-content-between text-decoration-none"
                                                    href="./champion.php?champion=<?php echo $item->getId(); ?>">
                                                    <div class="border__img flex-center rounded-circle transition">
                                                        <div class="rounded-circle overflow-hidden">
                                                            <img class="h-100 w-100 object-fit-cover"
                                                                src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" alt=""
                                                                style="object-position: <?php echo $item->getPositionX() . '% ' . $item->getPositionY() . '%'; ?>;
                                                            transform-origin: <?php echo $item->getPositionX() . '% ' . $item->getPositionY() . '%'; ?>;">
                                                        </div>
                                                    </div>
                                                    <h5 class="text-uppercase font-size-12 m-0 letter-spacing-2 transition">
                                                        <span><?php echo $item->getName(); ?></span>
                                                    </h5>
                                                </a>
                                            </li>
                                    <?php
                                        }
                                    }
                                    ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col__item col__2 col-12 col-lg-6 p-1 flex-center flex-column gap-2">
                        <div class="col__head col__bg w-100 position-relative">
                            <div class="img position-absolute col__bg rounded-circle">
                                <div class="border__img flex-center rounded-circle">
                                    <div class="rounded-circle overflow-hidden">
                                        <img class="h-100 w-100 object-fit-cover"
                                            src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" alt=""
                                            style="object-position: <?php echo $this_champion->getPositionX() . '% ' . $this_champion->getPositionY() . '%'; ?>;
                                                            transform-origin: <?php echo $this_champion->getPositionX() . '% ' . $this_champion->getPositionY() . '%'; ?>;">
                                    </div>
                                </div>
                                <img class="position-absolute top-0 start-0 h-100 w-100"
                                    src="<?php echo $config->getAssetsURL() . '/Icon/ChampionIconFrame.jpg'; ?>" alt="">
                            </div>
                            <div class="content h-100 col-11 m-auto mt-3 mt-lg-0 flex-center flex-column justify-content-center p-lg-0 p-5">
                                <p class="fs-5 fw-bold letter-spacing-1 text-center">"<?php echo $this_champion->getVoice(); ?>"</p>
                                <h5 class="fs-5 fw-bold letter-spacing-1 m-0">
                                    <span>
                                        ~<?php echo $this_champion->getName(); ?>
                                    </span>
                                </h5>
                            </div>
                        </div>
                        <div class="col__body col__bg position-relative w-100 flex-center">
                            <img class="img__filter position-absolute top-0 start-0 h-100 w-100 object-fit-cover z-0"
                                src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" alt="">
                            <div class="position-relative col-11">
                                <p class="paragraph font-size-14"><?php echo $this_champion->getStory(); ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="col__item col__3 col-12 col-lg-3 p-1 flex-center flex-column gap-2">
                        <div class="col__head col__bg w-100 flex-center justify-content-start">
                            <div class="h-100 p-3">
                                <img class="h-100 w-100"
                                    src="<?php echo $config->getAssetsURL() . '/' . $role->getIcon(); ?>" alt="">
                            </div>
                            <div class="h-100" style="width: 1px; background-color: var(--color4-);"></div>
                            <div class="m-auto">
                                <h5 class="font-size-12 text-uppercase text-center letter-spacing-1">
                                    Role
                                </h5>
                                <h6 class="font-size-12 text-uppercase text-center letter-spacing-1">
                                    <span>
                                        <?php echo $role->getName(); ?>
                                    </span>
                                </h6>
                            </div>
                        </div>
                        <div class="col__body col__bg w-100 position-relative overflow-hidden transition">
                            <img class="img__filter position-absolute h-100 w-100 object-fit-cover"
                                src="<?php echo $config->getAssetsURL() . '/' . $region->getBackground(); ?>" alt="">
                            <div class="h-100 w-100 flex-center">
                                <img class="transition" width="200"
                                    src="<?php echo $config->getAssetsURL() . '/' . $region->getAvatar(); ?>" alt="">
                            </div>
                            <a class="position-absolute w-100 text-decoration-none transition"
                                href="./region.php?region=<?php echo $region->getId(); ?>">
                                <div class="col__head col__bg border-end-0 border-start-0 w-100 flex-center justify-content-start">
                                    <div class="m-auto">
                                        <h5 class="font-size-12 text-uppercase text-center letter-spacing-1">
                                            Region
                                        </h5>
                                        <h6 class="font-size-12 text-uppercase text-center letter-spacing-1">
                                            <span>
                                                <?php echo $region->getName(); ?>
                                            </span>
                                        </h6>
                                    </div>
                                    <div class="h-100" style="width: 1px; background-color: var(--color4-);"></div>
                                    <div class="h-100 p-3">
                                        <img class="h-100 w-100"
                                            src="<?php echo $config->getAssetsURL() . '/' . $region->getIcon(); ?>" alt="">
                                    </div>
                                </div>
                                <div class="col__bg flex-center border-0 gap-2 p-3 font-size-12 animationView">
                                    <h5 class="m-0 letter-spacing-2 font-size-12 text-uppercase">
                                        View Region
                                    </h5>
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
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="splashArt" class="position-relative bg-light">
            <header class="container__head vh-25">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-brush" viewBox="0 0 16 16">
                    <path d="M15.825.12a.5.5 0 0 1 .132.584c-1.53 3.43-4.743 8.17-7.095 10.64a6.1 6.1 0 0 1-2.373 1.534c-.018.227-.06.538-.16.868-.201.659-.667 1.479-1.708 1.74a8.1 8.1 0 0 1-3.078.132 4 4 0 0 1-.562-.135 1.4 1.4 0 0 1-.466-.247.7.7 0 0 1-.204-.288.62.62 0 0 1 .004-.443c.095-.245.316-.38.461-.452.394-.197.625-.453.867-.826.095-.144.184-.297.287-.472l.117-.198c.151-.255.326-.54.546-.848.528-.739 1.201-.925 1.746-.896q.19.012.348.048c.062-.172.142-.38.238-.608.261-.619.658-1.419 1.187-2.069 2.176-2.67 6.18-6.206 9.117-8.104a.5.5 0 0 1 .596.04M4.705 11.912a1.2 1.2 0 0 0-.419-.1c-.246-.013-.573.05-.879.479-.197.275-.355.532-.5.777l-.105.177c-.106.181-.213.362-.32.528a3.4 3.4 0 0 1-.76.861c.69.112 1.736.111 2.657-.12.559-.139.843-.569.993-1.06a3 3 0 0 0 .126-.75zm1.44.026c.12-.04.277-.1.458-.183a5.1 5.1 0 0 0 1.535-1.1c1.9-1.996 4.412-5.57 6.052-8.631-2.59 1.927-5.566 4.66-7.302 6.792-.442.543-.795 1.243-1.042 1.826-.121.288-.214.54-.275.72v.001l.575.575zm-4.973 3.04.007-.005zm3.582-3.043.002.001h-.002z" />
                </svg>
                <h1 class="text-color-3">Splash Art</h1>
            </header>
            <div class="container-fluid">
                <div class="row">
                    <div class="splashArt__frame row col-11 m-auto position-relative">
                        <img class="position-absolute top-0 start-0 object-fit-contain active" src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" loading="lazy" alt="">
                        <?php
                        if (!empty($skinsArr)) {
                            foreach ($skinsArr as $item) {
                        ?>
                                <img class="position-absolute top-0 start-0 object-fit-contain" src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" loading="lazy" alt="">
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <div class="row">
                    <div class="splashArt__list vh-25 col-11 col-lg-10 scrollbar m-auto overflow-x-auto">
                        <div class="splashArt__list--border h-100 flex-center align-items-start justify-content-around gap-0">
                            <button type="button" class="transition bg-transparent border-0 active">
                                <div class="m-auto">
                                    <img class="object-fit-contain h-100"
                                        src="<?php echo $config->getAssetsURL() . '/' . $this_champion->getSplashArt(); ?>" loading="lazy" alt="">
                                </div>
                                <h5 class="m-auto mt-2 w-75 text-uppercase font-size-14">
                                    <span>
                                        <?php echo $this_champion->getName(); ?>
                                    </span>
                                </h5>
                            </button>
                            <?php
                            if (!empty($skinsArr)) {
                                foreach ($skinsArr as $item) {
                            ?>
                                    <button type="button" class="transition bg-transparent border-0">
                                        <div class="m-auto">
                                            <img class="object-fit-contain h-100"
                                                src="<?php echo $config->getAssetsURL() . '/' . $item->getSplashArt(); ?>" loading="lazy" alt="">
                                        </div>
                                        <h5 class="m-auto mt-2 w-75 text-uppercase font-size-14">
                                            <span>
                                                <?php echo $item->getName(); ?>
                                            </span>
                                        </h5>
                                    </button>
                            <?php
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
        if (!empty($this_champion->getModel())) {
        ?>
            <section id="model">
                <header class="container__head vh-25">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-badge-3d-fill" viewBox="0 0 16 16">
                        <path d="M10.157 5.968h-.844v4.06h.844c1.116 0 1.621-.667 1.621-2.02 0-1.354-.51-2.04-1.621-2.04" />
                        <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm5.184 4.368c.646 0 1.055.378 1.06.9.008.537-.427.919-1.086.919-.598-.004-1.037-.325-1.068-.756H3c.03.914.791 1.688 2.153 1.688 1.24 0 2.285-.66 2.272-1.798-.013-.953-.747-1.38-1.292-1.432v-.062c.44-.07 1.125-.527 1.108-1.375-.013-.906-.8-1.57-2.053-1.565-1.31.005-2.043.734-2.074 1.67h1.103c.022-.391.383-.751.936-.751.532 0 .928.33.928.813.004.479-.383.835-.928.835h-.632v.914zM8.126 11h2.189C12.125 11 13 9.893 13 7.985c0-1.894-.861-2.984-2.685-2.984H8.126z" />
                    </svg>
                    <h1 class="text-color-3">Model 3D: <?php echo $this_champion->getName(); ?></h1>
                </header>
                <div class="container">
                    <div class="row">
                        <button class="col-10 col-lg-4 m-auto">
                            <a class="d-block text-decoration-none text-color-3 h-100 w-100 font-size-16 fw-bold letter-spacing-2 text-uppercase"
                                href="./model.php?champion=<?php echo $this_champion->getId(); ?>">View 3D <?php echo $this_champion->getName(); ?> model
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-up-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M14 2.5a.5.5 0 0 0-.5-.5h-6a.5.5 0 0 0 0 1h4.793L2.146 13.146a.5.5 0 0 0 .708.708L13 3.707V8.5a.5.5 0 0 0 1 0z" />
                                </svg>
                            </a>
                        </button>
                    </div>
                </div>
            </section>
        <?php
        }
        ?>
    </main>
    <footer id="footer"></footer>
</body>

</html>
<script type="module" src="../../Assets/Javascript/champion.js"></script>
<script type="module" src="https://ajax.googleapis.com/ajax/libs/model-viewer/4.0.0/model-viewer.min.js"></script>