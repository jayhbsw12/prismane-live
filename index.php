<?php include("header-top.php"); ?>
<meta name="robots" content="noindex,nofollow">
<?php include("header.php"); ?>
<style>
  div#tsparticles {
    width: 1700px;
    position: absolute;
    top: 100px;
    background: transparent;
    height: 800px;
    z-index: 1;
    right: 20px;
  }

  .map-canvas {
    text-align: center;
    z-index: 6;
    display: flex;
    position: absolute;
    top: 160px;
    left: 0%;
  }
  
  .map-canvas img {
    display: none;
  }

  .no-canvas .map-canvas img {
    display: inline-block;
    max-width: 100%;
    height: auto;
  }

  #canvas-map {
    max-width: 100%;
    margin: 0 auto;
  }

  .hero__content a {
    display: inline-block;
    max-width: 300px;
    font-weight: 400;
    font-size: 20px;
    line-height: 1.5;
    color: #000000;
    padding-bottom: 15px;
    position: relative;
    -webkit-transition: all 0.3s;
    transition: all 0.3s;
    overflow: hidden;
  }

  header.header__area-2 {
    background: #000 !important;
  }

  .hero__title {
    font-weight: 500;
    font-size: 150px;
    line-height: 1;
    color: #fff;
    margin-top: 55px;
    position: relative;
  }

  .hero__area::after {
    position: absolute;
    content: "";
    width: 100%;
    height: 100%;
    left: 0;
    top: 0;
    background-color: #fff;
  }

  .hero__title-wrapper {
    max-width: 1125px;
    position: relative;
    margin-bottom: 105px;
  }

  .hero__sub-title {
    position: relative;
    color: #fff;
    font-size: 25px;
    right: 0px;
    margin-top: 50px;
    max-width: 100%;
  }
