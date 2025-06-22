<!DOCTYPE html>
<html lang="en">

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
            <div class="container-fluid">
                <div id="btnLate">
                    <button class="transition">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
                                <path d="m3.86 8.753 5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z" />
                            </svg>
                        </div>
                    </button>
                    <button class="transition">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                                <path d="m12.14 8.753-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z" />
                            </svg>
                        </div>
                    </button>
                </div>
                <div id="slideLate" class="slide">
                    <div class="item active">
                        <img class="" src="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Splash_Art/L/LeBlanc/LeBlanc_0.jpg" alt="">
                    </div>
                    <div class="item next">
                        <img class="" src="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Splash_Art/M/Mel/Mel_0.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="" src="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Splash_Art/V/Viktor/Viktor_0.jpg" alt="">
                    </div>
                    <div class="item">
                        <img class="" src="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Splash_Art/A/Ambessa/Ambessa_0.jpg" alt="">
                    </div>
                    <div class="item previous">
                        <img class="" src="https://raw.githubusercontent.com/VietHung0712/AssetsLOL/refs/heads/main/Splash_Art/A/Aurora/Aurora_0.jpg" alt="">
                    </div>
                </div>
                <div class="title">
                    <div class="item">
                        <canvas class="hexCanvas"></canvas>
                        <div>
                            <h2>the Matriarch of War</h2>
                            <h1>Ambessa</h1>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    </main>
    <footer id="footer" class="footer"></footer>
</body>

</html>

<script type="module" src="../../Assets/Javascript/dashboard.js"></script>