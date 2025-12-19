<?php
helper('url');
$dir = FCPATH . 'assets/gallery';
$images = [];
if (is_dir($dir)) {
  $it = new DirectoryIterator($dir);
  foreach ($it as $file) {
    if ($file->isFile()) {
      $name = $file->getFilename();
      $ext = strtolower(pathinfo($name, PATHINFO_EXTENSION));
      // exclude site icons / logos and non-photo assets
      if (!in_array($ext, ['jpg', 'jpeg', 'png', 'gif', 'webp', 'svg'])) continue;
      if (preg_match('/logo|favicon|apple-touch-icon|android|chrome|cover|manifest|icon|site\.webmanifest/i', $name)) continue;
      $images[] = $name;
    }
  }
}
shuffle($images);
?>
<style>
  .gallery-hero {
    margin-bottom: 18px;
    color: white;
  }

  /* Gallery banner */
  .gallery-banner {
    position: relative;
    background: linear-gradient(180deg, rgba(0,0,0,0.36), rgba(0,0,0,0.36)), url('<?= base_url('assets/10.png') ?>') center/cover no-repeat;
    color: #fff;
    min-height: 450px;
    display: flex;
    align-items: center;
    text-align: center;
    padding: 48px 24px;
    box-sizing: border-box;
    margin-bottom: 8px;
  }

  .gallery-banner .banner-backdrop {
    position: absolute;
    right: -8%;
    top: -6%;
    width: 64%;
    height: 150%;
    background: radial-gradient(circle at 20% 30%, rgba(255,255,255,0.08), rgba(255,255,255,0) 35%);
    filter: blur(30px);
    transform: rotate(6deg);
    opacity: 0.95;
    pointer-events: none;
    z-index: 1;
  }

  .gallery-banner .banner-content {
    max-width: 920px;
    margin: 0 auto;
    position: relative;
    z-index: 2;
  }

  /* Masonry-style column layout to remove vertical gaps */
  .gallery-grid {
    column-count: 4;
    column-gap: 16px;
    padding: 0;
  }

  /* Responsive columns: tablet and mobile */
  @media (max-width: 992px) {
    .gallery-grid {
      column-count: 3;
      column-gap: 14px;
    }
  }

  @media (max-width: 600px) {
    .gallery-grid {
      column-count: 2;
      column-gap: 12px;
    }
    .gallery-grid {
      padding-left: 12px;
      padding-right: 12px;
    }
    .gallery-grid figure {
      margin-bottom: 12px;
    }
  }

  .gallery-grid figure {
    display: inline-block;
    width: 100%;
    margin: 0 0 16px;
    break-inside: avoid;
  }

  .gallery-grid .gallery-thumb {
    width: 100%;
    height: auto;
    object-fit: cover;
    object-position: 50% 10%;
    border-radius: 8px;
    display: block;
  }

  /* Vary thumbnail heights for a more dynamic grid */
  /* (size classes removed — natural image heights used for tight packing) */

  @media (max-width: 768px) {
    .gallery-banner {
      min-height: 320px;
    }
  }

  @media (max-width:600px) {
    .gallery-grid img {
      height: 160px;
      object-position: 50% 10%;
    }

    .gallery-hero {
      padding: 0 16px;
    }
  }
</style>
<section class="gallery-banner">
  <div class="banner-backdrop" aria-hidden="true"></div>
  <div class="banner-content">
    <h1 class="brand-serif text-center">Gallery</h1>
    <p class="gallery-hero text-center">A showcase of real women wearing Crown & Halo for proms, weddings, galas, birthdays, and life’s most memorable occasions.</p>
  </div>
</section>

<div class="gallery-grid p-3 p-md-5" id="galleryGrid">
  <?php foreach ($images as $img): ?>
    <figure>
      <img class="gallery-thumb" loading="lazy" decoding="async" src="<?= base_url('assets/gallery/' . rawurlencode($img)) ?>" alt="Gallery image" data-full="<?= base_url('assets/gallery/' . rawurlencode($img)) ?>">
    </figure>
  <?php endforeach; ?>
