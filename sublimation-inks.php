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
                                    <h1 class="sec-title text-white text-prismane">Sublimation Inks</h1>
                                    <span class="sec-title text-white mandarin-title-1 text-prismane">热升华墨水</span>
                                    <p class="text-white fw-semibold fst-italic" style="font-size:1.1rem;">
                                        A transformative printing technology that delivers vibrant, long-lasting, soft-hand prints — engineered for versatility across fashion, sportswear, home décor and beyond.
                                    </p>
                                    <p class="text-white">
                                        LEON Dye Sublimation Ink — Colour That Becomes Part of the Fabric. Dye sublimation is a transformative method of printing that takes your image and transfers it onto a polyester or polyester coated fabric using heat — imbeding the ink directly into the surface for durable, long-lasting results both inside and outside.
                                    </p>
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

            <section style="background: transparent; position: absolute; width: 100%; z-index: 99; top: 500px; " class="wave-path-prismane">
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
                                <h2 class="sec-title animation__char_come text-prismane-2">Our Sublimation Inks Range
                                </h2> <br>
                                <h2 class="sec-title animation__char_come mandarin-title-1 text-prismane-2">我们的升华墨水系列
                                </h2>
                            </div>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                            <div class="development__wrapper pb-0">
                                <div class="development__content border-0 mb-0 pb-0">
                                    <p>
                                        <b>What is Dye Sublimation Printing?</b> <br>
                                        <b>什么是染料升华印刷？</b>
                                        <br><br>
                                        Dye sublimation printing is quite a popular form of printing due to its versatility. It is a transformative method of printing that takes your image and transfers it onto a polyester or polyester coated fabric using heat. This type of printing creates more durable products because it imbeds the ink directly into the surface — and companies have the ability to use these prints both inside and outside.
                                    </p>
                                    <p>
                                        <b>Ink Quality Matters</b> <br>
                                        <b>墨水质量至关重要</b>
                                        <br><br>
                                        Ink plays a crucial factor in this process — the fade resistance varies from ink to ink. Depending on the need, selecting the appropriate ink will directly affect how long your print lasts. One interesting fact about the sublimation printer is that the colour produced is of a higher quality than typical inkjet printers — capable of producing images with continuous tones of colours that physically blend together.
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
                                <h2 class="sec-sub-title title-anim">Product Range</h2>
                                <h3 class="sec-title title-anim pb-2 text-prismane">Sublimation Inks</h3>
                                <h3 class="sec-title title-anim mandarin-title-1 text-prismane">热升华墨水</h3>
                                <span class="text-white fs-1">LEON Sublimation Ink</span> &nbsp; &nbsp;
                                <span class="text-white fs-1 mandarin-title-2">莱昂升华墨水</span>
                            </div>

                            <!-- Core CMYK Product Range -->
                            <div class="col-12 table-responsive mt-3">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <th scope="col" class="fw-normal">Colour</th>
                                            <th scope="col" class="fw-normal">Product Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Cyan</td>
                                            <td>LEON INK CYAN</td>
                                        </tr>
                                        <tr>
                                            <td>Magenta</td>
                                            <td>LEON INK MAGENTA</td>
                                        </tr>
                                        <tr>
                                            <td>Yellow</td>
                                            <td>LEON INK YELLOW</td>
                                        </tr>
                                        <tr>
                                            <td>Black</td>
                                            <td>LEON INK BLACK</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Available Ink Colours Including Fluorescents -->
                            <div class="sec-title-wrapper mt-5">
                                <span class="text-white fs-1">Available Ink Colours — Standard &amp; Fluorescent</span> &nbsp; &nbsp;
                                <span class="text-white fs-1 mandarin-title-2">可用墨水颜色 — 标准与荧光</span>
                            </div>
                            <div class="col-12 table-responsive mt-3">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <th scope="col" class="fw-normal">Colour Name</th>
                                            <th scope="col" class="fw-normal">Type</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Leon Orange</td>
                                            <td>Standard</td>
                                        </tr>
                                        <tr>
                                            <td>Leon Red</td>
                                            <td>Standard</td>
                                        </tr>
                                        <tr>
                                            <td>Leon Blue</td>
                                            <td>Standard</td>
                                        </tr>
                                        <tr>
                                            <td>Leon Fluo Yellow</td>
                                            <td>Fluorescent</td>
                                        </tr>
                                        <tr>
                                            <td>Leon Fluo Pink</td>
                                            <td>Fluorescent</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Compatible Machines & Printers -->
                            <div class="sec-title-wrapper mt-5">
                                <span class="text-white fs-1">Compatible Machines &amp; Printers</span> &nbsp; &nbsp;
                                <span class="text-white fs-1 mandarin-title-2">兼容机器与打印机</span>
                            </div>
                            <div class="col-12 table-responsive mt-3">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <th scope="col" class="fw-normal">Brand</th>
                                            <th scope="col" class="fw-normal">Compatible Models</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>EPSON</td>
                                            <td>i3200, 5113, 4720, DX5, DX7</td>
                                        </tr>
                                        <tr>
                                            <td>RICOH</td>
                                            <td>Gen 4 and Gen 5</td>
                                        </tr>
                                        <tr>
                                            <td>KYOCERA</td>
                                            <td>KJ4B</td>
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
                                        <h3 class="service__title-7 text-prismane-2">All-Over <span>Print Effect</span></h3>
                                    </a>
                                    <p>
                                        An all-over print effect on t-shirts is achieved as ink is printed from seam-to-seam — giving you full, edge-to-edge coverage on every garment without borders or limits.
                                    </p>
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Soft Hand Feel — <span>You Can't Feel the Ink</span></h3>
                                    </a>
                                    <p>
                                        You can't feel the ink as it becomes part of the fabric. The end product is a soft-hand feel — no cracking, no peeling, no raised texture. Just fabric.
                                    </p>
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Long-Lasting <span>Quality Design</span></h3>
                                    </a>
                                    <p>
                                        The printing becomes part of the fabric itself — delivering long-lasting quality that withstands repeated washing and everyday wear without fading, cracking, or lifting.
                                    </p>
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Thousands of Colours <span>to Choose From</span></h3>
                                    </a>
                                    <p>
                                        An incredibly wide colour palette gives you creative freedom to produce anything from bold graphics to photographic prints — with continuous tones that physically blend together.
                                    </p>
                                </div>
                                <div class="service__item-7">
                                    <a href="">
                                        <h3 class="service__title-7 text-prismane-2">Versatile <span>Product Range</span></h3>
                                    </a>
                                    <p>
                                        Can print on home décor items, sports apparel, fashion apparel and accessories, tradeshow and retail graphics, and keepsake items — suitable for indoor and outdoor use.
                                    </p>
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
                                    <source src="./assets/video/Sublimation-Inks.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>

                        <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Colour That Becomes Part of the Fabric</h2>
                                <h4 class="sec-title title-anim text-prismane">YOUR RELIABLE SUBLIMATION INKS PARTNER
                                </h4>
                                <h4 class="sec-title title-anim mandarin-title-1 text-prismane">您值得信赖的升华油墨合作伙伴</h4>
                            </div>
                            <div class="sec-text-wrapper">
                                <div class="sec-text text-anim">
                                    <p>
                                        LEON Dye Sublimation Inks are Oekotex® Certified &amp; Compliant — engineered to deliver vibrant, long-lasting prints that become part of the fabric itself. Available in CMYK plus standard and fluorescent extension colours, our inks are compatible with EPSON, RICOH, and KYOCERA printhead systems, integrating seamlessly into your existing production setup.
                                    </p>
                                    <p>
                                        From seam-to-seam all-over print effects to soft-hand-feel fashion apparel — LEON Sublimation Inks are designed for fashion, sportswear, home décor, tradeshow graphics, and keepsake items. Backed by ISO 45001:2018, ISO 9001:2015, and ISO 14004:2015 company certifications, our inks deliver professional-grade performance at a competitive price.
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
                            <h2 class="sec-title animation__char_come text-prismane-2" style="max-width:none">THE PROCESS</h2>
                            <span class="mandarin-title-1 animation__char_come text-prismane-2" style="max-width:none">工艺流程</span>
                        </div>
                        <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-6">
                            <div class="sec-text">
                                <p>
                                    The dye sublimation process converts your design into fabric-embedded colour through a precise, five-step workflow — from loading dyes to delivering the final finished garment.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="portfolio__service-list">
                        <div class="row">
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="portfolio__service-item">
                                    <a href="">
                                        <h3 class="ps-title">Step 1 — Load the Dyes</h3>
                                        <p>
                                            Sublimation dyes are loaded into the printer — Cyan, Magenta, Yellow and Black — ready for precision colour transfer onto sublimation transfer paper.
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
                                        <h3 class="ps-title">Step 2 — Print onto Transfer Paper</h3>
                                        <p>
                                            Images are then printed onto sublimation transfer paper with precision and colour accuracy — ready for heat transfer onto the fabric.
                                        </p>
                                    </a>
                                </div>
                            </div>
                            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                                <div class="portfolio__service-item">
                                    <a href="">
                                        <h3 class="ps-title">Step 3 — Apply Heat</h3>
                                        <p>
                                            Heat is applied to transfer the ink from the paper to the fabric — the heat causes the dye to sublimate and bond directly into the polyester fibres.
                                        </p>
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



            <!-- Steps 4 & 5 + Certifications area start -->
            <!-- <section class="about__area-3">
                <div class="container pt-0 pb-0">
                    <div class="row">
                        <div class="col-12">
                            Steps 4 & 5
                            <div class="row mb-4">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="portfolio__service-item">
                                        <h3 class="ps-title">Step 4 — Cut the Fabric</h3>
                                        <p class="text-white">The garment panels are cut from the reels of fabric — ready for assembly into the final product.</p>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="portfolio__service-item">
                                        <h3 class="ps-title">Step 5 — Sew and Assemble</h3>
                                        <p class="text-white">The panels are then sewn and pieced together — delivering the final finished product with vibrant, durable colour that became part of the fabric.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- Certifications & Quality Badges area start -->
            <section class="about__area-3">
                <div class="container pt-100 pb-140">
                    <div class="row">
                        <div class="col-12">
                            <div class="sec-title-wrapper">
                                <h2 class="sec-sub-title title-anim">Oekotex® Certified &amp; Compliant</h2>
                                <h3 class="sec-title title-anim pb-2 text-prismane">Certifications &amp; Quality Badges</h3>
                                <h3 class="sec-title title-anim mandarin-title-1 text-prismane">认证与质量标志</h3>
                                <p class="text-white mt-3">LEON Dye Sublimation Inks are Oekotex® Certified &amp; Compliant — meeting the highest standards for safety and environmental responsibility.</p>
                            </div>
                            <div class="col-12 table-responsive mt-4">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <th scope="col" class="fw-normal">Badge</th>
                                            <th scope="col" class="fw-normal">What It Means</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>HD BK</td>
                                            <td>High-density Black formulation</td>
                                        </tr>
                                        <tr>
                                            <td>Superior Print Quality</td>
                                            <td>Consistently sharp, vibrant output</td>
                                        </tr>
                                        <tr>
                                            <td>Cost Effective Price</td>
                                            <td>Professional performance at a competitive price</td>
                                        </tr>
                                        <tr>
                                            <td>Eco Friendly</td>
                                            <td>Environmentally responsible formulation</td>
                                        </tr>
                                        <tr>
                                            <td>Fast Drying</td>
                                            <td>Faster production with reduced wait time</td>
                                        </tr>
                                        <tr>
                                            <td>FP</td>
                                            <td>Fluorescent Pink available</td>
                                        </tr>
                                        <tr>
                                            <td>FY</td>
                                            <td>Fluorescent Yellow available</td>
                                        </tr>
                                        <tr>
                                            <td>High Colour Concentration</td>
                                            <td>Maximum colour yield per bottle</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- Company Certifications -->
                            <div class="sec-title-wrapper mt-5">
                                <h3 class="sec-title title-anim pb-2 text-prismane">Company Certifications</h3>
                                <h3 class="sec-title title-anim mandarin-title-1 text-prismane">公司认证</h3>
                            </div>
                            <div class="col-12 table-responsive mt-3">
                                <table class="table table-dark rounded fw-light z-1 position-relative">
                                    <thead>
                                        <tr class="table-active text-table-head">
                                            <th scope="col" class="fw-normal">Certification</th>
                                            <th scope="col" class="fw-normal">Standard</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ISO 45001:2018</td>
                                            <td>Occupational Health &amp; Safety</td>
                                        </tr>
                                        <tr>
                                            <td>ISO 9001:2015</td>
                                            <td>Quality Management System</td>
                                        </tr>
                                        <tr>
                                            <td>ISO 14004:2015</td>
                                            <td>Environmental Management</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <!-- CTA Banner
                            <div class="mt-5 p-5 text-center rounded" style="background: var(--black-2, #1a1a1a); border: 1px solid rgba(201,243,29,0.2);">
                                <h3 class="text-prismane mb-3">Ready to Elevate Your Sublimation Print Quality?</h3>
                                <p class="text-white fst-italic mb-4">Contact our team for ink samples, compatibility checks, and pricing tailored to your sublimation printing setup.</p>
                                <div class="d-flex justify-content-center gap-4 flex-wrap">
                                    <a href="contact.php" class="blog__btn about_btn text-prismane">Get a Quote <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                    <a href="contact.php" class="blog__btn about_btn text-prismane">Contact Us <span><i class="fa-solid fa-arrow-right"></i></span></a>
                                </div>
                            </div> -->

                        </div>
                    </div>
                </div>
            </section>
            <!-- Certifications & Quality Badges area end -->

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
                                                <button class="accordion-button pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="true" aria-controls="collapseOne">
                                                    Q1: What is dye sublimation printing and why is it popular?
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse show"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Dye sublimation printing is a popular form of printing due to its versatility. It transfers your image onto polyester or polyester-coated fabric using heat — imbeding the ink directly into the surface to create durable products with vibrant, continuous-tone colour that physically blends together, producing a higher quality output than typical inkjet printers.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Q2: Can you feel the ink on the fabric after sublimation printing?
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>No — you can't feel the ink at all. Because the dye bonds directly into the polyester fibres, the end product is a soft-hand feel with no cracking, no peeling, and no raised texture. The print becomes part of the fabric itself, delivering long-lasting quality that withstands repeated washing and everyday wear.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Q3: Which machines and printers are compatible with LEON Sublimation Inks?
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>LEON Sublimation Inks are compatible with EPSON (i3200, 5113, 4720, DX5, DX7), RICOH (Gen 4 and Gen 5), and KYOCERA (KJ4B). Compatible machine brands include EPSON, MIMAKI, MUTOH, ROLAND (EPSON Heads), and MS-REGGIANNI (RICOH and KYOCERA based).
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFour">
                                                <button class="accordion-button collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFour"
                                                    aria-expanded="false" aria-controls="collapseFour">
                                                    Q4: What products can I print with dye sublimation inks?
                                                </button>
                                            </h2>
                                            <div id="collapseFour" class="accordion-collapse collapse"
                                                aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>LEON Sublimation Inks can be used on a versatile range of products — home décor items, sports apparel, fashion apparel and accessories, tradeshow and retail graphics, and keepsake items. They are suitable for both indoor and outdoor use as the print is embedded within the fabric surface.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingFive">
                                                <button class="accordion-button collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseFive"
                                                    aria-expanded="false" aria-controls="collapseFive">
                                                    Q5: Are LEON Sublimation Inks certified?
                                                </button>
                                            </h2>
                                            <div id="collapseFive" class="accordion-collapse collapse"
                                                aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Yes — LEON Dye Sublimation Inks are Oekotex® Certified &amp; Compliant, meeting the highest standards for safety and environmental responsibility. The company also holds ISO 45001:2018 (Occupational Health &amp; Safety), ISO 9001:2015 (Quality Management System), and ISO 14004:2015 (Environmental Management) certifications.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingSix">
                                                <button class="accordion-button collapsed pe-5" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseSix"
                                                    aria-expanded="false" aria-controls="collapseSix">
                                                    Q6: Are fluorescent colours available in LEON Sublimation Inks?
                                                </button>
                                            </h2>
                                            <div id="collapseSix" class="accordion-collapse collapse"
                                                aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <p>Yes — in addition to the standard CMYK range, LEON offers Leon Orange, Leon Red, and Leon Blue as standard extension colours, plus Leon Fluo Yellow and Leon Fluo Pink as fluorescent options — expanding your colour palette for specialty, high-visibility, and fashion sublimation applications.
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
