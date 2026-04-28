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

            <!-- Hero area start -->
            <section class="hero__area hero-product d-flex align-items-center black-section">
                <div class="container">
                    <div class="row flex-column flex-lg-row gap-5 gap-lg-0">
                        <div class="col-12 col-lg-12 d-flex align-items-center">
                            <div class="hero__content animation__hero_one pt-0">
                                <div
                                    class="hero__title-wrapper m-0 d-flex flex-column gap-3 justify-content-center align-items-start">
                                    <h1 class="sec-title text-white text-prismane">Pigment Dispersions</h1>
                                    <span class="sec-title text-white mandarin-title-1 text-prismane">色素分散体</span>
                                    <p class="text-white">LEON Water-Based Pigment Preparations — engineered for digital ink performance. A specially developed range of water-based pigment dispersions formulated for textiles, flexible packaging, and the graphic industry.</p>
                                    <div class="z-1">
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
                    </div>
                </div>
            </section>
            <!-- Hero area end -->

            <section style="background: transparent; position: absolute; width: 100%; z-index: 99; top: 420px; " class="wave-path-prismane">
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
                                <h2 class="sec-title animation__char_come text-prismane-2">What Are LEON Pigment Dispersions?</h2> <br>
                                <h2 class="sec-title animation__char_come mandarin-title-1 text-prismane-2">我们的色素分散体系列</h2>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="development__wrapper pb-0">
                                <div class="development__content border-0 mb-0 pb-0">
                                    <p>
                                        We offer a specially developed range of water-based pigment dispersions designed for digital inks across two distinct industries — textile printing and flexible packaging / graphic industry.
                                    </p>
                                    <p>
                                        Each series is precision-engineered to deliver high performance, consistent colour, and excellent light fastness — compatible with the most widely used digital printing systems available today.
                                    </p>
                                    <p>
                                        <b>LEON – U Series</b><br><br>
                                        Specially developed range of water-based pigment dispersions for digital inks for textiles. Suitable for inks for wide format, DTG & DTF Printers.
                                    </p>
                                    <p>
                                        <b>LEON – M Series</b><br><br>
                                        Specially developed range of water-based pigment dispersions for digital inks for flexible packaging / Graphic Industry. Our products are compatible with most of the commonly used binders for flexible packaging inks — giving formulators the confidence to integrate LEON M Series dispersions into their existing ink systems without compatibility concerns.
                                    </p>
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
                                <h3 class="sec-title title-anim pb-2 text-prismane">Full Product Range — U Series</h3>
                                <h3 class="sec-title title-anim mandarin-title-1 text-prismane">颜料分散体</h3>
                                <span class="text-white fs-1">LEON - U Series</span> &nbsp; &nbsp;
                                <span class="text-white fs-1 mandarin-title-2">LEON - U系列</span>
                            </div>

                            <div class="col-12 table-responsive">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <th scope="col" class="fw-normal"></th>
                                            <th scope="col" class="fw-normal">Product</th>
                                            <th scope="col" class="fw-normal">Colour Index</th>
                                            <th scope="col" class="fw-normal">Chemical Class</th>
                                            <th scope="col" class="fw-normal">Light Fastness</th>
                                            <th scope="col" class="fw-normal">Characteristics</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="color-item" style="background: #fff109"></span></td>
                                            <td>Leon Yellow N5-U</td>
                                            <td>P.Y.74</td>
                                            <td>Monoazo</td>
                                            <td>6</td>
                                            <td>High performance standard yellow</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #fece21"></span></td>
                                            <td>Leon Yellow R49-U</td>
                                            <td>P.Y.138</td>
                                            <td>Monoazo</td>
                                            <td>6–7</td>
                                            <td>High performance green shade yellow</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #f7ac12"></span></td>
                                            <td>Leon Yellow E66-U</td>
                                            <td>P.Y.155</td>
                                            <td>Double Azo</td>
                                            <td>7</td>
                                            <td>High performance strong green shade</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #f28e1f"></span></td>
                                            <td>Leon Orange E4-U</td>
                                            <td>P.O.13</td>
                                            <td>Disazopyrazolone</td>
                                            <td>6</td>
                                            <td>High performance yellow shade Orange</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #fa5e21"></span></td>
                                            <td>Leon Orange E5-U</td>
                                            <td>P.O.34</td>
                                            <td>Disazopyrazolone</td>
                                            <td>6</td>
                                            <td>High performance mid shade Orange</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #f58025"></span></td>
                                            <td>Leon Orange C47-U</td>
                                            <td>P.O.36</td>
                                            <td>Benzimidazalone</td>
                                            <td>6–7</td>
                                            <td>High Performance Red Shade Orange</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #ac0000"></span></td>
                                            <td>Leon Red M21-U</td>
                                            <td>P.R.210</td>
                                            <td>Single Azo</td>
                                            <td>6</td>
                                            <td>High Performance Red with Bluish tone</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #aa1b25"></span></td>
                                            <td>Leon Red R33-U</td>
                                            <td>P.R.122</td>
                                            <td>Quinacridone</td>
                                            <td>7–8</td>
                                            <td>High performance standard magenta</td>
                                        </tr>
                                        <tr>
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
                                            <td>Dioxazin Carbazole</td>
                                            <td>7–8</td>
                                            <td>High performance blue shade violet</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #211f6e"></span></td>
                                            <td>Leon Blue C64-U</td>
                                            <td>P.B.15.3</td>
                                            <td>Cu-Phthalocyanine</td>
                                            <td>8</td>
                                            <td>High performance standard cyan</td>
                                        </tr>
                                        <tr>
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
                                            <td>Cu-Phthalogreen Bromination</td>
                                            <td>7</td>
                                            <td>High performance Yellower green</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #040504"></span></td>
                                            <td>Leon Black D8-U</td>
                                            <td>P.B.7</td>
                                            <td>Oxidized Carbon Black</td>
                                            <td>8</td>
                                            <td>High performance Jet black</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #ffffff"></span></td>
                                            <td>Leon White D8-U</td>
                                            <td>P.W. TiO2.</td>
                                            <td>Titanium Di-Oxide.</td>
                                            <td>8</td>
                                            <td>Highly Opaque White</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div class="sec-title-wrapper mt-5">
                                <span class="text-white fs-1">LEON - M Series</span> &nbsp; &nbsp;
                                <span class="text-white fs-1 mandarin-title-2">LEON - M系列</span>
                            </div>

                            <div class="col-12 table-responsive">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <th scope="col" class="fw-normal"></th>
                                            <th scope="col" class="fw-normal">Product</th>
                                            <th scope="col" class="fw-normal">Colour Index</th>
                                            <th scope="col" class="fw-normal">Chemical Class</th>
                                            <th scope="col" class="fw-normal">Light Fastness</th>
                                            <th scope="col" class="fw-normal">Characteristics</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="color-item" style="background: #fff109"></span></td>
                                            <td>Leon Yellow N5-M</td>
                                            <td>P.Y.74</td>
                                            <td>Monoazo</td>
                                            <td>6</td>
                                            <td>High performance standard yellow</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #fece21"></span></td>
                                            <td>Leon Yellow R49-M</td>
                                            <td>P.Y.138</td>
                                            <td>Monoazo</td>
                                            <td>6–7</td>
                                            <td>High performance green shade yellow</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #f7ac12"></span></td>
                                            <td>Leon Yellow E66-M</td>
                                            <td>P.Y.155</td>
                                            <td>Double Azo</td>
                                            <td>7</td>
                                            <td>High performance strong green shade</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #f28e1f"></span></td>
                                            <td>Leon Orange E4-M</td>
                                            <td>P.O.13</td>
                                            <td>Disazopyrazolone</td>
                                            <td>6</td>
                                            <td>High performance yellow shade Orange</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #f58025"></span></td>
                                            <td>Leon Orange C47-M</td>
                                            <td>P.O.36</td>
                                            <td>Benzimidazalone</td>
                                            <td>6–7</td>
                                            <td>High Performance Red Shade Orange</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #f15122"></span></td>
                                            <td>Leon Orange C75-M</td>
                                            <td>P.O.64</td>
                                            <td>Benzimidazalone</td>
                                            <td>6</td>
                                            <td>High Performance mid Shade Orange</td>
                                        </tr>
                                        <tr>
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
                                            <td>7–8</td>
                                            <td>High performance standard magenta</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #5f1c61"></span></td>
                                            <td>Leon Violet R10-M</td>
                                            <td>P.V.19</td>
                                            <td>Quinacridone</td>
                                            <td>7–8</td>
                                            <td>High performance red shade magenta</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #280653"></span></td>
                                            <td>Leon Violet E4-M</td>
                                            <td>P.V.23</td>
                                            <td>Dioxazin Carbazole</td>
                                            <td>7–8</td>
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
                                            <td>7–8</td>
                                            <td>High performance standard green</td>
                                        </tr>
                                        <tr>
                                            <td><span class="color-item" style="background: #0c5537"></span></td>
                                            <td>Leon Green Q47-M</td>
                                            <td>P.G.36</td>
                                            <td>Cu-Phthalogreen Bromination</td>
                                            <td>7</td>
                                            <td>High performance Yellower green</td>
                                        </tr>
                                        <tr>
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
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Table section -->

            <!-- Service area start -->
            <section class="service__area-7 pt-130 white-section">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="service__items-7 animation_service_7">
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Textile Digital <span>Inks</span></h3>
                                    </a>
                                    <p>
                                        U Series is specially developed for textile digital inks and is suitable for inks for wide format, DTG & DTF printers.
                                    </p>
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Flexible Packaging <span>& Graphic Industry</span></h3>
                                    </a>
                                    <p>
                                        M Series is specially developed for digital inks for flexible packaging / graphic industry applications.
                                    </p>
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Consistent Colour <span>Performance</span></h3>
                                    </a>
                                    <p>
                                        Each series is precision-engineered to deliver high performance and consistent colour across digital ink applications.
                                    </p>
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Excellent Light <span>Fastness</span></h3>
                                    </a>
                                    <p>
                                        The pigment dispersions are developed to deliver excellent light fastness for dependable digital ink performance.
                                    </p>
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Printer System <span>Compatibility</span></h3>
                                    </a>
                                    <p>
                                        Designed to be compatible with the most widely used digital printing systems available today.
                                    </p>
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Binder <span>Compatibility</span></h3>
                                    </a>
                                    <p>
                                        M Series products are compatible with most of the commonly used binders for flexible packaging inks.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Service area end -->

            <!-- About area start -->
            <section class="about__area-3 black-section">
                <div class="container pt-140 pb-140">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="about__img-3">
                                <video width="100%" height="100%" autoplay muted loop>
                                    <source src="./assets/video/Pigment-Dispersions.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Series Comparison</h2>
                                <h4 class="sec-title title-anim text-prismane">U SERIES AND M SERIES AT A GLANCE</h4>
                                <h4 class="sec-title title-anim mandarin-title-1 text-prismane">系列概览</h4>
                            </div>
                            <div class="sec-text-wrapper">
                                <div class="sec-text text-anim">
                                    <p>
                                        U Series is designed for textile digital inks, with printer compatibility for wide format, DTG, and DTF applications.
                                    </p>
                                    <p>
                                        M Series is designed for flexible packaging / graphic industry applications, with compatibility for flexible packaging ink systems and commonly used binders.
                                    </p>
                                    <p>
                                        Both series have a total of 14 products. Upcoming additions include white dispersions for U Series and FDA approved dispersions for M Series.
                                    </p>
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
                            <h2 class="sec-title animation__char_come text-prismane-2" style="max-width:none">ADDITIONAL INFORMATION</h2>
                            <span class="mandarin-title-1 animation__char_come text-prismane-2" style="max-width:none">附加信息</span>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                            <div class="sec-text">
                                <p>
                                    The pigment dispersion brochure also highlights company certifications, upcoming developments, and technical guidance for finding the right dispersion for your ink system.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio__service-list">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="portfolio__service-item">
                                    <a href="">
                                        <h3 class="ps-title">Upcoming Developments</h3>
                                        <p>
                                            U Series includes upcoming white dispersions for digital inks, while M Series includes a new range of FDA approved pigment dispersions for flexible packaging inks.
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="portfolio__service-item">
                                    <a href="">
                                        <h3 class="ps-title">Company Certifications</h3>
                                        <p>
                                            ISO 45001:2018 for Occupational Health & Safety, ISO 9001:2015 for Quality Management System, and ISO 14004:2015 for Environmental Management.
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="portfolio__service-item">
                                    <a href="">
                                        <h3 class="ps-title">Technical Team Support</h3>
                                        <p>
                                            Whether you need dispersions for textile digital printing or flexible packaging inks, the technical team helps find the exact match for formulation requirements.
                                        </p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Medium Cards area start -->

            <!-- FAQ area start -->
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
                                                <button class="accordion-button pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Q1: What are LEON pigment dispersions?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>LEON pigment dispersions are a specially developed range of water-based pigment dispersions designed for digital inks across textile printing and flexible packaging / graphic industry applications.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Q2: What is U Series used for?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>U Series is specially developed for digital inks for textiles and is suitable for inks for wide format, DTG & DTF printers.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Q3: What is M Series used for?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>M Series is specially developed for digital inks for flexible packaging / graphic industry and is compatible with most commonly used binders for flexible packaging inks.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Q4: How do I choose the right pigment dispersion for my ink system?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Whether you need dispersions for textile digital printing or flexible packaging inks, the technical team will help find the exact match for your formulation requirements.</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Q5: Are white and black dispersions included on the page?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Yes. Black and White rows have been retained in both technical tables on this page, as requested, while keeping the rest of the content aligned to the provided PDF.</p>
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