</div>

<!-- Image modal / lightbox -->
<div id="imgModal" class="img-modal" aria-hidden="true" role="dialog" aria-label="Image preview">
  <button class="img-modal-close" aria-label="Close image">×</button>
  <div class="img-modal-inner">
    <img id="imgModalImg" src="" alt="">
  </div>
  <button class="img-modal-prev" aria-label="Previous image">‹</button>
  <button class="img-modal-next" aria-label="Next image">›</button>
</div>

<style>
  /* Modal styles */
  .img-modal {
    position: fixed;
    inset: 0;
    display: none;
    align-items: center;
    justify-content: center;
    background: rgba(0, 0, 0, 0.75);
    z-index: 2500;
  }

  .img-modal[aria-hidden="false"] {
    display: flex;
  }

  .img-modal-inner {
    max-width: 90%;
    max-height: 90%;
    overflow: auto;
    -webkit-overflow-scrolling: touch;
    padding: 8px;
  }

  .img-modal-inner img {
    width: auto;
    max-width: 100%;
    height: auto;
    display: block;
    margin: 0 auto;
    border-radius: 8px;
  }

  .img-modal-close {
    position: fixed;
    top: 20px;
    right: 20px;
    background: transparent;
    border: 0;
    color: #fff;
    font-size: 32px;
    cursor: pointer;
  }

  .img-modal-prev,
  .img-modal-next {
    position: fixed;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.06);
    border: 0;
    color: #fff;
    font-size: 36px;
    width: 56px;
    height: 56px;
    border-radius: 50%;
    cursor: pointer;
  }

  .img-modal-prev {
    left: 18px;
  }

  .img-modal-next {
    right: 18px;
  }

  .img-modal-close:focus,
  .img-modal-prev:focus,
  .img-modal-next:focus {
    outline: 2px solid rgba(255, 255, 255, 0.2);
  }

  @media (max-width:600px) {

    .img-modal-prev,
    .img-modal-next {
      width: 44px;
      height: 44px;
      font-size: 28px;
    }
  }
</style>

<script>
  (function() {
    const thumbs = Array.from(document.querySelectorAll('.gallery-thumb'));
    const modal = document.getElementById('imgModal');
    const modalImg = document.getElementById('imgModalImg');
    const btnClose = modal.querySelector('.img-modal-close');
    const btnPrev = modal.querySelector('.img-modal-prev');
    const btnNext = modal.querySelector('.img-modal-next');
    let currentIndex = -1;

    function openModal(idx) {
      currentIndex = idx;
      const src = thumbs[idx].dataset.full;
      modalImg.src = src;
      modalImg.alt = thumbs[idx].alt || '';
      modal.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
      btnClose.focus();
    }

    function closeModal() {
      modal.setAttribute('aria-hidden', 'true');
      modalImg.src = '';
      document.body.style.overflow = '';
    }

    function showNext(delta) {
      if (thumbs.length === 0) return;
      currentIndex = (currentIndex + delta + thumbs.length) % thumbs.length;
      openModal(currentIndex);
    }

    thumbs.forEach((t, i) => {
      t.addEventListener('click', (e) => {
        e.preventDefault();
        openModal(i);
      });
      t.style.cursor = 'zoom-in';
    });

    btnClose.addEventListener('click', closeModal);
    btnPrev.addEventListener('click', () => showNext(-1));
    btnNext.addEventListener('click', () => showNext(1));

    modal.addEventListener('click', (e) => {
      if (e.target === modal) closeModal();
    });
    document.addEventListener('keydown', (e) => {
      if (modal.getAttribute('aria-hidden') === 'false') {
        if (e.key === 'Escape') closeModal();
        if (e.key === 'ArrowRight') showNext(1);
        if (e.key === 'ArrowLeft') showNext(-1);
      }
    });
  })();
</script>