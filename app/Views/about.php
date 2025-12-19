<style>
  /* Full-width hero/banner at top of About page */
  .page-hero {
    position: relative;
    width: 100%;
    height: 420px;
    display: flex;
    align-items: center;
    justify-content: center;
    overflow: hidden;
    margin-bottom: 0;
  }

  .page-hero__bg {
    position: absolute;
    inset: 0;
    background-size: cover;
    background-position: center;
    -webkit-background-size: cover;
    z-index: 0;
    transform: translateZ(0);
  }

  .page-hero::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(rgba(8, 8, 8, 0.45), rgba(8, 8, 8, 0.45));
    z-index: 1;
  }

  .page-hero__inner {
    position: relative;
    z-index: 2;
    text-align: center;
    color: #fff;
    padding: 0 20px;
    max-width: 1100px;
  }

  .page-hero__inner h1 {
    font-size: 48px;
    margin: 0 0 14px;
    line-height: 1.08;
    letter-spacing: 2px;
    color: #fff;
  }

  .page-hero__inner .lead {
    max-width: 820px;
    margin: 0 auto;
    color: rgba(255, 255, 255, 0.92);
    font-size: 18px;
  }

  @media (max-width: 768px) {
    .page-hero {
      height: 300px;
    }

    .page-hero__inner h1 {
      font-size: 28px;
    }

    .page-hero__inner .lead {
      font-size: 15px;
    }
  }

  /* existing about styles */
  .about-content {
    line-height: 1.68;
    letter-spacing: 0.2px;
  }

  /* Mission panel - a fresh two-column card for the mission statement */
  .mission-panel {
    max-width: 1200px;
    margin: 48px auto;
    background: #fbf8f6;
    padding: 0;
    box-shadow: 0 18px 40px rgba(16,24,40,0.06);
    border-radius: 6px;
    overflow: hidden;
    border: 1px solid rgba(0,0,0,0.04);
    box-sizing: border-box;
  }

  .mission-inner {
    display: grid;
    grid-template-columns: 1fr 420px;
    gap: 0;
    align-items: stretch;
  }

  .mission-panel h3 {
    margin-top: 0;
    color: #8c7b6e;
    font-size: 28px;
    letter-spacing: 0.6px;
  }

  .mission-list {
    list-style: none;
    padding: 0;
    margin: 12px 0 0 0;
  }

  .mission-list li {
    position: relative;
    padding-left: 28px;
    margin-bottom: 0.9rem;
    color: #6b6360;
  }

  .mission-list li::before {
    content: '\25CB';
    position: absolute;
    left: 0;
    top: 2px;
    color: #c9bfb6;
    font-size: 14px;
  }

  .mission-visual {
    align-self: stretch;
    padding: 0;
    background: transparent;
    border: none;
    position: relative;
  }

  .mission-visual .mission-image {
    height: 100%;
    width: 100%;
    display: block;
    overflow: hidden;
    min-height: 320px;
  }

  .mission-visual .mission-image img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center center;
  }

  /* subtle dark overlay on image for legibility */
  .mission-visual::after {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0,0,0,0.14), rgba(0,0,0,0.14));
    pointer-events: none;
  }

  .mission-quote {
    margin: 18px 0 0 0;
    padding-left: 18px;
    border-left: 3px solid rgba(140,123,110,0.16);
    font-style: italic;
    color: #8c7b6e;
    font-size: 20px;
    line-height: 1.3;
  }

  @media (max-width: 991px) {
    .mission-panel { padding: 28px 18px; }
    .mission-inner { grid-template-columns: 1fr; }
    .mission-visual { order: 2; }
    .mission-visual .mission-image img { height: 300px; object-position: center top; }
    .mission-quote { margin-top: 14px; }
  }

  /* New Chapter angled split with mosaic visual */
  .new-chapter-section {
    position: relative;
    margin: 48px 0;
    padding: 0 0 0 0;
    --angle-height: 64px;
  }

  .new-chapter-section::before {
    content: '';
    position: absolute;
    left: 0;
    right: 0;
    top: -32px;
    height: 120px;
    background: linear-gradient(90deg, rgba(140,123,110,0.06), rgba(140,123,110,0.02));
    transform: skewY(-3deg);
    transform-origin: top left;
    z-index: 0;
  }

  .new-chapter-inner {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 520px;
    gap: 32px;
    align-items: center;
    padding: 40px 20px;
    box-sizing: border-box;
  }

  .nc-text {
    background: #fff;
    padding: 34px 36px;
    box-shadow: 0 16px 36px rgba(16,24,40,0.04);
    border-radius: 6px;
  }

  .nc-text h3 { margin-bottom: 12px; color:#8c7b6e; }

  .nc-visual { display:flex; flex-direction:column; gap:18px; }

  .nc-mosaic { display:grid; grid-template-columns: 1fr 1fr; gap:12px; height:240px; }
  .nc-mosaic .m-item { overflow:hidden; border-radius:6px; }
  .nc-mosaic .m-large { grid-column: 1 / span 1; grid-row: 1 / span 2; }
  .nc-mosaic .m-small { height:120px; }
  .nc-mosaic img { width:100%; height:100%; object-fit:cover; display:block; }

  .nc-cta { display:flex; justify-content:flex-end; }
  .nc-cta .btn-cta { background:#8c7b6e; color:#fff; padding:10px 18px; text-decoration:none; border-radius:4px; }

  @media (max-width: 991px) {
    .new-chapter-inner { grid-template-columns: 1fr; padding: 18px; }
    .nc-mosaic { height:180px; grid-template-columns: 1fr 1fr; }
    .nc-cta { justify-content:center; }
    .nc-text { order:1 }
    .nc-visual { order:2 }
  }

  .about-content p {
    margin-bottom: 1rem;
    font-size: 1.02rem;
    color: var(--text);
  }

  .about-content h1,
  .about-content h2,
  .about-content h3 {
    line-height: 1.12;
    margin-top: 0.8rem;
    margin-bottom: 0.6rem;
  }

  .about-content ul {
    margin-left: 1.2rem;
    margin-bottom: 1rem;
  }

  .about-content ul li {
    margin-bottom: 0.45rem;
  }

  .about-content blockquote {
    margin: 18px 0;
    padding: 12px 16px;
  }

  @media (max-width:768px) {
    .about-content {
      line-height: 1.6;
    }

    .about-content h1 {
      font-size: 22px;
    }
  }

  /* About hero image placed above section headings */
  .about-hero-image {
    max-width: 880px;
    margin: 18px auto 6px;
    /* border-radius: 10px; */
    overflow: hidden;
    box-shadow: 0 18px 40px rgba(16, 24, 40, 0.08);
  }

  .about-hero-image img {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  .about-hero-image img {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  /* Add horizontal padding to the about container for breathing room */
  .about-container {
    padding-left: 24px;
    padding-right: 24px;
    box-sizing: border-box;
  }

  @media (min-width:1200px) {
    .about-container {
      padding-left: 96px;
      padding-right: 96px;
    }
  }

  /* Parallax hero with centered translucent panel */
  .parallax-section {
    position: relative;
    background-image: url('<?= base_url('assets/luxury-dress.jpg') ?>');
    background-attachment: fixed;
    background-position: center center;
    background-size: cover;
    padding: 96px 0;
    color: #fff;
  }

  /* Variant to align the background image to the top (useful for portrait faces) */
  .parallax-section.parallax-top {
    background-position: center -100px;
  }

  .parallax-section::before {
    content: '';
    position: absolute;
    inset: 0;
    background: linear-gradient(90deg, rgba(12, 10, 8, 0.18), rgba(12, 10, 8, 0.18));
    z-index: 0;
  }

  .parallax-inner {
    position: relative;
    z-index: 2;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    box-sizing: border-box;
    display: flex;
    justify-content: center;
  }

  .parallax-panel {
    width: 100%;
    max-width: none;
    background: rgba(255, 255, 255, 0.65);
    /* tint */
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    padding: 48px 64px;
    border: 1px solid rgba(0, 0, 0, 0.06);
    box-shadow: 0 18px 40px rgba(16, 24, 40, 0.12);
    /* border-radius: 2px; */
    text-align: left;
  }

  .parallax-panel h2 {
    margin: 0 0 12px 0;
    font-size: 40px;
    color: #8c7b6e;
    letter-spacing: 0.6px;
    font-weight: 600;
  }

  .parallax-panel .muted-divider {
    height: 3px;
    width: 64px;
    background: rgba(230, 223, 218, 0.6);
    margin: 12px 0 18px;
  }

  .parallax-panel p {
    color: #6b6360;
    font-size: 18px;
    line-height: 1.8;
    margin-bottom: 18px;
  }

  .parallax-cta {
    display: flex;
    justify-content: center;
    margin-top: 22px;
  }

  .btn-cta {
    display: inline-block;
    background: #8c7b6e;
    color: #fff;
    padding: 14px 30px;
    /* border-radius: 2px; */
    text-decoration: none;
    box-shadow: 0 10px 30px rgba(12, 10, 8, 0.25);
    font-size: 16px;
  }

  @media (max-width: 991px) {
    .parallax-section {
      background-attachment: scroll;
      padding: 48px 0;
    }

    .parallax-panel {
      padding: 28px 20px;
    }

    .parallax-panel h2 {
      font-size: 28px;
    }

    .parallax-panel p {
      font-size: 15px;
    }
  }

  /* Three-column showcase (images left/right, content centered) */
  .tri-section {
    padding: 56px 12px;
  }

  .tri-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    gap: 36px;
    align-items: stretch;
    box-sizing: border-box;
  }

  .tri-col {
    display: flex;
    flex-direction: column;
    gap: 24px;
  }

  .tri-col.side {
    flex: 1 1 28%;
    justify-content: flex-start;
  }

  .tri-col.center {
    flex: 1 1 44%;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .tri-img-wrap {
    overflow: hidden;
    /* border-radius: 6px; */
    box-shadow: 0 18px 36px rgba(16, 24, 40, 0.06);
  }

  .tri-img-wrap img {
    display: block;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }

  .tri-col.side .img-large {
    min-height: 420px;
  }

  .tri-col.side .img-small {
    min-height: 180px;
  }

  .center-box {
    background: #fbf8f6;
    padding: 46px 40px;
    /* border-radius: 4px; */
    text-align: center;
    box-shadow: 0 18px 40px rgba(16, 24, 40, 0.04);
  }

  .center-box h2 {
    font-size: 32px;
    margin: 0 0 18px;
    letter-spacing: 2px;
    color: #8c7b6e;
    font-weight: 400;
  }

  .center-box p.lead-small {
    color: #9b8f88;
    max-width: 520px;
    margin: 0 auto 22px;
    line-height: 1.7;
  }

  .signature {
    font-family: 'Brush Script MT', 'Pacifico', cursive;
    font-size: 44px;
    color: #111;
    margin-top: 18px;
  }

  .founder {
    color: #8c7b6e;
    font-size: 18px;
  }

  @media (max-width: 991px) {
    .tri-inner {
      flex-direction: column;
      gap: 20px;
    }

    .tri-col.side .img-large {
      min-height: 260px;
    }

    .tri-col.side .img-small {
      min-height: 140px;
    }

    .center-box {
      padding: 28px 20px;
    }
  }

  /* Two-column intro and three-image row below parallax */
  .feature-hero {
    padding: 64px 12px;
    box-sizing: border-box;
  }

  .feature-hero .feature-inner {
    max-width: 1200px;
    margin: 0 auto;
    display: flex;
    gap: 40px;
    align-items: flex-start;
  }

  .feature-left {
    flex: 1 1 58%;
    text-align: center;
  }

  .feature-left h2 {
    font-size: 44px;
    margin: 0 0 12px;
    color: #8c7b6e;
    letter-spacing: 1px;
    font-weight: 600;
  }

  .feature-left .lead-small {
    font-style: italic;
    color: #a89b94;
    margin-top: 10px;
  }

  .feature-right {
    flex: 1 1 42%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    gap: 18px;
  }

  .feature-right p {
    color: #6b6360;
    line-height: 1.7;
  }

  .feature-right .btn-ghost {
    width: 180px;
    background: rgba(140, 123, 110, 0.08);
    color: #8c7b6e;
    border: 1px solid rgba(140, 123, 110, 0.12);
    padding: 12px 18px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
  }

  .images-row {
    display: flex;
    gap: 40px;
    margin-top: 70px;
    align-items: stretch;
    /* pull the image row to the viewport edges so the left image can be flush */
    width: calc(100% + 192px);
    margin-left: -96px;
    box-sizing: border-box;
  }

  .images-row .img-col {
    overflow: hidden;
    /* border-radius: 6px; */
    position: relative;
  }

  .images-row .img-col.left {
    flex: 0 0 46%;
  }

  /* Make the left image visually flush to the viewport and crop from the right */
  .images-row .img-col.left img {
    object-position: center;
  }

  .images-row .img-col.center {
    flex: 0 0 28%;
    max-width: 360px;
    margin: 0 auto;
    align-self: center;
  }

  .images-row .img-col.right {
    flex: 0 0 26%;
    align-self: flex-start;
    transform: translateY(-60px);
    /* subtle lift to align with design reference */
  }

  /* Explicit heights so the left/right panels read as tall hero images
     while the center image sits narrower and vertically centered. */
  .images-row .img-col.left img,
  .images-row .img-col.right img {
    width: 100%;
    height: 600px;
    object-fit: cover;
    display: block;
  }

  .images-row .img-col.center img {
    width: 100%;
    height: 520px;
    object-fit: cover;
    display: block;
    box-shadow: 0 18px 36px rgba(16, 24, 40, 0.06);
  }

  /* Tidy overlay text on left image so it is cropped/contained nicely */
  .images-row .img-col.left .img-overlay {
    padding-left: 32px;
    padding-right: 32px;
    bottom: 40px;
  }

  .img-overlay {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 26px 28px;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0) 0%, rgba(0, 0, 0, 0.28) 100%);
    color: #fff;
    box-sizing: border-box;
  }

  .img-overlay h4 {
    margin: 0;
    font-size: 20px;
    letter-spacing: 1px;
  }

  .img-caption {
    text-align: center;
    color: rgba(140, 123, 110, 0.7);
    margin-top: 18px;
    font-size: 14px;
  }

  @media (max-width: 991px) {
    .feature-hero .feature-inner {
      flex-direction: column;
    }

    .images-row {
      flex-direction: column;
      gap: 18px;
    }

    .images-row .img-col.center {
      max-width: none;
    }

    /* Reset lift on smaller screens to avoid overlap */
    .images-row .img-col.right {
      transform: none;
    }

    /* Reset full-width pull and cropping on small screens */
    .images-row {
      width: auto;
      margin-left: 0;
    }

    .images-row .img-col.left img {
      object-position: center;
      height: auto;
    }

    .images-row .img-col.left .img-overlay {
      padding-left: 32px;
      padding-right: 32px;
      bottom: 0px;
    }
  }
</style>

<!-- About page hero/banner -->
<section class="page-hero" aria-hidden="false">
  <div class="page-hero__bg" style="background-image: url('<?= base_url('assets/10.png') ?>')"></div>
  <div class="page-hero__inner">
    <h1 class="brand-serif" style="font-family: 'Cormorant Garamond', Georgia, 'Times New Roman', serif;">OUR STORY <br> THE INSPIRATION BEHIND CROWN &amp; HALO</h1>
    <p class="lead"></p>
  </div>
</section>

<!-- Three-column showcase below hero -->
<section class="tri-section" aria-hidden="false">
  <div class="tri-inner">
    <div class="tri-col side">
      <div class="tri-img-wrap img-large">
        <img src="<?= base_url('assets/front-view-adorable-woman-with-stylish-hairdo-dressed-long-veil-mermaid-wedding-dress-with-long-trail-holding-white-peonies-flowers-smiling-posing-camera-landscape-background.jpg') ?>" alt="Bridal portrait">
      </div>

      <div class="tri-img-wrap img-small">
        <img src="<?= base_url('assets/bride-wedding-dress-with-bouquet-by-window.jpg') ?>" alt="Bride by window">
      </div>
    </div>

    <div class="tri-col center">
      <div class="center-box">
        <h2 class="brand-serif">HOW<br>Clare Heaffey</h2>
        <div class="founder"><small>Crown and Halo Founder</small></div>
        <div class="divider" style="height:1px; width:48px;background:#e6dfda;margin:14px auto 18px;"></div>
        <p class="lead-small">Turned Her Own Bridal Challenge Into a Gift for Every Woman</p>
      </div>
    </div>

    <div class="tri-col side">
      <div class="tri-img-wrap img-small">
        <img src="<?= base_url('assets/bride-bridesmaids-with-wedding-bouquets-sunny-wedding-reception-joyful-moment.jpg') ?>" alt="Bridesmaids">
      </div>

      <div class="tri-img-wrap img-large">
        <img src="<?= base_url('assets/luxury-bride-wearing-her-wedding-dress.jpg') ?>" alt="Luxury bride">
      </div>
    </div>
  </div>
</section>

<section class="parallax-section" aria-hidden="false">
  <div class="parallax-inner">
    <div class="parallax-panel">
      <p class="mt-4"><b>Crown &amp; Halo was born from the heart of its founder, Clare Heaffey — a woman who understands that love has no age, no timeline, and no rules. At 60 years old, while preparing for her second wedding, Clare expected to find a dress that felt elegant, magical, and true to her story. Instead, she faced something many brides know too well</b></p>

      <ul class="feature-sub" style="list-style-type: circle;">
        <li>Overpriced gowns</li>
        <li>Limited choices</li>
        <li>Designs that didn’t reflect her style or confidence</li>
        <li>Pressure to spend thousands on a dress worn once</li>
      </ul>

      <p>Clare knew she deserved a gown that made her feel beautiful. Not youthful. Not perfect. Just beautiful.</p>
    </div>
  </div>
</section>

<!-- Feature intro and three-image row (below parallax) -->
<section class="feature-hero">
  <div class="feature-inner">
    <div class="feature-left">
      <h2 class="brand-serif" style="text-transform: uppercase;">A Spark That Became a Mission</h2>
      <div class="muted-divider" style="width:48px;height:3px;margin:14px auto 18px;background:rgba(230,223,218,0.6)"></div>
      <p>Standing in a fitting room, Clare had an epiphany:</p>
      <p class="feature-sub"><em>If she was struggling to find a beautiful, affordable dress at 60… how many other women were facing the same challenge?</em></p>

      <p>This moment became the spark that later grew into Crown &amp; Halo Dress Hire — a place where every bride, regardless of age, size, or budget, can feel extraordinary.</p>

      <blockquote style="border-left:4px solid var(--accent); padding:12px 16px; background:#FBF8F6;">
        “Every wedding is a fairytale — every bride deserves to feel like she belongs in hers.” — Clare
      </blockquote>
    </div>
  </div>

  <div class="feature-inner">
    <div class="images-row">
      <div class="img-col left">
        <img src="<?= base_url('assets/ball-gown-wedding-dress-fitted-bodice-full-skirt.jpg') ?>" alt="Dress left">
        <div class="img-overlay">
          <div style="border-top:1px solid rgba(255,255,255,0.5);padding-top:18px;">
            <h4>ATTENTION TO DETAIL</h4>
          </div>
        </div>
      </div>

      <div class="img-col center">
        <img src="<?= base_url('assets/front-view-adorable-woman-with-stylish-hairdo-dressed-long-veil-mermaid-wedding-dress-with-long-trail-holding-white-peonies-flowers-smiling-posing-camera-landscape-background.jpg') ?>" alt="Dress center">
        <a style="text-decoration: none;" href="<?= base_url("/book-appointment") ?>">
          <div class="img-caption" style="text-transform: uppercase;">Book Now →</div>
        </a>
      </div>

      <div class="img-col right">
        <img src="<?= base_url('assets/evening gown.jpg') ?>" alt="Dress right">
        <a style="text-decoration: none;" href="<?= base_url("/book-appointment") ?>">
          <div class="img-caption" style="text-transform: uppercase;">Book Now →</div>
        </a>
      </div>
    </div>
  </div>
</section>

<section class="parallax-section parallax-top" aria-hidden="false" style="background-image: url('<?= base_url('assets/young-beautiful-bride-woman-long-white-wedding-dress-whit.jpg') ?>')">
  <div class="parallax-inner">
    <div class="parallax-panel">
      <p><b>Driven by this belief, Clare set out to create a luxury-yet-affordable alternative to bridal shopping. Her vision was simple:</b></p>
      <ul class="feature-sub" style="list-style-type: circle;">
        <li>Designer-inspired gowns without designer price tags</li>
        <li>A sustainable approach to bridal fashion</li>
        <li>Beautiful, high-quality dresses available to every woman</li>
        <li>A choice — one that most bridal shops don’t offer</li>
        <li>A magical experience that doesn’t depend on your bank balance</li>
      </ul>

      <p>For Clare, this isn’t just a business. It’s a way of making sure no woman ever feels she must settle for less due to price, pressure, or age.</p>
    </div>
  </div>
</section>

<section class="mission-panel">
    <div class="mission-text" style="padding:32px 40px;">
      <h3 class="brand-serif mt-4">Transforming Dreams Into Moments That Last a Lifetime</h3>
      <p class="feature-sub">Crown &amp; Halo is Clare’s gift to today’s brides — especially those navigating rising costs, financial challenges, and a fashion world that often forgets real people and real budgets.</p>

      <p class="mb-0"><b>Her mission is to:</b></p>
      <ul class="feature-sub mission-list">
        <li>Make sustainable bridal wear more accessible</li>
        <li>Offer gown hire options that feel luxurious and special</li>
        <li>Give women the power to choose elegance without overspending</li>
        <li>Help brides create unforgettable memories, wrapped in confidence, joy, and beauty</li>
      </ul>

      <p class="feature-sub mt-3">Because every bride — whether she is 25, 35, 45, 60 or beyond — deserves that moment when she looks in the mirror and feels:</p>
      <div class="mission-quote">“This is my story. This is my fairytale.”</div>
    </div>
    </div>

    <aside class="mission-visual">
      <div class="mission-image">
        <img src="<?= base_url('assets/happy-bride-woman-wedding-dress-posing.jpg') ?>" alt="Clare — founder" />
      </div>
    </aside>
  </div>
</section>

        <section class="new-chapter-section" aria-labelledby="new-chapter-heading">
          <div class="new-chapter-inner">
            <div class="nc-text">
              <h3 id="new-chapter-heading" class="brand-serif mt-4">A New Chapter For Brides Everywhere</h3>
              <p>Crown &amp; Halo is now one of Peterborough’s most exciting options for affordable wedding dress hire, evening gown hire, and designer-inspired occasion wear — all thanks to one woman who dared to ask:</p>

              <p class="feature-sub nc-quote"><em>“What if beautiful didn’t have to be expensive?”</em></p>

              <p>Clare found the answer. And now she shares it with every bride who walks through our doors.</p>
            </div>

            <div class="nc-visual" aria-hidden="false">
              <div class="nc-mosaic">
                <div class="m-item m-large">
                  <img src="<?= base_url('assets/luxury-bride-wearing-her-wedding-dress.jpg') ?>" alt="Luxury bride">
                </div>
                <div class="m-item m-small m-top">
                  <img src="<?= base_url('assets/bride-wedding-dress-with-bouquet-by-window.jpg') ?>" alt="Bride by window">
                </div>
                <div class="m-item m-small m-bottom">
                  <img src="<?= base_url('assets/bride-bridesmaids-with-wedding-bouquets-sunny-wedding-reception-joyful-moment.jpg') ?>" alt="Bridesmaids">
                </div>
              </div>
              <div class="nc-cta">
                <a class="btn-cta" href="<?= base_url('/book-appointment') ?>">Book an Appointment</a>
              </div>
            </div>
          </div>
        </section>
