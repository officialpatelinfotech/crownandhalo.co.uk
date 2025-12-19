<style>
  .terms-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 48px 24px;
    box-sizing: border-box;
  }

  .terms-content p,
  .terms-content li {
    margin-bottom: 1rem;
    color: var(--text);
    line-height: 1.6;
  }

  .terms-item {
    margin: 24px 0;
  }

  .terms-item h3 {
    margin: 0 0 12px 0;
    font-size: 20px;
    color: var(--heading);
    font-weight: 600;
    line-height: 1.2;
  }

  .terms-item p {
    margin: 0;
    color: var(--text);
    line-height: 1.7;
  }

  /* Flow chart: circular steps with connectors */
  .pricing-list {
    list-style: none;
    padding: 0;
    margin: 32px 0;
    display: flex;
    gap: 48px;
    align-items: center;
    justify-content: center;
    flex-wrap: nowrap;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
    padding-bottom: 8px;
  }

  .pricing-list li {
    position: relative;
    min-width: 140px;
    max-width: 220px;
    text-align: center;
    background: transparent;
    padding: 0;
  }

  .step-circle {
    width: 76px;
    height: 76px;
    border-radius: 50%;
    background: var(--accent, #e9e2f8);
    display: inline-flex;
    align-items: center;
    justify-content: center;
    font-weight: 700;
    color: white;
    font-size: 28px;
    margin: 0 auto 12px auto;
    box-shadow: 0 8px 20px rgba(8,18,30,0.04);
  }

  .step-title { font-weight:700; color:var(--heading); margin-bottom:6px; }
  .step-desc { color: rgba(0,0,0,0.64); font-size:0.95rem; line-height:1.4; }

  /* connectors between steps (line + arrow) */
  /* .pricing-list li::after {
    content: '';
    position: absolute;
    right: -28px;
    top: 50%;
    width: 44px;
    height: 2px;
    background: rgba(0,0,0,0.08);
    transform: translateY(-50%);
  } */

  .pricing-list li::before {
    content: '';
    position: absolute;
    right: -45px;
    top: 40%;
    border: 15px solid transparent;
    border-left-color: rgba(0,0,0,0.08);
    transform: translateY(-50%);
  }

  .pricing-list li:last-child::after,
  .pricing-list li:last-child::before { display: none; }

  /* Mobile: stack vertically with vertical connectors and downward arrowheads */
  @media (max-width: 700px) {
    .pricing-list { flex-direction: column; gap: 28px; overflow: visible; }
    .pricing-list li { max-width: 100%; }
    .pricing-list li::after {
      right: auto;
      left: 50%;
      top: 100%;
      width: 2px;
      height: 28px;
      transform: translateX(-50%);
    }
    .pricing-list li::before {
      right: auto;
      left: 50%;
      top: 94%;
      border: 15px solid transparent;
      border-top-color: rgba(0,0,0,0.08);
      transform: translateX(-50%);
      margin-top: 28px;
    }
    .pricing-list li:last-child::after,
    .pricing-list li:last-child::before { display: none; }
  }
</style>
<div class="terms-container">
  <h1 class="brand-serif text-center" style="color:var(--heading);">How Dress Hire Works</h1>
  <div class="terms-content">
    <div class="terms-item">
      <p class="text-center">Simple, Affordable & Stress-Free Dress Hire in Peterborough</p>
      <ol class="pricing-list">
        <li>
          <div class="step-circle">1</div>
          <div class="step-title">Browse Our Collection</div>
          <div class="step-desc">Explore our online catalogue or visit our Peterborough showroom.</div>
        </li>
        <li>
          <div class="step-circle">2</div>
          <div class="step-title">Book Your Fitting</div>
          <div class="step-desc">Try your favourite styles with personalised styling support.</div>
        </li>
        <li>
          <div class="step-circle">3</div>
          <div class="step-title">Reserve Your Dress</div>
          <div class="step-desc">Secure your gown with a 50% booking deposit.</div>
        </li>
        <li>
          <div class="step-circle">4</div>
          <div class="step-title">Enjoy Your Event</div>
          <div class="step-desc">Feel confident, elegant, and unforgettable.</div>
        </li>
        <li>
          <div class="step-circle">5</div>
          <div class="step-title">Return With Ease</div>
          <div class="step-desc">No cleaning needed — we take care of everything.</div>
        </li>
      </ol>
      <p class="text-center"><em>Late fees and damage policies apply as per our hire agreement.</em></p>
    </div>

    <div class="terms-item concierge-card">
      <div class="concierge-inner">
        <div class="concierge-header">
          <h3>Style Concierge Service</h3>
          <p class="concierge-lead">Personal, occasion-led styling help to complete your look.</p>
        </div>
        <div class="concierge-grid">
          <div class="concierge-item">
            <img class="ci-img" src="<?= base_url('assets/' . rawurlencode('happy-bride-woman-wedding-dress-posing.jpg')) ?>" alt="Personal styling">
            <div class="ci-body">
              <div class="ci-title">Personal styling assistance</div>
            </div>
          </div>
          <div class="concierge-item">
            <img class="ci-img" src="<?= base_url('assets/' . rawurlencode('evening gown.jpg')) ?>" alt="Colour matching">
            <div class="ci-body">
              <div class="ci-title">Colour matching</div>
            </div>
          </div>
          <div class="concierge-item">
            <img class="ci-img" src="<?= base_url('assets/' . rawurlencode('bride-wedding-dress-with-bouquet-by-window.jpg')) ?>" alt="Accessory pairing">
            <div class="ci-body">
              <div class="ci-title">Accessory pairing</div>
            </div>
          </div>
          <div class="concierge-item">
            <img class="ci-img" src="<?= base_url('assets/' . rawurlencode('rows-of-wedding-dresses-on-display-in-a-specialist-wedding-dress-shop-close-up-of-full-skirts-some-e1636695007545.jpg')) ?>" alt="Styling packages">
            <div class="ci-body">
              <div class="ci-title">Occasion-based styling packages</div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <style>
      .concierge-card {
        background: linear-gradient(180deg, rgba(255, 255, 255, 0.98), rgba(250, 250, 250, 0.98));
        padding: 20px;
        border-radius: 12px;
        box-shadow: 0 8px 24px rgba(6, 24, 45, 0.04);
      }

      .concierge-inner {
        display: grid;
        gap: 20px;
        align-items: start;
      }

      .concierge-header h3 {
        margin: 0 0 8px 0;
      }

      .concierge-lead {
        margin: 0 0 6px 0;
        color: var(--text);
      }

      .concierge-grid {
        display: flex;
        gap: 12px;
        justify-content: center;
        flex-wrap: nowrap;
        overflow-x: auto;
        -webkit-overflow-scrolling: touch;
        padding-bottom: 8px;
      }

      .concierge-grid::-webkit-scrollbar {
        height: 8px;
      }

      .concierge-grid::-webkit-scrollbar-thumb {
        background: rgba(0, 0, 0, 0.08);
        border-radius: 4px;
      }

      .concierge-item {
        flex: 0 0 240px;
        max-width: 260px;
        padding: 12px;
        border-radius: 8px;
        background: rgba(0, 0, 0, 0.02);
        display: flex;
        flex-direction: column;
        gap: 10px;
        align-items: center;
        justify-content: center;
      }

      .ci-img {
        width: 100%;
        height: 120px;
        object-fit: cover;
        border-radius: 8px;
      }

      .ci-title {
        font-weight: 600;
        color: var(--heading);
        text-align: center;
      }

      @media (max-width:900px) {
        .concierge-inner { grid-template-columns: 1fr; }
      }

      /* Mobile: stack each concierge item into a full-width column */
      @media (max-width:600px) {
        .concierge-grid { flex-wrap: wrap; overflow-x: visible; }
        .concierge-item { flex: 1 1 100%; max-width: 100%; }
        .ci-img { height: 160px; }
      }
    </style>
  </div>
</div>