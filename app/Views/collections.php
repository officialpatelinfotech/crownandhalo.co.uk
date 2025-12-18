<style>
  .collections-hero {
    padding: 48px 0 24px;
    text-align: center;
  }

  .collections-hero h1 {
    font-size: 2.5rem;
    margin-bottom: 6px;
  }

  .collections-hero p {
    color: var(--text);
    max-width: 920px;
    margin: 0 auto 12px;
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
    height: 180px;
    object-fit: cover;
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

  @media (min-width:1200px) {
    .collections-container {
      padding-left: 200px;
      padding-right: 200px;
    }
  }
</style>

<div class="container collections-container">
  <section class="collections-hero">
    <h1 class="brand-serif">Explore Our Dress Hire Collections</h1>
    <p>Each collection is thoughtfully curated to suit different styles, body shapes, and occasions—helping every woman step into her own fairytale moment with confidence and ease. All dresses come professionally steamed, cleaned, and ready to wear.</p>
  </section>

  <section class="collection-section">
    <h2 class="brand-serif">The Enchanted Twilight Collection – Evening Gowns</h2>
    <p class="feature-sub">Elegant floor-length gowns perfect for galas, black-tie events, and red-carpet moments.</p>
    <div class="collection-grid">
      <div class="collection-card"><img src="<?= base_url('assets/collections/enchanted-1.jpg') ?>" alt="Enchanted Twilight">
        <div class="body">
          <h4>Gilded Midnight</h4>
          <p>Floor-length satin gown with sweeping train.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/collections/enchanted-2.jpg') ?>" alt="Enchanted Twilight">
        <div class="body">
          <h4>Moonlight Cascade</h4>
          <p>Beaded tulle with delicate illusion neckline.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/collections/enchanted-3.jpg') ?>" alt="Enchanted Twilight">
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
      <div class="collection-card"><img src="<?= base_url('assets/collections/prom-1.jpg') ?>" alt="Prom">
        <div class="body">
          <h4>Rosewater Dream</h4>
          <p>Ballgown with structured bodice and sparkle.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/collections/prom-2.jpg') ?>" alt="Prom">
        <div class="body">
          <h4>Starlit A-line</h4>
          <p>Lightweight chiffon with delicate embroidery.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/collections/prom-3.jpg') ?>" alt="Prom">
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
      <div class="collection-card"><img src="<?= base_url('assets/collections/wedding-1.jpg') ?>" alt="Wedding">
        <div class="body">
          <h4>Ivory Blossom</h4>
          <p>Lace gown with romantic sweetheart neckline.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/collections/wedding-2.jpg') ?>" alt="Wedding">
        <div class="body">
          <h4>Seaside Grace</h4>
          <p>Lightweight crepe perfect for coastal ceremonies.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/collections/wedding-3.jpg') ?>" alt="Wedding">
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
      <div class="collection-card"><img src="<?= base_url('assets/collections/couture-1.jpg') ?>" alt="Couture">
        <div class="body">
          <h4>Runway Muse</h4>
          <p>Avant-garde silhouette with couture finishes.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/collections/couture-2.jpg') ?>" alt="Couture">
        <div class="body">
          <h4>Opal Statement</h4>
          <p>Hand-embellished gown crafted for editorials.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/collections/couture-3.jpg') ?>" alt="Couture">
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
      <div class="collection-card"><img src="<?= base_url('assets/collections/plus-1.jpg') ?>" alt="Plus size">
        <div class="body">
          <h4>Curve Luxe</h4>
          <p>Supportive structure with elegant drape.</p>
        </div>
      </div>
      <div class="collection-card"><img src="<?= base_url('assets/collections/plus-2.jpg') ?>" alt="Plus size">
        <div class="body">
          <h4>Radiant Silhouette</h4>
          <p>Comfort and glamour for every body.</p>
        </div>
      </div>
    </div>
    <p class="mt-3">All dresses come professionally steamed, cleaned, and ready to wear.</p>
  </section>

</div>