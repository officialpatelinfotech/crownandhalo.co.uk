<?php helper('url'); ?>
<?php
// Detect homepage so we can show a top banner and adjust header layout
$isHome = (function_exists('current_url') ? rtrim(current_url(), '/') === rtrim(base_url('/'), '/') : (isset($_SERVER['REQUEST_URI']) && trim($_SERVER['REQUEST_URI'], '/') === ''));
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="Premium dress hire for prom, weddings, galas and special occasions. Discover luxury gowns, couture pieces, and a personalised styling experience. Wear your story.">
  <title>Crown & Halo Dress Hire – Luxury Gown Hire | Wear Your Story</title>
  <?php
  // Open Graph / Twitter Card defaults — can be overridden per-page by setting
  // $meta_title, $meta_description, $meta_image, $meta_url in the controller/view
  $meta_title = isset($meta_title) && $meta_title ? $meta_title : 'Crown & Halo Dress Hire – Luxury Gown Hire | Wear Your Story';
  $meta_description = isset($meta_description) && $meta_description ? $meta_description : 'Premium dress hire for prom, weddings, galas and special occasions. Discover luxury gowns, couture pieces, and a personalised styling experience.';
  // Default social image: prefer `assets/social/social-default.jpg` if present,
  // otherwise fall back to the site logo so shares still show an image.
  $default_social_path = defined('FCPATH') ? FCPATH . 'assets/social/social-default.jpg' : null;
  $default_social_url = base_url('assets/social/social-default.jpg');
  $fallback_logo_url = base_url('assets/logo.png');
  $meta_image = isset($meta_image) && $meta_image ? $meta_image : ((is_string($default_social_path) && is_file($default_social_path)) ? $default_social_url : $fallback_logo_url);
  // Current URL (fall back to base_url if current_url() is not available)
  $meta_url = isset($meta_url) && $meta_url ? $meta_url : (function_exists('current_url') ? current_url() : base_url('/'));
  ?>

  <!-- Open Graph / Facebook -->
  <meta property="og:site_name" content="Crown & Halo Dress Hire">
  <meta property="og:title" content="<?= esc($meta_title) ?>">
  <meta property="og:description" content="<?= esc($meta_description) ?>">
  <meta property="og:type" content="website">
  <meta property="og:url" content="<?= esc($meta_url) ?>">
  <meta property="og:image" content="<?= esc($meta_image) ?>">
  <meta property="og:image:alt" content="Crown & Halo Dress Hire">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">

  <!-- secure URL for platforms that prefer it -->
  <meta property="og:image:secure_url" content="<?= esc($meta_image) ?>">

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="<?= esc($meta_title) ?>">
  <meta name="twitter:description" content="<?= esc($meta_description) ?>">
  <meta name="twitter:image" content="<?= esc($meta_image) ?>">
  <meta name="twitter:image:alt" content="Crown & Halo Dress Hire">

  <!-- Generic image link for older clients -->
  <link rel="image_src" href="<?= esc($meta_image) ?>">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <!-- Provide a consistent base URL for relative assets -->
  <base href="<?= base_url('/') ?>">

  <!-- Improve font loading -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

  <!-- Theme colour for mobile UI -->
  <meta name="theme-color" content="#FAF7F2">

  <!-- Favicon & manifest (cache-busted during development) -->
  <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url('assets/apple-touch-icon.png') ?>?v=1.0">
  <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url('assets/favicon-32x32.png') ?>?v=1.0">
  <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url('assets/favicon-16x16.png') ?>?v=1.0">
  <link rel="manifest" href="<?= base_url('assets/site.webmanifest') ?>?v=1.0">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Montserrat:wght@300;400;600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700&family=Montserrat:wght@300;400;600&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

    :root {
      --bg: #FAF7F2;
      --text: #877964;
      --heading: #877964;
      --accent: #877964;
      --accent-dark: #877964;
      --footer-bg: #121318;
      --footer-text: #EAE6E1;
      --footer-muted: #C0BBB6;
    }

    html,
    body {
      height: 100%;
    }

    body {
      font-family: 'Poppins', sans-serif;
      margin: 0;
      color: var(--text);
      background: var(--bg);
    }

    .brand-serif {
      font-family: 'Poppins', serif;
      letter-spacing: 1px;
    }

    header {
      padding: 8px 24px;
      /* slightly more horizontal padding but reduced vertical space */
      position: relative;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      flex-wrap: wrap;
      min-height: 56px;
      text-transform: uppercase;
    }


    .logo {
      display: flex;
      align-items: center;
      gap: 12px;
      font-weight: 600;
      color: var(--heading);
      text-decoration: none;
    }

    /* Center the logo in the header and keep it fully contained */
    .logo-container {
      position: absolute;
      left: 50%;
      top: 50%;
      transform: translate(-50%, -50%);

      /* Top banner for homepage (logo + brand + tagline) - stacked layout with background image */
      /* center vertically inside header */
      z-index: 1302;
      pointer-events: none;
      /* allow clicks only on the link */
      overflow: visible;
    }

    .logo-container .logo {
      pointer-events: auto;
    }

    .logo {
      display: flex;
      align-items: center;
      padding: 4px 8px;
      border-radius: 6px;
    }

    .logo img {
      height: auto;
      display: block;
      width: auto;
      max-width: 200px;
      max-height: 52px;
      object-fit: contain;
    }

    /* Larger centered logo on desktop */
    @media (min-width: 900px) {
      .logo-container .logo img {
        height: auto;
        max-height: 45px;
        max-width: 360px;
        object-fit: contain;
      }

      /* Ensure navs remain vertically centered in the header */
      .nav-left,
      .nav-right {
        top: 50%;
        transform: translateY(-50%);
      }
    }

    /* Smaller desktops / tablets: reduce logo so it fits comfortably */
    @media (min-width: 700px) and (max-width: 899px) {
      .logo-container {
        top: 50%;
        transform: translate(-50%, -50%);
      }

      .logo-container .logo img {
        height: auto;
        max-height: 45px;
      }
    }

    /* Desktop layout: links side-by-side with centered logo */
    @media (min-width: 900px) {
      header {
        display: grid;
        grid-template-columns: 1fr auto 1fr;
        align-items: center;
        column-gap: 20px;
        /* bring navs closer to logo */
      }

      .nav-left,
      .nav-right {
        position: static;
        transform: none;
        flex: 0 0 auto;
        display: flex;
        gap: 8px;
        /* tighter link grouping */
      }

      .nav-left {
        grid-column: 1;
        justify-content: flex-end;
      }

      .logo-container {
        grid-column: 2;
        position: static;
        transform: none;
      }

      .nav-right {
        grid-column: 3;
        justify-content: flex-start;
      }

      .hamburger {
        display: none;
      }
    }

    .logo-text {
      display: none;
      font-size: 18px;
      color: var(--heading);
    }

    nav a {
      margin: 0 4px;
      /* tighter spacing near logo */
      text-decoration: none;
      color: var(--heading);
      font-size: 18px;
      /* unify desktop nav link size with mobile */
    }

    nav a:hover {
      color: var(--accent-dark);
    }

    .nav-left,
    .nav-right {
      display: flex;
      align-items: center;
      gap: 20px;
      flex: 1 1 0;
      margin-left: 18px;
      margin-right: 18px;
    }

    /* Dropdown menu for desktop */
    .dropdown {
      position: relative;
      display: inline-block;
    }

    .dropdown-toggle {
      cursor: pointer;
      text-decoration: none;
      color: var(--bs-nav-link-color);
      font-weight: 400;
    }

    .dropdown-menu {
      position: absolute;
      top: 100%;
      left: 50%;
      transform: translateX(-50%);
      min-width: 220px;
      background: #fff;
      border-radius: 8px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
      padding: 8px 0;
      display: none;
      z-index: 1400;
      overflow: hidden;
    }

    .dropdown-menu a {
      display: block;
      padding: 10px 14px;
      color: var(--heading);
      text-decoration: none;
      font-weight: 400;
      font-size: 18px;
    }

    .dropdown-menu a:hover {
      background: #F7F4F1;
      color: var(--accent-dark);
    }

    /* Show dropdown on hover for desktop-sized viewports */
    @media (min-width: 900px) {

      .dropdown:hover .dropdown-menu,
      .dropdown:focus-within .dropdown-menu {
        display: block;
      }
    }

    .nav-left {
      justify-content: flex-end;
    }

    .nav-right {
      justify-content: flex-start;
    }

    /* removed conflicting absolute-positioning for navs on desktop to allow grid layout */

    .container {
      /* Make page containers full width */
      max-width: 100% !important;
      width: 100% !important;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .hero {
      padding: 64px 0 40px;
      text-align: center;
    }

    .hero-title {
      font-size: 48px;
      line-height: 1.05;
      margin: 0 0 12px;
      color: var(--heading);
      font-weight: 500;
    }

    .hero-sub {
      font-size: 16px;
      color: #8A8177;
      margin-bottom: 24px;
    }

    .cta {
      display: inline-block;
      padding: 12px 20px;
      border: 1px solid var(--accent);
      color: var(--heading);
      text-decoration: none;
      background: transparent;
    }

    .cta:hover {
      background: var(--accent);
      color: #fff;
      border-color: var(--accent);
    }

    .hero-img {
      position: relative;
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    }

    /* Top banner for homepage (logo + brand + tagline) - centered stacked layout */
    .top-banner {
      background: #FBF6F2;
      padding: 8px 0;
    }

    .top-banner {
      /* Uses a subtle light overlay so the image doesn't compete with page content. Replace `banner-top.jpg` in /assets to change the image. */
      background-image: linear-gradient(rgb(0 0 0 / 86%), rgb(19 19 19 / 86%)), url('<?= base_url('assets/ball-gown-wedding-dress-fitted-bodice-full-skirt.jpg') ?>');
      background-size: cover;
      background-position: 30% 60%;
      background-repeat: no-repeat;
      padding: 18px 0;
    }

    /* Override to hide the top banner site-wide. Change to `display:block` to show again. */
    .top-banner {
      display: none !important;
      visibility: hidden !important;
      height: 0 !important;
      padding: 0 !important;
      margin: 0 !important;
      border: none !important;
    }

    .top-banner .container {
      display: flex;
      align-items: center;
      gap: 12px;
      padding: 8px 20px;
      flex-direction: row;
      /* horizontal on wider screens */
      text-align: left;
      justify-content: space-between;
      /* push logo and text to opposite ends */
      width: 100%;
      box-sizing: border-box;
      /* constrain banner heading so it has larger left/right margins on large screens */
      max-width: 1000px;
      margin-left: auto;
      margin-right: auto;
      padding-left: 200px;
      padding-right: 200px;
    }

    .top-banner .banner-logo {
      height: 56px;
      width: auto;
      display: block;
      /* increased right margin for clearer separation from the text */
      margin: 0 20px 0 0;
    }

    .top-banner .banner-text {
      display: block;
    }

    .top-banner .brand-name {
      font-weight: 500;
      color: white;
      font-size: 20px;
      letter-spacing: 0.5px;
    }

    .top-banner .tagline {
      color: white;
      font-size: 13px;
      margin-top: 2px;
    }

    /* Responsive: stack banner vertically on small screens */
    @media (max-width: 760px) {
      .top-banner .container {
        flex-direction: column;
        text-align: center;
        padding: 10px 12px;
        gap: 8px;
        justify-content: center;
      }

      .top-banner .banner-logo {
        margin: 0 0 6px 0;
      }
    }

    /* Ensure nav container centers links on homepage */
    .home-page nav>.container {
      display: flex;
      justify-content: center;
      align-items: center;
    }

    /* Stronger overrides for large screens to ensure links are centered */
    @media (min-width:900px) {
      .home-page header {
        display: block;
      }

      .home-page nav>.container {
        justify-content: center !important;
      }

      .home-page .nav-left {
        justify-content: center !important;
        flex: 0 0 auto !important;
      }
    }

    @media (min-width:900px) {

      /* When banner is present, center nav by spanning nav-left across header */
      nav.home-with-banner {
        padding: 15px 0;
        display: grid;
        align-items: center;
        justify-content: center;
      }

      nav.home-with-banner .nav-left {
        grid-column: 1 / 4;
        justify-content: center;
      }

      nav.home-with-banner .nav-right {
        display: none;
      }
    }

    /* Homepage header adjustments via body.home-page */
    .home-page header {
      display: grid;
      grid-template-columns: 1fr;
      align-items: center;
    }

    .home-page .nav-left {
      justify-content: center;
    }

    .home-page .nav-right {
      display: none;
    }

    .hero-overlay {
      position: absolute;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      background: rgba(0, 0, 0, 0.30);
      color: #fff;
    }

    .hero-overlay h2 {
      font-size: 36px;
      letter-spacing: 2px;
      text-transform: uppercase;
    }

    /* Play button overlay */
    .play-btn {
      width: 88px;
      height: 88px;
      border-radius: 50%;
      background: rgba(255, 255, 255, 0.06);
      display: flex;
      align-items: center;
      justify-content: center;
      border: 2px solid rgba(255, 255, 255, 0.18);
    }

    .play-btn:before {
      content: '';
      display: block;
      width: 0;
      height: 0;
      border-left: 18px solid #fff;
      border-top: 12px solid transparent;
      border-bottom: 12px solid transparent;
      margin-left: 6px;
      opacity: 0.95;
    }

    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(240px, 1fr));
      gap: 18px;
    }

    .card {
      border: 1px solid rgba(0, 0, 0, 0.06);
      border-radius: 0px;
      overflow: hidden;
      background: #fff;
    }

    .card img {
      width: 100%;
      height: 180px;
      object-fit: cover;
    }

    .card-body {
      padding: 14px;
    }

    .card-body h3 {
      color: var(--heading);
    }

    footer {
      border-top: 1px solid rgba(0, 0, 0, 0.06);
      padding: 22px 24px;
      text-align: center;
      color: #8A8177;
    }

    .alert {
      padding: 12px;
      border-radius: 8px;
      margin-bottom: 12px;
    }

    .alert-success {
      background: #e6ffed;
      border: 1px solid #bef5cb;
      color: #22863a;
    }

    .alert-error {
      background: #ffeef0;
      border: 1px solid #fdaeb7;
      color: #b31d28;
    }

    form input,
    form textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid rgba(0, 0, 0, 0.1);
      /* border-radius: 8px; */
      margin-bottom: 12px;
      background: #fff;
    }

    form button {
      background: var(--accent);
      color: #fff;
      border: none;
      padding: 12px 18px;
      /* border-radius: 8px; */
      cursor: pointer;
    }

    /* Replace Bootstrap primary blue with site accent colors */
    .btn-primary {
      background: var(--accent) !important;
      border-color: var(--accent) !important;
      color: #fff !important;
      box-shadow: none !important;
    }

    .btn-primary:hover,
    .btn-primary:focus,
    .btn-primary:active,
    .btn-primary:active:focus {
      background: var(--accent-dark) !important;
      border-color: var(--accent-dark) !important;
      color: #fff !important;
    }

    .btn-outline-primary {
      color: var(--accent) !important;
      border-color: var(--accent) !important;
    }

    .btn-outline-primary:hover,
    .btn-outline-primary:focus {
      background: var(--accent) !important;
      color: #fff !important;
      border-color: var(--accent) !important;
    }

    form button:hover {
      background: var(--accent-dark);
    }

    /* Newsletter + Footer */
    .newsletter {
      background: #F3EEE8;
      border-top: 1px solid rgba(0, 0, 0, 0.05);
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      padding: 28px 0;
    }

    .newsletter h3 {
      margin: 0 0 6px;
      color: var(--heading);
    }

    .newsletter p {
      margin: 0 0 12px;
      color: #8A8177;
    }

    .newsletter .row {
      display: flex;
      gap: 16px;
      flex-wrap: wrap;
      align-items: center;
      justify-content: space-between;
    }

    .newsletter input[type="email"] {
      flex: 1 1 280px;
      padding: 12px 14px;
      border: 1px solid rgba(0, 0, 0, 0.1);
      /* border-radius: 8px; */
      background: #fff;
    }

    .newsletter button {
      padding: 12px 18px;
      /* border-radius: 8px; */
      border: 1px solid var(--accent);
      background: var(--accent);
      color: #fff;
    }

    .newsletter button:hover {
      background: var(--accent-dark);
      border-color: var(--accent-dark);
    }

    .site-footer {
      background: var(--footer-bg);
      color: var(--footer-text);
      padding: 36px 0;
    }

    .site-footer .grid {
      display: grid;
      grid-template-columns: 1.2fr 1fr 1fr 1fr;
      gap: 28px 24px;
    }

    .site-footer .grid>div {
      min-width: 0;
    }

    .site-footer h4 {
      margin: 0 0 10px;
      color: var(--footer-text);
    }

    .site-footer p,
    .site-footer a,
    .site-footer li,
    .site-footer small {
      color: var(--footer-muted);
    }

    /* Remove default list bullets in footer and tidy spacing */
    .site-footer ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }

    .site-footer li {
      margin-bottom: 8px;
    }

    .site-footer a {
      text-decoration: none;
    }

    .site-footer a:hover {
      color: #ffffff;
    }

    .footer-brand {
      font-size: 22px;
      color: #fff;
      display: inline-block;
      margin-bottom: 8px;
    }

    .pill {
      display: inline-block;
      padding: 6px 10px;
      border: 1px solid #2c2f39;
      border-radius: 6px;
      margin-right: 6px;
      font-size: 12px;
      color: #ddd;
    }

    .social {
      display: flex;
      gap: 10px;
      margin-top: 12px;
      justify-content: flex-start;
    }

    .social a {
      width: 32px;
      height: 32px;
      border-radius: 50%;
      background: #1c1f27;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      color: #d8d6d3;
      font-size: 14px;
      transition: background .2s ease, color .2s ease, transform .2s ease;
    }

    .social a:hover {
      background: #2a2d36;
      color: #fff;
      transform: translateY(-1px);
    }

    .payments {
      display: flex;
      gap: 8px;
      flex-wrap: wrap;
      margin-top: 8px;
    }

    .footer-bottom {
      margin-top: 20px;
      padding-top: 18px;
      border-top: 1px solid #22242d;
      text-align: center;
      color: var(--footer-muted);
    }

    /* Footer map styles */
    .footer-map {
      margin-top: 12px;
    }

    .footer-map iframe {
      width: 100%;
      height: 220px;
      border: 0;
    }

    @media (min-width: 900px) {
      .footer-map iframe {
        height: 260px;
      }
    }

    @media (max-width: 960px) {
      .site-footer .grid {
        grid-template-columns: 1fr 1fr;
      }
    }

    @media (max-width: 560px) {
      .site-footer .grid {
        grid-template-columns: 1fr;
      }
    }

    @media (max-width: 640px) {
      .site-footer .grid>div {
        text-align: center;
      }

      .social {
        justify-content: center;
      }

      .payments {
        justify-content: center;
      }

      .site-footer ul {
        padding: 0;
        margin: 0 auto;
      }
    }

    .split {
      display: grid;
      grid-template-columns: 1.1fr 1fr;
      gap: 24px;
      align-items: center;
    }

    .split.reverse {
      grid-template-columns: 1fr 1.1fr;
    }

    .img-frame {
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    }

    .img-frame img {
      width: 100%;
      height: auto;
      display: block;
    }

    .feature-title {
      font-size: 2rem;
      margin: 0 0 8px;
      color: var(--heading);
    }

    .feature-sub {
      color: #8A8177;
      margin: 0 0 12px;
      letter-spacing: 0.9px;
    }

    .feature-bullets {
      color: #8A8177;
      line-height: 1.9;
      margin: 0 0 10px;
    }

    @media (max-width: 900px) {

      .split,
      .split.reverse {
        grid-template-columns: 1fr;
      }
    }

    /* Hamburger / mobile menu */
    .hamburger {
      display: none;
      background: #fff;
      border: 1.5px solid rgba(0, 0, 0, 0.08);
      padding: 6px;
      cursor: pointer;
      width: 44px;
      height: 38px;
      display: inline-flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      border-radius: 10px;
      position: relative;
      z-index: 1301;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .hamburger:focus {
      outline: 2px solid rgba(0, 0, 0, 0.12);
      outline-offset: 2px;
    }

    .hamburger .bar {
      display: block;
      width: 22px;
      height: 3px;
      background: var(--heading);
      margin: 3px 0;
      border-radius: 3px;
      transition: transform .22s ease, opacity .18s ease;
    }

    /* Active nav link styling */
    .nav-link.active {
      color: var(--accent-dark) !important;
      font-weight: 500;
    }

    /* open -> X */
    .hamburger.open .bar:nth-child(1) {
      transform: translateY(6px) rotate(45deg);
    }

    .hamburger.open .bar:nth-child(2) {
      opacity: 0;
      transform: scaleX(0.2);
    }

    .hamburger.open .bar:nth-child(3) {
      transform: translateY(-6px) rotate(-45deg);
    }

    .mobile-menu {
      display: none;
      position: fixed;
      top: 0;
      left: 0;
      bottom: 0;
      width: 86%;
      max-width: 420px;
      background: #ffffff;
      color: var(--heading);
      z-index: 1500;
      /* raised so drawer sits above logo */
      overflow: auto;
      transform: translateX(-100%);
      transition: transform .28s ease;
      box-shadow: 2px 0 18px rgba(0, 0, 0, 0.12);
    }

    .mobile-menu-inner {
      padding: 18px 22px 28px 22px;
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    /* Mobile accordion for grouped links inside the drawer */
    .mobile-accordion {
      display: flex;
      flex-direction: column;
      width: 100%;
    }

    /* Make the accordion toggle visually match other links (no box), with a right chevron */
    .mobile-accordion-toggle {
      appearance: none;
      -webkit-appearance: none;
      -moz-appearance: none;
      background: transparent;
      border: none;
      padding: 10px 8px;
      /* match .mobile-menu-inner a */
      text-align: left;
      font-weight: 500;
      /* same as other links */
      color: var(--heading);
      cursor: pointer;
      display: flex;
      align-items: center;
      justify-content: space-between;
      width: 100%;
      font-size: 18px;
      /* match mobile link size */
      text-decoration: none;
      border-radius: 0;
      box-shadow: none;
    }

    .mobile-accordion-toggle:focus {
      outline: 2px solid rgba(0, 0, 0, 0.08);
      outline-offset: 2px;
    }

    .mobile-accordion-toggle .chev {
      display: inline-block;
      transition: transform .18s ease;
      transform: rotate(0deg);
      font-size: 14px;
      color: rgba(94, 84, 74, 0.45);
      /* subtle chevron */
      margin-left: 8px;
    }

    .mobile-accordion-toggle[aria-expanded="true"] .chev {
      transform: rotate(90deg);
    }

    /* Panel shows as plain indented links (no box) to match existing menu style */
    .mobile-accordion-panel {
      display: none;
      padding-left: 16px;
      margin: 6px 0 10px 0;
    }

    .mobile-accordion-panel a {
      padding: 6px 6px;
      display: block;
      color: #8A8177;
      /* muted text color for child items */
      text-decoration: none;
      font-weight: 500;
      font-size: 15px;
      /* slightly smaller than parent to show hierarchy */
      line-height: 1.6;
    }

    .mobile-accordion-panel a:hover {
      color: var(--accent-dark);
    }

    .mobile-menu-inner a {
      color: var(--heading);
      text-decoration: none;
      font-size: 18px;
      padding: 10px 8px;
      border-radius: 4px;
      font-weight: 500;
    }

    .mobile-menu-inner a:hover {
      color: var(--accent-dark);
    }

    /* Mobile drawer header: logo + close button */
    .mobile-menu-header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 12px;
      padding: 10px 20px 8px 20px;
      border-bottom: 1px solid rgba(0, 0, 0, 0.04);
    }

    .mobile-menu-header .logo img {
      height: 70px;
      display: block;
    }

    .close-menu {
      width: 44px;
      height: 44px;
      border-radius: 8px;
      background: var(--accent-dark);
      color: #fff;
      display: inline-flex;
      align-items: center;
      justify-content: center;
      border: none;
      cursor: pointer;
    }

    .close-menu:before {
      content: '✕';
      font-size: 18px;
      line-height: 1;
    }

    @media (max-width: 900px) {

      .nav-left,
      .nav-right {
        display: none;
      }

      .hamburger {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        margin-left: auto;
        /* push hamburger to the right on mobile */
      }

      /* Make the centered logo larger on small screens and vertically center it
         within the header so it aligns correctly with the hamburger button */
      /* Keep the logo visually centered but prevent overlap with controls.
         Use a modest size so it fits the header comfortably on narrow viewports. */
      .logo-container {
        position: absolute;
        left: 50%;
        top: 50%;
        transform: translate(-50%, -50%);
        pointer-events: auto;
        z-index: 1302;
      }

      .logo-container .logo img {
        height: 45px;
        max-height: 45px;
        max-width: 180px;
        object-fit: contain;
        display: block;
      }

      header {
        justify-content: space-between;
        min-height: 64px;
        padding: 8px 12px;
      }
    }

    .mobile-menu.open {
      display: block;
      transform: translateX(0);
    }

    /* Backdrop behind drawer */
    .menu-backdrop {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, 0.35);
      backdrop-filter: blur(1px);
      z-index: 1499;
      /* ensure backdrop sits under drawer but above logo */
    }

    .menu-backdrop.open {
      display: block;
    }

    /* Extra strong overrides to center header links on homepage */
    .home-page .navbar .container {
      display: flex !important;
      justify-content: center !important;
      align-items: center !important;
    }

    .home-page .navbar .nav-left {
      display: flex !important;
      justify-content: center !important;
      gap: 18px !important;
      width: auto !important;
    }

    .home-page .navbar .nav-left .nav-link {
      margin: 0 10px !important;
    }

    /* Use a 3-column grid so nav-left sits in the center column (reliable centering) */
    .home-page nav>.container {
      display: grid !important;
      grid-template-columns: 1fr auto 1fr;
      align-items: center;
    }

    /* Mobile-specific force-hide to prevent desktop nav leaking into small screens
       Ensure hamburger is the only visible control that opens the menu. */
    @media (max-width: 900px) {

      .nav-left,
      .nav-right,
      .home-page .nav-left,
      .home-page .nav-right,
      nav.home-with-banner .nav-left,
      nav.home-with-banner .nav-right {
        display: none !important;
        visibility: hidden !important;
      }

      /* Hide any direct nav links that may be visible due to specificity wars */
      nav .nav-left a,
      nav .nav-right a,
      nav>.container a.nav-link {
        display: none !important;
        visibility: hidden !important;
      }

      /* Ensure hamburger is visible and receives pointer events */
      .hamburger {
        display: inline-flex !important;
        pointer-events: auto;
        visibility: visible !important;
      }
    }

    .home-page .nav-left {
      grid-column: 2;
      justify-content: center !important;
    }
  </style>
  <?php helper('url'); ?>
