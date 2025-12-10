<style>
  @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap');

  .home-font .brand-serif {
    font-family: 'Cormorant Garamond', Georgia, 'Times New Roman', serif;
    font-weight: 600;
  }

  .home-font .hero-title {
    font-size: clamp(28px, 6.5vw, 48px);
    letter-spacing: 1px;
  }

  .home-font .hero-sub {
    font-family: 'Montserrat', sans-serif;
  }

  .home-font .cta {
    font-family: 'Montserrat', sans-serif;
  }
</style>
<div class="home-font">
  <section class="hero">
    <h1 class="hero-title brand-serif">Luxury Dress Hire in Peterborough — Wear Your Story</h1>
    <p class="hero-sub">Welcome to Crown & Halo Dress Hire, Peterborough’s leading destination for luxury dress hire and special occasion gowns. Whether you’re searching for an elegant evening gown, a show-stopping prom dress, or a timeless bridal look, our curated collection allows you to look extraordinary without the designer price tag.</p>
    <p class="hero-sub">Discover a handpicked range of evening dresses, prom gowns, bridal wear, black-tie dresses, and couture pieces available to hire from just £150.</p>
    <p class="hero-sub">✨ Premium quality. Affordable luxury. Sustainable fashion.</p>
    <p><a class="cta" href="<?= base_url('/book-appointment') ?>">Book Now</a></p>
  </section>
</div>

<div class="hero-img" style="margin-top:24px;">
  <img src="<?= base_url('assets/Cover.svg') ?>" alt="Cover" style="width:100%; height:auto; display:block;" loading="eager">
  <div class="hero-overlay">
    <button class="play-btn" aria-label="Play video"></button>
  </div>
</div>

<?php if (!empty($featured)) : ?>
  <h2 class="brand-serif" style="margin-top:32px; color:var(--heading);">Featured</h2>
  <div class="grid" style="margin-top:12px;">
    <?php foreach ($featured as $item): ?>
      <div class="card">
        <?php if (!empty($item['image'])): ?>
          <img src="<?= esc($item['image']) ?>" alt="<?= esc($item['name']) ?>">
        <?php endif; ?>
        <div class="card-body">
          <h3 style="margin:0 0 6px; font-size:18px;" class="brand-serif"><?= esc($item['name']) ?></h3>
          <p style="margin:0 0 8px; color:#8A8177;"><?= esc(word_limiter($item['description'] ?? '', 20)) ?></p>
          <a href="<?= base_url('/products/' . esc($item['id'])) ?>">View Details</a>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
<?php endif; ?>

<section id="why" style="margin-top:32px;">
  <h2 class="brand-serif" style="color:var(--heading);">Why Choose Crown & Halo?</h2>
  <ul style="margin-top:8px; line-height:1.9; color:#8A8177;">
    <li>Designer-inspired gowns</li>
    <li>Wide range of sizes (including plus-size options)</li>
    <li>Professional fitting appointments</li>
    <li>Easy booking and returns</li>
    <li>Cleaning included with every hire</li>
  </ul>
  <p class="hero-sub" style="margin-top:10px;">Find your perfect gown, wear your story, and shine at your next event.</p>
  <p><a class="cta" href="<?= base_url('/book-appointment') ?>">Book Now</a></p>
</section>

<section id="how-it-works" style="margin-top:28px;">
  <h2 class="brand-serif" style="color:var(--heading);">Choose the Smarter, More Sustainable Way to Shine</h2>
  <p class="hero-sub">Today’s modern bride is style-savvy, environmentally conscious, and financially smart. At Crown & Halo Dress Hire, we offer a luxury alternative to buying a dress you may only wear once.</p>
  <p class="hero-sub">By choosing to hire instead of purchase, you’re joining a growing movement of women who want to look incredible without contributing to waste or overspending.</p>
</section>

<section id="why-hire" class="section">
  <h2 class="feature-title brand-serif">Why Hire Your Dress Instead of Buying?</h2>
  <div class="split">
    <div>
      <h3 class="brand-serif" style="margin:10px 0; color:var(--heading);">🌿 1. It’s the Sustainable Choice</h3>
      <p class="feature-sub">More brides than ever are choosing <em><b>sustainable wedding dress hire</b></em> as a way of reducing their carbon footprint.</p>
      <p class="feature-sub">Fast fashion creates millions of tons of textile waste each year — but hiring a gown means <em><b>one beautiful dress gets worn, loved, and celebrated multiple times</b></em>, instead of sitting unused in a wardrobe.</p><br>
      <p class="feature-sub"><b>Hiring allows you to:</b></p>
      <ul class="feature-bullets">
        <li>Reduce fashion waste</li>
        <li>Support slow, conscious fashion</li>
        <li>Choose an eco-friendly alternative without compromising on style</li>
        <li>Make a responsible choice you can feel proud of</li>
      </ul>
    </div>
    <div class="img-frame">
      <img src="<?= base_url('assets/why-hire-1.svg') ?>" alt="Sustainable and affordable luxury">
    </div>
  </div>

  <div class="split reverse" style="margin-top:26px;">
    <div class="img-frame">
      <img src="<?= base_url('assets/why-hire-2.svg') ?>" alt="Confident without commitment">
    </div>
    <div>
      <h3 class="brand-serif" style="margin:14px 0; color:var(--heading);">💎 2. Luxury Bridal Fashion Without the Luxury Price Tag</h3>
      <p class="feature-sub">Why spend £1,500–£3,000+ on a dress you’ll wear for a few hours? Hire your dream look for £150–£500.</p>
      <ul class="feature-bullets">
        <li>Access premium quality and couture-inspired gowns</li>
        <li>Wear a dress that photographs beautifully</li>
        <li>Save for the moments that matter—honeymoon, home, family</li>
      </ul>
      <p class="feature-sub"><em>✨ Look exquisite, feel incredible, and invest your savings into unforgettable memories.</em></p>
    </div>
  </div>

  <div class="split">
    <div>
      <h3 class="brand-serif" style="margin:10px 0; color:var(--heading);">👑 3. Feel Confident Without Commitment</h3>
      <p class="feature-sub">Choose, wear, return—no long-term storage, preservation costs, or resale hassle.</p>
      <ul class="feature-bullets">
        <li>No long-term storage</li>
        <li>No preservation costs</li>
        <li>No pressure to resell</li>
        <li>No guilt over a dress you’ll never wear again</li>
      </ul>
    </div>
    <div class="img-frame">
      <img src="<?= base_url('assets/why-hire-2.svg') ?>" alt="Confident without commitment">
    </div>
  </div>

  <div class="split" style="margin-top:26px;">
    <div class="img-frame">
      <img src="<?= base_url('assets/why-hire-2.svg') ?>" alt="Confident without commitment">
    </div>
    <div>
      <h3 class="brand-serif" style="margin:14px 0; color:var(--heading);">💍 4. A Bridal Look That Matches Your Values</h3>
      <p class="feature-sub">Celebrate your day while staying true to sustainability, smart spending, and mindful consumption.</p>
      <ul class="feature-bullets">
        <li>Sustainability & ethical fashion</li>
        <li>Smart spending & mindful consumption</li>
        <li>Timeless elegance</li>
      </ul>
      <p class="feature-sub"><strong>Join hundreds of brides choosing a better way to say “I Do.”</strong></p>
      <p><a class="cta" href="<?= base_url('/book-appointment') ?>">Book an Appointment</a></p>
    </div>
  </div>

  <!-- Third row: Text | Image -->
  <p class="feature-sub" style="margin-top:18px;">Because when you choose to hire… you’re not just wearing a dress — you’re wearing your story.</p>
</section>