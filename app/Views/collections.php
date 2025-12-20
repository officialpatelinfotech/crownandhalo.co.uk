<style>
  /* Hero -> Banner */
  .collections-banner {
    position: relative;
    background: linear-gradient(180deg, rgba(0,0,0,0.36), rgba(0,0,0,0.36)), url('<?= base_url('assets/6.png') ?>') center/cover no-repeat;
    color: #fff;
    min-height: 420px;
    display: flex;
    align-items: center;
    text-align: center;
    padding: 48px 24px;
    box-sizing: border-box;
  }

  /* Decorative backdrop behind banner content */
  .collections-banner .banner-backdrop {
    position: absolute;
    left: -6%;
    top: -8%;
    width: 68%;
    height: 160%;
    background:
      radial-gradient(circle at 25% 30%, rgba(255,255,255,0.10), rgba(255,255,255,0) 35%),
      radial-gradient(circle at 75% 70%, rgba(255,200,220,0.06), rgba(255,200,220,0) 30%);
    filter: blur(36px);
    transform: rotate(-8deg);
    opacity: 0.95;
    pointer-events: none;
    z-index: 1;
  }

  .collections-banner .banner-content {
    max-width: 920px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }

  .collections-banner h1 {
    font-size: 2.5rem;
    margin-bottom: 6px;
    color: #fff;
  }

  .collections-banner p {
    color: rgba(255,255,255,0.95);
    margin: 0;
  }

  .collection-section {
    padding: 28px 0;
  }

  .collection-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
    gap: 14px;
    margin-top: 14px;
  }

  .collection-card {
    border-radius: 12px;
    overflow: hidden;
    background: #fff;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
    border: 1px solid rgba(0, 0, 0, 0.04);
  }

  .collection-card img {
    width: 100%;
    height: 300px;
    object-fit: cover;
    object-position: 50% 30%;
    display: block;
  }

  .collection-card .body {
    padding: 12px;
  }

  .collection-card h4 {
    margin: 0 0 6px;
    color: var(--heading);
  }

  .collection-card p {
    margin: 0;
    color: var(--text);
    font-size: 0.95rem;
  }

  /* Horizontal padding for collections page container */
  .collections-container {
    padding-left: 24px;
    padding-right: 24px;
    box-sizing: border-box;
  }
  @media (max-width: 768px) {
    .collections-banner {
      min-height: 320px;
    }
  }

  @media (min-width:1200px) {
    .collections-container {
      padding-left: 200px;
      padding-right: 200px;
    }
  }
</style>

<section class="collections-banner">
  <div class="banner-content">
    <h1 class="brand-serif">Explore Our Dress Hire Collections</h1>
    <p>Each collection is thoughtfully curated to suit different styles, body shapes, and occasions—helping every woman step into her own fairytale moment with confidence and ease. All dresses come professionally steamed, cleaned, and ready to wear.</p>
  </div>
</section>