</head>

<body class="<?= !empty($isHome) ? 'home-page' : '' ?>">
  <script>
    // Safe back navigation: prefers history.back() when referrer is same-origin
    // otherwise redirects to the provided fallback URL (defaults to site root).
    function safeBack(fallback) {
      try {
        var fb = fallback || '/';
        if (document.referrer) {
          var ref = new URL(document.referrer);
          if (ref.origin === location.origin) {
            // If there is a usable history, go back
            if (history.length > 1) {
              history.back();
              return;
            }
          }
        }
        // otherwise, go to fallback
        window.location.href = fb;
      } catch (e) {
        window.location.href = fallback || '/';
      }
    }
  </script>
  <?php
  // Allow pages to request a minimal admin header by passing $admin_header = true
  $admin_header = isset($admin_header) ? (bool)$admin_header : false;
  $admin_page_title = isset($admin_page_title) ? $admin_page_title : 'Admin Panel';
  ?>
  <?php if ($admin_header): ?>
    <nav class="navbar navbar-light bg-white shadow-sm" style="border-bottom:1px solid rgba(0,0,0,0.04);">
      <div class="d-flex align-items-center justify-content-between" style="max-width:1080px; margin:0 auto;">
        <a class="navbar-brand d-flex align-items-center" href="<?= base_url('/') ?>">
          <img src="<?= !empty($isHome) ? base_url('assets/logo.png') : base_url('assets/logo.png') ?>" alt="Crown & Halo" height="44" onerror="this.style.display='none'">
        </a>
        <!-- <div style="font-weight:500; color:var(--heading);"><?= esc($admin_page_title) ?></div> -->
      </div>
    </nav>
  <?php else: ?>
    <?php /* top-banner removed */ ?>
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm <?= !empty($isHome) ? 'home-with-banner' : '' ?>" role="navigation">
      <div class="container px-2">
        <?php
        $currentUrl = function_exists('current_url') ? current_url() : (isset($_SERVER['REQUEST_URI']) ? (strpos($_SERVER['REQUEST_URI'], 'http') === 0 ? $_SERVER['REQUEST_URI'] : current_url()) : '');
        function nav_active($href, $exact = false)
        {
          $cur = (function_exists('current_url') ? current_url() : (isset($_SERVER['REQUEST_URI']) ? $_SERVER['REQUEST_URI'] : ''));
          // Normalize trailing slashes
          $curN = rtrim($cur, '/');
          $hrefN = rtrim($href, '/');
          if ($exact) return $curN === $hrefN ? 'active' : '';
          return (strpos($curN, $hrefN) === 0) ? 'active' : '';
        }
        ?>
        <!-- Desktop: left links / centered logo / right links -->
        <div class="nav-left d-none d-lg-flex">
          <a class="nav-link <?= nav_active(base_url('/'), true) ?>" href="<?= base_url('/') ?>">Home</a>
          <a class="nav-link <?= nav_active(base_url('/about')) ?>" href="<?= base_url('/about') ?>">About Us</a>
          <a class="nav-link <?= nav_active(base_url('/collections')) ?>" href="<?= base_url('/collections') ?>">Dress Collections</a>
          <!-- <div class="dropdown">
            <a class="dropdown-toggle dropdown-toggle" href="<?= base_url('/collections') ?>" id="collectionsDropdown" role="button" aria-expanded="false">Dress Collections</a>
            <div class="dropdown-menu" aria-labelledby="collectionsDropdown">
              <a class="dropdown-item" href="<?= base_url('/collections/enchanted-twilight') ?>">The Enchanted Twilight — Evening Gowns</a>
              <a class="dropdown-item" href="<?= base_url('/collections/princess-prom-dreams') ?>">Princess Prom Dreams — Prom Dresses</a>
              <a class="dropdown-item" href="<?= base_url('/collections/happily-ever-after') ?>">Happily Ever After — Wedding Gowns</a>
              <a class="dropdown-item" href="<?= base_url('/collections/crown-halo-couture') ?>">Crown &amp; Halo Couture — Luxury Designer Wear</a>
            </div>
          </div> -->
        </div>

        <?php
        if (!$isHome) {
        ?>
          <div class="logo-container">
            <a class="logo" href="<?= base_url('/') ?>">
              <img src="<?= base_url('assets/logo.png') ?>" alt="Crown &amp; Halo">
            </a>
          </div>
        <?php
        }
        ?>

        <div class="nav-right d-none d-lg-flex">
          <a class="nav-link <?= nav_active(base_url('/gallery')) ?>" href="<?= base_url('/gallery') ?>">Gallery</a>
          <a class="nav-link <?= nav_active(base_url('/contact')) ?>" href="<?= base_url('/contact') ?>">Contact Us</a>
          <!-- <a class="nav-link" href="<?= base_url('/book-appointment') ?>">Book an Appointment</a> -->
        </div>

        <!-- Mobile hamburger only; mobile menu handled below -->
        <button class="hamburger d-lg-none mr-2" aria-label="Open menu" aria-controls="mobile-menu" aria-expanded="false">
          <span class="bar"></span>
          <span class="bar"></span>
          <span class="bar"></span>
        </button>
      </div>
    </nav>

    <!-- Mobile drawer and backdrop (rendered for non-admin header) -->
    <div id="mobile-menu" class="mobile-menu" role="dialog" aria-modal="true" aria-hidden="true">
      <div class="mobile-menu-inner">
        <div class="mobile-menu-header">
          <a class="logo" href="<?= base_url('/') ?>">
            <?php if (!empty($isHome)): ?>
              <span class="logo-text brand-name">Crown &amp; Halo</span>
            <?php else: ?>
              <img src="<?= base_url('assets/logo.png') ?>" alt="Crown &amp; Halo" onerror="this.style.display='none'">
            <?php endif; ?>
          </a>
          <button class="close-menu" aria-label="Close menu"></button>
        </div>

        <a href="<?= base_url('/') ?>">Home</a>
        <a href="<?= base_url('/about') ?>">About Us</a>

        <div class="mobile-accordion">
          <button class="mobile-accordion-toggle" aria-expanded="false" aria-controls="collections-panel">Dress Collections <span class="chev">›</span></button>
          <div id="collections-panel" class="mobile-accordion-panel" hidden>
            <a href="<?= base_url('/collections/enchanted-twilight') ?>">The Enchanted Twilight — Evening Gowns</a>
            <a href="<?= base_url('/collections/princess-prom-dreams') ?>">Princess Prom Dreams — Prom Dresses</a>
            <a href="<?= base_url('/collections/happily-ever-after') ?>">Happily Ever After — Wedding Gowns</a>
            <a href="<?= base_url('/collections/crown-halo-couture') ?>">Crown &amp; Halo Couture — Luxury Designer Wear</a>
            <a class="dropdown-item" href="<?= base_url('/collections') ?>">View All Collections</a>
          </div>
        </div>
        <a href="<?= base_url('/gallery') ?>">Gallery</a>
        <a href="<?= base_url('/contact') ?>">Contact Us</a>
        <a href="<?= base_url('/book-appointment') ?>">Book Appointment</a>
      </div>
    </div>

    <div id="menu-backdrop" class="menu-backdrop" aria-hidden="true"></div>
  <?php endif; ?>
  <main class="container">
    <?php
    $flashSuccess = session()->getFlashdata('success');
    $flashError = session()->getFlashdata('error');
    ?>
    <div id="appNotification" aria-live="polite" style="position:fixed; top:22px; right:22px; z-index:2000; display:none;">
      <div id="appNotificationInner" style="min-width:260px; max-width:420px; padding:12px 14px; border-radius:8px; box-shadow:0 8px 20px rgba(0,0,0,0.12); color:#fff; font-weight:600;"></div>
    </div>
    <script>
      (function() {
        var msg = <?= json_encode($flashSuccess ?? $flashError ?? null) ?>;
        var type = <?= json_encode($flashSuccess ? 'success' : ($flashError ? 'error' : null)) ?>;
        if (!msg) return;
        var container = document.getElementById('appNotification');
        var inner = document.getElementById('appNotificationInner');
        if (!container || !inner) return;
        inner.textContent = msg;
        if (type === 'success') {
          inner.style.background = '#28a745';
        } else {
          inner.style.background = '#d6333f';
        }
        container.style.display = 'block';
        // simple show then auto-hide
        setTimeout(function() {
          container.style.opacity = '1';
          container.style.transition = 'opacity .28s ease';
        }, 20);
        setTimeout(function() {
          container.style.opacity = '0';
          setTimeout(function() {
            container.style.display = 'none';
          }, 300);
        }, 4200);
      })();
    </script>
    <script>
      document.addEventListener('DOMContentLoaded', function() {
        var btn = document.querySelector('.hamburger');
        var menu = document.getElementById('mobile-menu');
        var backdrop = document.getElementById('menu-backdrop');
        if (!btn || !menu) return;
        btn.addEventListener('click', function(e) {
          e.stopPropagation();
          var open = menu.classList.toggle('open');
          btn.classList.toggle('open', open);
          btn.setAttribute('aria-expanded', open ? 'true' : 'false');
          menu.setAttribute('aria-hidden', open ? 'false' : 'true');
          if (backdrop) {
            backdrop.classList.toggle('open', open);
            backdrop.setAttribute('aria-hidden', open ? 'false' : 'true');
          }
        });
        // Close when clicking outside
        document.addEventListener('click', function(e) {
          if (!menu.classList.contains('open')) return;
          if (e.target.closest('.mobile-menu') || e.target.closest('.hamburger')) return;
          menu.classList.remove('open');
          btn.classList.remove('open');
          btn.setAttribute('aria-expanded', 'false');
          menu.setAttribute('aria-hidden', 'true');
          if (backdrop) {
            backdrop.classList.remove('open');
            backdrop.setAttribute('aria-hidden', 'true');
          }
        });
        // Close on Escape key
        document.addEventListener('keydown', function(e) {
          if (e.key === 'Escape' && menu.classList.contains('open')) {
            menu.classList.remove('open');
            btn.classList.remove('open');
            btn.setAttribute('aria-expanded', 'false');
            menu.setAttribute('aria-hidden', 'true');
            if (backdrop) {
              backdrop.classList.remove('open');
              backdrop.setAttribute('aria-hidden', 'true');
            }
            btn.focus();
          }
        });

        // Mobile accordion toggles inside the mobile menu
        document.querySelectorAll('.mobile-accordion-toggle').forEach(function(toggle) {
          var panelId = toggle.getAttribute('aria-controls');
          var panel = panelId ? document.getElementById(panelId) : null;
          // ensure panel initial state matches attribute
          if (panel && toggle.getAttribute('aria-expanded') !== 'true') {
            panel.style.display = 'none';
            panel.setAttribute('hidden', '');
          }

          toggle.addEventListener('click', function(e) {
            e.stopPropagation();
            var expanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
            if (!panel) return;
            if (expanded) {
              panel.style.display = 'none';
              panel.setAttribute('hidden', '');
            } else {
              panel.style.display = 'block';
              panel.removeAttribute('hidden');
            }
          });
        });
        // Close button inside mobile menu
        var closeBtn = document.querySelector('.close-menu');
        if (closeBtn) {
          closeBtn.addEventListener('click', function(e) {
            e.stopPropagation();
            if (!menu.classList.contains('open')) return;
            menu.classList.remove('open');
            btn.classList.remove('open');
            btn.setAttribute('aria-expanded', 'false');
            menu.setAttribute('aria-hidden', 'true');
            if (backdrop) {
              backdrop.classList.remove('open');
              backdrop.setAttribute('aria-hidden', 'true');
            }
            btn.focus();
          });
        }
      });
    </script>