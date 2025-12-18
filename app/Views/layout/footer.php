</main>


<footer class="site-footer">
  <div class="container">
    <div class="grid">
      <section aria-labelledby="footer-brand" style="min-width:0;">
        <a href="<?= base_url('/') ?>" id="footer-brand" class="footer-brand brand-serif">Crown & Halo</a>
        <p>Dress hire for life’s unforgettable moments. Couture pieces, luxury gowns, and personalised styling so you can wear your story.</p>
        <nav class="social" aria-label="Social media">
          <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram" aria-hidden="true"></i></a>
          <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f" aria-hidden="true"></i></a>
        </nav>
      </section>
      <section aria-labelledby="footer-support" style="min-width:0;">
        <h4 id="footer-support" class="brand-serif">Support</h4>
        <ul>
          <li><a href="<?= base_url('/faqs') ?>">FAQs</a></li>
          <li><a href="<?= base_url('/privacy') ?>">Privacy Policy</a></li>
          <li><a href="<?= base_url('/terms') ?>">Terms & Conditions</a></li>
          <li><a href="<?= base_url('/contact') ?>">Contact</a></li>
        </ul>
      </section>
      <section aria-labelledby="footer-contact" style="min-width:0;">
        <h4 id="footer-contact" class="brand-serif">Contact</h4>
        <address style="font-style:normal;">
          <p>10 Crown Avenue, Auckland</p>
          <p><a href="tel:+447983147325" aria-label="Call Crown and Halo">+44 7983 147325</a></p>
          <p><a href="mailto:chdresshire@gmail.com">chdresshire@gmail.com</a></p>
        </address>
      </section>
      <section aria-labelledby="footer-map" style="min-width:0;">
        <h4 id="footer-map" class="brand-serif">Visit Us</h4>
        <div class="footer-map">
          <iframe src="https://www.google.com/maps?q=10+Crown+Avenue+Auckland&output=embed" loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-hidden="false" title="Crown & Halo location on Google Maps"></iframe>
        </div>
        <p style="margin-top:8px;"><a href="https://www.google.com/maps/search/?api=1&query=10+Crown+Avenue+Auckland" target="_blank" rel="noopener">Open in Google Maps</a></p>
      </section>
    </div>
    <div class="footer-bottom">
      <small>&copy; <?= date('Y') ?> Crown & Halo. All rights reserved.</small>
    </div>
  </div>
</footer>
<!-- WhatsApp floating button -->
<a aria-label="Chat on WhatsApp" class="whatsapp-float" href="https://wa.me/447983147325?text=Hi%20Crown%20%26%20Halo%2C%20I%27d%20like%20to%20ask%20about%20dress%20hire" target="_blank" rel="noopener noreferrer">
  <i class="fa-brands fa-whatsapp" aria-hidden="true"></i>
</a>
<style>
  /* Footer spacing: ensure left/right breathing room on all viewports */
  .site-footer .container {
    padding-left: 24px;
    padding-right: 24px;
    box-sizing: border-box;
  }

  @media (min-width:1200px) {
    .site-footer .container {
      padding-left: 96px;
      padding-right: 96px;
    }
  }

  .whatsapp-float {
    position: fixed;
    width: 65px;
    height: 65px;
    bottom: 24px;
    right: 24px;
    background-color: #25D366;
    color: #fff;
    border-radius: 50%;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    box-shadow: 0 6px 18px rgba(0, 0, 0, 0.18);
    z-index: 2000;
    text-decoration: none;
    font-size: 40px;
    transition: transform .16s ease, box-shadow .16s ease;
  }

  .whatsapp-float:hover {
    transform: translateY(-4px);
    box-shadow: 0 10px 28px rgba(0, 0, 0, 0.22);
  }

  @media (max-width: 600px) {
    .whatsapp-float {
      right: 16px;
      bottom: 16px;
      width: 55px;
      height: 55px;
      font-size: 36px;
    }
  }
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>