<?php helper('url'); ?>
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
    :root {
      --bg: #FAF7F2;
      --text: #6F665C;
      --heading: #5E544A;
      --accent: #C8B6A8;
      --accent-dark: #B39E8D;
      --footer-bg: #121318;
      --footer-text: #EAE6E1;
      --footer-muted: #C0BBB6;
    }

    html,
    body {
      height: 100%;
    }

    body {
      font-family: ui-sans-serif, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
      margin: 0;
      color: var(--text);
      background: var(--bg);
    }

    .brand-serif {
      font-family: 'Georgia', 'Times New Roman', serif;
      letter-spacing: 1px;
    }

    header {
      padding: 8px 16px;
      /* tight padding */
      position: relative;
      border-bottom: 1px solid rgba(0, 0, 0, 0.05);
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 20px;
      flex-wrap: wrap;
      min-height: 82px;
      /* a little shorter */
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
      /* center vertically inside header */
      z-index: 1302;
      pointer-events: none;
      /* allow clicks only on the link */
      overflow: visible;
    }

    .logo-container .logo {
      pointer-events: auto;
    }

    .logo img {
      height: 38px;
      display: block;
      width: auto;
      max-width: 220px;
    }

    /* Larger centered logo on desktop */
    @media (min-width: 900px) {
      .logo-container .logo img {
        height: 100px;
        /* slightly larger on desktop */
        max-height: 120px;
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
        height: 84px;
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
      font-weight: 500;
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
    }

    .nav-left {
      justify-content: flex-end;
    }

    .nav-right {
      justify-content: flex-start;
    }

    /* removed conflicting absolute-positioning for navs on desktop to allow grid layout */

    .container {
      max-width: 1080px;
      margin: 0 auto;
      padding: 0 24px;
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
      font-weight: 700;
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
      border-radius: 8px;
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
      border-radius: 12px;
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
      border-radius: 8px;
      margin-bottom: 12px;
      background: #fff;
    }

    form button {
      background: var(--accent);
      color: #fff;
      border: none;
      padding: 12px 18px;
      border-radius: 8px;
      cursor: pointer;
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
      border-radius: 8px;
      background: #fff;
    }

    .newsletter button {
      padding: 12px 18px;
      border-radius: 8px;
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
      border-radius: 8px;
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

    /* Alternating split sections */
    .section {
      margin: 40px 0;
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
      border-radius: 16px;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.06);
    }

    .img-frame img {
      width: 100%;
      height: auto;
      display: block;
    }

    .feature-title {
      font-size: 28px;
      margin: 0 0 8px;
      color: var(--heading);
    }

    .feature-sub {
      color: #8A8177;
      margin: 0 0 12px;
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
      width: 38px;
      height: 38px;
      align-items: center;
      justify-content: center;
      border-radius: 10px;
      position: relative;
      z-index: 1301;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    .hamburger svg {
      color: var(--heading);
      display: block;
      width: 18px;
      height: 14px;
    }

    .hamburger:focus {
      outline: 2px solid rgba(0, 0, 0, 0.12);
      outline-offset: 2px;
    }

    .hamburger .bar {
      display: block;
      width: 26px;
      height: 4px;
      background: var(--heading);
      margin: 4px 0;
      border-radius: 4px;
      transition: transform .22s ease, opacity .18s ease;
    }

    /* open -> X */
    .hamburger.open .bar:nth-child(1) {
      transform: translateY(9px) rotate(45deg);
    }

    .hamburger.open .bar:nth-child(2) {
      opacity: 0;
      transform: scaleX(0.2);
    }

    .hamburger.open .bar:nth-child(3) {
      transform: translateY(-9px) rotate(-45deg);
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
      gap: 5px;
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
      .logo-container {
        top: 50%;
        transform: translate(-50%, -50%);
      }

      .logo-container .logo img {
        height: 80px;
      }

      header {
        justify-content: space-between;
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
  </style>
  <?php helper('url'); ?>
</head>

<body>
  <header>
    <nav class="nav-left">
      <a href="<?= base_url('/') ?>">Home</a>
      <a href="<?= base_url('/about') ?>">About Us</a>
    </nav>

    <div class="logo-container">
      <a href="<?= base_url('/') ?>" class="logo" aria-label="Crown & Halo home">
        <img src="<?= base_url('assets/logo.png') ?>" alt="Crown & Halo logo" onerror="this.style.display='none'; document.querySelector('.logo-text').style.display='inline-block';">
        <span class="logo-text brand-serif">Crown & Halo</span>
      </a>
    </div>

    <nav class="nav-right">
      <a href="<?= base_url('/products') ?>">Portfolio</a>
      <a href="<?= base_url('/contact') ?>">Contact Us</a>
    </nav>
    <button class="hamburger" aria-label="Open menu" aria-expanded="false" aria-controls="mobile-menu">
      <!-- Inline SVG hamburger icon for consistent rendering -->
      <svg viewBox="0 0 24 18" width="26" height="20" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false">
        <rect x="0" y="1" width="24" height="2" rx="1" fill="currentColor" />
        <rect x="0" y="8" width="24" height="2" rx="1" fill="currentColor" />
        <rect x="0" y="15" width="24" height="2" rx="1" fill="currentColor" />
      </svg>
    </button>
  </header>

  <!-- Mobile menu (hidden on desktop) -->
  <nav id="mobile-menu" class="mobile-menu" aria-hidden="true">
    <div class="mobile-menu-header">
      <a href="<?= base_url('/') ?>" class="logo" aria-label="Crown & Halo home">
        <img src="<?= base_url('assets/logo.png') ?>" alt="Crown & Halo logo" onerror="this.style.display='none'; document.querySelectorAll('.mobile-logo-text').forEach(e=>e.style.display='inline-block');">
        <span class="mobile-logo-text brand-serif" style="display:none">Crown & Halo</span>
      </a>
      <button class="close-menu" aria-label="Close menu"></button>
    </div>
    <div class="mobile-menu-inner">
      <a href="<?= base_url('/') ?>">Home</a>
      <a href="<?= base_url('/about') ?>">About Us</a>
      <a href="<?= base_url('/products') ?>">Portfolio</a>
      <a href="<?= base_url('/contact') ?>">Contact Us</a>
      <a href="<?= base_url('/faqs') ?>">FAQs</a>
      <a href="<?= base_url('/privacy') ?>">Privacy</a>
      <a href="<?= base_url('/terms') ?>">Terms</a>
    </div>
  </nav>
  <div id="menu-backdrop" class="menu-backdrop" aria-hidden="true"></div>
  <main class="container">
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