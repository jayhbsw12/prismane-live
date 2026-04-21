<?php include("header-top.php"); ?>
<meta name="description" content="Prismane6 launches Pigment Inks for Ricoh Gen6 – Direct to Fabric printing. 8 vibrant colors: Cyan, Magenta, Yellow, Black, Red, Green, Violet, Orange.">
<?php include("header.php"); ?>

<style>
  /* ── Launch Hero ── */
  .launch__hero {
    background: #000;
    position: relative;
    overflow: hidden;
    padding: 140px 0 80px;
    min-height: 100vh;
    display: flex;
    align-items: center;
  }

  .launch__hero::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 70% 50%, rgba(201, 243, 29, 0.07) 0%, transparent 65%),
                radial-gradient(ellipse at 20% 80%, rgba(180, 60, 255, 0.08) 0%, transparent 50%);
    pointer-events: none;
  }

  .launch__badge {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    background: #c9f31d;
    color: #000;
    font-weight: 700;
    font-size: 13px;
    letter-spacing: 2px;
    text-transform: uppercase;
    padding: 8px 20px;
    border-radius: 100px;
    margin-bottom: 30px;
  }

  .launch__badge span {
    width: 8px;
    height: 8px;
    background: #000;
    border-radius: 50%;
    animation: pulse-dot 1.4s ease-in-out infinite;
  }

  @keyframes pulse-dot {
    0%, 100% { transform: scale(1); opacity: 1; }
    50% { transform: scale(1.5); opacity: 0.6; }
  }

  .launch__title {
    font-size: 100px;
    font-weight: 500;
    line-height: 1;
    color: #ffffff;
    /* background: linear-gradient(135deg, #d4a84b 0%, #f5d98c 40%, #c8a85a 70%, #a07830 100%); */
    -webkit-background-clip: text;
    /* -webkit-text-fill-color: transparent; */
    background-clip: text;
    margin-bottom: 16px;
  }

  .launch__sub-title {
    font-size: clamp(22px, 3.5vw, 42px);
    font-weight: 400;
    color: #fff;
    line-height: 1.3;
    margin-bottom: 16px;
  }

  .launch__sub-title span {
    color: ccc
  }

  .launch__desc {
    font-size: 18px;
    color: rgba(255,255,255,0.65);
    max-width: 520px;
    line-height: 1.7;
    margin-bottom: 40px;
  }

  .launch__dtf-badge {
    display: inline-block;
    /* background: linear-gradient(135deg, #c8a85a, #f5d98c, #c8a85a); */
    background-color: #c9f31d;
    color: #000000;
    font-weight: 900;
    font-size: clamp(16px, 2vw, 22px);
    letter-spacing: 3px;
    text-transform: uppercase;
    padding: 14px 40px;
    border-radius: 8px;
    margin-bottom: 40px;
  }

  .launch__contact {
    display: flex;
    gap: 30px;
    flex-wrap: wrap;
    align-items: center;
    margin-top: 10px;
  }

  .launch__contact a {
    color: rgba(255,255,255,0.7);
    font-size: 15px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s;
  }

  .launch__contact a:hover { color: #c9f31d; }

  .launch__hero-img {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .launch__hero-img img {
    width: 100%;
    max-width: 420px;
    border-radius: 16px;
    filter: drop-shadow(0 30px 80px rgba(201, 243, 29, 0.15));
  }

  /* ── Color Ticker ── */
  .color__ticker {
    background: #0a0a0a;
    border-top: 1px solid rgba(255,255,255,0.06);
    border-bottom: 1px solid rgba(255,255,255,0.06);
    padding: 18px 0;
    overflow: hidden;
    white-space: nowrap;
  }

  .color__ticker-inner {
    display: inline-flex;
    gap: 150px;
    animation: ticker-scroll 20s linear infinite;
  }

  @keyframes ticker-scroll {
    from { transform: translateX(0); }
    to   { transform: translateX(-50%); }
  }

  .color__ticker-item {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    font-size: 15px;
    font-weight: 600;
    letter-spacing: 1.5px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.5);
  }

  .color__ticker-dot {
    width: 12px;
    height: 12px;
    border-radius: 50%;
    flex-shrink: 0;
  }

  /* ── Colors Section ── */
  .launch__colors {
    background: #050505;
    padding: 100px 0 110px;
  }

  .section__eyebrow {
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 3px;
    text-transform: uppercase;
    color: #c9f31d;
    margin-bottom: 16px;
    display: block;
  }

  .section__title-white {
    font-size: 50px;
    font-weight: 600;
    color: #fff;
    line-height: 1.1;
    margin-bottom: 20px;
  }

  .section__title-white span {
    background: #fff;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    background-clip: text;
  }

  .section__lead {
    font-size: 17px;
    color: rgba(255,255,255,0.55);
    max-width: 560px;
    line-height: 1.75;
    margin-bottom: 60px;
  }

  .ink__grid {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 16px;
  }

  @media (max-width: 991px) { .ink__grid { grid-template-columns: repeat(4, 1fr); } }
  @media (max-width: 575px) { .ink__grid { grid-template-columns: repeat(2, 1fr); } }

  .ink__card {
    background: #111;
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 16px;
    padding: 28px 20px 24px;
    text-align: center;
    transition: transform 0.35s ease, border-color 0.35s ease, box-shadow 0.35s ease;
    cursor: default;
  }

  .ink__card:hover {
    transform: translateY(-8px);
    border-color: var(--card-color);
    box-shadow: 0 20px 60px -10px rgba(0,0,0,0.6), 0 0 0 1px var(--card-color);
  }

  .ink__swatch {
    width: 64px;
    height: 64px;
    border-radius: 50%;
    margin: 0 auto 18px;
    background: var(--card-color);
    box-shadow: 0 8px 30px -4px var(--card-color);
    transition: box-shadow 0.35s ease;
  }

  .ink__card:hover .ink__swatch {
    box-shadow: 0 12px 40px -4px var(--card-color);
  }

  .ink__label {
    font-size: 13px;
    font-weight: 700;
    letter-spacing: 2px;
    text-transform: uppercase;
    color: rgba(255,255,255,0.85);
  }

  /* ── Features ── */
  .launch__features {
    background: #000;
    padding: 100px 0 110px;
    position: relative;
    overflow: hidden;
  }

  .launch__features::before {
    content: "";
    position: absolute;
    width: 600px;
    height: 600px;
    border-radius: 50%;
    background: radial-gradient(circle, rgba(201,243,29,0.05) 0%, transparent 70%);
    left: -200px;
    top: 50%;
    transform: translateY(-50%);
    pointer-events: none;
  }

  .feature__grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 24px;
    margin-top: 60px;
  }

  @media (max-width: 767px) { .feature__grid { grid-template-columns: 1fr; } }
  @media (max-width: 991px) and (min-width: 768px) { .feature__grid { grid-template-columns: repeat(2, 1fr); } }

  .feature__card {
    background: #0d0d0d;
    border: 1px solid rgba(255,255,255,0.07);
    border-radius: 16px;
    padding: 36px 30px;
    transition: border-color 0.3s, transform 0.3s;
  }

  .feature__card:hover {
    border-color: rgba(201,243,29,0.3);
    transform: translateY(-4px);
  }

  .feature__icon {
    width: 54px;
    height: 54px;
    background: rgba(201,243,29,0.1);
    border-radius: 12px;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom: 24px;
    font-size: 22px;
    color: #c9f31d;
  }

  .feature__card h4 {
    font-size: 18px;
    font-weight: 700;
    color: #fff;
    margin-bottom: 12px;
  }

  .feature__card p {
    font-size: 15px;
    color: rgba(255,255,255,0.5);
    line-height: 1.7;
    margin: 0;
  }

  /* ── Product Showcase ── */
  .launch__showcase {
    background: #050505;
    padding: 100px 0 110px;
  }

  .showcase__visual {
    position: relative;
    border-radius: 20px;
    overflow: hidden;
  }

  .showcase__visual img {
    width: 100%;
    height: 540px;
    object-fit: cover;
    border-radius: 20px;
    filter: brightness(0.85);
  }

  .showcase__overlay {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    background: linear-gradient(transparent, rgba(0,0,0,0.8));
    padding: 40px 30px 30px;
    border-radius: 0 0 20px 20px;
  }

  .showcase__overlay h3 {
    color: #fff;
    font-size: 22px;
    font-weight: 700;
    margin: 0;
  }

  .showcase__overlay p {
    color: rgba(255,255,255,0.65);
    font-size: 14px;
    margin: 6px 0 0;
  }

  .specs__list {
    list-style: none;
    padding: 0;
    margin: 0 0 40px;
  }

  .specs__list li {
    display: flex;
    align-items: flex-start;
    gap: 14px;
    padding: 18px 0;
    border-bottom: 1px solid rgba(255,255,255,0.07);
    color: rgba(255,255,255,0.75);
    font-size: 16px;
  }

  .specs__list li:last-child { border-bottom: none; }

  .specs__list li i {
    color: #c9f31d;
    margin-top: 3px;
    flex-shrink: 0;
    font-size: 14px;
  }

  .specs__list li strong {
    color: #fff;
    display: block;
    font-size: 15px;
    margin-bottom: 2px;
  }

  /* ── CTA Banner ── */
  .launch__cta {
    background: linear-gradient(135deg, #0d0d0d 0%, #111 50%, #0d0d0d 100%);
    border-top: 1px solid rgba(255,255,255,0.07);
    border-bottom: 1px solid rgba(255,255,255,0.07);
    padding: 90px 0;
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .launch__cta::before {
    content: "";
    position: absolute;
    inset: 0;
    background: radial-gradient(ellipse at 50% 100%, rgba(201,243,29,0.06) 0%, transparent 60%);
    pointer-events: none;
  }

  .launch__cta h2 {
    font-size: clamp(32px, 5vw, 60px);
    font-weight: 700;
    color: #fff;
    margin-bottom: 16px;
  }

  .launch__cta p {
    font-size: 18px;
    color: rgba(255,255,255,0.55);
    margin-bottom: 40px;
  }

  .launch__cta-btns {
    display: flex;
    gap: 16px;
    justify-content: center;
    flex-wrap: wrap;
  }

  .btn-launch-primary {
    background: #c9f31d;
    color: #000;
    font-weight: 700;
    font-size: 15px;
    padding: 15px 36px;
    border-radius: 6px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: background 0.3s, transform 0.3s;
  }

  .btn-launch-primary:hover {
    background: #d8ff30;
    transform: translateY(-2px);
    color: #000;
    text-decoration: none;
  }

  .btn-launch-outline {
    border: 1.5px solid rgba(255,255,255,0.25);
    color: #fff;
    font-weight: 600;
    font-size: 15px;
    padding: 15px 36px;
    border-radius: 6px;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 10px;
    transition: border-color 0.3s, transform 0.3s;
  }

  .btn-launch-outline:hover {
    border-color: #c9f31d;
    color: #c9f31d;
    transform: translateY(-2px);
    text-decoration: none;
  }

  /* ── Address Strip ── */
  .launch__address {
    background: #000;
    padding: 40px 0;
    border-bottom: 1px solid rgba(255,255,255,0.07);
  }

  .address__inner {
    display: flex;
    align-items: center;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
  }

  .address__logo img { height: 34px; }

  .address__info {
    display: flex;
    gap: 36px;
    flex-wrap: wrap;
  }

  .address__info a,
  .address__info span {
    color: rgba(255,255,255,0.5);
    font-size: 14px;
    text-decoration: none;
    display: flex;
    align-items: center;
    gap: 8px;
    transition: color 0.3s;
  }

  .address__info a:hover { color: #c9f31d; }

  .address__info i { color: #c9f31d; font-size: 13px; }

  /* Responsive tweaks */
  @media (max-width: 991px) {
    .launch__hero { padding: 120px 0 60px; min-height: auto; }
    .launch__hero-img { margin-top: 50px; }
  }
</style>

<div id="smooth-wrapper">
  <div id="smooth-content">
    <main>

      <!-- ── Hero Banner ── -->
      <section class="launch__hero">
        <div class="container">
          <div class="row align-items-center">

            <div class="col-xxl-6 col-xl-6 col-lg-6">
              <div class="launch__badge">
                <span></span> New Product Launch
              </div>

              <h1 class="launch__title">Launched!</h1>
              <h2 class="launch__sub-title">Our Pigment Inks for<br><span>Ricoh Gen6</span></h2>
              <p class="launch__desc">High-performance pigment inks engineered for Ricoh Gen6 printheads — delivering vibrant, consistent colour directly onto fabric.</p>

              <div class="launch__dtf-badge">Direct to Fabric</div>

              <!-- <div class="launch__contact">
                <a href="tel:+6580103613"><i class="fa-solid fa-phone"></i> +65 8010 3613</a>
                <a href="http://www.prismane6.com" target="_blank"><i class="fa-solid fa-globe"></i> www.prismane6.com</a>
              </div> -->
            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6">
              <div class="launch__hero-img">
                <img src="assets/imgs/flyer front back (option).webp" alt="Prismane6 Pigment Inks for Ricoh Gen6">
              </div>
            </div>

          </div>
        </div>
      </section>
      <!-- ── Hero Banner End ── -->


      <!-- ── Color Ticker ── -->
      <div class="color__ticker">
        <div class="color__ticker-inner">
          <!-- first set -->
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#00B4D8"></span>Cyan</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#E91E8C"></span>Magenta</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#FFD600"></span>Yellow</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#1a1a1a;border:1px solid #444"></span>Black</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#E53935"></span>Red</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#43A047"></span>Green</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#7B1FA2"></span>Violet</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#FB8C00"></span>Orange</span>
          <!-- duplicate for seamless loop -->
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#00B4D8"></span>Cyan</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#E91E8C"></span>Magenta</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#FFD600"></span>Yellow</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#1a1a1a;border:1px solid #444"></span>Black</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#E53935"></span>Red</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#43A047"></span>Green</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#7B1FA2"></span>Violet</span>
          <span class="color__ticker-item"><span class="color__ticker-dot" style="background:#FB8C00"></span>Orange</span>
        </div>
      </div>
      <!-- ── Color Ticker End ── -->


      <!-- ── 8-Color Palette ── -->
      <section class="launch__colors">
        <div class="container">
          <div class="row">
            <div class="col-xxl-10 col-xl-10 col-lg-10">
              <span class="section__eyebrow">Full Colour Range</span>
              <h2 class="section__title-white">8 Vibrant Colours.<br><span>One Superior Formula.</span></h2>
              <p class="section__lead">Every colour in the LEON INK range is precision-engineered for Ricoh Gen6 — achieving outstanding wash fastness, brightness, and fabric adhesion in Direct-to-Fabric printing.</p>
            </div>
          </div>

          <div class="ink__grid">

            <div class="ink__card" style="--card-color: #00B4D8">
              <div class="ink__swatch"></div>
              <div class="ink__label">Cyan</div>
            </div>

            <div class="ink__card" style="--card-color: #E91E8C">
              <div class="ink__swatch"></div>
              <div class="ink__label">Magenta</div>
            </div>

            <div class="ink__card" style="--card-color: #FFD600">
              <div class="ink__swatch"></div>
              <div class="ink__label">Yellow</div>
            </div>

            <div class="ink__card" style="--card-color: #555555">
              <div class="ink__swatch" style="background: linear-gradient(135deg,#333,#666);box-shadow:0 8px 30px -4px #444;"></div>
              <div class="ink__label">Black</div>
            </div>

            <div class="ink__card" style="--card-color: #E53935">
              <div class="ink__swatch"></div>
              <div class="ink__label">Red</div>
            </div>

            <div class="ink__card" style="--card-color: #43A047">
              <div class="ink__swatch"></div>
              <div class="ink__label">Green</div>
            </div>

            <div class="ink__card" style="--card-color: #7B1FA2">
              <div class="ink__swatch"></div>
              <div class="ink__label">Violet</div>
            </div>

            <div class="ink__card" style="--card-color: #FB8C00">
              <div class="ink__swatch"></div>
              <div class="ink__label">Orange</div>
            </div>

          </div>
        </div>
      </section>
      <!-- ── 8-Color Palette End ── -->


    <!-- ── Product Showcase ── -->
      <section class="launch__showcase">
        <div class="container">
          <div class="row align-items-center g-5">

            <div class="col-xxl-6 col-xl-6 col-lg-6">
              <div class="showcase__visual">
                <img src="assets/imgs/umbrella solutions.png" alt="Direct to Fabric Printing with Prismane6 Pigment Inks">
                <div class="showcase__overlay">
                  <h3>Direct to Fabric Technology</h3>
                  <p>Ricoh Gen6 · Prismane6 LEON INK Series</p>
                </div>
              </div>
            </div>

            <div class="col-xxl-6 col-xl-6 col-lg-6">
              <span class="section__eyebrow">Product Specifications</span>
              <h2 class="section__title-white" style="font-size: clamp(28px, 4vw, 48px); margin-bottom: 32px;">LEON INK Series<br><span>for Ricoh Gen6</span></h2>

              <ul class="specs__list">
                <li>
                  <i class="fa-solid fa-check"></i>
                  <div>
                    <strong>Printhead Compatibility</strong>
                    Ricoh Gen6 — all variants
                  </div>
                </li>
                <li>
                  <i class="fa-solid fa-check"></i>
                  <div>
                    <strong>Printing Method</strong>
                    Direct to Fabric (DTF) — no transfer film
                  </div>
                </li>
                <!-- <li>
                  <i class="fa-solid fa-check"></i>
                  <div>
                    <strong>Colour Set</strong>
                    8 colours — C, M, Y, K, Red, Green, Violet, Orange
                  </div>
                </li> -->
                <li>
                  <i class="fa-solid fa-check"></i>
                  <div>
                    <strong>Fabric Types</strong>
                    Cotton, polyester blends, natural and synthetic fibres
                  </div>
                </li>
                <li>
                  <i class="fa-solid fa-check"></i>
                  <div>
                    <strong>Quality Standard</strong>
                    International grade, R&D developed in Singapore
                  </div>
                </li>
                <li>
                  <i class="fa-solid fa-check"></i>
                  <div>
                    <strong>Availability</strong>
                    Distributed globally from Singapore hub
                  </div>
                </li>
              </ul>

              <!-- <div class="launch__contact">
                <a href="tel:+6580103613" style="font-size:16px"><i class="fa-solid fa-phone"></i> +65 8010 3613</a>
                <a href="http://www.prismane6.com" target="_blank" style="font-size:16px"><i class="fa-solid fa-globe"></i> prismane6.com</a>
              </div> -->
            </div>

          </div>
        </div>
      </section>
      <!-- ── Product Showcase End ── -->



      <!-- ── Features ── -->
      <section class="launch__features">
        <div class="container">
          <span class="section__eyebrow">Why Choose Prismane6</span>
          <h2 class="section__title-white">Built for Performance.<br><span>Designed for Fabric.</span></h2>

          <div class="feature__grid">

            <div class="feature__card">
              <div class="feature__icon"><i class="fa-solid fa-droplet"></i></div>
              <h4>Ricoh Gen6 Compatible</h4>
              <p>Formulated specifically for Ricoh Gen6 printheads, ensuring reliable jetting and consistent ink delivery with no clogging.</p>
            </div>

            <div class="feature__card">
              <div class="feature__icon"><i class="fa-solid fa-shirt"></i></div>
              <h4>Direct to Fabric</h4>
              <p>High-penetration pigment dispersion bonds directly to fabric fibers — no transfer film needed, exceptional hand feel.</p>
            </div>

            <div class="feature__card">
              <div class="feature__icon"><i class="fa-solid fa-sun"></i></div>
              <h4>Superior Wash Fastness</h4>
              <p>Advanced pigment chemistry delivers outstanding wash and light fastness ratings, keeping colours vibrant wash after wash.</p>
            </div>

            <div class="feature__card">
              <div class="feature__icon"><i class="fa-solid fa-palette"></i></div>
              <h4>Expanded Gamut</h4>
              <p>8-colour set including Red, Green, Violet and Orange extends the printable gamut far beyond standard CMYK for richer output.</p>
            </div>

            <div class="feature__card">
              <div class="feature__icon"><i class="fa-solid fa-flask"></i></div>
              <h4>R&D Backed Formula</h4>
              <p>Developed in Singapore under Dr. Dhara and her team — every batch tested for consistency, stability, and international standards.</p>
            </div>

            <div class="feature__card">
              <div class="feature__icon"><i class="fa-solid fa-globe"></i></div>
              <h4>Global Supply Chain</h4>
              <p>Manufactured in India, distributed from Singapore — ensuring fast delivery, local support, and seamless supply to markets worldwide.</p>
            </div>

          </div>
        </div>
      </section>
      <!-- ── Features End ── -->


      <!-- ── CTA Banner ── -->
      <!-- <section class="launch__cta">
        <div class="container">
          <h2>Ready to Upgrade Your<br>Printing Capabilities?</h2>
          <p>Contact Prismane6 today for samples, technical support, and pricing on our Ricoh Gen6 pigment ink range.</p>
          <div class="launch__cta-btns">
            <a href="mailto:info@prismane6.com" class="btn-launch-primary">
              <i class="fa-solid fa-envelope"></i> Get in Touch
            </a>
            <a href="tel:+6580103613" class="btn-launch-outline">
              <i class="fa-solid fa-phone"></i> Call Us Now
            </a>
          </div>
        </div>
      </section> -->
      <!-- ── CTA Banner End ── -->


      <!-- ── Address Strip ── -->
      <!-- <div class="launch__address">
        <div class="container">
          <div class="address__inner">
            <div class="address__logo">
              <img src="assets/imgs/logo/Prismane6-Text.svg" alt="Prismane6 Logo">
            </div>
            <div class="address__info">
              <span><i class="fa-solid fa-location-dot"></i> 151 Chin Swee Road, #02-04A, Manhattan House, Singapore 169876</span>
              <a href="tel:+6580103613"><i class="fa-solid fa-phone"></i> +65 8010 3613</a>
              <a href="http://www.prismane6.com" target="_blank"><i class="fa-solid fa-globe"></i> www.prismane6.com</a>
            </div>
          </div>
        </div>
      </div> -->
      <!-- ── Address Strip End ── -->

    </main>

    <?php include("footer.php"); ?>
