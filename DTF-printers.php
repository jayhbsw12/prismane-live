<?php include "header-top.php"; ?>
<meta name="robots" content="noindex,nofollow">

<style>
    .hero-padding-remove {
        padding-top: 0px !important;
    }

    .floating-lion {
        position: fixed;
        top: 50%;
        right: 0;
        width: 290px;
        height: 72vh;
        max-height: 720px;
        transform: translateY(-50%);
        pointer-events: none;
        opacity: 0;
        visibility: hidden;
        z-index: 2;
        transition: opacity 0.32s ease, visibility 0.32s ease;
    }

    .floating-lion.is-active {
        opacity: 0.32;
        visibility: visible;
    }

    .floating-lion__image {
        width: 100%;
        height: 100%;
        background-image: url('./assets/imgs/Lion-prismane.webp');
        background-repeat: no-repeat;
        background-position: right center;
        background-size: contain;
        transform: translate3d(0, var(--lion-shift, 0px), 0) scale(var(--lion-scale, 1));
        transform-origin: right center;
        transition: transform 0.28s ease-out;
        will-change: transform;
        filter: drop-shadow(0 22px 42px rgba(17, 24, 39, 0.12));
    }

    .white-section,
    .black-section {
        position: relative;
    }

    .black-section {
        z-index: 3;
    }

    .white-section .container,
    .black-section .container {
        position: relative;
        z-index: 4;
    }

    .dtf-light-card {
        background: #ffffff;
        border: 1px solid rgba(17, 24, 39, 0.08);
        border-radius: 16px;
        overflow: hidden;
        height: 100%;
        box-shadow: 0 18px 40px rgba(17, 24, 39, 0.06);
    }

    .dtf-light-card__media {
        background: #f4f4f4;
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 1.5rem;
    }

    .dtf-light-card__body {
        padding: 1.5rem 2rem 2rem;
        color: #111827;
    }

    .dtf-light-card__body h3,
    .dtf-light-card__body h4,
    .dtf-light-card__body h5,
    .dtf-light-card__body .text-prismane-2 {
        color: #111827 !important;
    }

    .dtf-light-card__body .dtf-card-title,
    .dtf-light-card__body .dtf-card-title-mn {
        color: #c9f31d !important;
    }

    .dtf-light-card__body .dtf-card-title {
        display: block;
        margin-bottom: 0.15rem;
        line-height: 1.15;
    }

    .dtf-light-card__body .dtf-card-title-mn {
        display: block;
        line-height: 1.15;
    }

    .dtf-light-card__body p,
    .dtf-light-card__body li {
        color: #374151 !important;
    }

    .dtf-light-card__body ul {
        list-style: none;
        padding: 0;
        margin: 0;
    }

    .dtf-light-card__body li {
        padding: 4px 0;
        font-size: 0.92rem;
        line-height: 1.45;
    }

    .dtf-chart-panel {
        margin: 2rem 0;
        background: #ffffff;
        border: 1px solid rgba(17, 24, 39, 0.08);
        border-radius: 12px;
        padding: 1.5rem;
        text-align: center;
        box-shadow: 0 14px 32px rgba(17, 24, 39, 0.05);
    }

    .dtf-chart-panel p {
        color: #111827 !important;
        opacity: 0.7;
        letter-spacing: 0.05em;
        font-size: 0.85rem;
        text-transform: uppercase;
    }

    .dtf-chart-panel img {
        background: #ffffff;
        border-radius: 8px;
    }

    .dtf-consumables-copy {
        margin-bottom: 2.5rem;
    }

    .dtf-consumables-copy p {
        color: #374151;
        margin-bottom: 0;
    }

    @media (max-width: 767px) {
        .dtf-light-card__body {
            padding: 1.25rem 1.25rem 1.5rem;
        }

        .dtf-chart-panel {
            padding: 1rem;
        }
    }

    @media only screen and (max-width: 1199px) {
        .floating-lion {
            width: 220px;
        }
    }

    @media only screen and (max-width: 991px) {
        .floating-lion {
            display: none;
        }
    }

    .dtf-printers-benefits .service__item-7 a {
        display: inline-block;
    }

    .dtf-printers-wave {
        left: 0;
        position: absolute;
        top: 420px;
        width: 100%;
        z-index: 99;
        line-height: 0;
        pointer-events: none;
        background: transparent;
    }

    .dtf-printers-wave .lqd-custom-shape {
        display: block;
        width: 100%;
        height: 220px !important;
    }

    @media only screen and (min-width: 768px) and (max-width: 991px) {
        .dtf-printers-benefits {
            padding-top: 90px;
            padding-bottom: 20px;
        }

        .dtf-printers-benefits::before,
        .dtf-printers-benefits::after {
            display: none;
        }

        .dtf-printers-benefits .service__items-7 {
            grid-template-columns: repeat(2, minmax(0, 1fr));
        }

        .dtf-printers-benefits .service__item-7 {
            min-height: 100%;
            padding: 0 24px 38px;
            margin-bottom: 38px;
            border-bottom: 1px solid #d7d7d7;
        }

        .dtf-printers-benefits .service__item-7::after {
            display: none;
        }

        .dtf-printers-benefits .service__item-7:nth-last-child(-n+2) {
            margin-bottom: 0;
            border-bottom: 0;
        }

        .dtf-printers-benefits .service__item-7:nth-child(odd) {
            border-right: 1px solid #d7d7d7;
        }

        .dtf-printers-benefits .service__title-7 {
            font-size: 24px;
            line-height: 1.3;
            padding-bottom: 18px;
            text-wrap: balance;
        }

        .dtf-printers-benefits .service__title-7 span {
            padding-left: 34px;
        }

        .dtf-printers-benefits .service__title-7 span::before {
            width: 24px;
            top: 15px;
        }

        .dtf-printers-benefits .service__item-7 p {
            max-width: none;
            font-size: 16px;
            line-height: 1.65;
            padding-bottom: 0;
        }
    }

    @media only screen and (max-width: 767px) {
        .dtf-printers-wave {
            top: 560px !important;
        }

        .dtf-printers-benefits .service__item-7 {
            padding-right: 0;
        }

        .dtf-printers-benefits .service__title-7 {
            font-size: 28px;
        }
    }

    @media only screen and (max-width: 480px) {
        .dtf-printers-wave {
            top: 600px !important;
        }
    }

    @media only screen and (max-width: 390px) {
        .dtf-printers-wave {
            top: 640px !important;
        }
    }
</style>
<?php include "header.php"; ?>

