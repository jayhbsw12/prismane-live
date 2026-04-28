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

    .dtf-showcase-card {
        background: #111111;
        border: 1px solid rgba(201, 243, 29, 0.18);
        border-radius: 24px;
        padding: 24px;
        height: 100%;
    }

    .dtf-showcase-media {
        height: 420px;
        display: flex;
        align-items: center;
        justify-content: center;
        overflow: hidden;
        border-radius: 18px;
        background: #0b0b0b;
    }

    .dtf-showcase-media img {
        width: 100%;
        height: 100%;
        object-fit: contain;
        object-position: center;
        display: block;
    }

    @media (max-width: 767.98px) {
        .dtf-showcase-media {
            height: 300px;
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
</style>
<?php include "header.php"; ?>

<div id="smooth-wrapper">
    <div class="floating-lion" aria-hidden="true">
        <div class="floating-lion__image"></div>
    </div>
    <div id="smooth-content">
        <main>

            <section class="hero__area hero-product d-flex align-items-center black-section">
                <div class="container">
                    <div class="row">
                        <div class="col-12 d-flex align-items-center">
                            <div class="hero__content animation__hero_one pt-0">
                                <div class="hero__title-wrapper m-0 d-flex flex-column gap-3 justify-content-center align-items-start">
                                    <h1 class="sec-title text-white text-prismane">DTF Inks</h1>
                                    <span class="sec-title text-white mandarin-title-1 text-prismane">DTF 油墨</span>
                                    <p class="text-white">
                                        Leon DTF Ink - print on almost any fabric, effortlessly. Precision-formulated for performance, it delivers vibrant colour, quick drying, ultra-fine particle stability, and dependable compatibility with Epson i3200, i1600, and XP600 printheads.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section style="background: transparent; position: absolute; width: 100%; z-index: 99; top: 420px;" class="wave-path-prismane">
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

            <section class="development__area white-section">
                <div class="container g-0 line pt-130 pb-120">
                    <div class="line-3"></div>
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-title animation__char_come text-prismane-2">Our DTF Inks Range</h2><br>
                                <h2 class="sec-title animation__char_come mandarin-title-1 text-prismane-2">我们的 DTF 油墨系列</h2>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="development__wrapper pb-0">
                                <div class="development__content border-0 mb-0 pb-0">
                                    <p>
                                        <b>What is Leon DTF Ink?</b><br><br>
                                        Leon DTF Ink is suitable for printing on cotton, cotton linen, silk, polyester, nylon, spandex, and blended fabrics. It is widely used for T-shirts, denim, hoodies, decorative fabrics, wall coverings, curtains, fabric sofas, bedding, stationery, and kids school items.
                                    </p>
                                    <p>
                                        <b>Built for Full Production Coverage</b><br><br>
                                        From everyday garments to home furnishings and specialty products, Leon DTF Ink is built to cover the full range of production needs while staying compatible with Epson i3200, i1600, and XP600 printheads.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about__area-3 black-section">
                <div class="container pt-20 pb-140">
                    <div class="row">
                        <div class="col-12">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Technical Data</h2>
                                <h3 class="sec-title title-anim pb-2 text-prismane">DTF Inks</h3>
                                <h3 class="sec-title title-anim mandarin-title-1 text-prismane">DTF 油墨</h3>
                                <span class="text-white fs-1">Technical Highlights</span>&nbsp;&nbsp;
                                <span class="text-white fs-1 mandarin-title-2">技术亮点</span>
                            </div>

                            <div class="col-12 table-responsive">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <th scope="col" class="fw-normal">Specification</th>
                                            <th scope="col" class="fw-normal">Detail</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>Ink Model</td><td>Leon DTF</td></tr>
                                        <tr><td>Ink Volume</td><td>1 kg / Bottle</td></tr>
                                        <tr><td>Colours Available</td><td>C, M, Y, K, WG, WP</td></tr>
                                        <tr><td>Compatible Printheads</td><td>Epson i3200 / i1600 / XP600</td></tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="sec-title-wrapper mt-5">
                                <span class="text-white fs-1">DTF Ink Product Range</span>&nbsp;&nbsp;
                                <span class="text-white fs-1 mandarin-title-2">DTF 油墨产品系列</span>
                            </div>

                            <div class="col-12 table-responsive">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <th scope="col" class="fw-normal"></th>
                                            <th scope="col" class="fw-normal">Colour</th>
                                            <th scope="col" class="fw-normal">Product Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td><span class="color-item" style="background: #00AEEF"></span></td><td>Cyan</td><td>Leon DTF Cyan</td></tr>
                                        <tr><td><span class="color-item" style="background: #EC008C"></span></td><td>Magenta</td><td>Leon DTF Magenta</td></tr>
                                        <tr><td><span class="color-item" style="background: #FFF200"></span></td><td>Yellow</td><td>Leon DTF Yellow</td></tr>
                                        <tr><td><span class="color-item" style="background: #231F20"></span></td><td>Black</td><td>Leon DTF Black</td></tr>
                                        <tr><td><span class="color-item" style="background: #ffffff; border: 1px solid #555;"></span></td><td>White</td><td>Leon Ink White</td></tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="sec-title-wrapper mt-5">
                                <span class="text-white fs-1">Compatible Printers</span>&nbsp;&nbsp;
                                <span class="text-white fs-1 mandarin-title-2">兼容打印头</span>
                            </div>

                            <div class="col-12 table-responsive">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <th scope="col" class="fw-normal">Printhead</th>
                                            <th scope="col" class="fw-normal">Compatibility</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr><td>Epson i3200</td><td>Fully Compatible</td></tr>
                                        <tr><td>Epson i1600</td><td>Fully Compatible</td></tr>
                                        <tr><td>Epson XP600</td><td>Fully Compatible</td></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about__area-3 black-section">
                <div class="container pt-0 pb-140">
                    <div class="row align-items-center g-5">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="dtf-showcase-card">
                                <div class="dtf-showcase-media">
                                    <img src="assets/imgs/inks/DTF-Inks-Updated.webp" alt="Leon DTF ink bottles">
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Product Showcase</h2>
                                <h3 class="sec-title title-anim text-prismane">Made for Real Production Environments</h3>
                                <h3 class="sec-title title-anim mandarin-title-1 text-prismane">适用于真实生产场景</h3>
                            </div>
                            <div class="sec-text-wrapper">
                                <div class="sec-text text-anim">
                                    <p>Leon DTF Ink is formulated for smooth colour laydown, broad fabric coverage, and dependable production speed across garment, home textile, and specialty print workflows.</p>
                                    <ul class="text-white ps-4 d-flex flex-column gap-2">
                                        <li>T-shirts, hoodies, denim, and jeans</li>
                                        <li>Silk, cotton linen, polyester, nylon, and spandex</li>
                                        <li>Blended fabrics and decorative fabrics</li>
                                        <li>Wall coverings, curtains, fabric sofas, and bedding</li>
                                        <li>Stationery and kids school items</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="service__area-7 pt-130 white-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="service__items-7 animation_service_7">
                                <div class="service__item-7">
                                    <a href=""><h3 class="service__title-7 text-prismane-2">No Clogged <span>Heads</span></h3></a>
                                    <p>Super filtration technology reduces clogging risk and helps keep your machine running at full efficiency with less downtime.</p>
                                </div>
                                <div class="service__item-7">
                                    <a href=""><h3 class="service__title-7 text-prismane-2">Quick Drying <span>Time</span></h3></a>
                                    <p>Leon DTF Ink dries quickly to improve production speed, reduce waiting time between prints, and support faster workflow turnover.</p>
                                </div>
                                <div class="service__item-7">
                                    <a href=""><h3 class="service__title-7 text-prismane-2">Wider Colour <span>Gamut</span></h3></a>
                                    <p>Denser and brighter colours create vivid prints that stand out clearly across every transfer and fabric type.</p>
                                </div>
                                <div class="service__item-7">
                                    <a href=""><h3 class="service__title-7 text-prismane-2">User-Friendly <span>Handling</span></h3></a>
                                    <p>The formulation is designed for smooth, consistent day-to-day use, helping minimize operator effort and routine technical issues.</p>
                                </div>
                                <div class="service__item-7">
                                    <a href=""><h3 class="service__title-7 text-prismane-2">Ultra-Fine <span>Particles</span></h3></a>
                                    <p>Evenly distributed particles below 180nm (&lt;0.2 um) support precise, high-resolution output with excellent print consistency.</p>
                                </div>
                                <div class="service__item-7">
                                    <a href=""><h3 class="service__title-7 text-prismane-2">Broad Printhead <span>Compatibility</span></h3></a>
                                    <p>Built specifically for Epson i3200, i1600, and XP600 systems so it fits cleanly into standard DTF production environments.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="about__area-3 black-section">
                <div class="container pt-140 pb-140">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="about__img-3">
                                <video width="100%" height="100%" autoplay muted loop>
                                    <source src="./assets/video/DTF-Inks.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">White Ink Performance</h2>
                                <h4 class="sec-title title-anim text-prismane">Leon DTF White Ink - The Foundation of Every Great Print</h4>
                                <h4 class="sec-title title-anim mandarin-title-1 text-prismane">Leon 白墨 - 每一张优秀印花的基础</h4>
                            </div>
                            <div class="sec-text-wrapper">
                                <div class="sec-text text-anim">
                                    <p>White ink is the backbone of every DTF print because it creates the base layer that makes colours pop on dark and coloured fabrics. Leon DTF White Ink is precision-formulated for superior coverage, stable suspension, and seamless compatibility with all Leon colour inks.</p>
                                    <p>It delivers ultra whiteness with high hiding power, uniform dispersion, excellent suspension capacity, stable performance, good levelling, and zero unwanted ink penetration.</p>
                                    <p>Contact our team for samples, pricing, and technical support tailored to your printhead and production setup.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="faq__area-6 white-section">
                <div class="container g-0 line pt-130 pb-140">
                    <div class="line-3"></div>
                    <div class="row d-flex flex-column align-items-center">
                        <div class="col-xxl-12">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-title-2 animation__char_come text-prismane-2">FAQ</h2>
                                <span class="animation__char_come mandarin-title-1 text-prismane-2">常见问题解答</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xxl-12">
                                <div class="faq__list-6">
                                    <div class="accordion" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                    Q1: What is Leon DTF Ink used for?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Leon DTF Ink is used for printing on cotton, cotton linen, silk, polyester, nylon, spandex, and blended fabrics across garments, home textiles, and specialty products.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    Q2: Which printheads are compatible with Leon DTF Ink?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Leon DTF Ink is compatible with Epson i3200, Epson i1600, and Epson XP600 printheads.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    Q3: What are the main performance benefits?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>The formulation is built around super filtration for cleaner printhead performance, quick drying for better throughput, brighter colour output, and ultra-fine particles below 180nm for precise high-resolution printing.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                                    Q4: Why is Leon DTF White Ink important?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Leon DTF White Ink creates the bright base layer that allows colours to stand out on dark and coloured fabrics. It offers ultra whiteness, high hiding power, uniform dispersion, strong suspension stability, and no unwanted ink penetration.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed pe-5" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                                    Q5: Which colours are available in the Leon DTF range?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>The range includes Cyan, Magenta, Yellow, Black, and White, listed as Leon DTF Cyan, Leon DTF Magenta, Leon DTF Yellow, Leon DTF Black, and Leon Ink White.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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
