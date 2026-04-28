<?php include "header-top.php"; ?>
<meta name="robots" content="noindex,nofollow">
<style>
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
  }

  .floating-lion.is-active {
    opacity: 0.4;
    visibility: visible;
  }

  .floating-lion__image {
    width: 100%;
    height: 100%;
    background-image: url('./assets/imgs/Lion-prismane.webp');
    background-repeat: no-repeat;
    background-position: right center;
    background-size: contain;
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
      <section class="hero__about black-section">
          <div class="container g-0 line">
            <span class="line-3"></span>
            <div class="row">
              <div class="col-xxl-12">
                <div class="hero__about-content">
                  <h1 class="hero-title animation__word_come">Our Story</h1>
                  <div class="hero__about-info">
                    <div class="hero__about-btn">
                      <div class="btn_wrapper">
                        <a href="connect" class="wc-btn-primary btn-hover btn-item"><span></span> Contact Us<br>
                         
                          <i class="fa-solid fa-arrow-right"></i></a>
                      </div>
                    </div>
                    <div class="hero__about-text title-anim">
                      <p>Every colour has a performance story behind it. At <a href="#" style="color: #bae800; font-weight: 500; text-decoration: none;">PRISMANE6</a>, we engineer pigment dispersions and ink solutions that deliver consistency, stability, and precision across applications. Since 2013, we have helped manufacturers translate colour intent into reliable, repeatable results.</p>
                    </div>
                    <div class="hero__about-award">
                      <img src="assets/imgs/Dripping-ink.webp" alt="Drippping-ink">
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row hero__about-row">
              <div class="col-xxl-12">
                <div class="hero__about-video">
                  <video loop muted autoplay playsinline>
                    <source src="assets/video/Fabric-textile-about-us-final.webm" type="video/mp4">
                  </video>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- Hero area end -->

      <!-- Story area start -->
      <section class="story__area white-section">
          <div class="container g-0 line pt-140 pb-140">
            <span class="line-3"></span>
            <div class="sec-title-wrapper">
              <!-- <div class="from-text">from <span>1990</span></div> -->

              <div class="row">
                <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                  <h2 class="sec-sub-title title-anim">Process-Driven Manufacturing</h2>
                  <h3 class="sec-title title-anim">Our story</h3>
                </div>
                <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                  <div class="story__text">
                    <p>
                      <a href="#" style="color: #bae800; font-weight: 500; text-decoration: none;">PRISMANE6</a> was founded with a clear purpose — to bring precision, consistency, and performance to pigment dispersion and ink manufacturing. What began as a focused manufacturing unit has grown into a trusted partner for ink producers across textile, digital printing, writing instruments, and specialised industrial applications.
                    </p>
                    <p>
                      Since 2013, we have worked closely with manufacturers who demand more than colour — they need repeatability, stability, and process reliability. Our journey has been shaped by real-world production challenges, driving us to engineer dispersions that perform consistently across batches, substrates, and printing conditions.
                    </p>
                  </div>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-3">
                <div class="story__img-wrapper">
                  <img src="assets/imgs/Fabric-printing.webp" alt="Fabric-printing" class="w-100">
                </div>
              </div>
              <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                <div class="story__img-wrapper img-anim">
                  <img src="assets/imgs/Products-about-us.webp" alt="Products-about-us" data-speed="auto">
                </div>
              </div>
              <div class="col-xxl-4 col-xl-4 col-lg-4 col-md-4">
                <div class="story__img-wrapper">
                  <img src="assets/imgs/Fabric-&-inks.webp" alt="Fabric-&-inks">
                  <img src="assets/imgs/pink-ink.webp" alt="pink-ink">
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- Story area end -->

      <!-- Counter area start -->
      <!-- <section class="counter__area">
          <div class="container g-0 line pb-140 pt-140">
            <span class="line-3"></span>

            <div class="row">
              <div class="col-xxl-12">
                <div class="counter__wrapper-2 counter_animation">
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">25k</h2>
                    <p>Established <br>Year</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">8k</h2>
                    <p>Product <br>Formulations Developed</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">15</h2>
                    <p>Industry <br>Applications</p>
                    <span class="counter__border"></span>
                  </div>
                  <div class="counter__item-2 counter__anim">
                    <h2 class="counter__number">98</h2>
                    <p>Manufacturing <br>Reach</p>
                    <span class="counter__border"></span>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section> -->
      <!-- Counter area end -->

      <!-- Team area start -->
      <section class="team__area pt-140 pb-140 white-section">
          <div class="sec-title-wrapper">
            <!-- <h2 class="sec-sub-title title-anim">Our Team</h2> -->
            <h3 class="sec-title title-anim">Our Work</h3>
          </div>


          <div class="swiper team__slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide team__slide">
                <!-- <a href="team-details.html"> -->
                  <img src="assets/imgs/t-shirt.webp" alt="Team Member">
                  <div class="team__info">
                    <!-- <h4 class="team__member-name">Saymon D. Halk</h4>
                    <h5 class="team__member-role">Founder & CEO</h5> -->
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <!-- <a href="team-details.html"> -->
                  <img src="assets/imgs/Ink-display.webp" alt="Ink-display">
                  <div class="team__info">
                    <!-- <h4 class="team__member-name">Jassica Oliver</h4>
                    <h5 class="team__member-role">Researcher</h5> -->
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <!-- <a href="team-details.html"> -->
                  <img src="assets/imgs/Denim-fabric.webp" alt="Denim-fabric">
                  <div class="team__info">
                    <!-- <h4 class="team__member-name">Daniyel Adamson</h4>
                    <h5 class="team__member-role">Digital Marketer</h5> -->
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <!-- <a href="team-details.html"> -->
                  <img src="assets/imgs/Ink-dripping-about-us.webp" alt="Ink-dripping-about-us">
                  <div class="team__info">
                    <!-- <h4 class="team__member-name">Hardiya Kethrine</h4>
                    <h5 class="team__member-role">Lead Designer</h5> -->
                  </div>
                </a>
              </div>

              <div class="swiper-slide team__slide">
                <!-- <a href="team-details.html"> -->
                  <img src="assets/imgs/Ink-splash-about-us.webp" alt="Ink-splash-about-us">
                  <div class="team__info">
                    <!-- <h4 class="team__member-name">Jassica Oliver</h4>
                    <h5 class="team__member-role">Lead Designer</h5> -->
                  </div>
                </a>
              </div>
            </div>
          </div>
      </section>
      <!-- Team area end -->

      <!-- Brand area start -->
      <!-- <section class="brand__area">
          <div class="container g-0 line pt-140 pb-140">
            <span class="line-3"></span>
            <div class="row g-0">
              <div class="col-xxl-12">
                <div class="sec-title-wrapper">
                  <h2 class="sec-sub-title title-anim">Global Partnerships</h2>
                  <h3 class="sec-title title-anim">Trusted by Leading Brands Worldwide</h3>
                </div>
              </div>

              <div class="brand__list">
                <div class="brand__item fade_bottom">
                  <img src="assets/imgs/brand/1.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="assets/imgs/brand/2.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="assets/imgs/brand/3.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="assets/imgs/brand/4.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="assets/imgs/brand/5.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="assets/imgs/brand/6.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="assets/imgs/brand/3.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="assets/imgs/brand/4.png" alt="Brand Logo">
                </div>
                <div class="brand__item fade_bottom">
                  <img src="assets/imgs/brand/5.png" alt="Brand Logo">
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
      </section> -->
      <!-- Brand area end -->

      <!-- Testimonial area start -->
      <section class="testimonial__area-2 white-section">
          <div class="container g-0 line pb-140 pt-140">
            <span class="line-3"></span>

            <div class="row g-0">
              <div class="col-xxl-5 col-xl-5 col-lg-5 col-md-5">
                <div class="testimonial__video">
                  <video autoplay muted loop>
                    <source src="assets/video/Testimonial-video.webm" type="video/mp4">
                  </video>
                </div>
              </div>

              <div class="col-xxl-7 col-xl-7 col-lg-7 col-md-7">
                <div class="testimonial__slider-wrapper-2">
                  <div class="swiper testimonial__slider">
                    <div class="swiper-wrapper">

                      <div class="swiper-slide testimonial__slide">
                        <div class="testimonial__inner-2">
                          <h2 class="testimonial__title-2">High-Performance Digital Ink Solutions</h2>
                          <p class="testimonial__text-2">Delivering precision-driven digital inks and colour solutions with consistent quality, advanced R&D, and reliable global supply—backed by trusted partnerships and engineered for real-world industrial performance.</p>
                          <!-- <h3 class="testimonial__author">Adam Syndera</h3>
                          <h4 class="testimonial__role">CEO, Agency</h4> -->
                        </div>
                      </div>

                      <!-- <div class="swiper-slide testimonial__slide">
                        <div class="testimonial__inner-2">
                          <h2 class="testimonial__title-2">Amazing digital service</h2>
                          <p class="testimonial__text-2">We were there right at the beginning just when the concept
                            for
                            search
                            engine optimisation taking office and the full of internet. So wewe’ve grown to employ
                            than 50
                            talented specialists with diverse experiences and broad skill sets of huge markers.</p>
                          <h3 class="testimonial__author">Adam Syndera</h3>
                          <h4 class="testimonial__role">CEO, Agency</h4>
                        </div>
                      </div> -->

                      <!-- <div class="swiper-slide testimonial__slide">
                        <div class="testimonial__inner-2">
                          <h2 class="testimonial__title-2">Amazing digital service</h2>
                          <p class="testimonial__text-2">We were there right at the beginning just when the concept
                            for
                            search
                            engine optimisation taking office and the full of internet. So wewe’ve grown to employ
                            than 50
                            talented specialists with diverse experiences and broad skill sets of huge markers.</p>
                          <h3 class="testimonial__author">Adam Syndera</h3>
                          <h4 class="testimonial__role">CEO, Agency</h4>
                        </div>
                      </div> -->

                    </div>
                  </div>

                  <div class="testimonial__pagination">
                    <!-- <div class="prev-button"><i class="fa-solid fa-arrow-right"></i></div>
                    <div class="next-button"><i class="fa-solid fa-arrow-left"></i></div> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- Testimonial area end -->

      <!-- CTA area start -->
      <section class="cta__area white-section">
          <div class="container line pb-110 dark-p">
            <div class="line-3"></div>
            <div class="row">
              <div class="col-xxl-12">
                <div class="cta__content">
                  <p class="cta__sub-title">WORK WITH US</p>
                  <h2 class="cta__title title-anim">Let’s discuss your formulation requirements</h2>
                  <div class="btn_wrapper">
                    <a href="connect" class="wc-btn-primary btn-hover btn-item"><span></span>Let's talk us <i
                        class="fa-solid fa-arrow-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </section>
      <!-- CTA area end -->

    </main>
    <script>
      window.addEventListener('DOMContentLoaded', function() {
        const lion = document.querySelector('.floating-lion');
        const firstWhiteSection = document.querySelector('.white-section');
        const footerSection = document.querySelector('.footer__area');

        if (!lion || !firstWhiteSection || !footerSection || !('IntersectionObserver' in window)) return;

        let hasPassedFirstWhiteSection = false;
        let isFooterVisible = false;

        const syncLionState = function() {
          lion.classList.toggle('is-active', hasPassedFirstWhiteSection && !isFooterVisible);
        };

        const firstSectionObserver = new IntersectionObserver(function(entries) {
          const entry = entries[0];
          hasPassedFirstWhiteSection = entry.boundingClientRect.top <= 0;
          syncLionState();
        }, {
          root: null,
          threshold: 0,
          rootMargin: '0px 0px -99% 0px'
        });

        const footerObserver = new IntersectionObserver(function(entries) {
          isFooterVisible = entries[0].isIntersecting;
          syncLionState();
        }, {
          root: null,
          threshold: 0
        });

        firstSectionObserver.observe(firstWhiteSection);
        footerObserver.observe(footerSection);
      });
    </script>
    <?php include "footer.php"; ?>
