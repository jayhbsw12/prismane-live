<?php include "header-top.php"; ?>
<meta name="robots" content="noindex,nofollow">

<style>
    .hero-padding-remove {
        padding-top: 0px !important;
    }
</style>
<?php include "header.php"; ?>

<div id="smooth-wrapper">
    <div id="smooth-content">
        <main>

            <!-- Hero area start -->
            <section class="hero__area hero-product d-flex align-items-center">
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
                                    <h1 class="sec-title text-white text-prismane">Sublimation Dispersions</h1>
                                    <span class="sec-title text-white mandarin-title-1 text-prismane">升华分散体</span>
                                    <p class="text-white">High-performance water-based disperse dye dispersions engineered for optimum light fastness, wash fastness, alkali perspiration fastness, and crock fastness. Formulated with ultra-fine particle stability across Yellow, Cyan, Magenta, and Black — delivering consistent, vibrant colour transfer in dye sublimation ink manufacturing applications.</p>
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
            <section class="development__area">
                <div class="container g-0 line pt-130 pb-150">
                    <div class="line-3"></div>
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-title animation__char_come text-prismane-2">Our Sublimation Dispersions Range
                                </h2> <br>
                                <h2 class="sec-title animation__char_come mandarin-title-1 text-prismane-2">我们的色素分散体系列
                                </h2>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="development__wrapper pb-0">
                                <div class="development__content border-0 mb-0 pb-0">
                                    <p>
                                        <b>Specifications A</b> <br>
                                        <b> 规格 A系列</b>
                                        <br><br> Water-based disperse dye dispersions with viscosity up to 10 Cps, solid content 30–35%, surface tension 45–55 mN/m, and particle size (D90) up to 195nm for Yellow — engineered for optimum sublimation ink performance.
                                    </p>
                                    <p>
                                        <b>Specifications B </b> <br>
                                        <b> 规格 B系列</b>
                                        <br><br> Advanced water-based disperse dye dispersions with viscosity up to 20 Cps, solid content 25–35%, surface tension 35–45 mN/m, and finer particle size (D90) up to 195nm — delivering superior dispersion stability and fastness properties.
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
                </div>
            </section>
            <!-- Development area end -->

            <!-- Table section -->
            <section class="about__area-3">
                <div class="container pt-140 pb-140">
                    <div class="row">
                        <div class="col-12">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Technical Data</h2>
                                <h3 class="sec-title title-anim pb-2 text-prismane">Sublimation Dispersions</h3>
                                <h3 class="sec-title title-anim mandarin-title-1 text-prismane">升华分散体</h3>
                                <span class="text-white fs-1">Specifications A</span> &nbsp; &nbsp;
                                <span class="text-white fs-1 mandarin-title-2">规格 A</span>
                            </div>

                            <div class="col-12  table-responsive">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <!-- <th scope="col" class="fw-normal"></th> -->
                                            <th scope="col" class="fw-normal">Parameters:</th>
                                            <th scope="col" class="fw-normal">YELLOW</th>
                                            <th scope="col" class="fw-normal">CYAN</th>
                                            <th scope="col" class="fw-normal">MAGENTA</th>
                                            <th scope="col" class="fw-normal">BLACK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #fff109"></span></td> -->
                                            <td>pH : Measured by Toshniwal CL 4 pHmeter</td>
                                            <td>8-8.5</td>
                                            <td>8-8.5</td>
                                            <td>8-8.5</td>
                                            <td>8-8.5</td>
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #fece21"></span></td> -->
                                            <td>Viscosity (Cps) : Measured by Haake Rheostress 1 Rheometer</td>
                                            <td>Upto 10</td>
                                            <td>Upto 10</td>
                                            <td>Upto 10</td>
                                            <td>Upto 10</td>
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f7ac12"></span></td> -->
                                            <td>Surface Tension (mN/m) : Measured by KRUSS Tensiometer</td>
                                            <td>45-55</td>
                                            <td>45-55</td>
                                            <td>45-55</td>
                                            <td>45-55</td>
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f28e1f"></span></td> -->
                                            <td>Solid (%) : Measured by Sartorius Solid Analyser</td>
                                            <td>30-35</td>
                                            <td>30-35</td>
                                            <td>30-35</td>
                                            <td>30-35</td>
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #fa5e21"></span></td> -->
                                            <td>PSD (D90) : Measured by Malvern Mastersizer-3000.</td>
                                            <td>Upto 195nm</td>
                                            <td>Upto 100nm</td>
                                            <td>Upto 170nm</td>
                                            <td>Upto 100nm</td>
                                        </tr>
                                    </tbody>
                                </table>

                            </div>

                            <div class="sec-title-wrapper mt-5">
                                <span class="text-white fs-1 ">Specifications B</span> &nbsp; &nbsp;
                                <span class="text-white fs-1 mandarin-title-2 ">规格 B</span>
                            </div>

                            <div class="col-12  table-responsive">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <!-- <th scope="col" class="fw-normal"></th> -->
                                            <th scope="col" class="fw-normal">Parameters:</th>
                                            <th scope="col" class="fw-normal">YELLOW</th>
                                            <th scope="col" class="fw-normal">CYAN</th>
                                            <th scope="col" class="fw-normal">MAGENTA</th>
                                            <th scope="col" class="fw-normal">BLACK</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #fff109"></span></td> -->
                                            <td>pH : Measured by Toshniwal CL 4 pHmeter</td>
                                            <td>8-8.5</td>
                                            <td>8-8.5</td>
                                            <td>8-8.5</td>
                                            <td>8-8.5</td>
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #fece21"></span></td> -->
                                            <td>Viscosity (Cps) : Measured by Haake Rheostress 1 Rheometer</td>
                                            <td>Upto 20</td>
                                            <td>Upto 20</td>
                                            <td>Upto 20</td>
                                            <td>Upto 20</td>
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f7ac12"></span></td> -->
                                            <td>Solid (%) : Measured by Sartorius Solid Analyser</td>
                                            <td>25-35</td>
                                            <td>25-35</td>
                                            <td>25-35</td>
                                            <td>25-35</td>
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f28e1f"></span></td> -->
                                            <td>Surface Tension (mN/m) : Measured by KRUSS Tensiometer</td>
                                            <td>35-45</td>
                                            <td>35-45</td>
                                            <td>35-45</td>
                                            <td>45-55</td>
                                        </tr>
                                        <tr>
                                            <!-- <td><span class="color-item" style="background: #f58025"></span></td> -->
                                            <td>PSD (D90) : Measured by Malvern Mastersizer-3000.</td>
                                            <td>Upto 195nm</td>
                                            <td>Upto 100nm</td>
                                            <td>Upto 170nm</td>
                                            <td>Upto 100nm</td>
                                        </tr>
                                    </tbody>
                                </table>


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
            <section class="service__area-7 pt-130">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-12">
                            <div class="service__items-7 animation_service_7">
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Ultra-Fine <span>Particle Stability</span></h3>

                                    </a>
                                    <p>
                                       Particle size (D90) controlled up to 195nm for Yellow and 100nm for Cyan, Magenta, and Black — ensuring exceptional dispersion stability and consistent colour development in sublimation ink formulations.
                                        
                                    </p>
                                    <!-- <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul> -->
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Optimum Fastness<span>Properties</span> </h3>

                                    </a>
                                    <p>
                                        Dispersions are engineered to deliver optimum light fastness, wash fastness, alkali perspiration fastness, and crock fastness — meeting the performance demands of high-quality sublimation printing applications.
                                    </p>
                                    <!-- <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul> -->
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Controlled pH<span>Balance</span> </h3>

                                    </a>
                                    <p>
                                       Consistent pH range of 8–8.5 across all colours — Yellow, Cyan, Magenta, and Black — ensures stable ink formulation chemistry and reliable compatibility with sublimation ink manufacturing systems.
                                    </p>
                                    <!-- <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul> -->
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Stable Viscosity<span>Performance</span> </h3>

                                    </a>
                                    <p>
                                        Viscosity maintained up to 10 Cps (Spec A) and 20 Cps (Spec B), measured by Haake Rheostress Rheometer, supporting smooth ink flow and consistent printhead performance across production runs.
                                    </p>
                                    <!-- <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul> -->
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Precise Surface <span>Tension Control</span></h3>

                                    </a>
                                    <p>
                                        Surface tension maintained between 35–55 mN/m across both specifications, ensuring proper wetting, ink spread control, and reliable transfer performance on polyester substrates.
                                    </p>
                                    <!-- <ul>
                                        <li>+ Logo Design</li>
                                        <li>+ Advertisement</li>
                                        <li>+ Promotion</li>
                                    </ul> -->
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Flexible Formulation <span>Options </span> </h3>

                                    </a>
                                    <p>
                                        Available in two specification grades — Spec A and Spec B — offering ink manufacturers flexibility to select the right solid content, viscosity, and particle size profile for their specific formulation requirements.
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
            <section class="about__area-3">
                <div class="container pt-140 pb-140">
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="about__img-3">
                                <!-- <img src="assets/imgs/pigment-imgs/550 x 765.jpg" alt="About Thumbnail"
                                    data-speed="auto"> -->
                                <video width="100%" height="100%" autoplay muted loop>
                                    <source src="./assets/video/top 1.webm" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Who We Are</h2>
                                <h4 class="sec-title title-anim text-prismane">YOUR RELIABLE SUBLIMATION DISPERSION PARTNER
                                </h4>
                                <h4 class="sec-title title-anim mandarin-title-1 text-prismane">您可靠的升华分散合作伙伴</h4>
                            </div>
                            <div class="sec-text-wrapper">
                                <div class="sec-text text-anim">
                                    <p>
                                       We develop and supply high-performance water-based disperse dye dispersions engineered for consistent colour strength, precise particle stability, and reliable integration into dye sublimation ink manufacturing systems. Our dispersions are formulated across two specification grades, offering ink manufacturers the flexibility to select the right viscosity, solid content, and particle size profile for their specific production requirements. With a focus on optimum fastness properties and stable dispersion chemistry, we help sublimation ink manufacturers achieve dependable colour output — batch after batch.
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
            <section class="portfolio__service service-v5 pt-140 pb-140 bg-light bg-img-none">
                <div class="container">
                    <div class="row">
                        <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-6">
                            <h2 class="sec-title animation__char_come text-prismane-2" style="max-width:none">PROVEN GAINS</h2>
                            <span class="mandarin-title-1 animation__char_come text-prismane-2" style="max-width:none">已证实的收益</span>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                            <div class="sec-text">
                                <p>
                                    Sublimation dispersions are formulated to deliver precise particle stability, consistent fastness properties, and reliable integration into dye sublimation ink systems. Designed for ink manufacturers who demand repeatable quality, they support efficient production with controlled chemistry and dependable colour performance across every batch.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio__service-list">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="portfolio__service-item">
                                    <a href="">
                                        <h3 class="ps-title"> Dual Specification Grades</h3>
                                        <p>
                                           Available in Spec A and Spec B grades, offering ink manufacturers flexibility to select the right viscosity, solid content, and particle size profile to match their specific sublimation ink formulation needs.
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
                                        <h3 class="ps-title">Optimum Fastness Results</h3>
                                        <p>
                                           Engineered to deliver optimum light fastness, wash fastness, alkali perspiration fastness, and crock fastness — ensuring end-use sublimation prints meet quality and durability standards across textile applications.
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
                                        <h3 class="ps-title">Precise Particle Control</h3>
                                        <p>
                                          Particle size (D90) controlled up to 195nm for Yellow and 100nm for Cyan, Magenta, and Black — providing stable dispersion chemistry and consistent colour strength in sublimation ink manufacturing.
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
            <section class="faq__area-6">
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
                                                    Q1: What are sublimation dispersions and how are they used?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Sublimation dispersions are water-based disperse dye preparations used as the colour base in dye sublimation ink manufacturing. They are formulated with precisely controlled particle size, viscosity, and pH to ensure stable, high-performance sublimation ink production.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button  collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                   Q2: What is the difference between Specifications A and Specifications B?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Specification A has a lower viscosity (up to 10 Cps) and higher solid content (30–35%), while Specification B has a higher viscosity (up to 20 Cps) and lower solid content (25–35%). Both deliver the same fastness performance but offer different formulation profiles to suit varying ink manufacturing requirements.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button  collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                   Q3: How should sublimation dispersions be stored to maintain stability?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Sublimation dispersions should be stored in tightly sealed containers, away from direct sunlight and extreme temperatures. Proper storage maintains particle stability, pH balance, and dispersion performance throughout the product's shelf life.
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
        <?php include "footer.php"; ?>