<div class="container collections-container">
  <section class="collection-section">
    <h2 class="brand-serif">The Enchanted Twilight Collection – Evening Gowns</h2>
    <p class="feature-sub">Elegant floor-length gowns perfect for galas, black-tie events, and red-carpet moments.</p>
    <div class="collection-grid">
      <div class="collection-card"><img src="<?= base_url('assets/ball-gown-wedding-dress-fitted-bodice-full-skirt.jpg') ?>" alt="Enchanted Twilight" loading="lazy">
        <div class="body">
          <h4>Gilded Midnight</h4>
          <p>Floor-length satin gown with sweeping train.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/front-view-adorable-woman-with-stylish-hairdo-dressed-long-veil-mermaid-wedding-dress-with-long-trail-holding-white-peonies-flowers-smiling-posing-camera-landscape-background.jpg') ?>" alt="Enchanted Twilight" loading="lazy">
        <div class="body">
          <h4>Moonlight Cascade</h4>
          <p>Beaded tulle with delicate illusion neckline.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/luxury-bride-wearing-her-wedding-dress.jpg') ?>" alt="Enchanted Twilight" loading="lazy">
        <div class="body">
          <h4>Twilight Velvet</h4>
          <p>Rich velvet gown with sculpted silhouette.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="collection-section">
    <h2 class="brand-serif">Princess Prom Dreams Collection – Prom dresses</h2>
    <p class="feature-sub">Stand out on your big night with luxury prom gowns that make a statement — without the luxury price.</p>
    <div class="collection-grid">
      <div class="collection-card"><img src="<?= base_url('assets/happy-bride-smile-talking-with-her-friend-smartphone-looking-her-nails.jpg') ?>" alt="Prom" loading="lazy">
        <div class="body">
          <h4>Rosewater Dream</h4>
          <p>Ballgown with structured bodice and sparkle.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/young-women-enjoying-bachelorette-party.jpg') ?>" alt="Prom" loading="lazy">
        <div class="body">
          <h4>Starlit A-line</h4>
          <p>Lightweight chiffon with delicate embroidery.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/attractive-bridesmaids-dressed-pale-pink-fashionable-dresses-with-tender-bouquets-made-pink-roses-are-smiling.jpg') ?>" alt="Prom" loading="lazy">
        <div class="body">
          <h4>Velvet Empress</h4>
          <p>Statement velvet gown with off-shoulder sleeves.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="collection-section">
    <h2 class="brand-serif">The Happily Ever After Collection – Wedding Gowns</h2>
    <p class="feature-sub">Affordable, elegant bridalwear and bridesmaid dresses designed to look stunning in every photograph.</p>
    <div class="collection-grid">
      <div class="collection-card"><img src="<?= base_url('assets/bride-wedding-dress-with-bouquet-by-window.jpg') ?>" alt="Wedding" loading="lazy">
        <div class="body">
          <h4>Ivory Blossom</h4>
          <p>Lace gown with romantic sweetheart neckline.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/rows-of-wedding-dresses-on-display-in-a-specialist-wedding-dress-shop-close-up-of-full-skirts-some-e1636695007545.jpg') ?>" alt="Wedding" loading="lazy">
        <div class="body">
          <h4>Seaside Grace</h4>
          <p>Lightweight crepe perfect for coastal ceremonies.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/young-beautiful-bride-woman-long-white-wedding-dress-whit.jpg') ?>" alt="Wedding" loading="lazy">
        <div class="body">
          <h4>Classic Embrace</h4>
          <p>Timeless silhouette with detailed embroidery.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="collection-section">
    <h2 class="brand-serif">Crown &amp; Halo Collection – Luxury Designer Wear</h2>
    <p class="feature-sub">Editorial-inspired, one-of-a-kind pieces ideal for photoshoots, influencers, pageants, and high-end events.</p>
    <div class="collection-grid">
      <div class="collection-card"><img src="<?= base_url('assets/luxury-dress.jpg') ?>" alt="Couture" loading="lazy">
        <div class="body">
          <h4>Runway Muse</h4>
          <p>Avant-garde silhouette with couture finishes.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/luxury-bride-wearing-her-wedding-dress.jpg') ?>" alt="Couture" loading="lazy">
        <div class="body">
          <h4>Opal Statement</h4>
          <p>Hand-embellished gown crafted for editorials.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/luxury gown.jpg') ?>" alt="Couture" loading="lazy">
        <div class="body">
          <h4>Sculpted Halo</h4>
          <p>Architectural dress with dramatic lines.</p>
        </div>
      </div>
    </div>
  </section>

  <section class="collection-section">
    <h2 class="brand-serif">Plus-Size Dress Hire</h2>
    <p class="feature-sub">Beautiful silhouettes designed to flatter every curve, available in sizes 6–24+.</p>
    <div class="collection-grid">
      <div class="collection-card"><img src="<?= base_url('assets/happy-bride-woman-wedding-dress-posing.jpg') ?>" alt="Plus size" loading="lazy">
        <div class="body">
          <h4>Curve Luxe</h4>
          <p>Supportive structure with elegant drape.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/attractive-bridesmaids-dressed-pale-pink-fashionable-dresses-with-tender-bouquets-made-pink-roses-are-smiling.jpg') ?>" alt="Plus size" loading="lazy">
        <div class="body">
          <h4>Radiant Silhouette</h4>
          <p>Comfort and glamour for every body.</p>
        </div>
      </div>
    </div>
    <p class="mt-3">All dresses come professionally steamed, cleaned, and ready to wear.</p>
  </section>

</div>