<style>
  .contact-container {
    padding-left: 24px;
    padding-right: 24px;
    box-sizing: border-box;
  }

  @media (min-width:1200px) {
    .contact-container {
      padding-left: 200px;
      padding-right: 200px;
    }
  }
</style>
<div class="contact-page contact-container my-5">
  <div class="row gx-5">
    <div class="col-12">
      <h1 class="mb-3">Get in Touch</h1>
      <p class="lead mb-4">Have a question about our dresses or appointments? Send us a message and we'll get back to you within 24 hours.</p>
    </div>
  </div>

  <?php if (session()->getFlashdata('success')): ?>
    <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
  <?php endif; ?>
  <?php if (session()->getFlashdata('error')): ?>
    <div class="alert alert-danger"><?= session()->getFlashdata('error') ?></div>
  <?php endif; ?>

  <div class="row gy-4">
    <div class="col-md-6">
      <div class="card shadow-sm p-4">
        <h2 class="h5 mb-3">Contact Form</h2>
        <form action="<?= base_url('/contact/send') ?>" method="post" novalidate>
          <?= csrf_field() ?>
          <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="<?= esc(old('name')) ?>" required minlength="2">
          </div>

          <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="<?= esc(old('email')) ?>" required>
          </div>

          <div class="mb-3">
            <label for="phone" class="form-label">Phone (optional)</label>
            <input type="tel" class="form-control" id="phone" name="phone" value="<?= esc(old('phone')) ?>">
          </div>

          <div class="mb-3">
            <label for="message" class="form-label">Message</label>
            <textarea class="form-control" id="message" name="message" rows="6" required minlength="10"><?= esc(old('message')) ?></textarea>
          </div>

          <div class="d-flex gap-2">
            <button class="btn btn-primary" type="submit">Send Message</button>
            <button class="btn btn-outline-secondary" type="reset">Reset</button>
          </div>
        </form>
      </div>
    </div>

    <div class="col-md-6">
      <div class="card shadow-sm p-4">
        <h2 class="h5 mb-3">Visit or Call</h2>
        <p class="mb-1"><strong>Address</strong><br>123 Crown Street, Suite 5<br>Melbourne VIC 3000</p>
        <p class="mb-1"><strong>Phone</strong><br><a href="tel:+447983147325">+44 7983 147325</a></p>
        <p class="mb-3"><strong>Email</strong><br><a href="mailto:chdresshire@gmail.com">chdresshire@gmail.com</a></p>

        <!-- Opening Hours removed per request -->

        <h3 class="h6">Find Us</h3>
        <div class="ratio ratio-16x9 mb-2">
          <iframe src="https://www.google.com/maps?q=123+Crown+Street+Melbourne+VIC+3000&output=embed" style="border:0;" allowfullscreen loading="lazy" referrerpolicy="no-referrer-when-downgrade" title="Crown &amp; Halo location"></iframe>
        </div>
        <noscript>
          <p class="small">Map is unavailable. <a href="https://www.google.com/maps/search/?api=1&query=123+Crown+Street+Melbourne+VIC+3000" target="_blank" rel="noopener">Open in Google Maps</a></p>
        </noscript>

        <p class="small text-muted">Prefer to book an appointment? Use the <a href="<?= base_url('/book-appointment') ?>">appointment form</a>.</p>
      </div>
    </div>
  </div>
</div>