<div id="smooth-wrapper">
    <div class="floating-lion" aria-hidden="true">
        <div class="floating-lion__image"></div>
    </div>
    <div id="smooth-content">
        <main>

            <!-- Hero area start -->
            <section class="hero__area hero-product d-flex align-items-center black-section">
                <!-- <video autoplay muted loop id="hero-video">
                    <source src="./assets/video/red-color-example-video.mp4" type="video/mp4">
                </video> -->
                <!-- <div class="overlay"></div> -->

                <div class="container">
                    <div class="row flex-column flex-lg-row gap-5 gap-lg-0">
                        <div class="col-12 col-lg-12 d-flex align-items-center">
                            <div class="hero__content animation__hero_one pt-0">
                                <div
                                    class="hero__title-wrapper m-0 d-flex flex-column gap-3 justify-content-center align-items-start">
                                    <h1 class="sec-title text-white text-prismane">DTF Printers</h1>
                                    <span class="sec-title text-white mandarin-title-1 text-prismane">DTF 打印机</span>
                                    <p class="text-white">Industrial-grade DTF printers engineered for high-speed, high-quality direct-to-film printing across garments, bags, shoes, and textile applications. Available in 420mm, 600mm, and 900mm production widths, equipped with Epson i3200 and i1600 printheads, all-in-one powder shaker systems, and intelligent auto anti-collision technology for uninterrupted, efficient production.</p>
                                    <!-- <button type="button" class="bg-prismane py-3 px-5 fs-5 ">Contact</button> -->
                                    <div class=" z-1">
                                        <!-- <p class="blog__btn about_btn text-prismane" style="cursor: pointer;"
                                            onclick="downloadPDF()">
                                            Download Brochure
                                            <span><i class="fa-solid fa-arrow-right"></i></span>
                                        </p> -->

                                        <script>
                                            function downloadPDF() {
                                                const link = document.createElement('a');
                                                link.href = 'assets/data/Pigment-Dispersions-data.pdf';
                                                link.download = 'Pigment-Dispersions-data.pdf';
                                                document.body.appendChild(link);
                                                link.click();
                                                document.body.removeChild(link);
                                            }
                                        </script>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12 col-lg-6 d-flex flex-column gap-3" style="z-index: 1">
                            <div class="bg-white rounded-4 shadow p-4 d-flex align-items-center gap-4">
                                <div class="bg-secondary rounded-3 flex-shrink-0" style="width:72px;height:72px;"></div>
                                <div>
                                    <h5 class="mb-1">Feature 1</h5>
                                    <p class="text-secondary mb-0">
                                        Quis autem repreh ender velit esse nihil vel illum.
                                    </p>
                                </div>
                            </div>

                            <div class="bg-white rounded-4 shadow p-4 d-flex align-items-center gap-4">
                                <div class="bg-secondary rounded-3 flex-shrink-0" style="width:72px;height:72px;"></div>
                                <div>
                                    <h5 class="mb-1">Feature 2</h5>
                                    <p class="text-secondary mb-0">
                                        Quis autem repreh ender velit esse nihil vel illum.
                                    </p>
                                </div>
                            </div>

                            <div class="bg-white rounded-4 shadow p-4 d-flex align-items-center gap-4">
                                <div class="bg-secondary rounded-3 flex-shrink-0" style="width:72px;height:72px;"></div>
                                <div>
                                    <h5 class="mb-1">Feature 3</h5>
                                    <p class="text-secondary mb-0">
                                        Quis autem repreh ender velit esse nihil vel illum.
                                    </p>
                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>


                <!-- <div id="tsparticles"></div>
                <img src="assets/imgs/hero/1/1-bg.png" alt="image" class="hero1_bg">
                <div id="js-map-canvas" class="map-canvas"> </div> -->
            </section>
            <!-- Hero area end -->

            <section class="wave-path-prismane dtf-printers-wave">
                <svg xmlns="http://www.w3.org/2000/svg" class="lqd-custom-shape" fill="none" height="100%"
                    viewBox="0 0 1440 461" width="100%" preserveAspectRatio="none" style="width: 100%; height: 220px;">
                    <path class="elementor-shape-fill"
                        d="m0 131.906 34.4-20.017c34.4-19.9 103.2-59.936 171.68-82.979 68.64-23.043 136.8-29.328003 205.44-4.306 68.48 25.022 137.28 81.35 205.76 80.768 68.64-.582 136.8-58.074 205.44-84.608 68.48-26.535 137.28-22.345 205.76-16.06 68.64 6.168 136.8 14.315 205.44 22.811 68.48 8.612 137.28 17.457 171.68 22l34.4 4.422v396.851h-1440z"
                        fill-opacity=".09" style="fill: #c9f31d">
                        <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="10s"
                            values="M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z; M0 122.906L36.5 109C71.5 96.372 102.52 67.98 171 44.937C239.64 21.894 354.36 51.478 423 76.5C491.48 101.522 546.52 19.097 615 18.515C683.64 17.933 799.36 58.534 868 32C936.48 5.46499 1039.52 54.715 1108 61C1176.64 67.168 1190.36 -6.996 1259 1.5C1327.48 10.112 1371.2 35.972 1405.6 40.515L1440 44.937V441.788H0L0 122.906Z; M0 131.906L34.4 111.889C68.8 91.989 137.6 51.953 206.08 28.91C274.72 5.867 342.88 -0.418001 411.52 24.604C480 49.626 548.8 105.954 617.28 105.372C685.92 104.79 754.08 47.298 822.72 20.764C891.2 -5.771 960 -1.581 1028.48 4.704C1097.12 10.872 1165.28 19.019 1233.92 27.515C1302.4 36.127 1371.2 44.972 1405.6 49.515L1440 53.937V450.788H0L0 131.906Z">
                        </animate>
                    </path>
                    <path class="elementor-shape-fill"
                        d="M0 154.75L34.4 142.201C68.8 129.53 137.6 104.433 206.08 99.072C274.72 93.833 342.88 108.453 411.52 122.099C480 135.622 548.8 148.293 617.28 142.811C685.92 137.329 754.08 113.693 822.72 113.693C891.2 113.693 960 137.329 1028.48 152.68C1097.12 168.153 1165.28 175.463 1233.92 184.966C1302.4 194.591 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z"
                        fill-opacity=".28" style="fill: #c9f31d">
                        <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="8s"
                            values="M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 33.4 177.201 55 176.5C76.6 175.799 137.52 110.361 206 105C274.64 99.761 332.86 141.104 401.5 154.75C469.98 168.273 527.52 206.982 596 201.5C664.64 196.018 747.86 75 816.5 75C884.98 75 956.52 118.149 1025 133.5C1093.64 148.973 1163.36 87.497 1232 97C1300.48 106.625 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z; M0 154.75C0 154.75 12.8 142.902 34.4 142.201C56 141.5 140.02 160.111 208.5 154.75C277.14 149.511 334.36 112.57 403 126.216C471.48 139.739 552.52 190.448 621 184.966C689.64 179.484 745.36 116 814 116C882.48 116 950.52 161.149 1019 176.5C1087.64 191.973 1154.36 123.997 1223 133.5C1291.48 143.125 1371.2 206.287 1405.6 212.257L1440 218.105V452.025H0L0 154.75Z">
                        </animate>
                    </path>
                    <path class="elementor-shape-fill"
                        d="M0 340.22L34.4 333.92C68.8 327.52 137.6 314.92 206.08 312.22C274.72 309.52 342.88 316.92 411.52 319.72C480 322.52 548.8 320.92 617.28 318.92C685.92 316.92 754.08 314.52 822.72 316.02C891.2 317.52 960 322.92 1028.48 309.42C1097.12 295.92 1165.28 263.52 1233.92 251.02C1302.4 238.52 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z"
                        style="fill: #c9f31d">
                        <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="6.5s"
                            values="M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z; M0 340.22L37.5 323C71.9 316.6 137.52 336.62 206 333.92C274.64 331.22 339.86 272.2 408.5 275C476.98 277.8 551.02 304 619.5 302C688.14 300 759.36 266.5 828 268C896.48 269.5 962.02 336.5 1030.5 323C1099.14 309.5 1156.36 232.5 1225 220C1293.48 207.5 1364.1 249.62 1398.5 253.22L1440 253.22V453.22H0L0 340.22Z; M0 340.22L34.4 333.92C68.8 327.52 139.02 281.2 207.5 278.5C276.14 275.8 351.86 331.12 420.5 333.92C488.98 336.72 554.52 289 623 287C691.64 285 756.86 332.42 825.5 333.92C893.98 335.42 960 322.92 1028.48 309.42C1097.12 295.92 1163.36 236 1232 223.5C1300.48 211 1371.2 245.92 1405.6 249.52L1440 253.22V453.22H0L0 340.22Z">
                        </animate>
                    </path>
                    <path class="elementor-shape-fill"
                        d="M1440 337.719L1405.6 340.219C1371.2 342.719 1302.4 347.719 1233.92 350.419C1165.28 353.019 1097.12 353.419 1028.48 352.219C960 351.019 891.2 348.419 822.72 357.019C754.08 365.719 685.92 385.719 617.28 395.919C548.8 406.019 480 406.419 411.52 395.919C342.88 385.419 274.72 364.019 206.08 359.419C137.6 354.719 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z"
                        style="fill: #fff;">
                        <animate repeatCount="indefinite" fill="freeze" attributeName="d" dur="5.5s"
                            values="M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1295.98 326.3 1227.5 329C1158.86 331.6 1081.64 391.2 1013 390C944.52 388.8 874.48 364.119 806 372.719C737.36 381.419 675.14 296.3 606.5 306.5C538.02 316.6 471.48 383.219 403 372.719C334.36 362.219 272.64 320.6 204 316C135.52 311.3 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z; M1440 337.719L1405.6 340.219C1371.2 342.719 1303.98 362.8 1235.5 365.5C1166.86 368.1 1090.14 324.2 1021.5 323C953.02 321.8 889.48 383.4 821 392C752.36 400.7 678.64 368.519 610 378.719C541.52 388.819 473.48 414.5 405 404C336.36 393.5 273.64 342.319 205 337.719C136.52 333.019 68.8 366.719 34.4 372.719L0 378.719V460.719H1440V337.719Z">
                        </animate>
                    </path>
                </svg>
            </section>

            <!-- Development area start -->
            <section class="development__area white-section">
                <div class="container g-0 line pt-130 pb-150">
                    <div class="line-3"></div>
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-title animation__char_come text-prismane-2">Our DTF Printers Range
                                </h2> <br>
                                <h2 class="sec-title animation__char_come mandarin-title-1 text-prismane-2">我们的DTF打印机系列
                                </h2>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="development__wrapper pb-0">
                                <div class="development__content border-0 mb-0 pb-0">
                                    <p>
                                        <b>LEON-DTF 900MAX</b> <br>
                                        <!-- <b>LEON-DTF 900MAX型</b> -->
                                        <br><br>High-capacity DTF printer equipped with 4–8pcs Epson i3200A1/i1600A1 printheads. Features automatic powder returning system, 8-colour CMYK W printing, auto anti-collision system, and all functions operable via touchscreen — built for large-scale, high-speed production.
                                    </p>
                                    <p>
                                        <b>LEON-DTF 420 & 600 PRO</b> <br>
                                        <!-- <b>LEON-DTF 420 & 600 PRO型</b> -->
                                        <br><br>Mid-range DTF printer with 420mm and 600mm golden production sizes, equipped with 2pcs Epson i1600/i3200-A1 printheads. Features all-in-one printer and powder shaker body, well-designed media take-up system, and low ink alarm protection — ideal for efficient, space-saving production.
                                    </p>
                                </div>
                                <!-- <ul>
                                    <li>+ API Development</li>
                                    <li>+ WordPress</li>
                                    <li>+ Cloud Migration</li>
                                    <li>+ Front End Development</li>
                                    <li>+ JavaScript</li>
                                    <li>+ Fluter Framework</li>
                                </ul> -->
                            </div>
                        </div>
                        <!-- <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                            <div class="development__img">
                                <video src="assets/imgs/pigment-imgs/Ink-splash-2.mp4" autoplay loop muted playsinline
                                    data-speed="auto">
                                </video>

                            </div>
                        </div> -->
                        <!-- <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                            <div class="development__img">
                                <img src="assets/imgs/pigment-imgs/410 x 400.jpg" alt="Development Image">
                            </div>
                        </div> -->
                    </div>

                    <!-- Printer Model Cards -->
                    <div class="row g-4 mt-5">
                        <!-- LEON-DTF 900MAX -->
                        <div class="col-12 col-md-6">
                            <div class="dtf-light-card">
                                <div class="dtf-light-card__media" style="height: 340px;">
                                    <img src="assets/imgs/prismane-images/GLO-DTF900MAX.webp" alt="LEON-DTF 900MAX Industrial DTF Printer" style="max-height: 290px; max-width: 100%; object-fit: contain;">
                                </div>
                                <div class="dtf-light-card__body">
                                    <h3 class="dtf-card-title mb-2">LEON-DTF 900MAX<span class="dtf-card-title-mn">LEON-DTF 900MAX 型号</span></h3>
                                    <p style="font-size: 0.95rem; margin-bottom: 1rem;">Large-format industrial DTF printer for high-volume production environments.</p>
                                    <ul>
                                        <li>+ 4–8pcs Epson i3200A1 / i1600A1</li>
                                        <li>+ Print Speed up to 22m²/h</li>
                                        <li>+ 8-colour CMYK W printing</li>
                                        <li>+ Auto anti-collision system</li>
                                        <li>+ 15.6" 1920×1080 touchscreen</li>
                                        <li>+ All-in-one powder shaker</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- LEON-DTF 420 & 600 PRO -->
                        <div class="col-12 col-md-6">
                            <div class="dtf-light-card">
                                <div class="dtf-light-card__media" style="height: 340px;">
                                    <img src="assets/imgs/prismane-images/GLODTF420&600PRO.webp" alt="LEON-DTF 420 & 600 PRO DTF Printer" style="max-height: 290px; max-width: 100%; object-fit: contain;">
                                </div>
                                <div class="dtf-light-card__body">
                                    <h3 class="dtf-card-title mb-2">LEON-DTF 420 &amp; 600 PRO<span class="dtf-card-title-mn">LEON-DTF 420 &amp; 600 PRO 型号</span></h3>
                                    <p style="font-size: 0.95rem; margin-bottom: 1rem;">Mid-range all-in-one DTF printer in 420mm and 600mm production widths.</p>
                                    <ul>
                                        <li>+ 2pcs Epson i3200A1 / i1600A1</li>
                                        <li>+ Print Speed: 6pass 4m²/h</li>
                                        <li>+ CMYK W printing</li>
                                        <li>+ All-in-one printer & powder shaker</li>
                                        <li>+ Low ink alarm protection</li>
                                        <li>+ Media take-up system</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- Development area end -->

            <!-- Table section -->
            <section class="about__area-3 black-section">
                <div class="container pt-140 pb-140">
                    <div class="row">
                        <div class="col-12">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Technical Data</h2>
                                <h3 class="sec-title title-anim pb-2 text-prismane">DTF Printers</h3>
                                <h3 class="sec-title title-anim mandarin-title-1 text-prismane">DTF 打印机</h3>
                                <span class="text-white fs-1">LEON-DTF 900MAX — Specifications</span> &nbsp; &nbsp;
                                <span class="text-white fs-1 mandarin-title-2">LEON-DTF 900MAX 型号</span>
                            </div>

                            <div class="col-12  table-responsive">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <!-- <th scope="col" class="fw-normal"></th> -->
                                            <th scope="col" class="fw-normal">Specifications</th>
                                            <th scope="col" class="fw-normal">Details</th>
                                            <!-- <th scope="col" class="fw-normal">Chemical Class</th>
                                            <th scope="col" class="fw-normal">Light Fastness</th>
                                            <th scope="col" class="fw-normal">Characteristics</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #fff109"></span></td> -->
                                            <td>Print Software</td>
                                            <td>Ripprint / Photoprint</td>
                                            <!-- <td>Monoazo</td>
                                            <td>6</td>
                                            <td>High performance standard yellow</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #fece21"></span></td> -->
                                            <td>Printing Heads</td>
                                            <td>4–8pcs Epson i3200A1 / i1600A1</td>
                                            <!-- <td>Monoazo</td>
                                            <td>6–7</td>
                                            <td>High performance green shade yellow</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f7ac12"></span></td> -->
                                            <td>Print Colors</td>
                                            <td>CMYK W</td>
                                            <!-- <td>Double Azo</td>
                                            <td>7</td>
                                            <td>High performance strong green shade</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f28e1f"></span></td> -->
                                            <td>Printing Speed</td>
                                            <td>i3200A1: 4pass 22m²/h, 8pass 14m²/h</td>
                                            <!-- <td>Disazopyrazolone</td>
                                            <td>6</td>
                                            <td>High performance yellow shade orange</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #fa5e21"></span></td> -->
                                            <td>Machine Functions</td>
                                            <td>All-in-one Powder & Shaker, White Ink, 8 Colour Printing</td>
                                            <!-- <td>Disazopyrazolone</td>
                                            <td>6</td>
                                            <td>High performance mid shade orange</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f58025"></span></td> -->
                                            <td>Working Environment</td>
                                            <td>25°C–30°C, humidity 50%–70%</td>
                                            <!-- <td>Benzimidazolone</td>
                                            <td>6–7</td>
                                            <td>High performance red shade orange</td> -->
                                        </tr>
                                        <!-- <tr>
                                            <td><span class="color-item" style="background: #ac0000"></span></td>
                                            <td>Leon Red M21-U</td>
                                            <td>P.R.210</td>
                                            <td>Single azo</td>
                                            <td>6</td>
                                            <td>High performance red with bluish tone</td>
                                        </tr> -->
                                        <!-- <tr>
                                            <td><span class="color-item" style="background: #aa1b25"></span></td>
                                            <td>Leon Red R33-U</td>
                                            <td>P.R.122</td>
                                            <td>Quinacridone</td>
                                            <td>7–8</td>
                                            <td>High performance standard magenta</td>
                                        </tr> -->
                                        <!-- <tr>
                                            <td><span class="color-item" style="background: #5f1c61"></span></td>
                                            <td>Leon Violet R10-U</td>
                                            <td>P.V.19</td>
                                            <td>Quinacridone</td>
                                            <td>7–8</td>
                                            <td>High performance red shade magenta</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #280653"></span></td>
                                            <td>Leon Violet E4-U</td>
                                            <td>P.V.23</td>
                                            <td>Dioxazine Carbazole</td>
                                            <td>7–8</td>
                                            <td>High performance blue shade violet</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #211f6e"></span></td>
                                            <td>Leon Blue C64-U</td>
                                            <td>P.B.15:3</td>
                                            <td>Cu-Phthalocyanine</td>
                                            <td>8</td>
                                            <td>High performance standard cyan</td>
                                        </tr> -->
                                        <!-- <tr>
                                            <td><span class="color-item" style="background: #00352d"></span></td>
                                            <td>Leon Green Q8-U</td>
                                            <td>P.G.7</td>
                                            <td>Cu-Phthalogreen</td>
                                            <td>7–8</td>
                                            <td>High performance standard green</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #0c5537"></span></td>
                                            <td>Leon Green Q47-U</td>
                                            <td>P.G.36</td>
                                            <td>Cu-Phthalogreen (Brominated)</td>
                                            <td>7</td>
                                            <td>High performance yellower green</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #040504"></span></td>
                                            <td>Leon Black D8-U</td>
                                            <td>P.B.7</td>
                                            <td>Oxidised Carbon Black</td>
                                            <td>8</td>
                                            <td>High performance jet black</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #ffffff"></span></td>
                                            <td>Leon White D8-U</td>
                                            <td>P.W. TiO2.</td>
                                            <td>Titanium Di-Oxide.</td>
                                            <td>8</td>
                                            <td>Highly Opaque White</td>
                                        </tr> -->
                                    </tbody>
                                </table>

                            </div>

                            <!-- LEON-DTF 900MAX Spec Chart -->
                            <div class="dtf-chart-panel">
                                <p class="fw-semibold mb-3">LEON-DTF 900MAX — Technical Comparison Chart</p>
                                <img src="assets/imgs/prismane-images/GLO-DTF900MAX-chart.png" alt="LEON-DTF 900MAX Technical Specifications Chart" class="img-fluid" style="max-height: 520px; max-width: 100%; object-fit: contain;">
                            </div>

                            <div class="sec-title-wrapper mt-5">
                                <span class="text-white fs-1 ">LEON-DTF 420 & 600 PRO — Specifications</span> &nbsp; &nbsp;
                                <span class="text-white fs-1 mandarin-title-2 ">LEON-DTF 420 & 600 PRO 型号</span>
                            </div>

                            <div class="col-12  table-responsive">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <!-- <th scope="col" class="fw-normal"></th> -->
                                            <th scope="col" class="fw-normal">Specifications</th>
                                            <th scope="col" class="fw-normal">Details</th>
                                            <!-- <th scope="col" class="fw-normal">Chemical Class</th>
                                            <th scope="col" class="fw-normal">Light Fastness</th>
                                            <th scope="col" class="fw-normal">Characteristics</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #fff109"></span></td> -->
                                            <td>Print Software</td>
                                            <td>Ripprint / Photoprint</td>
                                            <!-- <td>Monoase</td>
                                            <td>6</td>
                                            <td>High performance standard yellow</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #fece21"></span></td> -->
                                            <td>Printing Heads</td>
                                            <td>2pcs Epson i3200A1, 2pcs Epson i1600A1</td>
                                            <!-- <td>Monoase</td>
                                            <td>6-7</td>
                                            <td>High performance green shade yellow</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f7ac12"></span></td> -->
                                            <td>Print Colors</td>
                                            <td>CMYK W</td>
                                            <!-- <td>Double Azo</td>
                                            <td>7</td>
                                            <td>High performance strong green shade</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f28e1f"></span></td> -->
                                            <td>Printing Speed</td>
                                            <td>i3200A1: 6pass 4m²/h, 8pass 2m²/h</td>
                                            <!-- <td>Disazopyrazolone</td>
                                            <td>6</td>
                                            <td>High performance yellow shade Orange</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f58025"></span></td> -->
                                            <td>Machine Functions</td>
                                            <td>All-in-one Printer & Powder Shaker, White Ink</td>
                                            <!-- <td>Benzimidazalone</td>
                                            <td>6-7</td>
                                            <td>High Performance Red Shade Orange</td> -->
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f15122"></span></td> -->
                                            <td>Working Environment</td>
                                            <td>25°C–30°C, humidity 50%–70%</td>
                                            <!-- <td>Benzimidazalone</td>
                                            <td>6</td>
                                            <td>High Performance mid Shade Orange</td> -->
                                        </tr>
                                        <!-- <tr>
                                            <td><span class="color-item" style="background: #ac0000"></span></td>
                                            <td>Leon Red M21-M</td>
                                            <td>P.R.210</td>
                                            <td>Single Azo</td>
                                            <td>6</td>
                                            <td>High Performance Red with Bluish tone</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #aa1b25"></span></td>
                                            <td>Leon Red R33-M</td>
                                            <td>P.R.122</td>
                                            <td>Quinacridone</td>
                                            <td>7-8</td>
                                            <td>High performance standard magenta</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #5f1c61"></span></td>
                                            <td>Leon Violet R10-M</td>
                                            <td>P.V.19</td>
                                            <td>Quinacridone</td>
                                            <td>7-8</td>
                                            <td>High performance red shade magenta</td>
                                        </tr> -->
                                        <!-- <tr>
                                            <td><span class="color-item" style="background: #280653"></span></td>
                                            <td>Leon Violet E4-M</td>
                                            <td>P.V.23</td>
                                            <td>Dioxazin Carbazole</td>
                                            <td>7-8</td>
                                            <td>High performance blue shade violet</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #211f6e"></span></td>
                                            <td>Leon Blue C64-M</td>
                                            <td>P.B.15.3</td>
                                            <td>Cu-Phthalocyanine</td>
                                            <td>8</td>
                                            <td>High performance standard cyan</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #00352d"></span></td>
                                            <td>Leon Green Q8-M</td>
                                            <td>P.G.7</td>
                                            <td>Cu-Phthalogreen</td>
                                            <td>7-8</td>
                                            <td>High performance standard green</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #0c5537"></span></td>
                                            <td>Leon Green Q47-M</td>
                                            <td>P.G.36</td>
                                            <td>Cu- Phthalogreen Bromination</td>
                                            <td>7</td>
                                            <td>High performance Yellower green</td>
                                        </tr> -->
                                        <!-- <tr>
                                            <td><span class="color-item" style="background: #040504"></span></td>
                                            <td>Leon Black D8-M</td>
                                            <td>P.B.7</td>
                                            <td>Oxidized Carbon Black</td>
                                            <td>8</td>
                                            <td>High performance Jet black</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #ffffff"></span></td>
                                            <td>Leon White D8-M</td>
                                            <td>P.W. TiO2.</td>
                                            <td>Titanium Di-Oxide.</td>
                                            <td>8</td>
                                            <td>Highly Opaque White</td>
                                        </tr> -->
                                    </tbody>
                                </table>

                            </div>

                            <!-- LEON-DTF 420 & 600 PRO Spec Chart -->
                            <div class="dtf-chart-panel">
                                <p class="fw-semibold mb-3">LEON-DTF 420 & 600 PRO — Technical Comparison Chart</p>
                                <img src="assets/imgs/prismane-images/GLODTF420&600PRO-chart.png" alt="LEON-DTF 420 & 600 PRO Technical Specifications Chart" class="img-fluid" style="max-height: 520px; max-width: 100%; object-fit: contain;">
                            </div>

                            <!-- <div class="mt-5 z-1 d-flex justify-content-center">
                                <a href="assets/data/Pigment-Dispersions-data.pdf"
                                    class="blog__btn about_btn text-prismane" download>Download Brochure <span><i
                                            class="fa-solid fa-arrow-right"></i></span></a>

                            </div> -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table section -->

            <!-- Service area start -->
            <section class="service__area-7 dtf-printers-benefits pt-130 white-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="service__items-7 animation_service_7">
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">High Speed<span>Production Output</span></h3>

                                    </a>
                                    <p>
                                        Printing speeds up to 22m²/h with i3200A1 printheads and up to 8-pass configuration — delivering high-volume DTF print output with consistent quality across garments, bags, shoes, and textile applications.
                                    </p>
                                    <!-- <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul> -->
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">All-in-One<span>Powder System</span> </h3>

                                    </a>
                                    <p>
                                       Integrated automatic powder shaker and powder returning system eliminates the need for separate equipment, saving production space and energy while maintaining consistent TPU powder application.
                                    </p>
                                    <!-- <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul> -->
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Intelligent Auto<span>Anti-Collision</span> </h3>

                                    </a>
                                    <p>
                                        Built-in auto anti-collision system protects printheads and media during operation, reducing equipment damage risk and maintaining uninterrupted production across high-speed print runs.
                                    </p>
                                    <!-- <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul> -->
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Multi-Printhead<span>Flexibility</span> </h3>
                                    </a>
                                    <p>
                                        Available with 2 to 8 Epson i3200A1 and i1600A1 printheads, allowing scalable production capacity to match output requirements from mid-range to large industrial operations.
                                    </p>
                                    <!-- <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul> -->
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Fluorescent ORGB <span>Capability</span></h3>

                                    </a>
                                    <p>
                                       Supports fluorescent ORGB ink configurations, expanding the printable colour gamut for vibrant, eye-catching output on sportswear, fashion apparel, and promotional textile applications.
                                    </p>
                                    <!-- <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul> -->
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Touchscreen <span>Control System</span> </h3>

                                    </a>
                                    <p>
                                       8th generation i7 processor with 15.6-inch 1920×1080 touchscreen allows all machine functions to be operated from a single interface — simplifying setup, monitoring, and production management.
                                    </p>
                                    <!-- <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service area end -->

            <!-- DTF Inks & TPU Powder section start -->
            <section class="development__area white-section">
                <div class="container g-0 line pt-130 pb-150">
                    <div class="line-3"></div>

                    <!-- Section header — mirrors existing page section style -->
                    <div class="row mb-60">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-title animation__char_come text-prismane-2">Compatible Inks &amp; Consumables</h2>
                                <h2 class="sec-title animation__char_come mandarin-title-1 text-prismane-2">配套油墨与耗材</h2>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="development__wrapper pb-0 dtf-consumables-copy">
                                <div class="development__content border-0 mb-0 pb-0">
                                    <p>Our DTF printers are optimised for use with Leon DTF inks and precision-grade TPU powder — engineered together for superior colour vibrancy, wash durability, and consistent transfer results across garment and textile applications.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Featured 2-up: Leon Inks + TPU Powder -->
                    <div class="row g-4 mb-4">
                        <!-- Leon DTF Inks -->
                        <div class="col-12 col-md-6">
                            <div class="dtf-light-card">
                                <div class="dtf-light-card__media" style="height: 300px;">
                                    <img src="assets/imgs/prismane-images/Glojet-dtf-inks-products.png" alt="Leon DTF Ink Products Range" style="max-height: 260px; max-width: 100%; object-fit: contain;">
                                </div>
                                <div class="dtf-light-card__body">
                                    <h4 class="dtf-card-title mb-2">Leon DTF Inks<span class="dtf-card-title-mn">Leon DTF 油墨</span></h4>
                                    <p style="font-size: 0.95rem;">Formulated for Epson i3200A1 and i1600A1 printheads — vibrant CMYK+White output with excellent adhesion, wash fastness, and colour stability. Available in bulk for high-volume production.</p>
                                </div>
                            </div>
                        </div>
                        <!-- TPU Hot Melt Powder -->
                        <div class="col-12 col-md-6">
                            <div class="dtf-light-card">
                                <div class="dtf-light-card__media" style="height: 300px;">
                                    <img src="assets/imgs/prismane-images/TPU-Powder-Example.png" alt="TPU Hot Melt Powder for DTF Printing" style="max-height: 260px; max-width: 100%; object-fit: contain;">
                                </div>
                                <div class="dtf-light-card__body">
                                    <h4 class="dtf-card-title mb-2">TPU Hot Melt Powder<span class="dtf-card-title-mn">TPU 热熔粉末</span></h4>
                                    <p style="font-size: 0.95rem;">The critical bonding agent in the DTF process. Applied to wet ink before curing — engineered for strong fabric adhesion, excellent wash durability, and flexibility on stretch fabrics.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- 3-product grid: DTF Inks, Dye-Sub Ink, Dye-Sub Process -->
                    <div class="row g-4">
                        <div class="col-12 col-md-4">
                            <div class="dtf-light-card">
                                <div class="dtf-light-card__media" style="height: 240px;">
                                    <img src="assets/imgs/prismane-images/DTF-Ink-products.png" alt="DTF Ink Product Range" style="max-height: 200px; max-width: 100%; object-fit: contain;">
                                </div>
                                <div class="dtf-light-card__body">
                                    <h5 class="dtf-card-title mb-2">DTF Ink Range<span class="dtf-card-title-mn">DTF 油墨系列</span></h5>
                                    <p style="font-size: 0.9rem; margin: 0;">Full CMYK, White, and fluorescent ORGB configurations for consistent, professional-grade DTF output.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="dtf-light-card">
                                <div class="dtf-light-card__media" style="height: 240px;">
                                    <img src="assets/imgs/prismane-images/Dye-Sublimation-Ink.png" alt="Dye Sublimation Ink" style="max-height: 200px; max-width: 100%; object-fit: contain;">
                                </div>
                                <div class="dtf-light-card__body">
                                    <h5 class="dtf-card-title mb-2">Dye Sublimation Inks<span class="dtf-card-title-mn">染料热升华油墨</span></h5>
                                    <p style="font-size: 0.9rem; margin: 0;">High-transfer-rate performance on polyester fabrics — sharp detail, brilliant colour, and long-lasting results for sportswear and promotional textiles.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="dtf-light-card">
                                <div class="dtf-light-card__media" style="height: 240px;">
                                    <img src="assets/imgs/prismane-images/Dye-Sublimation-Process.png" alt="Dye Sublimation Process" style="max-height: 200px; max-width: 100%; object-fit: contain;">
                                </div>
                                <div class="dtf-light-card__body">
                                    <h5 class="dtf-card-title mb-2">Sublimation Process<span class="dtf-card-title-mn">热升华工艺</span></h5>
                                    <p style="font-size: 0.9rem; margin: 0;">Step-by-step dye sublimation transfer — from digital print to permanent, vibrant colour fusion into polyester substrates.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
            <!-- DTF Inks & TPU Powder section end -->

            <!-- Portfolio area start -->
            <!-- <section class="portfolio__area-3">
                <div class="container pt-100 pb-150">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Applications</h2>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="swiper portfolio__slider-3">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="portfolio__slide-3">
                                            <a href="">
                                                <h3 class="portfolio-title-new portfolio__title-3 mt-5 mt-sm-0">Printing
                                                    Inks</h3>
                                                <h3
                                                    class="portfolio-title-new-2 portfolio__title-3 mt-5 mt-sm-0 mandarin-title-1">
                                                    印刷油墨</h3>
                                                <img src="assets/imgs/pigment-imgs/Printing Inks.jpg"
                                                    alt="Portfolio Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="portfolio__slide-3">
                                            <a href="">
                                                <h3 class="portfolio-title-new portfolio__title-3 mt-5 mt-sm-0">Paints
                                                </h3>
                                                <h3
                                                    class="portfolio-title-new-2 portfolio__title-3 mt-5 mt-sm-0 mandarin-title-1">
                                                    涂料</h3>
                                                <img src="assets/imgs/pigment-imgs/Paints.jpg" alt="Portfolio Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="portfolio__slide-3">
                                            <a href="">
                                                <h3 class="portfolio-title-new portfolio__title-3 mt-5 mt-sm-0">Plastics
                                                    & Polymer</h3>
                                                <h3
                                                    class="portfolio-title-new-2 portfolio__title-3 mt-5 mt-sm-0 mandarin-title-1">
                                                    塑料与聚合物</h3>
                                                <img src="assets/imgs/pigment-imgs/Polymers.jpg" alt="Portfolio Image">
                                            </a>
                                        </div>
                                    </div>

                                    <div class="swiper-slide">
                                        <div class="portfolio__slide-3">
                                            <a href="">
                                                <h3 class="portfolio-title-new portfolio__title-3 mt-5 mt-sm-0">
                                                    Cosmetics</h3>
                                                <h3
                                                    class="portfolio-title-new-2 portfolio__title-3 mt-5 mt-sm-0 mandarin-title-1">
                                                    塑料与聚合物</h3>
                                                <img src="assets/imgs/pigment-imgs/Cosmetics.jpg" alt="Portfolio Image">
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-pagination"></div>

                                <div class="swiper-btn">
                                    <div class="pp-prev"><i class="fa-solid fa-arrow-left"></i></div>
                                    <div class="pp-next"><i class="fa-solid fa-arrow-right"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Portfolio area end -->


            <!-- About area start -->
            <section class="about__area-3 black-section">
                <div class="container pt-140 pb-140">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="about__img-3">
                                <!-- <img src="assets/imgs/pigment-imgs/550 x 765.jpg" alt="About Thumbnail"
                                    data-speed="auto"> -->
                                <video width="100%" height="100%" autoplay muted loop>
                                    <source src="./assets/video/DTF Printer.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Who We Are</h2>
                                <h4 class="sec-title title-anim text-prismane">YOUR RELIABLE DTF PRINTERS PARTNER
                                </h4>
                                <h4 class="sec-title title-anim mandarin-title-1 text-prismane">您可靠的DTF打印机合作伙伴</h4>
                            </div>
                            <div class="sec-text-wrapper">
                                <div class="sec-text text-anim">
                                    <p>
                                      We supply industrial-grade DTF printers engineered for high-speed, high-quality direct-to-film printing across a wide range of garment and textile applications. Our printer range — from the compact LEON-DTF 420 & 600 PRO to the large-format LEON-DTF 900MAX — combines Epson i3200 and i1600 printhead technology with all-in-one powder shaker systems, intelligent auto anti-collision protection, and full touchscreen control. Built for demanding production environments, our DTF printers deliver consistent, professional-grade output across every run.
                                    </p>
                                    <!-- <div class=" z-1">
                                        <a href="assets/data/Pigment-Dispersions-data.pdf"
                                            class="blog__btn about_btn text-prismane" download>Download Brochure
                                            <span><i class="fa-solid fa-arrow-right"></i></span></a>

                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About area end -->

            <!-- Medium Cards area start -->
            <section class="portfolio__service service-v5 pt-140 pb-140 bg-light bg-img-none white-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                            <h2 class="sec-title animation__char_come text-prismane-2" style="max-width:none">PROVEN GAINS</h2>
                            <span class="mandarin-title-1 animation__char_come text-prismane-2" style="max-width:none">已证实的收益</span>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                            <div class="sec-text">
                                <p>
                                    Our DTF printers are engineered to deliver high-speed production output, consistent print quality, and efficient operation across garment and textile applications. Built with industrial-grade components and intelligent automation, they help businesses maximise throughput, reduce downtime, and lower overall production costs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio__service-list">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="portfolio__service-item">
                                    <a href="">
                                        <h3 class="ps-title">Higher Production Speed</h3>
                                        <p>
                                           Printing speeds up to 22m²/h with Epson i3200A1 printheads and multi-pass configurations enable high-volume output — reducing production cycle time and increasing daily throughput significantly.
                                        </p>
                                        <!-- <ul>
                                            <li>+ WordPress</li>
                                            <li>+ Python</li>
                                            <li>+ PHP & Laravel</li>
                                        </ul> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="portfolio__service-item">
                                    <a href="">
                                        <h3 class="ps-title"> Reduced Equipment Costs</h3>
                                        <p>
                                            All-in-one printer and powder shaker body eliminates the need for separate machines, reducing equipment investment, floor space requirements, and overall operational complexity for DTF production setups.
                                        </p>
                                        <!-- <ul>
                                            <li>+ WordPress</li>
                                            <li>+ Python</li>
                                            <li>+ PHP & Laravel</li>
                                        </ul> -->
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="portfolio__service-item">
                                    <a href="">
                                        <h3 class="ps-title">Reliable Print Consistency</h3>
                                        <p>
                                            Auto anti-collision system, low ink alarm protection, and stable printhead performance ensure uninterrupted production runs with consistent print quality — minimising reprints, waste, and maintenance downtime.
                                        </p>
                                        <!-- <ul>
                                            <li>+ WordPress</li>
                                            <li>+ Python</li>
                                            <li>+ PHP & Laravel</li>
                                        </ul> -->
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Medium Cards area start -->

            <!-- Story area start -->
            <!-- <section class="story__area bg-light">
                <div class="container g-0 line pt-140">
                    <span class="line-3"></span>
                    <div class="sec-title-wrapper">
                    

                        <div class="row">
                            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                                <h2 class="sec-sub-title title-anim">Pigment Dispersions</h2>
                                <h3 class="sec-title title-anim">About</h3> <br>
                                <h3 class="sec-title title-anim mandarin-title-1">关于</h3>
                            </div>
                            <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                                <div class="story__text">
                                    <p>
                                        Our pigment dispersions are developed to deliver consistent colour strength,
                                        fine particle stability, and reliable performance across a wide range of ink,
                                        coating, and textile applications. Engineered for controlled processing and
                                        compatibility, they support efficient production while maintaining uniform
                                        quality from batch to batch.
                                    </p>
                                    <p>
                                        Pigment dispersions designed for dependable colour accuracy, processing
                                        stability, and smooth integration into modern formulations. Built to perform
                                        under real production conditions, they help manufacturers achieve consistent
                                        results, improved efficiency, and reduced variability across applications.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                            <div class="story__img-wrapper">
                                <img src="assets/imgs/pigment-imgs/300 X 415.jpg" alt="Story Thumbnail" class="w-100">
                            </div>
                        </div>
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                            <div class="story__img-wrapper img-anim">
                                <img src="assets/imgs/pigment-imgs/520 X 700.jpg" alt="Story Thumbnail"
                                    data-speed="auto">
                            </div>
                        </div>
                        <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                            <div class="story__img-wrapper">
                                <img src="assets/imgs/pigment-imgs/230 X 140.jpg" alt="Story Thumbnail">
                                <img src="assets/imgs/pigment-imgs/410 X 330.jpg" alt="Story Thumbnail">
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->
            <!-- Story area end -->



            <!-- FAQ area start -->
            <section class="faq__area-6 white-section">
                <div class="container g-0 line pt-130 pb-140">
                    <div class="line-3"></div>

                    <!-- <div class="row">
                        <div class="col-xxl-12 ">
                            <div class="masked-title-holder position-relative">
                                <video autoplay muted loop preload poster="" class="masked-video">
                                    <source src="./assets/video/top 1.webm" />
                                    
                                </video>
                                <h2 class="display-1 masked-title" style="">FAQ <br style="display: block"><span class="masked-title-mandarin">常见问题解答</span></h2>
                                
                            </div>
                                <p class="mb-5">Frequently asked question (FAQ) <br> pages to find answars.</p>
                        </div>
                    </div> -->

                    <div class="row d-flex flex-column align-items-center">
                        <div class="col-xxl-12">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-title-2 animation__char_come text-prismane-2">FAQ</h2>
                                <span class="animation__char_come mandarin-title-1 text-prismane-2">常见问题解答</span>
                                <!-- <p class="">Frequently asked question (FAQ) <br> pages to find answars.</p> -->
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="faq__list-6">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button  pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Q1: What is DTF printing and what can it print on?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>DTF (Direct to Film) printing transfers designs onto fabric via a special film and heat press process. Our DTF printers are suitable for printing on cotton, polyester, nylon, spandex, blended fabrics, bags, shoes, and a wide range of garment and textile applications.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button  collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                   Q2: What printhead options are available in your DTF printers?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Our DTF printers are equipped with Epson i3200A1 and i1600A1 printheads. The LEON-DTF 900MAX supports 4–8 printheads for high-volume production, while the LEON-DTF 420 & 600 PRO comes with 2 printheads for mid-range operations.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button  collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Q3: Do the printers include a powder shaker system?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Yes. Both the LEON-DTF 900MAX and LEON-DTF 420 & 600 PRO feature an all-in-one integrated powder shaker system with automatic powder returning — eliminating the need for separate equipment and saving production space and energy.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button  collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Q4: What print software is compatible with your DTF printers?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Our DTF printers are compatible with Ripprint and Photoprint software, supporting CMYK W colour printing with flexible pass and speed configurations to suit different production requirements.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button  collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Q5: What are the working environment requirements for the DTF printers?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>DTF printers should be operated in an environment maintained at 25°C–30°C with humidity between 50%–70%. Stable temperature and humidity conditions ensure consistent ink performance, powder adhesion, and printhead reliability.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </section>
            <!-- FAQ area end -->

        </main>
        <script>
            window.addEventListener('DOMContentLoaded', function() {
                const lion = document.querySelector('.floating-lion');
                const footerSection = document.querySelector('.footer__area');
                const lionImage = lion ? lion.querySelector('.floating-lion__image') : null;
                const sections = Array.from(document.querySelectorAll('main section.white-section, main section.black-section'));
                const whiteSections = Array.from(document.querySelectorAll('main .white-section'));

                if (!lion || !lionImage || !footerSection || whiteSections.length === 0 || sections.length === 0) return;

                let ticking = false;

                const clamp = function(value, min, max) {
                    return Math.min(Math.max(value, min), max);
                };

                const updateLion = function() {
                    const viewportHeight = window.innerHeight || document.documentElement.clientHeight;
                    const lionProbeY = viewportHeight * 0.55;
                    const footerRect = footerSection.getBoundingClientRect();

                    let activeSection = null;
                    let activeRect = null;

                    for (const section of sections) {
                        const rect = section.getBoundingClientRect();

                        if (rect.height <= 0) {
                            continue;
                        }

                        if (rect.top <= lionProbeY && rect.bottom >= lionProbeY) {
                            activeSection = section;
                            activeRect = rect;
                            break;
                        }
                    }

                    const footerReached = footerRect.top <= lionProbeY;
                    const shouldShowLion = Boolean(activeSection) &&
                        activeSection.classList.contains('white-section') &&
                        !footerReached;

                    lion.classList.toggle('is-active', shouldShowLion);

                    if (shouldShowLion) {
                        const activeProgress = clamp(
                            (lionProbeY - activeRect.top) / Math.max(activeRect.height, 1),
                            0,
                            1
                        );
                        const shift = (activeProgress - 0.5) * 36;
                        const scale = 1 + (0.018 * (1 - Math.abs((activeProgress - 0.5) * 2)));
                        lionImage.style.setProperty('--lion-shift', shift.toFixed(2) + 'px');
                        lionImage.style.setProperty('--lion-scale', scale.toFixed(3));
                    } else {
                        lionImage.style.setProperty('--lion-shift', '0px');
                        lionImage.style.setProperty('--lion-scale', '1');
                    }

                    ticking = false;
                };

                const requestLionUpdate = function() {
                    if (ticking) {
                        return;
                    }

                    ticking = true;
                    window.requestAnimationFrame(updateLion);
                };

                window.addEventListener('scroll', requestLionUpdate, {
                    passive: true
                });
                window.addEventListener('resize', requestLionUpdate);
                window.addEventListener('load', requestLionUpdate);
                window.addEventListener('prismane:smooth-update', requestLionUpdate);
                window.addEventListener('prismane:smoother-ready', requestLionUpdate);

                if (typeof ScrollTrigger !== 'undefined' && ScrollTrigger.addEventListener) {
                    ScrollTrigger.addEventListener('refresh', requestLionUpdate);
                }

                updateLion();
            });
        </script>
        <?php include "footer.php"; ?>
