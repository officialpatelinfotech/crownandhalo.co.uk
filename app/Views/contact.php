<style>
  .contact-container {
    padding-left: 24px;
    padding-right: 24px;
    box-sizing: border-box;
  }

  /* Contact banner */
  .contact-banner {
    position: relative;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.30), rgba(0, 0, 0, 0.30)), url('<?= base_url('assets/contact-us-banner.png') ?>') center/cover no-repeat;
    color: #fff;
    min-height: 450px;
    display: flex;
    align-items: center;
    text-align: center;
    padding: 40px 24px;
    box-sizing: border-box;
    margin-bottom: 18px;
  }

  .contact-banner .banner-backdrop {
    position: absolute;
    left: -6%;
    top: -8%;
    width: 68%;
    height: 160%;
    background: radial-gradient(circle at 25% 30%, rgba(255, 255, 255, 0.08), rgba(255, 255, 255, 0) 35%);
    filter: blur(28px);
    transform: rotate(-6deg);
    opacity: 0.9;
    pointer-events: none;
    z-index: 1;
  }

  .contact-banner .banner-content {
    max-width: 920px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }

  /* Full-width map at top */
  .contact-map-full {
    width: 100%;
    height: 380px;
    overflow: hidden;
    background: #f3f1ee;
  }

  .contact-map-full iframe {
    width: 100%;
    height: 100%;
    border: 0;
    display: block;
  }

  /* Contact info icons */
  .contact-line {
    display: flex;
    gap: 12px;
    align-items: flex-start;
    color: inherit;
  }

  .contact-icon {
    width: 28px;
    height: 28px;
    flex: 0 0 28px;
    display: inline-block;
    margin-top: 2px;
    color: var(--muted, #7a6f66);
  }

  .form-control {
    border-radius: 0px;
  }

  .btn-primary {
    border-radius: 0px;
  }

  .contact-icon svg {
    width: 100%;
    height: 100%;
    display: block;
    fill: currentColor;
  }

  .contact-text a {
    color: inherit;
    text-decoration: underline;
  }

  @media (max-width: 768px) {
    .contact-map-full {
      height: 240px;
    }

    .contact-banner {
      min-height: 320px;
    }
  }

  @media (min-width:1200px) {
    .contact-container {
      padding-left: 200px;
      padding-right: 200px;
    }
  }
</style>
<section class="contact-banner">
  <div class="banner-backdrop" aria-hidden="true"></div>
  <div class="banner-content">
    <h1 class="mb-3">Get in Touch</h1>
    <p class="lead mb-4">Have a question about our dresses or appointments? Send us a message and we'll get back to you within 24 hours.</p>
  </div>
</section>
<div class="contact-page contact-container my-5">

  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>

  <section class="contact-map-full mb-3 mb-md-5" aria-hidden="false">
    <iframe src="https://www.google.com/maps?q=12+bank+close+Whittlesey+PE7+1UN+Peterborough+United+Kingdom&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Crown &amp; Halo location"></iframe>
    <noscript>
      <div style="padding:18px;text-align:center;background:#fff;">Map is unavailable. <a href="https://www.google.com/maps/search/?api=1&query=12+bank+close+Whittlesey+PE7+1UN+Peterborough+United+Kingdom" target="_blank" rel="noopener">Open in Google Maps</a></div>
    </noscript>
  </section>

  <div class="row gy-4">
    <div class="col-md-6">
      <div class="p-4">
        <h2 class="brand-serif display-6 mb-3">CONTACT US</h2>
        <p class="text-muted mb-4">Have a question about our dresses or appointments? Send us a message and we'll get back to you within 24 hours.</p>

        <div class="row">
          <div class="col-12 col-md-6">
            <h5 class="mb-2">Visit</h5>
            <p class="mb-1 contact-line">
              <span class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                  <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5S10.62 6.5 12 6.5s2.5 1.12 2.5 2.5S13.38 11.5 12 11.5z" />
                </svg>
              </span>
              <span class="contact-text"><strong>Address</strong><br>12 bank close Whittlesey, PE7 1UN<br>Peterborough, United Kingdom</span>
            </p>

            <p class="mb-1 contact-line">
              <span class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                  <path d="M6.62 10.79a15.05 15.05 0 006.59 6.59l2.2-2.2a1 1 0 01.95-.27c1.05.27 2.19.42 3.36.42a1 1 0 011 1V20a1 1 0 01-1 1C10.07 21 3 13.93 3 4a1 1 0 011-1h3.5a1 1 0 011 1c0 1.17.15 2.31.42 3.36a1 1 0 01-.27.95l-2.03 2.48z" />
                </svg>
              </span>
              <span class="contact-text"><strong>Phone</strong><br><a href="tel:+447983147325">+44 7983 147325</a></span>
            </p>

            <p class="mb-1 contact-line">
              <span class="contact-icon" aria-hidden="true">
                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
                  <path d="M20 4H4c-1.1 0-2 .9-2 2v12c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5L4 8V6l8 5 8-5v2z" />
                </svg>
              </span>
              <span class="contact-text"><strong>Email</strong><br><a href="mailto:chdresshire@gmail.com">chdresshire@gmail.com</a></span>
            </p>
          </div>
          <div class="col-12 col-md-6 pt-md-0 pt-4">
            <h5 class="mb-2">Appointments</h5>
            <p class="mb-1">Prefer to book an appointment? Use the <a href="<?= base_url('/book-appointment') ?>">appointment form</a> or call us to arrange a fitting.</p>
            <p class="mb-1">All dresses come professionally steamed, cleaned, and ready to wear.</p>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-sm p-4">
        <h2 class="h5 mb-3">Contact Form</h2>
        <form action="<?= base_url('/contact/send') ?>" method="post" novalidate>
          <?= csrf_field() ?>
          <div class="row g-2">
            <div class="col-6 mb-3">
              <label for="name" class="form-label">Name</label>
              <input type="text" class="form-control" id="name" name="name" value="<?= esc(old('name')) ?>" required minlength="2">
            </div>
            <div class="col-6 mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" value="<?= esc(old('email')) ?>" required>
            </div>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone (optional)</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?= esc(old('phone')) ?>">
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="6" required minlength="10"><?= esc(old('message')) ?></textarea>
          </div>

          <div class="d-grid">
            <button class="btn btn-primary btn-lg" type="submit">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>