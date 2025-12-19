<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap');

  .home-font .brand-serif {
    font-family: 'Cormorant Garamond', Georgia, 'Times New Roman', serif;
    font-weight: 600;
  }

  /* Vertical feature list layout (left icon, right text) */
  .hero-feature-bar {
    display: block;
    margin: 22px auto 0;
    background: #FBF6F2;
    border-radius: 12px;
    padding: 8px;
    max-width: 1080px;
  }

  .hero-feature {
    display: flex;
    gap: 18px;
    align-items: center;
    padding: 16px 18px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.03);
  }

  .hero-feature:last-child {
    border-bottom: none;
  }

  .hero-feature .icon {
    width: 52px;
    height: 52px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    background: #fff;
    color: var(--accent-dark);
    font-size: 18px;
    flex: 0 0 52px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
  }

  .hero-feature .body {
    flex: 1 1 auto;
  }

  .hero-feature .title {
    font-weight: 700;
    color: var(--heading);
    margin: 0;
    font-size: 1rem;
    display: inline-block;
  }

  .hero-feature .desc {
    color: #7f766d;
    margin: 6px 0 0;
    font-size: 0.95rem;
    line-height: 1.6
  }

  @media (max-width:860px) {
    .hero-feature-bar {
      padding: 6px;
    }

    .hero-feature {
      padding: 12px;
      gap: 12px;
    }

    .hero-feature .icon {
      flex: 0 0 44px;
      width: 44px;
      height: 44px;
    }
  }

  /* Hero spacing tuned to match reference layout; left-aligned for Book page */
  .hero {
    padding: 84px 0 18px;
    max-width: 1080px;
    margin: 0 auto;
    text-align: left;
  }

  .hero-title {
    margin: 0 0 8px;
    line-height: 1.02;
    font-size: clamp(26px, 4.5vw, 48px);
  }

  .hero-sub {
    margin: 0 0 14px 0;
    line-height: 1.6;
    max-width: 720px;
    color: rgba(0, 0, 0, 0.65);
  }

  .hero-features {
    margin-top: 18px;
  }

  .hero .cta {
    display: inline-block;
    margin-top: 18px;
    padding: 12px 26px;
    border: 1px solid rgba(0, 0, 0, 0.06);
    border-radius: 6px;
    background: transparent;
  }

  .hero-img {
    margin-top: 40px;
  }

  @media (max-width:900px) {
    .hero {
      padding: 46px 0 12px;
    }

    .hero-title {
      font-size: clamp(20px, 5.5vw, 34px);
    }

    .hero-sub {
      max-width: 92%;
    }
  }
</style>

<div class="home-font">
  <section class="hero">
    <h1 class="hero-title brand-serif">Crown & Halo: Where Every Bride Deserves Her Fairytale</h1>

    <p class="hero-sub">When Clare Heaffey began searching for an elegant dress for her second wedding at the age of 60, she discovered a problem too many brides face—beautiful, designer-level gowns were either impossibly expensive or simply out of reach.</p>

    <p class="hero-sub">Instead of settling, Clare turned her frustration into inspiration. And that spark became Crown & Halo.
      Created during a time when the cost of living continues to soar, Crown & Halo was founded on Clare’s belief that every wedding deserves to feel magical—regardless of age, budget, or circumstance. She set out to make dream gowns accessible, elegant, and affordable for all brides.</p>

    <p class="hero-sub">Today, Crown & Halo offers a curated collection of designer-inspired wedding gowns at attainable prices, giving brides the opportunity to express their style, celebrate their story, and create memories for a lifetime—without compromise.</p>

    <p><strong>Clare’s mission is simple:</strong></p>

    <div class="hero-feature-bar" aria-hidden="false">
      <div class="hero-feature">
        <span class="icon" aria-hidden="true"></span>
        <div class="body">
          <div class="title">To make fairytale weddings possible for everyone.</div>
        </div>
      </div>
      <div class="hero-feature">
        <span class="icon" aria-hidden="true"></span>
        <div class="body">
          <div class="title">To honour love in all its seasons.</div>
        </div>
      </div>
      <div class="hero-feature">
        <span class="icon" aria-hidden="true"></span>
        <div class="body">
          <div class="title">To give every bride her moment to shine.</div>
        </div>
      </div>
    </div>

    <p class="hero-sub"><em>Crown & Halo isn’t just a brand—it’s a celebration of confidence, choice, and timeless elegance.</em></p>

    <p class="hero-sub"><strong>Because every bride deserves her happily ever after.</strong></p>

    <h2 class="brand-serif" style="margin-top:18px; color:var(--heading);">Book a personalised fitting—virtual or in-person</h2>
    <p class="hero-sub">Enjoy dedicated styling support, sizing guidance, and flexible appointment slots.</p>

    <h3 class="brand-serif" style="margin-top:10px; color:var(--heading);">Find Your Perfect Dress in One Easy Appointment</h3>
    <p class="hero-sub">Book an in-person fitting at our Peterborough studio or opt for a virtual styling session.</p>

    <ul style="margin-top:12px; line-height:1.9; color:#8A8177;">
      <li>One-to-one styling</li>
      <li>Size guidance</li>
      <li>Accessory recommendations</li>
      <li>Priority booking for premium gowns</li>
    </ul>

    <p class="small text-muted">Appointments fill quickly during prom and wedding season — book early!</p>

    <p><a class="cta" href="<?= base_url('/contact') ?>">Request an Appointment</a></p>
  </section>
</div>