</style>
<div id="smooth-wrapper">
  <div id="smooth-content">
    <main>

      <!-- Hero area start -->
      <section class="hero__area ">
        <video autoplay muted loop id="hero-video">
          <source src="./assets/video/Comp 1_1_1.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>

        <div class="container">
          <div class="row">
            <div class="col-xxl-12">
              <div class="hero__content animation__hero_one">
                <div class="hero__title-wrapper">
                  <h1 class="hero__title">LISTEN TO YOUR COLORS</h1>
                  <!-- <p class="hero__sub-title">For Your Professional Color Solutions</span>
                    sunt in culpa
                  </p> -->
                  <p class="hero__sub-title">For high-performance colour solutions designed 
                     to deliver consistency, precision, and reliability across every application.
                  </p>
                </div>
                <ul class="ul-bane1 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                  <li>
                    <div class="con" bis_skin_checked="1">
                      <div class="tit1" bis_skin_checked="1">Organic <br>Pigments</div>
                      <a href="#" class="more">Read More</a>
                    </div>
                  </li>
                  <li>
                    <div class="con" bis_skin_checked="1">
                      <div class="tit1" bis_skin_checked="1">Sublimation<br> Inks</div>
                      <a href="#" class="more" bis_skin_checked="1">Read More</a>
                    </div>
                  </li>
                  <li>
                    <div class="con" bis_skin_checked="1">
                      <div class="tit1" bis_skin_checked="1">Pigment <br> Dispersions</div>
                      <a href="#" class="more" bis_skin_checked="1">Read More</a>
                    </div>
                  </li>
                  <li>
                    <div class="con" bis_skin_checked="1">
                      <div class="tit1" bis_skin_checked="1">DTF<br> Inks</div>
                      <a href="#" class="more" bis_skin_checked="1">Read More</a>
                    </div>
                  </li>
                  <li>
                    <div class="con" bis_skin_checked="1">
                      <div class="tit1" bis_skin_checked="1">DTF <br> Printers</div>
                      <a href="#" class="more" bis_skin_checked="1">Read More</a>
                    </div>
                  </li>
                  <li>
                    <div class="con" bis_skin_checked="1">
                      <div class="tit1" bis_skin_checked="1">DTF <br> Roll</div>
                      <a href="#" class="more" bis_skin_checked="1">Read More</a>
                    </div>
                  </li>

                  <li>
                    <div class="con" bis_skin_checked="1">
                      <div class="tit1" bis_skin_checked="1">TPU <br> Powder</div>
                      <a href="#" class="more" bis_skin_checked="1">Read More</a>
                    </div>
                  </li>
                </ul>
                <!-- <img src="assets/imgs/icon/arrow-down-big.png" alt="Arrow Down Icon"> -->
                <!--<div class="experience">-->
                <!--  <h2 class="title">25k+</h2>-->
                <!--  <p>Projects completed <br>successfully</p>-->
                <!--</div>-->
              </div>
            </div>
          </div>
        </div>
        <!-- <div id="tsparticles"></div> -->
        <!-- <img src="assets/imgs/hero/1/1-bg.png" alt="image" class="hero1_bg"> -->
        <!-- <div id="js-map-canvas" class="map-canvas">
          </div> -->
      </section>
      <!-- Hero area end -->


      <!-- Roll area start -->
      <section class="roll__area">
        <div class="swiper roll__slider">
          <div class="swiper-wrapper roll__wrapper">
            <div class="swiper-slide roll__slide">
              <h2>Organic Pigments</h2>
            </div>
            <div class="swiper-slide roll__slide">
              <h2>Sublimation Inks</h2>
            </div>
            <div class="swiper-slide roll__slide">
              <h2>Pigment Dispersions</h2>
            </div>
            <div class="swiper-slide roll__slide">
              <h2>DTF Inks</h2>
            </div>
            <!-- <div class="swiper-slide roll__slide">
                <h2>Organic Pigments</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Sublimation Inks</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Pigment Dispersions</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>DTF Inks</h2>
              </div> -->
            <!-- <div class="swiper-slide roll__slide">
                <h2>Organic Pigments</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Sublimation Inks</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Pigment Dispersions</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>DTF Inks</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Organic Pigments</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Sublimation Inks</h2>
              </div>
              <div class="swiper-slide roll__slide">
                <h2>Pigment Dispersions</h2>
              </div> -->
          </div>
        </div>
      </section>
      <!-- Roll area end -->


      <!-- About area start -->
      <section class="about__area" style="background-color: #fff !important;">
        <div class="container line g-0 pt-140 pb-130">
          <span class="line-3"></span>
          <div class="row">
            <div class="col-xxl-12">
              <div class="about__title-wrapper">
                <h3 class="sec-title title-anim" style="color: black !important;">Welcome to <br>Prismane6 Pte Ltd</h3> <br>
                <h3 class="sec-title title-anim" style="color: black !important;">欢迎来到<br>棱柱烷6私人有限公司</h3>
              </div>

              <div class="about__content-wrapper">
                <div class="about__img">
                  <div class="img-anim">
                    <img src="assets/imgs/about/1/ink-fill.webp" alt="About Image" data-speed="0.3">
                  </div>

                  <div class="about__img-right">
                    <img src="assets/imgs/Home-inks(1).png" alt="About Image Right" data-speed="0.5">
                    <div class="shape">
                      <div class="secondary" data-speed="0.9"></div>
                      <div class="primary"></div>
                    </div>
                  </div>
                </div>

                <div class="about__content text-anim">
                  <p><b></b></p>
                  <!-- <p>Prismane6 Pte Ltd, based in Singapore, is the international branch of <span
                      class="green-text">Global Nanotech Pvt. Ltd.</span>,
                    India, a company under the umbrella of <span class="green-text">Choksi Exports.</span>
                    <br><br> Established in 1984, the Choksi Group has steadily grown into a global leader in <span
                      class="green-text">organic
                      pigments</span>, <span class="green-text">sublimation inks</span>, <span
                      class="green-text">pigment dispersions</span>, and <span class="green-text">DTF inks</span>. With
                    Prismane6, we extend this
                    legacy of innovation, quality, and service to clients across international markets.
                    <br><br> By bridging India’s manufacturing excellence with Singapore’s strategic hub,
                    we ensure <span class="green-text">faster access,</span> <span class="green-text">localized
                      support,</span> and <span class="green-text">seamless supply</span> for our customers worldwide.
                  </p> -->
                  <p>
                    Singapore stands as a dedicated trading hub in the Far East for digital inks and allied products, delivering specialised solutions for diverse printing applications. The company collaborates with leading global manufacturers of digital inks, dispersions, dyes, as well as printers, spares, and accessories—ensuring consistent access to high-quality materials and reliable technology.
                  </p>
                  <p>
                    Backed by partnerships with some of the world’s most trusted suppliers, the focus remains on delivering performance-driven products that meet international standards. The research and development of digital inks has been carried out in Singapore under the expertise of Dr. Dhara and her team, ensuring advanced formulations, consistency, and innovation at every stage.
                  </p>
                  <p>
                    With Prismane 6, this foundation is taken further—extending a legacy of innovation, quality, and service. The commitment is to support clients across international markets with dependable solutions, technical expertise, and products designed to perform in real-world industrial environments.
                  </p>

                  <div class="cursor-btn btn_wrapper">
                    <a class="btn-item wc-btn-primary btn-hover" href="who-we-are.php"><span></span> Explore Us <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </section>
      <!-- About area end -->


      <!-- Service area start -->
      <section class="service__area pt-110 pb-150">
        <div class="container">
          <div class="row">
            <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
              <div class="sec-title-wrapper wrap">
                <h2 class="sec-sub-title title-anim">Products</h2>
                <h3 class="sec-title title-anim">Our Products</h3>
              </div>
            </div>
            <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
              <div class="service__top-text text-anim">
                <p>We specialize in a <span> wide range of high-quality </span> solutions:</p>
              </div>
            </div>
            <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
              <div class="service__top-btn">
                <div class="btn_wrapper">
                  <!-- <a href="#" class="btn-item wc-btn-secondary btn-hover"><span></span> View <br>all
                    Products <i class="fa-solid fa-arrow-right"></i></a> -->
                </div>
              </div>
            </div>
          </div>

          <div class="service__list-wrapper">
            <div class="row">
              <div class="col-xxl-4 col-xl-4 col-lg-0 col-md-0">
                <div class="service__img-wrapper">
                  <img src="assets/imgs/service/1/Organic Pigments.webp" alt="Service Image"
                    class="service__img img-1 active">
                  <img src="assets/imgs/service/1/Sublimations INK.webp" alt="Service Image" class="service__img img-2">
                  <img src="assets/imgs/service/1/Pigment Dispersions.webp" alt="Service Image"
                    class="service__img img-3">
                  <img src="assets/imgs/service/1/DTF inks.webp" alt="Service Image" class="service__img img-4">
                  <img src="assets/imgs/service/1/DTF printers.webp" alt="Service Image" class="service__img img-5">
                  <img src="assets/imgs/service/1/DTF Roll.webp" alt="Service Image" class="service__img img-6">
                  <img src="assets/imgs/service/1/TPU Powder.webp" alt="Service Image" class="service__img img-7">

                  <span class="shape-box-1 current"></span>
                  <span class="shape-box-2"></span>
                  <span class="shape-box-3"></span>
                  <span class="shape-box-4"></span>
                  <span class="shape-box-5"></span>
                  <span class="shape-box-6"></span>
                  <span class="shape-box-7"></span>
                </div>
              </div>
              <div class="col-xxl-8 col-xl-8 col-lg-12 col-md-12">
                <div class="service__list">
                  <a href="New-launch.php">
                    <div class="service__item animation_home1_service" data-service="0" style="border-top: 1px solid rgba(201,243,29,0.3);">
                      <div class="service__number"><span style="color:#c9f31d;">New</span></div>
                      <div class="service__title-wrapper">
                        <h4 class="service__title">Ricoh Gen6</h4>
                      </div>
                      <div class="service__text">
                        <p>Newly launched Direct to Fabric pigment inks.</p>
                      </div>
                      <div class="service__link">
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                      </div>
                    </div>
                  </a>

                  <a href="pigments-and-dyes.php">
                    <div class="service__item animation_home1_service" data-service="1">
                      <div class="service__number"><span>01</span></div>
                      <div class="service__title-wrapper">
                        <h4 class="service__title">Organic Pigments</h4>
                      </div>
                      <div class="service__text">
                        <p>Reliable performance across industries.</p>
                      </div>
                      <div class="service__link">
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                      </div>
                    </div>
                  </a>

                  <a href="sublimation-inks.php">
                    <div class="service__item  animation_home1_service" data-service="2">
                      <div class="service__number"><span>02</span></div>
                      <div class="service__title-wrapper">
                        <h4 class="service__title">Sublimation Inks</h4>
                      </div>
                      <div class="service__text">
                        <p>Vivid colors and superior transfer quality.</p>
                      </div>
                      <div class="service__link">
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                      </div>
                    </div>
                  </a>

                  <a href="pigment-dispersions.php">
                    <div class="service__item  animation_home1_service" data-service="3">
                      <div class="service__number"><span>03</span></div>
                      <div class="service__title-wrapper">
                        <h4 class="service__title">Pigment Dispersions</h4>
                      </div>
                      <div class="service__text">
                        <p>Consistent, stable, and versatile.</p>
                      </div>
                      <div class="service__link">
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                      </div>
                    </div>
                  </a>

                  <a href="DTF-Inks.php">
                    <div class="service__item  animation_home1_service" data-service="4">
                      <div class="service__number"><span>04</span></div>
                      <div class="service__title-wrapper">
                        <h4 class="service__title">DTF Inks</h4>
                      </div>
                      <div class="service__text">
                        <p>Next-generation digital textile printing solutions.</p>
                      </div>
                      <div class="service__link">
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                      </div>
                    </div>
                  </a>

                  <a href="DTF-printers.php">
                    <div class="service__item  animation_home1_service" data-service="5">
                      <div class="service__number"><span>05</span></div>
                      <div class="service__title-wrapper">
                        <h4 class="service__title">DTF Printers</h4>
                      </div>
                      <div class="service__text">
                        <p>Available of different heads and size</p>
                      </div>
                      <div class="service__link">
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                      </div>
                    </div>
                  </a>

                  <a href="DTF-film.php">
                    <div class="service__item  animation_home1_service" data-service="6">
                      <div class="service__number"><span>06</span></div>
                      <div class="service__title-wrapper">
                        <h4 class="service__title">DTF Roll</h4>
                      </div>
                      <div class="service__text">
                        <p>Available of different size Hot peel and Cold Peel</p>
                      </div>
                      <div class="service__link">
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                      </div>
                    </div>
                  </a>

                  <a href="TPU-powder.php">
                    <div class="service__item  animation_home1_service" data-service="7">
                      <div class="service__number"><span>07</span></div>
                      <div class="service__title-wrapper">
                        <h4 class="service__title">TPU Powder</h4>
                      </div>
                      <div class="service__text">
                        <p>High-purity TPU hot melt DTF powder has high-temperature resistance and stretchability,
                          and is the first choice for DTF printing.</p>
                      </div>
                      <div class="service__link">
                        <p><i class="fa-solid fa-arrow-right"></i></p>
                      </div>
                    </div>
                  </a>

                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Service area end -->


      <!-- Counter area start -->
      <!-- <section class="counter__area">
        <div class="container g-0 line pt-150">
          <span class="line-3"></span>

          <div class="row">
            <div class="col-xxl-12">
              <div class="counter__wrapper counter_animation">
                <div class="counter__item counter__anim">
                  <h2 class="counter__number">25k+</h2>
                  <p>Project <br>completed</p>
                  <span class="counter__border"></span>
                </div>
                <div class="counter__item counter__anim">
                  <h2 class="counter__number">8k+</h2>
                  <p>Happy <br>customers</p>
                  <span class="counter__border"></span>
                </div>
                <div class="counter__item counter__anim">
                  <h2 class="counter__number">15</h2>
                  <p>Years <br>experiences</p>
                  <span class="counter__border"></span>
                </div>
                <div class="counter__item counter__anim">
                  <h2 class="counter__number">98</h2>
                  <p>Awards <br>achievement</p>
                  <span class="counter__border"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section> -->
      <!-- Counter area end -->
     
      <!-- new section -->
      <div class="swiper portfolio__slider-7">
            <div class="swiper-wrapper">
              <div class="swiper-slide">
                <div class="portfolio__slide-7">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/Pigment Dispersion Solutions.png" alt="Pigment Dispersion Solutions"></a>
                  </div>
                  <div class="slide-content">
                    <!-- <a href="portfolio-details.html"> -->
                      <h2 class="title">Pigment Dispersion <span> Solutions</span> </h2>
                    </a>
                    <h4 class="date">Pigment Dispersion for packaging and for textile application</h4>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="portfolio__slide-7">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/DTF Ink Solutions.png" alt="DTF Ink Solutions"></a>
                  </div>
                  <div class="slide-content">
                    <!-- <a href="portfolio-details.html"> -->
                      <h2 class="title"> DTF Ink  <span>Solutions</span> </h2>
                    </a>
                    <h4 class="date">DTF Inks for all types printer</h4>
                  </div>
                </div>
              </div>

              <div class="swiper-slide">
                <div class="portfolio__slide-7">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/Sublimation Ink Range.png" alt="Sublimation Ink Range"></a>
                  </div>
                  <div class="slide-content">
                    <!-- <a href="portfolio-details.html"> -->
                      <h2 class="title"> Sublimation  <span>Ink Range</span> </h2>
                    </a>
                    <h4 class="date">Dye Sublimation Inks for all types of printer</h4>
                  </div>
                </div>
              </div>
              
              <div class="swiper-slide">
                <div class="portfolio__slide-7">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/Best DTF Quality.png" alt="Best DTF Quality"></a>
                  </div>
                  <div class="slide-content">
                    <!-- <a href="portfolio-details.html"> -->
                      <h2 class="title"> Best DTF <span>Quality</span> </h2>
                    </a>
                    <h4 class="date">We create best DTF in market</h4>
                  </div>
                </div>
              </div>
              <!-- <div class="swiper-slide">
                <div class="portfolio__slide-7">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/home-7/p1.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <a href="portfolio-details.html">
                      <h2 class="title"> Lionpro <span>Agency</span> </h2>
                    </a>
                    <h4 class="date">02 May 2021</h4>
                  </div>
                </div>
              </div>
              <div class="swiper-slide">
                <div class="portfolio__slide-7">
                  <div class="slide-img">
                    <a href="portfolio-details.html"><img src="assets/imgs/home-7/p2.jpg" alt="Portfolio Image"></a>
                  </div>
                  <div class="slide-content">
                    <a href="portfolio-details.html">
                      <h2 class="title"> Lionpro <span>Agency</span> </h2>
                    </a>
                    <h4 class="date">02 May 2021</h4>
                  </div>
                </div>
              </div> -->
            </div>
      </div>
      <!-- new section end -->

      <!-- Counter replacement section -->
          <section class="hero__area-6">
            <div class="container g-0 line_4">
              <div class="line-col-4">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
              </div>

              <div class="row">
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="hero__content-6 hero__six_anim">
                    <!-- <img class="hero__arrow-icon" src="assets/imgs/hero/4/arrow-icon.png" alt="Arrow Icon"> -->
                    <h1 class="hero__title-6 ">We work with forward<br> -integrated companies <br> offering umbrella solutions.</h1>
                    <p>With Singapore as our strategic hub, we deliver faster access, <br> localised support, and seamless global supply. </p>
                    <!-- <a class="btn-started btn-hover" href="contact.html">Get Started</a> -->
                  </div>
                   <div class="cursor-btn btn_wrapper">
                    <a class="btn-item wc-btn-primary btn-hover" href="who-we-are.php"><span></span> Explore Us <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                  <div class="hero__right-6">
                    <img src="assets/imgs/umbrella solutions.png" alt="Hero Image">
                  </div>
                </div>
              </div>
            </div>
            <img class="hero__shape" src="assets/imgs/hero/4/hero-shape.png" alt="Shape Image">
            <!-- <img class="hero__shape-2" src="assets/imgs/hero/4/hero-shape-2.png" alt="Layout"> -->
            <img class="hero__shape-3" src="assets/imgs/hero/4/hero-shape-3.png" alt="Star Icon">
            <img class="shape-4" src="assets/imgs/shape/20.png" alt="Star Icon">
          </section>
      <!-- Counter replacement section end -->

      <!-- Workflow area start -->
      <section class="workflow__area">
        <div class="container g-0 line pt-140 pb-140">
          <div class="line-3"></div>
          <div class="row">
            <div class="col-xxl-12">
              <div class="sec-title-wrapper">
                <h2 class="sec-sub-title title-anim">Workflow</h2>
                <h3 class="sec-title title-anim">How we work</h3>
              </div>
            </div>

            <div class="col-xxl-12">
              <div class="swiper workflow__slider ">
                <div class="swiper-wrapper">
                  <div class="swiper-slide workflow__slide fade_left">
                    <h4 class="workflow__step">step 01</h4>
                    <h5 class="workflow__number">01</h5>
                    <h6 class="workflow__title">Advanced Formulation</h6>
                    <p>We partner with leading scientists from top global MNCs to develop formulations aligned with market needs.</p>
                  </div>

                  <div class="swiper-slide workflow__slide fade_left">
                    <h4 class="workflow__step">step 02</h4>
                    <h5 class="workflow__number">02</h5>
                    <h6 class="workflow__title">Global Reach</h6>
                    <p>We expand global reach by providing samples, enabling wider customer access and faster adoption.</p>
                  </div>

                  <div class="swiper-slide workflow__slide fade_left">
                    <h4 class="workflow__step">step 03</h4>
                    <h5 class="workflow__number">03</h5>
                    <h6 class="workflow__title">Strategic Distribution</h6>
                    <p>We build distributor networks in key textile hubs, ensuring direct market availability of our products.</p>
                  </div>

                  <div class="swiper-slide workflow__slide fade_left">
                    <h4 class="workflow__step">step 04</h4>
                    <h5 class="workflow__number">04</h5>
                    <h6 class="workflow__title">Ongoing Innovation</h6>
                    <p>Beyond successful product establishment, we continuously move forward—developing the next innovation.</p>
                  </div>

                  <!-- <div class="swiper-slide workflow__slide fade_left">
                    <h4 class="workflow__step">step 05</h4>
                    <h5 class="workflow__number">05</h5>
                    <h6 class="workflow__title">User Testing</h6>
                    <p>We look forward to engage with beyond the conventional</p>
                  </div> -->

                  <!-- <div class="swiper-slide workflow__slide fade_left">
                    <h4 class="workflow__step">step 06</h4>
                    <h5 class="workflow__number">06</h5>
                    <h6 class="workflow__title">User Testing</h6>
                    <p>We look forward to engage with beyond the conventional</p>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Workflow area end -->

      <!-- About area start -->
      <section class="about__area" style="background-color: #fff !important;">
        <div class="container line g-0 pb-130">
          <span class="line-3"></span>
          <div class="row">
            <div class="col-xxl-12">
              <div class="about__title-wrapper" style="padding: 0px;">
                <h3 class="sec-title title-anim" style="color: black !important;">Our Strengths</h3>
              </div>

              <div class="about__content-wrapper">
                <div class="about__content text-anim">
                  <!-- <p>At Prismane6, we represent not just products, but the <span class="green-text">trust and values of
                      Global Nanotech
                      Pvt. Ltd. </span>Together, we aim to create stronger connections with customers worldwide while
                    driving innovation in the ink and pigment industry.</p> -->
                </div>

                <div class="about__content text-anim">

                  <div class="container Strengths-box">
                    <div class="row">

                      <!-- Box 1 -->
                      <div class="col-md-6">
                        <div class="advantage-box">
                          <div class="icon-wrapper"><img src="assets/imgs/about/1/Proven Industry Experience.svg"></div>
                          <div class="advantage-content">
                            <div class="title">Proven Industry Experience</div>
                            <div class="text">Over 40 years of expertise in pigment and ink manufacturing.</div>
                          </div>
                        </div>
                      </div>

                      <!-- Box 2 -->
                      <div class="col-md-6">
                        <div class="advantage-box">
                          <div class="icon-wrapper"><img src="assets/imgs/about/1/Product Range.svg"></div>
                          <div class="advantage-content">
                            <div class="title">Product Range</div>
                            <div class="text"> Organic pigments, sublimation inks, pigment dispersions, and DTF inks.
                            </div>
                          </div>
                        </div>
                      </div>

                      <!-- Box 3 -->
                      <div class="col-md-6">
                        <div class="advantage-box">
                          <div class="icon-wrapper"><img src="assets/imgs/about/1/Global Presence.svg"></div>
                          <div class="advantage-content">
                            <div class="title">Global Presence</div>
                            <div class="text">Global presence with Singapore as a strategic distribution hub.</div>
                          </div>
                        </div>
                      </div>

                      <!-- Box 4 -->
                      <div class="col-md-6">
                        <div class="advantage-box">
                          <div class="icon-wrapper"><img src="assets/imgs/about/1/Reliability & Customer-Focus.svg">
                          </div>
                          <div class="advantage-content">
                            <div class="title">Reliability & Customer-Focus</div>
                            <div class="text">Strong customer-centric approach with consistent quality and reliability.
                            </div>
                          </div>
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
      <!-- About area end -->


      <!-- Portfolio area start -->
      <section class="portfolio__area pb-140">
        <div class="container">
          <div class="row top_row">

            <h2 class="portfolio__text">work</h2>
            <div class="portfolio__list-1">
              <div class="portfolio__item">
                <a href="#"><img class="mover" src="assets/imgs/DTF T-Shirt.png" alt="Portfolio Image"></a>
                <!-- <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div> -->
              </div>
              <div class="portfolio__item">
                <a href="#"><img src="assets/imgs/Ink-mixing.png" alt="Portfolio Image"></a>
                <!-- <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div> -->
              </div>
              <div class="portfolio__item">
                <a href="#"><img src="assets/imgs/Direct to fabric.png" alt="Portfolio Image"></a>
                <!-- <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div> -->
              </div>
              <div class="portfolio__item">
                <a href="#"><img src="assets/imgs/inks.png" alt="Portfolio Image"></a>
                <!-- <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div> -->
              </div>
              <div class="portfolio__item">
                <a href="#"><img src="assets/imgs/t-shirt inks.png" alt="Portfolio Image"></a>
                <!-- <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div> -->
              </div>
              <div class="portfolio__item">
                <a href="#"><img src="assets/imgs/Printers.png" alt="Portfolio Image"></a>
                <!-- <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div> -->
              </div>

            </div>
          </div>

          <div class="row row_bottom">
            <div class="col-xxl-12">
              <div class="portfolio__btn btn_wrapper" data-speed="1" data-lag="0.2">
                <!-- <a class="wc-btn-secondary btn-hover btn-item" href="#"><span></span>View <br>all
                  projects <i class="fa-solid fa-arrow-right"></i></a> -->
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Portfolio area end -->



      <!-- Brand area start -->
      <!-- <section class="brand__area">
          <div class="container g-0 line pt-140 pb-130">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-sub-title title-anim">Internation Brands</h2>
                  <h3 class="sec-title title-anim">Companies Under the Choksi Group </h3>
                </div>
              </div>

              <div class="col-xxl-12">
                <div class="brand__list">
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/SMC-Industries-.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/Choksi-Exports-.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/Choksi-colours-1-150_100.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/Choksi-Organics-1.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/varn.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/global-nanotech.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/Choksi-colours-unit-2-22-150_100.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/Prismane6.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/indosahara.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/6.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/1.png" alt="Brand Logo">
                  </div>
                  <div class="brand__item fade_bottom">
                    <img src="assets/imgs/brand/2.png" alt="Brand Logo">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
      <!-- Brand area end -->



      <!-- Testimonial area start -->
      <!-- <section class="testimonial__area pb-130">
          <div class="container g-0 line">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-8 col-xl-8 col-lg-8 col-md-8">
                <div class="testimonial__wrapper">
                  <div class="testimonial__item item-1">
                    <div class="button modal-trigger">
                      <div class="testimonial__img b-right">
                        <img src="assets/imgs/testimonial/1/1.png" alt="Testimonial Image">
                      </div>

                      <h2 class="testimonial__title">Jessica Sherlock</h2>
                      <h3 class="testimonial__role">Manager, Oitaka</h3>
                    </div>
                  </div>
                  <div class="sec-title-wrapper text-anim">
                    <h4 class="sec-sub-title">Testimonials</h4>
                    <h5 class="sec-title title-anim">Clients <br>feedback</h5>
                    <p>Our happy customers give us impactfull and positive feedback on our services, customer supports
                      &
                      etc.</p>
                  </div>
                </div>

                <div class="testimonial__item item-2">
                  <div class="button modal-trigger-2">
                    <div class="testimonial__img b-left">
                      <img src="assets/imgs/testimonial/1/3.png" alt="Testimonial Image">
                    </div>

                    <h2 class="testimonial__title">Jessica Sherlock</h2>
                    <h3 class="testimonial__role">Manager, Oitaka</h3>
                  </div>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <div class="testimonial__item item-3 img-">
                  <div class="button modal-trigger-3">
                    <div class="testimonial__img b-left">
                      <img src="assets/imgs/testimonial/1/2.png" alt="Testimonial Image">
                    </div>

                    <h2 class="testimonial__title">adam Smith</h2>
                    <h3 class="testimonial__role">Manager, Oitaka</h3>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section> -->
      <!-- Testimonial area end -->

      <!-- Solution area start -->
      <!-- Interactive Globe section start -->
      <section class="globe__section">
        <style>
          /* ── Globe Section Layout ── */
          .globe__section {
            background: #000;
            overflow: hidden;
            padding: 100px 0;
            position: relative;
          }

          .globe__col {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            align-self: flex-start;
          }

          #globeViz {
            width: 100%;
            height: 680px;
            cursor: grab;
            display: block;
          }
          #globeViz:active { cursor: grabbing; }
          @media (max-width: 1199px) { #globeViz { height: 540px; } }
          @media (max-width: 767px)  { #globeViz { height: 360px; } }

          .globe__hint {
            display: flex;
            gap: 16px;
            align-items: center;
            color: rgba(255,255,255,0.3);
            font-family: 'Kanit', sans-serif;
            font-size: 11px;
            font-weight: 400;
            letter-spacing: 2.5px;
            text-transform: uppercase;
            margin-top: 14px;
          }
          .globe__hint .sep { opacity: 0.35; }

          .globe__legend {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 6px 24px;
            margin-top: 14px;
          }
          .globe__legend .leg-item {
            display: flex;
            align-items: center;
            gap: 8px;
            font-family: 'Kanit', sans-serif;
            font-size: 13px;
            font-weight: 400;
            color: rgba(255,255,255,0.55);
          }
          .globe__legend .leg-dot {
            width: 10px;
            height: 10px;
            border-radius: 50%;
            flex-shrink: 0;
          }

          /* ── Globe Content (right column) — inherits site typography ── */
          .globe__content {
            padding: 20px 60px 20px 30px;
          }
          .globe__content .sec-sub-title {
            color: #c9f31d;
          }
          .globe__content .sec-title-6 {
            color: #fff;
          }
          .globe__content p {
            color: rgba(255,255,255,0.6);
            font-family: 'Kanit', sans-serif;
            font-size: 16px;
            font-weight: 300;
            line-height: 1.8;
            margin-bottom: 16px;
          }
          .globe__content b { color: #fff; font-weight: 600; }

          .globe__list {
            list-style: none;
            padding: 0;
            margin: 24px 0 28px;
          }
          .globe__list li {
            display: flex;
            align-items: center;
            gap: 14px;
            font-family: 'Kanit', sans-serif;
            font-size: 15px;
            font-weight: 300;
            color: rgba(255,255,255,0.7);
            padding: 11px 0;
            border-bottom: 1px solid rgba(255,255,255,0.06);
          }
          .globe__list li::before {
            content: '';
            width: 6px;
            height: 6px;
            border-radius: 50%;
            background: #c9f31d;
            flex-shrink: 0;
          }

          /* ── Tooltip ── */
          .globe__tooltip {
            position: fixed;
            background: rgba(8,8,8,0.94);
            border: 1px solid rgba(201,243,29,0.25);
            color: #fff;
            font-family: 'Kanit', sans-serif;
            font-size: 13px;
            font-weight: 400;
            padding: 6px 14px;
            border-radius: 5px;
            pointer-events: none;
            z-index: 9999;
            display: none;
            backdrop-filter: blur(8px);
          }

          /* ── Responsive ── */
          @media (max-width: 991px) {
            .globe__section { padding: 60px 0; }
            #globeViz { height: 360px; }
            .globe__content { padding: 30px 20px 10px; }
          }
          @media (max-width: 575px) {
            #globeViz { height: 300px; }
            .globe__legend { gap: 6px 14px; }
          }
        </style>

        <div id="globe__tooltip" class="globe__tooltip"></div>

        <div class="container">
          <div class="row align-items-center">

            <!-- Globe column -->
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 globe__col">
              <div id="globeViz"></div>
              <div class="globe__hint">
                <span>Drag to Rotate</span>
                <span class="sep">·</span>
                <span>Hover to Explore</span>
              </div>
              <div class="globe__legend">
                <div class="leg-item">
                  <span class="leg-dot" style="background:#c9f31d;box-shadow:0 0 7px #c9f31d;"></span>
                  India — Manufacturing
                </div>
                <div class="leg-item">
                  <span class="leg-dot" style="background:#c9f31d;box-shadow:0 0 7px #c9f31d;"></span>
                  Singapore — Distribution Hub
                </div>
              </div>
            </div>

            <!-- Text column -->
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12">
              <div class="globe__content">
                <h2 class="sec-sub-title title-anim">Our Footprint</h2>
                <h3 class="sec-title-6 title-anim">Global Reach</h3>
                <p>From our manufacturing base in <b>India</b> to our distribution hub in <b>Singapore</b>, we ensure our clients benefit from world-class products delivered with precision and speed.</p>
                <ul class="globe__list">
                  <li>Faster deliveries to international markets</li>
                  <li>Seamless communication across time zones</li>
                  <li>Stronger local presence in key textile hubs</li>
                  <li>R&amp;D developed and quality-tested in Singapore</li>
                </ul>
                <p>Prismane6 is not just a distributor — it is an extension of Global Nanotech Pvt. Ltd., carrying forward the same values, expertise, and commitment to excellence.</p>
                <div class="btn_wrapper" style="margin-top:36px;">
                  <a class="btn-item wc-btn-primary btn-hover" href="who-we-are.php"><span></span> Learn More <i class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- Interactive Globe section end -->

      <script>
      (function() {
        var s = document.createElement('script');
        s.src = 'https://unpkg.com/globe.gl@2/dist/globe.gl.min.js';
        s.onload = initGlobe;
        document.head.appendChild(s);

        function initGlobe() {
          var LIME   = '#c9f31d';
          var LIME_A = 'rgba(201,243,29,0.88)';
          var LIME_S = 'rgba(201,243,29,0.40)';

          /* Both India and Singapore highlighted lime green */
          var HIGHLIGHT = {
            'IND': { color: LIME_A, side: LIME_S, stroke: 'rgba(201,243,29,0.9)' },
            'SGP': { color: LIME_A, side: LIME_S, stroke: 'rgba(201,243,29,0.9)' }
          };

          var tooltip = document.getElementById('globe__tooltip');
          var hovered = null;

          var PINS = [
            { lat: 20.59,  lng: 78.96,  label: 'India',     color: LIME, dotR: 2.5, size: 1.1 },
            { lat: 1.3521, lng: 103.82, label: 'Singapore', color: LIME, dotR: 2.5, size: 1.0 }
          ];

          /* Animated pulse rings — lime for both */
          var RINGS = [
            { lat: 20.59,  lng: 78.96,  color: function(){ return LIME; } },
            { lat: 1.3521, lng: 103.82, color: function(){ return LIME; } }
          ];

          /* Singapore is ~1 pixel in ne_110m; inject a scaled polygon so it shows as a country shape.
             Coordinates in counterclockwise order (GeoJSON exterior ring convention). */
          var SGP_CUSTOM = {
            type: 'Feature',
            properties: { ISO_A3: 'SGP', ADMIN: 'Singapore' },
            geometry: {
              type: 'Polygon',
              coordinates: [[
                [102.74, 0.80],[102.74, 1.18],[102.82, 1.50],[103.20, 1.73],
                [103.72, 1.88],[104.22, 1.85],[104.55, 1.65],[104.63, 1.36],
                [104.50, 1.09],[104.12, 0.87],[103.72, 0.72],[103.17, 0.70],[102.74, 0.80]
              ]]
            }
          };

          fetch('https://raw.githubusercontent.com/vasturiano/globe.gl/master/example/datasets/ne_110m_admin_0_countries.geojson')
            .then(function(r){ return r.json(); })
            .then(function(countries){

              /* Replace tiny ne_110m SGP with our scaled polygon */
              var features = countries.features.filter(function(f){ return f.properties.ISO_A3 !== 'SGP'; });
              features.push(SGP_CUSTOM);

              var el = document.getElementById('globeViz');

              var globe = Globe({ animateIn: true })(el)
                .width(el.parentElement.offsetWidth)
                .height(el.offsetHeight || 680)
                .backgroundColor('rgba(0,0,0,0)')
                .globeImageUrl('https://unpkg.com/three-globe/example/img/earth-blue-marble.jpg')
                .bumpImageUrl('https://unpkg.com/three-globe/example/img/earth-topology.png')
                .atmosphereColor(LIME)
                .atmosphereAltitude(0.22)

                /* Country fills */
                .polygonsData(features)
                .polygonAltitude(function(d){
                  var iso = d.properties.ISO_A3;
                  return HIGHLIGHT[iso] ? 0.020 : 0.006;
                })
                .polygonCapColor(function(d){
                  var h = HIGHLIGHT[d.properties.ISO_A3];
                  if (h) return h.color;
                  return d === hovered ? 'rgba(201,243,29,0.18)' : 'rgba(255,255,255,0.03)';
                })
                .polygonSideColor(function(d){
                  var h = HIGHLIGHT[d.properties.ISO_A3];
                  return h ? h.side : 'rgba(255,255,255,0.015)';
                })
                .polygonStrokeColor(function(d){
                  var h = HIGHLIGHT[d.properties.ISO_A3];
                  return h ? h.stroke : 'rgba(255,255,255,0.04)';
                })
                .polygonLabel(function(d){ return '<span style="font-family:Kanit,sans-serif;font-size:13px;">' + d.properties.ADMIN + '</span>'; })

                /* Labels */
                .labelsData(PINS)
                .labelLat('lat').labelLng('lng').labelText('label')
                .labelSize('size').labelColor('color').labelDotRadius('dotR')
                .labelDotOrientation(function(){ return 'bottom'; })
                .labelAltitude(0.025).labelResolution(3)

                /* Pulse rings */
                .ringsData(RINGS)
                .ringLat('lat').ringLng('lng')
                .ringColor('color')
                .ringMaxRadius(4).ringPropagationSpeed(1.5).ringRepeatPeriod(1200)
                .ringAltitude(0.025);

              /* Hover: highlight + pause */
              globe.onPolygonHover(function(poly) {
                hovered = poly;
                globe.polygonCapColor(function(d){
                  var h = HIGHLIGHT[d.properties.ISO_A3];
                  if (h) return h.color;
                  return d === poly ? 'rgba(201,243,29,0.18)' : 'rgba(255,255,255,0.03)';
                });
                globe.controls().autoRotateSpeed = poly ? 0 : 0.4;
                if (poly) {
                  tooltip.innerText = poly.properties.ADMIN;
                  tooltip.style.display = 'block';
                } else {
                  tooltip.style.display = 'none';
                }
              });

              document.addEventListener('mousemove', function(e){
                tooltip.style.left = (e.clientX + 14) + 'px';
                tooltip.style.top  = (e.clientY - 28) + 'px';
              });

              el.addEventListener('mouseenter', function(){ globe.controls().autoRotateSpeed = 0.12; });
              el.addEventListener('mouseleave', function(){
                globe.controls().autoRotateSpeed = 0.4;
                tooltip.style.display = 'none';
              });
              el.addEventListener('mousedown',  function(){ globe.controls().autoRotate = false; });
              el.addEventListener('touchstart', function(){ globe.controls().autoRotate = false; }, { passive: true });
              el.addEventListener('mouseup',    function(){ globe.controls().autoRotate = true; globe.controls().autoRotateSpeed = 0.4; });
              el.addEventListener('touchend',   function(){ globe.controls().autoRotate = true; globe.controls().autoRotateSpeed = 0.4; });

              /* Initial view: centred between India & Singapore so both are fully visible */
              globe.pointOfView({ lat: 10, lng: 91, altitude: 2.2 }, 0);

              globe.controls().autoRotate      = true;
              globe.controls().autoRotateSpeed = 0.4;
              globe.controls().enableZoom      = false;

              /* Lock zoom distance after first render tick */
              setTimeout(function(){
                var d = globe.camera().position.length();
                globe.controls().minDistance = d;
                globe.controls().maxDistance = d;
              }, 100);

              /* Responsive resize */
              window.addEventListener('resize', function(){
                globe.width(el.parentElement.offsetWidth);
              });
            });
        }
      })();
      </script>

      <!-- Blog area start -->
      <!-- <section class="blog__area no-pb blog__animation">
          <div class="container g-0 line pt-150 pb-140">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12 col-xl-12 col-lg-12 col-md-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-sub-title">recent blog</h2>
                  <h3 class="sec-title">News insignt</h3>
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="#">
                      <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/3.jpg" alt="">
                        <img class="image-box__item" src="assets/imgs/blog/3.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta"><a href="#">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="#" class="blog__title">Ways of lying to yourself about your new
                      relationship.</a></h5>
                  <a href="#" class="blog__btn">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="#">
                      <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/1/2.jpg" alt="">
                        <img class="image-box__item" src="assets/imgs/blog/1/2.jpg" alt="">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta"><a href="#">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="#" class="blog__title">How to manage a talented and successful de sign
                      team</a></h5>
                  <a href="#" class="blog__btn">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div>

              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <article class="blog__item">
                  <div class="blog__img-wrapper">
                    <a href="#">
                      <div class="img-box">
                        <img class="image-box__item" src="assets/imgs/blog/1/3.jpg" alt="Blog Thumbnail">
                        <img class="image-box__item" src="assets/imgs/blog/1/3.jpg" alt="BLog Thumbnail">
                      </div>
                    </a>
                  </div>
                  <h4 class="blog__meta"><a href="#">UI Design</a> . 02 May 2019</h4>
                  <h5><a href="#" class="blog__title">How to bring fold to your startup company with
                      Axtra</a></h5>
                  <a href="#" class="blog__btn">Read More <span><i
                        class="fa-solid fa-arrow-right"></i></span></a>
                </article>
              </div>
            </div>
          </div>
        </section> -->
      <!-- Blog area end -->


      <!-- CTA area start -->
      <section class="cta__area">
        <div class="container line pb-110 pt-110">
          <div class="line-3"></div>
          <div class="row">
            <div class="col-xxl-12">
              <div class="cta__content">
                <p class="cta__sub-title">Work with us</p>
                <h2 class="cta__title title-anim">We would love to hear more about your project</h2>
                <div class="btn_wrapper">
                  <a href="connect.php" class="wc-btn-primary btn-hover btn-item"><span></span>Let’s talk us <i
                      class="fa-solid fa-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- CTA area end -->

    </main>

    <?php include("footer.php"); ?>