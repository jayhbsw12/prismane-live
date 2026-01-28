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
          <source src="./assets/video/Comp 1_1.mp4" type="video/mp4">
        </video>
        <div class="overlay"></div>

        <div class="container">
          <div class="row">
            <div class="col-xxl-12">
              <div class="hero__content animation__hero_one">
                <div class="hero__title-wrapper">
                  <h1 class="hero__title">LISTEN TO YOUR COLORS</h1>
                  <p class="hero__sub-title">For Your Professional Color Solutions</span>
                    sunt in culpa
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
                <h3 class="sec-title title-anim" style="color: black !important;">Welcome to <br>Prismane6 Pte Ltd</h3>
              </div>

              <div class="about__content-wrapper">
                <div class="about__img">
                  <div class="img-anim">
                    <img src="assets/imgs/about/1/ink-fill.webp" alt="About Image" data-speed="0.3">
                  </div>

                  <div class="about__img-right">
                    <img src="assets/imgs/about/1/ink.webp" alt="About Image Right" data-speed="0.5">
                    <div class="shape">
                      <div class="secondary" data-speed="0.9"></div>
                      <div class="primary"></div>
                    </div>
                  </div>
                </div>

                <div class="about__content text-anim">
                  <p><b></b></p>
                  <p>Prismane6 Pte Ltd, based in Singapore, is the international branch of <span
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
                  </p>

                  <div class="cursor-btn btn_wrapper">
                    <a class="btn-item wc-btn-primary btn-hover" href="#"><span></span> Explore Us <i
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
                  <a href="#" class="btn-item wc-btn-secondary btn-hover"><span></span> View <br>all
                    Products <i class="fa-solid fa-arrow-right"></i></a>
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
                  <a href="#">
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

                  <a href="#">
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

                  <a href="#">
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

                  <a href="#">
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

                  <a href="#">
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

                  <a href="#">
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

                  <a href="#">
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
      <section class="counter__area">
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
      </section>
      <!-- Counter area end -->


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
                    <h6 class="workflow__title">Audience</h6>
                    <p>Having these the marketplace to your business</p>
                  </div>

                  <div class="swiper-slide workflow__slide fade_left">
                    <h4 class="workflow__step">step 02</h4>
                    <h5 class="workflow__number">02</h5>
                    <h6 class="workflow__title">Plan & Sketch</h6>
                    <p>Delicate and long-lasting with vitamins and nutritions</p>
                  </div>

                  <div class="swiper-slide workflow__slide fade_left">
                    <h4 class="workflow__step">step 03</h4>
                    <h5 class="workflow__number">03</h5>
                    <h6 class="workflow__title">Customize</h6>
                    <p>Creating brand identities for the digital experiences</p>
                  </div>

                  <div class="swiper-slide workflow__slide fade_left">
                    <h4 class="workflow__step">step 04</h4>
                    <h5 class="workflow__number">04</h5>
                    <h6 class="workflow__title">User Testing</h6>
                    <p>We look forward to engage with beyond the conventional</p>
                  </div>

                  <div class="swiper-slide workflow__slide fade_left">
                    <h4 class="workflow__step">step 05</h4>
                    <h5 class="workflow__number">05</h5>
                    <h6 class="workflow__title">User Testing</h6>
                    <p>We look forward to engage with beyond the conventional</p>
                  </div>

                  <div class="swiper-slide workflow__slide fade_left">
                    <h4 class="workflow__step">step 06</h4>
                    <h5 class="workflow__number">06</h5>
                    <h6 class="workflow__title">User Testing</h6>
                    <p>We look forward to engage with beyond the conventional</p>
                  </div>
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
                  <p>At Prismane6, we represent not just products, but the <span class="green-text">trust and values of
                      Global Nanotech
                      Pvt. Ltd. </span>Together, we aim to create stronger connections with customers worldwide while
                    driving innovation in the ink and pigment industry.</p>
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
                <a href="#"><img class="mover" src="assets/imgs/portfolio/1/work 1.webp" alt="Portfolio Image"></a>
                <!-- <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div> -->
              </div>
              <div class="portfolio__item">
                <a href="#"><img src="assets/imgs/portfolio/1/work 2.webp" alt="Portfolio Image"></a>
                <!-- <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div> -->
              </div>
              <div class="portfolio__item">
                <a href="#"><img src="assets/imgs/portfolio/1/work 3.webp" alt="Portfolio Image"></a>
                <!-- <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div> -->
              </div>
              <div class="portfolio__item">
                <a href="#"><img src="assets/imgs/portfolio/1/work 4.webp" alt="Portfolio Image"></a>
                <!-- <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div> -->
              </div>
              <div class="portfolio__item">
                <a href="#"><img src="assets/imgs/portfolio/1/work 5.webp" alt="Portfolio Image"></a>
                <!-- <div class="portfolio__info">
                    <h3 class="portfolio__title">Arteck Lyon Conseil</h3>
                    <p>02 May 2021</p>
                  </div> -->
              </div>
              <div class="portfolio__item">
                <a href="#"><img src="assets/imgs/portfolio/1/work 6.webp" alt="Portfolio Image"></a>
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
                <a class="wc-btn-secondary btn-hover btn-item" href="#"><span></span>View <br>all
                  projects <i class="fa-solid fa-arrow-right"></i></a>
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
      <section class="solution__area-4">
        <div class="container">
          <div class="row">
            <div class="col-xxl-5 offset-xxl-7 col-xl-5 offset-xl-7 col-lg-6 offset-lg-6 col-md-6 offset-md-6">
              <div class="solution__content">
                <!-- <h2 class="sec-subtile-6">Approch</h2> -->
                <h3 class="sec-title-6 title-anim">Global Reach</h3>
                <p>From our manufacturing base in <b>India</b> to our distribution hub in <b>Singapore</b>, we ensure
                  our
                  clients benefit from:</p>
                <ul class="solution__list title-anim">
                  <li> Faster deliveries </li>
                  <li> Seamless communication </li>
                  <li> Stronger local presence </li>
                </ul>
                <p style="margin-top: 20px;"> Prismane6 is not just a distributor – it is an extension of Global
                  Nanotech Pvt. Ltd.,
                  carrying forward the same values, expertise, and commitment to excellence.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Solution area end -->

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
                  <a href="#" class="wc-btn-primary btn-hover btn-item"><span></span>Let’s talk us <i
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