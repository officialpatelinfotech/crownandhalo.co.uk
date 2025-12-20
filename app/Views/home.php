<style>
  .home-font .brand-serif {
    font-family: 'Cormorant Garamond', Georgia, 'Times New Roman', serif;
    font-weight: 500;
  }

  .home-font .hero-title {
    font-size: 2.5em;
    letter-spacing: 0.9px;
    line-height: 1.3em;
  }

  .home-font .hero-sub {
    font-family: 'Poppins', sans-serif;
  }

  .home-font .cta {
    font-family: 'Poppins', sans-serif;
  }

  /* Horizontal page padding to create left/right margin on small and large screens */
  .home-font {
    box-sizing: border-box;
  }

  /* (removed global constraint on all direct children) */

  @media (min-width:1200px) {
    .home-font {
      padding: 0 96px;
    }
  }

  .banner-logo-top {
    width: 325px;
    margin-bottom: 24px;
  }

  /* Vertical feature list layout (left icon, right text) */
  .hero-feature-bar {
    display: block;
    margin: 8px auto 0;
    background: #FBF6F2;
    padding: 4px;

    /* Compact mobile adjustments (global overrides for small screens) */
  }

  .home-font {
    padding: 0;
  }

  .hero {
    padding: 12px 0 12px;
  }

  .hero-title {
    font-size: clamp(22px, 9vw, 36px);
    letter-spacing: 1px;
    line-height: 1.03;
  }

  .hero-sub {
    font-size: 15px;
    max-width: 96%;
  }

  .hero-img-card {
    box-shadow: 0 8px 22px rgba(16, 24, 40, 0.07);
  }

  .hero-img-card img {
    height: auto;
    max-height: 560px;
    object-position: 50% 8%;
  }

  .hero-play {
    display: none;
  }

  .hero-feature-bar {
    padding: 6px;
  }

  .welcome-container {
    background: white;
  }

  .feature-row {
    grid-template-columns: 1fr;
    padding: 12px;
    gap: 12px;
  }

  .feature-row .feature-image img {
    height: 200px;
    object-position: 50% 8%;
  }

  .feature-quote {
    font-size: 0.98rem;
    padding: 12px;
  }

  .img-frame {
    max-height: 240px;
  }

  .img-frame img {
    object-position: 50% 8%;
    height: 100%;
  }

  .section-divider {
    margin: 18px 0 12px;
  }

  .divider-svg {
    height: 40px;
  }

  .divider-svg path {
    stroke-width: 1.6;
    opacity: 0.95;
  }

  .story-banner {
    padding: 18px 12px;
  }

  .story-banner h2.brand-serif {
    font-size: 1.05rem;
  }

  .story-banner .story-line {
    font-size: 0.96rem;
  }

  /* Reduce heavy decorations on mobile for performance and clarity */
  .hero-img-card,
  .feature-row,
  .story-banner {
    box-shadow: 0 8px 20px rgba(16, 24, 40, 0.06);
  }

  .hero-feature {
    display: flex;
    gap: 10px;
    align-items: center;
    padding: 8px 10px;
    border-bottom: 1px solid rgba(0, 0, 0, 0.05);
  }

  .hero-feature:last-child {
    border-bottom: none;
  }

  .hero-feature .icon {
    width: 40px;
    height: 40px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: #fff;
    color: var(--accent-dark);
    font-size: 16px;
    flex: 0 0 40px;
    box-shadow: 0 3px 8px rgba(0, 0, 0, 0.04);
  }

  .hero-feature .body {
    flex: 1 1 auto;
    display: flex;
    align-items: center;
    justify-content: center;
  }

  .hero-feature .title {
    font-weight: 700;
    color: var(--heading);
    margin: 0;
    font-size: 0.95rem;
    display: block;
    text-align: center;
  }

  /* hide long descriptions; only headings are shown in this design */
  .hero-feature .desc {
    display: none;
  }

  @media (max-width:860px) {
    .hero-feature-bar {
      padding: 6px;
    }

    .hero-feature {
      padding: 12px;
      gap: 12px;
    }

    .hero-feature .icon {
      flex: 0 0 44px;
      width: 44px;
      height: 44px;
    }
  }

  /* style the feature panel as a centered white card with rounded corners */
  .hero-feature-bar {
    background: #fff;
    padding: 4px;
    box-shadow: 0 8px 20px rgba(16, 24, 40, 0.035);
  }

  /* Hero spacing tuned to match reference layout */
  .hero {
    padding: 50px 0 50px;
    text-align: center;
    /* soft paper-like background similar to the reference */
    /* background-color: #f8f6f3; */
    /* background-image: radial-gradient(circle at 10% 10%, rgba(255, 255, 255, 0.02), transparent 20%), radial-gradient(circle at 90% 90%, rgba(0, 0, 0, 0.01), transparent 30%); */
    background-repeat: no-repeat;
  }

  .hero-title {
    margin: 0 0 10px;
    line-height: 1.02;
    font-size: clamp(34px, 7.5vw, 88px);
    font-family: 'Cormorant Garamond', Georgia, 'Times New Roman', serif;
    font-weight: 600;
    text-transform: uppercase;
    letter-spacing: 2px;
    color: #9b897f;
  }

  .hero-sub {
    text-align: center;
    margin: 0 auto 14px;
    line-height: 1.6;
    max-width: 1200px;
    color: rgba(0, 0, 0, 0.55);
    font-size: 16px;
    font-family: 'Poppins', sans-serif;
    letter-spacing: 0.9px;
  }

  .hero-features {
    margin-top: 18px;
  }

  .hero-img {
    margin-top: 42px;
  }

  .hero-img-card {
    width: 100%;
    max-width: 1180px;
    overflow: hidden;
    box-shadow: 0 32px 110px rgba(16, 24, 40, 0.14);
    background: #fff;
    position: relative;
  }

  .hero-img-card img {
    display: block;
    width: 100%;
    height: auto;
    object-fit: cover;
  }

  @media (min-width:1200px) {
    .hero-img-card {
      width: 100%;
      max-width: 1180px;
    }

    /* reduced height for a wider, shallower look */
    .hero-img-card img {
      height: 720px;
      object-position: center;
    }
  }

  /* Play overlay button centered on the hero image */
  .hero-play {
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 110px;
    height: 110px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    background: rgba(255, 255, 255, 0.06);
    border: 2px solid rgba(255, 255, 255, 0.18);
    box-shadow: 0 6px 22px rgba(16, 24, 40, 0.12);
    cursor: pointer;
    z-index: 40;
    border-radius: 50%;
  }

  .hero-play:before {
    content: '';
    display: block;
    width: 0;
    height: 0;
    border-left: 26px solid #fff;
    border-top: 18px solid transparent;
    border-bottom: 18px solid transparent;
    margin-left: 4px;
    opacity: 0.95;
  }

  .hero-play:hover {
    transform: translate(-50%, -50%) scale(1.04);
  }

  @media (max-width:900px) {
    .hero {
      padding: 30px 0;
    }

    .hero-img-card {
      width: 100%;
    }

    .hero-img-card img {
      height: 1200px;
    }

    .hero-title {
      font-size: clamp(26px, 6.5vw, 38px);
    }

    .hero-sub {
      max-width: 92%;
    }
  }

  #why {
    background-color: white;
  }

  /* Parallax background for the How It Works section */
  #how-it-works.parallax {
    position: relative;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    padding: 60px 0;
    /* maintain vertical spacing around the panel */
    overflow: hidden;
  }

  #how-it-works.parallax:before {
    content: '';
    position: absolute;
    inset: 0;
    background: rgba(0, 0, 0, 0.28);
    /* subtle dark overlay for contrast */
    z-index: 0;
    pointer-events: none;
  }

  #why .hero-inner {
    padding: 50px 0px;
  }

  /* Ensure the inner content sits above the overlay */
  #how-it-works .hero-inner,
  #how-it-works .how-panel {
    position: relative;
    z-index: 1;
  }

  /* Mobile fallback: fixed attachment can behave poorly on some devices */
  @media (max-width:860px) {
    #how-it-works.parallax {
      background-attachment: scroll;
      background-position: center top;
      padding: 40px 0;
    }

    #how-it-works.parallax:before {
      background: rgba(0, 0, 0, 0.36);
    }
  }

  /* Constrain hero content and present features in a translucent panel */
  .hero-inner {
    max-width: 1180px;
    margin: 0 auto;
    padding: 0 24px;
    box-sizing: border-box;
  }

  .hero-feature-bar {
    display: block;
    margin: 22px auto 0;
    background: rgba(255, 255, 255, 0.94);
    padding: 8px;
    max-width: 1080px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.06);
  }

  @media (max-width:860px) {
    .hero-inner {
      padding: 0 12px;
    }

    .hero-feature-bar {
      padding: 6px;
    }
  }

  /* Services / product showcase */
  .services {
    max-width: 1180px;
    margin: 32px auto;
    padding: 0 24px;
    display: grid;
    gap: 18px;
    grid-template-columns: repeat(3, 1fr);
    box-sizing: border-box;
  }

  .service-card {
    background: linear-gradient(180deg, #ffffff, #fbf7f4);
    padding: 20px;
    text-align: center;
    box-shadow: 0 8px 24px rgba(16, 24, 40, 0.04);
  }

  .service-card .icon {
    font-size: 28px;
    display: inline-block;
    margin-bottom: 10px;
  }

  .service-card h3 {
    margin: 6px 0 8px;
    font-size: 18px;
  }

  /* Testimonials */
  .testimonials {
    max-width: 1080px;
    margin: 40px auto;
    padding: 0 24px;
    box-sizing: border-box;
  }

  .testimonials .t-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 18px;
  }

  .testimonial {
    background: #fff;
    padding: 18px;
    box-shadow: 0 8px 20px rgba(16, 24, 40, 0.04);
  }

  .testimonial .who {
    font-weight: 700;
    margin-top: 10px;
  }

  /* Newsletter */
  .newsletter {
    max-width: 980px;
    margin: 36px auto;
    padding: 20px;
    background: linear-gradient(180deg, #fff, #fbfbfb);
    box-shadow: 0 12px 30px rgba(16, 24, 40, 0.04);
    text-align: center;
    box-sizing: border-box;
  }

  .newsletter form {
    display: flex;
    gap: 8px;
    justify-content: center;
    align-items: center;
    margin-top: 12px;
  }

  .newsletter input[type="email"] {
    padding: 12px 14px;
    border: 1px solid rgba(0, 0, 0, 0.08);
    width: 340px;
    max-width: 60%;
    box-sizing: border-box;
  }

  .newsletter button {
    padding: 12px 18px;
    background: var(--accent, #b97a6d);
    color: #fff;
    border: none;
    cursor: pointer;
  }

  @media (max-width:900px) {
    .services {
      grid-template-columns: 1fr;
    }

    .testimonials .t-grid {
      grid-template-columns: 1fr;
    }

    .newsletter input[type="email"] {
      width: 60%;
    }
  }

  /* Show hero features in a horizontal row on wider screens */
  @media (min-width:861px) {
    .hero-feature-bar {
      display: grid;
      grid-template-columns: repeat(3, 1fr);
      gap: 0;
      align-items: stretch;
      padding: 8px 12px;
      max-width: 1180px;
      margin: 22px auto 0;
    }

    .hero-feature {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 10px 8px;
      border-bottom: none;
      border-right: 1px solid rgba(0, 0, 0, 0.03);
    }

    .hero-feature:last-child {
      border-right: none;
    }

    .hero-feature .icon {
      margin-bottom: 6px;
      box-shadow: none;
      background: transparent;
      font-size: 18px;
      width: auto;
      height: auto;
      flex: none;
      color: var(--accent-dark);
    }

    .hero-feature .body {
      display: block;
      text-align: center;
    }

    .hero-feature .title {
      font-size: 1.05rem;
    }
  }

  /* Two-column split inside #why with the image constrained on the right */
  #why .why-panel .split {
    display: grid;
    grid-template-columns: 1fr 420px;
    gap: 22px;
    align-items: start;
  }

  #why .why-panel .img-frame {
    display: flex;
    align-items: flex-start;
    justify-content: center;
    max-height: 380px;
    overflow: hidden;
  }

  #why .why-panel .img-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: 50% 10%;
    box-shadow: 0 8px 20px rgba(16, 24, 40, 0.06);
    display: block;
  }

  @media (max-width:860px) {
    #why .why-panel {
      padding: 40px 14px;
    }

    #why .why-panel .split {
      grid-template-columns: 1fr;
    }

    #why .why-panel .img-frame {
      max-height: 240px;
    }
  }

  #why-hire {
    background-color: white;
    padding: 50px 0;
  }

  /* Container padding / left-right margins for the section content */
  #why-hire .hero-inner {
    padding: 0 24px;
    box-sizing: border-box;
    max-width: 1180px;
    margin: 0 auto;
  }

  /* Two-column layout for this informational panel (image constrained to right column)
     but stacks on smaller screens. */
  #why-hire .split {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 25px;
    align-items: start;
  }

  #why-hire .split-reverse {
    display: grid;
    grid-template-columns: 1fr 2fr;
    gap: 25px;
    align-items: start;
  }

  #why-hire .img-frame {
    max-height: 380px;
    overflow: hidden;
  }

  #why-hire .img-frame img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: 50% 12%;
    display: block;
  }

  /* Make images in the #why-hire splits and feature-row uniform in size */
  .feature-row .feature-image,
  #why-hire .img-frame,
  #why-hire .feature-row .feature-image {
    height: 380px;
    max-height: 380px;
    overflow: hidden;
  }

  .feature-row .feature-image img,
  #why-hire .img-frame img,
  #why-hire .feature-row .feature-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center top;
    display: block;
  }

  @media (max-width:860px) {

    /* Reduce vertical padding and add tighter horizontal margins on phones */
    #why-hire {
      padding: 28px 0;
    }

    #why-hire .hero-inner {
      padding: 0 25px;
    }

    /* Stack the split columns and reduce image heights for smaller viewports */
    #why-hire .split {
      grid-template-columns: 1fr;
      gap: 14px;
      grid-auto-flow: dense;
    }

    #why-hire .split-reverse {
      grid-template-columns: 1fr;
      gap: 14px;
      grid-auto-flow: dense;
    }


    #why-hire .img-frame {
      max-height: 220px;
      height: 220px;
    }

    /* Match feature-row image height on mobile */
    .feature-row .feature-image,
    #why-hire .feature-row .feature-image {
      max-height: 220px;
      height: 220px;
    }

    .feature-row .feature-image img,
    #why-hire .img-frame img {
      height: 100%;
      object-fit: cover;
    }

    /* Slightly reduce the framed feature card padding on mobile */
    #why-hire .feature-row {
      padding: 12px;
      gap: 12px;
    }

    #why-hire .feature-row .feature-image img {
      height: 200px;
    }

    #why-hire .section-divider {
      margin: 20px 0 12px;
    }
  }

  /* Glassmorphism blur container */
  #how-it-works .how-panel {
    background: rgba(255, 255, 255, 0.65);
    /* tint */
    backdrop-filter: blur(16px);
    -webkit-backdrop-filter: blur(16px);
    /* Safari */

    border: 1px solid rgba(255, 255, 255, 0.35);

    box-shadow:
      0 12px 40px rgba(0, 0, 0, 0.18),
      inset 0 1px 0 rgba(255, 255, 255, 0.4);

    position: relative;
    z-index: 2;
  }

  /* Alternate panel for informational sections (darker, warm theme) */
  .how-panel {
    margin: 50px 0;
    padding: 28px 20px;
    box-shadow: 0 6px 18px rgba(16, 24, 40, 0.04);
    border-left: 6px solid rgba(185, 122, 109, 0.06);
    color: rgba(0, 0, 0, 0.9);
    box-sizing: border-box;
    align-items: center;
  }

  .how-panel h2.brand-serif {
    color: var(--heading);
  }

  @media (min-width:861px) {
    .how-panel {
      padding: 36px 28px;
      grid-template-columns: 1fr 360px;
    }

    .how-panel h2.brand-serif {
      font-size: 2rem;
      margin-bottom: 8px;
      text-align: left;
    }

    .how-panel h2.brand-serif:after {
      content: '';
      display: block;
      width: 56px;
      height: 4px;
      background: rgba(185, 122, 109, 0.08);
      margin-top: 10px;
    }

    .how-panel .hero-sub,
    .how-panel ul {
      text-align: left;
      margin: 0;
    }

    .how-panel ul {
      color: #8A8177;
      margin-top: 8px;
      padding-left: 1.2rem;
    }
  }

  /* Redesigned feature-row: framed card with image + content */
  .feature-row {
    display: grid;
    grid-template-columns: 480px 1fr;
    gap: 28px;
    align-items: center;
    margin-top: 26px;
    padding: 20px;
    background: linear-gradient(180deg, #ffffff, #fbfbf7);
    box-shadow: 0 10px 30px rgba(16, 24, 40, 0.05);
  }

  .feature-row .feature-image {
    overflow: hidden;
    box-shadow: 0 8px 22px rgba(16, 24, 40, 0.06);
  }

  .feature-row .feature-image img {
    display: block;
    width: 100%;
    height: 380px;
    object-fit: cover;
    object-position: center top;
  }

  .feature-row .feature-content h3 {
    margin-top: 0;
    margin-bottom: 8px;
  }

  @media (max-width:860px) {
    .feature-row {
      grid-template-columns: 1fr;
      padding: 14px;
      gap: 14px;
    }

    .feature-row .feature-image img {
      height: 220px;
    }
  }

  /* Emphatic callout for feature copy — light panel with left accent */
  .feature-quote {
    margin-top: 12px;
    padding: 12px 18px;
    background: linear-gradient(180deg, #fff, #fbfbfb);
    border-left: 3px solid rgba(217, 184, 154, 0.12);
    color: #6b6058;
    font-style: normal;
    line-height: 1.5;
    max-width: 100%;
    box-sizing: border-box;
  }

  .feature-quote strong {
    font-weight: 600;
    color: #6b6058;
  }

  @media (max-width:860px) {
    .feature-quote {
      padding: 12px 14px;
    }
  }

  /* Decorative divider between sections */
  .section-divider {
    display: flex;
    justify-content: center;
    margin: 36px 0 18px;
    pointer-events: none;
  }

  .divider-svg {
    width: 100%;
    max-width: 1180px;
    height: 64px;
    display: block;
  }

  .divider-svg path {
    stroke: rgba(217, 184, 154, 0.95);
    stroke-width: 2.4;
    fill: none;
    stroke-linecap: round;
    stroke-linejoin: round;
    filter: drop-shadow(0 6px 10px rgba(0, 0, 0, 0.18));
    opacity: 0.96;
  }

  .divider-accent {
    fill: rgba(217, 184, 154, 0.06);
  }

  /* Scallop divider uses soft filled circles as a motif */
  .divider-scallop circle {
    fill: rgba(217, 184, 154, 0.08);
    opacity: 0.95;
    filter: drop-shadow(0 6px 8px rgba(0, 0, 0, 0.12));
  }

  /* Dashed / decorative line variant */
  .divider-dash path {
    stroke-dasharray: 10 8;
    stroke-linecap: round;
  }

  /* Story banner (closing statement) — dark, elegant theme with warm accent */
  .story-banner {
    margin-top: 18px;
    /* background: linear-gradient(180deg, #2b2018 0%, #1d1612 100%); */
    color: #f6e9df;
    padding: 36px 22px;
    box-shadow: 0 12px 36px rgba(0, 0, 0, 0.45);
    text-align: center;
    position: relative;
    overflow: hidden;
  }

  .story-banner:before {
    content: '';
    position: absolute;
    inset: 0;
    background: var(--heading);
    pointer-events: none;
    z-index: 0;
  }

  .story-banner .story-inner {
    max-width: 980px;
    margin: 0 auto;
    position: relative;
    z-index: 1;
  }

  .story-banner h2.brand-serif {
    margin: 0 0 8px 0;
    font-size: clamp(1rem, 2.4vw, 1.35rem);
    color: white;
    letter-spacing: 0.6px;
    font-weight: 600;
  }

  .story-banner h2.brand-serif:after {
    content: '';
    display: block;
    width: 64px;
    height: 3px;
    background: white;
    margin: 10px auto 0;
  }

  .story-banner .story-line {
    margin: 0;
    color: white;
    font-size: 1.05rem;
    line-height: 1.6;
    opacity: 0.95;
  }

  @media (max-width:860px) {
    .section-divider {
      margin: 20px 0 12px;
    }

    .divider-svg {
      height: 48px;
    }

    .story-banner {
      padding: 22px 14px;
    }

    .story-banner h2.brand-serif {
      font-size: 1.05rem;
    }

    .story-banner .story-line {
      font-size: 0.98rem;
    }
  }

  /* Join badge: subtle pill with icon */
  .join-badge {
    display: inline-flex;
    align-items: center;
    gap: 12px;
    padding: 10px 16px;
    background: linear-gradient(180deg, #fff, #fbfbfb);
    box-shadow: 0 6px 18px rgba(16, 24, 40, 0.04);
    color: var(--heading);
    font-weight: 600;
    margin-top: 12px;
  }

  .join-badge .badge-icon {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    background: rgba(185, 122, 109, 0.08);
    color: rgba(185, 122, 109, 0.9);
    font-size: 18px;
  }

  /* Compact centered join banner styled like the provided screenshot */
  .join-banner {
    background: linear-gradient(180deg, #fff, #fbfbfb);
    padding: 14px 18px;
    box-shadow: 0 6px 18px rgba(16, 24, 40, 0.04);
    border-left: 4px solid rgba(185, 122, 109, 0.12);
    max-width: 980px;
    margin: 12px auto;
    position: relative;
    z-index: 2;
  }

  .join-banner::before {
    /* disable the decorative pseudo used by .story-banner when present */
    background-image: none !important;
  }

  .join-banner .story-inner {
    padding: 0;
  }

  .join-banner .story-line {
    margin: 0;
    color: #6b6058;
    font-size: 1rem;
    font-weight: 500;
  }

  @media (max-width:860px) {
    .join-badge {
      padding: 8px 12px;
      gap: 8px;
    }

    .join-badge .badge-icon {
      width: 32px;
      height: 32px;
      font-size: 16px;
    }
  }

  /* Page banner placed below header for the homepage view */
  .page-banner {
    position: relative;
    background-size: cover;
    background-position: center center;
    background-repeat: no-repeat;
    height: 760px;
    min-height: 420px;
    padding: 0;
    color: #fff;
    overflow: hidden;
  }

  .page-banner::before {
    content: "";
    position: absolute;
    inset: 0;
    background-image: var(--banner-bg);
    background-size: cover;
    background-position: bottom;
    background-repeat: no-repeat;
    transform: scale(1.04);
    z-index: 0;
    will-change: filter;
  }

  .page-banner .banner-overlay {
    position: absolute;
    inset: 0;
    background: linear-gradient(180deg, rgba(0, 0, 0, 0.66), rgba(0, 0, 0, 0.36));
    z-index: 1;
    pointer-events: none;
  }

  .page-banner .banner-inner {
    position: relative;
    z-index: 2;
    top: 180px;
    text-align: left;
    left: 0;
    max-width: 530px;
    margin-left: 48px;
  }

  /* Center content inside the left-aligned banner column */
  .page-banner .banner-inner .hero-top {
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .page-banner .banner-cta {
    display: flex;
    justify-content: center;
    margin-top: 18px;
  }

  .page-banner h2 {
    margin: 0 0 8px;
    font-size: clamp(20px, 3.5vw, 34px);
    color: #fff;
  }

  .page-banner .banner-sub {
    margin: 0 0 14px;
    color: rgba(255, 255, 255, 0.96);
    font-size: 1rem;
  }

  /* High-contrast CTA inside banner */
  .page-banner .cta {
    background: #ffffff;
    color: var(--heading);
    border-color: transparent;
    padding: 15px 34px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
    font-weight: 300;
    font-size: 16px;
  }

  .brown-cta {
    display: inline-block;
    color: #ffffff;
    background-color: var(--heading);
    border-color: transparent;
    padding: 15px 34px;
    box-shadow: 0 8px 24px rgba(0, 0, 0, 0.18);
    font-weight: 300;
    font-size: 16px;
    text-decoration: none;
    margin-top: 18px;
  }

  .page-banner .cta:hover {
    transform: scale(0.98);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.22);
    background-color: var(--heading);
    color: white;
    border: 1px solid white;
  }

  .brown-cta:hover {
    transform: scale(0.98);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.22);
  }

  /* Ensure banner-specific hero title overrides global muted color */
  .page-banner .hero-title {
    color: #facc5c !important;
    text-align: center;
  }

  @media (max-width:860px) {
    .page-banner {
      height: 900px;
      min-height: 260px;
      padding: 44px 0;
      display: block;
    }

    /* Re-center the banner content on smaller screens */
    .page-banner .banner-inner {
      text-align: center;
      margin-left: 0;
      top: 350px;
      padding: 0 16px;
    }

    .banner-logo-top {
      width: 250px;
    }

    .home-font .hero-title {
      font-size: 2em;
    }

    .page-banner h2 {
      font-size: clamp(18px, 5.5vw, 24px);
    }
  }

  /* Global button shape + hover interaction: rectangular and scale-down on hover */
  .cta,
  button,
  input[type="submit"],
  .newsletter button,
  .join-badge {
    transition: transform 160ms ease, box-shadow 160ms ease, opacity 160ms ease;
    transform-origin: center center;
    -webkit-tap-highlight-color: transparent;
  }

  /* Ensure links styled as CTAs follow same behaviour */
  a.cta {
    display: inline-block;
    transform: none;
  }

  .cta:hover,
  button:hover,
  input[type="submit"]:hover,
  .newsletter button:hover,
  .join-badge:hover {
    transform: scale(0.98);
    opacity: 0.98;
  }

  .features-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 48px;
    max-width: 1180px;
    margin: 36px auto 0;
    padding: 0 24px;
    box-sizing: border-box;
  }

  .feature-card {
    position: relative;
    overflow: visible;
  }

  .feature-card .image {
    width: 100%;
    height: 520px;
    background-size: cover;
    background-position: center;
  }

  .feature-card .info {
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: 0px;
    background: #fff;
    padding: 18px 26px;
    width: calc(100% - 80px);
    max-width: 420px;
    text-align: center;
  }

  .feature-card .info h3 {
    font-family: 'Cormorant Garamond', serif;
    letter-spacing: 2px;
    font-size: 1.3rem;
    font-weight: 600;
    color: var(--heading);
    text-transform: uppercase;
    margin: 0;
  }

  .feature-card .info .feature-sub {
    margin: 0;
    color: #8A8177;
    line-height: 1.8;
  }

  @media (max-width: 980px) {
    .features-grid {
      grid-template-columns: 1fr;
      gap: 22px;
      margin: 20px auto;
    }

    .feature-card .image {
      height: 360px;
    }

    .feature-card .info {
      position: relative;
      left: auto;
      transform: none;
      bottom: auto;
      width: auto;
      max-width: none;
      margin: -60px 18px 0 18px;
      text-align: center;
    }
  }
</style>
<div class="home-font">
  <div class="page-banner" role="region" aria-label="Homepage banner" style="--banner-bg: url('<?= base_url('assets/3.png') ?>');">
    <div class="banner-inner">
      <div class="hero-top">
        <img src="<?= base_url('assets/logo-2x2.png') ?>" alt="Crown & Halo logo" class="banner-logo-top" loading="lazy">
        <h1 class="hero-title brand-serif">Luxury Dress Hire in <br>Peterborough</h1>
      </div>
      <div class="banner-cta" style="margin-top:18px;">
        <a class="cta" href="<?= base_url('/book-appointment') ?>">Book Now</a>
      </div>
    </div>
    <!-- Top-left compact logo for banner -->
  </div>

  <div class="welcome-container py-5">
    <p class="hero-sub">Welcome to <b>Crown &amp; Halo Dress Hire</b>, Peterborough’s leading destination for <b>luxury dress hire</b> and <b>special occasion gowns</b>. Whether you’re searching for an elegant evening gown, a show-stopping prom dress, or a timeless bridal look, our curated collection allows you to <b>look extraordinary without the designer price tag</b>.</p>
    <p class="hero-sub">Discover a handpicked range of <b>evening dresses, prom gowns, bridal wear, black-tie dresses, and couture pieces</b> available to hire from just £150.</p>

    <div style="grid-column:1 / -1;">
      <div class="features-grid" aria-hidden="false">
        <div class="feature-card">
          <div class="image" style="background-image: url('<?= base_url('assets/ball-gown-wedding-dress-fitted-bodice-full-skirt.jpg') ?>');" aria-hidden="true"></div>
          <div class="info">
            <h3>Premium Quality</h3>
          </div>
        </div>

        <div class="feature-card">
          <div class="image" style="background-image: url('<?= base_url('assets/bride-wedding-dress-with-bouquet-by-window.jpg') ?>');" aria-hidden="true"></div>
          <div class="info">
            <h3>Affordable luxury</h3>
          </div>
        </div>

        <div class="feature-card">
          <div class="image" style="background-image: url('<?= base_url('assets/IMG_4981.jpg') ?>');" aria-hidden="true"></div>
          <div class="info">
            <h3>Sustainable Fashion</h3>
          </div>
        </div>
      </div>
    </div>
  </div>

  <section class="hero">
    <div class="hero-inner">
      <div class="hero-media" aria-hidden="true">
        <div class="hero-img-card">
          <img src="<?= base_url('assets/luxury gown.jpg'); ?>" alt="Cover" loading="eager">
          <a href="#" class="hero-play" aria-label="Play video" onclick="return false;"></a>
        </div>
      </div>
    </div>
  </section>
</div>

<?php if (!empty($featured)) : ?>
  <h2 class="brand-serif" style="margin-top:32px; color:var(--heading);">Featured</h2>
  <div class="grid" style="margin-top:12px;">
    <?php foreach ($featured as $item): ?>
      <div class="card">
        <?php if (!empty($item['image'])): ?>
          <img class="lazy" data-src="<?= esc($item['image']) ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" alt="<?= esc($item['name']) ?>" decoding="async" fetchpriority="low">
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

<section id="why">
  <div class="hero-inner">
    <div class="why-panel">
      <div class="split">
        <div>
          <h2 class="brand-serif" style="color:var(--heading);">Why Choose Crown &amp; Halo?</h2>
          <ul style="margin-top:8px; line-height:1.9; color:#8A8177;">
            <li>Designer-inspired gowns</li>
            <li>Wide range of sizes (including plus-size options)</li>
            <li>Professional fitting appointments</li>
            <li>Easy booking and returns</li>
            <li>Cleaning included with every hire</li>
          </ul>
          <p class="hero-sub" style="margin-top:10px;"><em>Find your perfect gown, <b>wear your story</b>, and shine at your next event.</em></p>
          <p><a class="brown-cta" href="<?= base_url('/book-appointment') ?>">Book Now</a></p>
        </div>

        <div class="img-frame" aria-hidden="true">
          <img class="lazy" data-src="<?= base_url('assets/IMG_4991.jpg') ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" alt="Why Choose Crown & Halo" decoding="async" fetchpriority="low">
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Lazy-loading script: swaps data-src(/data-srcset) into src when images enter the viewport -->
<script>
  (function() {
    if (!('IntersectionObserver' in window)) {
      // Fallback: load all images immediately
      var imgs = document.querySelectorAll('img[data-src]');
      imgs.forEach(function(i) {
        i.src = i.getAttribute('data-src');
        if (i.dataset.srcset) i.srcset = i.dataset.srcset;
        i.removeAttribute('data-src');
      });
      return;
    }

    var io = new IntersectionObserver(function(entries, obs) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var img = entry.target;
          if (img.dataset.src) {
            img.src = img.dataset.src;
            img.removeAttribute('data-src');
          }
          if (img.dataset.srcset) {
            img.srcset = img.dataset.srcset;
            img.removeAttribute('data-srcset');
          }
          img.loading = img.loading || 'lazy';
          img.classList.remove('lazy');
          obs.unobserve(img);
        }
      });
    }, {
      root: null,
      rootMargin: '200px 0px',
      threshold: 0.01
    });

    document.addEventListener('DOMContentLoaded', function() {
      var lazyImages = document.querySelectorAll('img.lazy[data-src], img.lazy[data-srcset]');
      lazyImages.forEach(function(img) {
        io.observe(img);
      });
    });
  })();
</script>

<section id="collections-showcase" class="collections-showcase" aria-labelledby="collections-heading">
  <style>
    .collections-showcase {
      padding: 100px 50px;
      box-sizing: border-box;
      background-color: #877964;
    }

    .collections-inner {
      position: relative;
    }

    .showcase-display {
      width: 100%;
      /* increased height to give more vertical room for imagery */
      height: 1100px;
      overflow: hidden;
      position: relative;
      box-shadow: 0 18px 46px rgba(16, 24, 40, 0.12);
      transition: transform 260ms ease;
      z-index: 1;
    }

    .showcase-base,
    .showcase-overlay {
      position: absolute;
      inset: 0;
      /* Ensure the image always covers the container */
      background-size: cover !important;
      -webkit-background-size: cover !important;
      /* bias the background slightly upward so faces sit under the top tint */
      background-position: center 18% !important;
      background-repeat: no-repeat !important;
      will-change: opacity, background-image;
      /* fallback background color while image loads */
      background-color: #000;
    }

    .showcase-base {
      z-index: 0;
    }

    .showcase-overlay {
      z-index: 1;
      opacity: 0;
      transition: opacity 360ms ease, transform 360ms ease;
      /* scale from the top so zoom keeps the face within the visible top area */
      transform-origin: center top;
      pointer-events: none;
    }

    .showcase-cols {
      position: absolute;
      inset: 0;
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      gap: 0;
      z-index: 2;
      align-items: flex-start;
      pointer-events: auto;
    }

    .showcase-col {
      display: flex;
      align-items: flex-start;
      justify-content: center;
      height: 100%;
      padding: 28px 14px 18px;
      font-family: 'Cormorant Garamond', Georgia, 'Times New Roman', serif;
      text-transform: uppercase;
      letter-spacing: 1px;
      color: rgba(255, 255, 255, 0.95);
      text-decoration: none;
      -webkit-text-decoration: none;
      -moz-text-decoration: none;
      background: transparent;
      cursor: pointer;
      border-left: 1px solid rgba(234, 227, 227, 0.74);
      transition: color 180ms ease, background-color 160ms ease, transform 180ms ease;
      text-align: center;
      font-size: 1.7rem;
    }

    .showcase-col:link,
    .showcase-col:visited,
    .showcase-col:hover,
    .showcase-col:active {
      text-decoration: none;
    }

    .showcase-col:first-child {
      border-left: none;
    }

    .showcase-col:hover,
    .showcase-col.active {
      color: var(--heading);
      /* top 15% tint only so the heading sits on a contrasting strip */
      background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.92) 0%, rgba(255, 255, 255, 0.92) 10%, transparent 10%);
      background-repeat: no-repeat;
      box-shadow: 0 8px 28px rgba(16, 24, 40, 0.08);
      /* soften the left divider when active */
      border-left-color: rgba(234, 227, 227, 0.04);
    }

    @media (max-width:980px) {
      .collections-showcase {
        padding: 50px 25px;
      }

      .showcase-display {
        /* taller mobile height to accommodate 2x2 layout */
        height: 800px;
      }

      /* Present as a 2x2 overlay grid on narrow viewports (two columns x two rows) */
      .showcase-cols {
        position: absolute;
        inset: 0;
        display: grid;
        grid-template-columns: repeat(2, 1fr);
        grid-template-rows: repeat(2, 1fr);
        gap: 0;
        z-index: 2;
        align-items: stretch;
        pointer-events: auto;
      }

      .showcase-col {
        height: 100%;
        padding: 14px 12px 10px;
        color: rgba(255, 255, 255, 0.95);
        border-left: 1px solid rgba(255, 255, 255, 0.06);
        align-items: flex-start;
        justify-content: center;
        font-size: 1.05rem;
        box-sizing: border-box;
      }

      /* Remove left border for the left-hand column in each row */
      .showcase-col:first-child,
      .showcase-col:nth-child(3) {
        border-left: none;
      }

      /* Add a subtle top divider between the two rows */
      .showcase-col:nth-child(n+3) {
        border-top: 1px solid rgba(255, 255, 255, 0.06);
      }

      /* On small screens keep a subtle top tint while keeping text legible */
      .showcase-col:hover,
      .showcase-col.active {
        background-image: linear-gradient(to bottom, rgba(255, 255, 255, 0.92) 0%, rgba(255, 255, 255, 0.92) 20%, transparent 20%);
        background-repeat: no-repeat;
        color: var(--heading);
        transform: translateY(-2px);
      }
    }
  </style>

  <div class="collections-inner">
    <div id="showcaseDisplay" class="showcase-display" role="img" aria-label="Collections showcase image">
      <div id="showcaseBase" class="showcase-base" style="background-image: url('<?= base_url('assets/luxury-bride-wearing-her-wedding-dress.jpg') ?>');" aria-hidden="true"></div>
      <div id="showcaseOverlay" class="showcase-overlay" aria-hidden="true"></div>
    </div>

    <div class="showcase-cols" role="tablist" aria-label="Collections">
      <a role="tab" class="showcase-col" data-image="<?= base_url('assets/luxury-bride-wearing-her-wedding-dress.jpg') ?>" data-scale="1.08">Wedding Gowns</a>
      <a role="tab" class="showcase-col" data-image="<?= base_url('assets/luxury.jpg') ?>" data-scale="1.04">Luxury Designer Wear</a>
      <a role="tab" class="showcase-col" data-image="<?= base_url('assets/prom.jpg') ?>" data-scale="1.03">Prom Dresses</a>
      <a role="tab" class="showcase-col" data-image="<?= base_url('assets/evening gown.jpg') ?>" data-scale="1.06">Evening Gowns</a>
    </div>
  </div>

  <script>
    (function() {
      var display = document.getElementById('showcaseDisplay');
      if (!display) return;

      var cols = document.querySelectorAll('.showcase-col');
      var base = document.getElementById('showcaseBase');
      var overlay = document.getElementById('showcaseOverlay');
      var defaultBg = base.style.backgroundImage || '';

      function showOverlay(url, scale) {
        if (!url || !overlay) return;
        overlay.style.backgroundImage = "url('" + url + "')";
        overlay.style.transform = 'scale(' + (scale || 1.03) + ')';
        // force reflow to ensure transition
        void overlay.offsetWidth;
        overlay.style.opacity = '1';
      }

      function hideOverlay() {
        if (!overlay) return;
        // reset transform back to base scale for smooth return
        overlay.style.transform = 'scale(1)';
        overlay.style.opacity = '0';
      }

      cols.forEach(function(col) {
        var img = col.getAttribute('data-image');

        col.addEventListener('mouseenter', function(e) {
          var scale = col.getAttribute('data-scale') || '1.03';
          showOverlay(img, scale);
          cols.forEach(function(c) {
            c.classList.remove('active');
          });
          col.classList.add('active');
        });

        col.addEventListener('focus', function() {
          var scale = col.getAttribute('data-scale') || '1.03';
          showOverlay(img, scale);
          col.classList.add('active');
        });
        col.addEventListener('blur', function() {
          col.classList.remove('active');
          // keep last image when focus is lost
        });

        col.addEventListener('mouseleave', function(e) {
          // Remove visual active state but keep the overlay showing
          // the last hovered image (persist behavior requested).
          col.classList.remove('active');
        });

        // Touch / tap support: toggle image on first tap, follow link on second
        var tapped = false;
        col.addEventListener('touchstart', function(ev) {
          if (!tapped) {
            ev.preventDefault();
            cols.forEach(function(c) {
              c.classList.remove('active');
            });
            col.classList.add('active');
            showOverlay(img);
            tapped = true;
            setTimeout(function() {
              tapped = false;
            }, 800);
          }
        }, {
          passive: false
        });
      });

      // Preserve last-hovered image — do not auto-hide the overlay
      // (no container-level mouseleave handler so the overlay remains visible)
      // Remove overlay background when fully faded out to reduce GPU memory
      if (overlay) {
        overlay.addEventListener('transitionend', function(e) {
          if (e.propertyName === 'opacity' && getComputedStyle(overlay).opacity === '0') {
            overlay.style.backgroundImage = '';
          }
        });
      }
    })();
  </script>
</section>

<section id="how-it-works" class="parallax" style="background-image: url('<?= base_url('assets/luxury-dress.jpg') ?>');">
  <div class="hero-inner">
    <div class="how-panel mx-3 mx-md-0">
      <h2 class="brand-serif" style="color:var(--heading);">Choose the Smarter, More Sustainable Way to Shine</h2>
      <p class="hero-sub mt-4">Today’s modern bride is <b>style-savvy, environmentally conscious, and financially smart</b>. At Crown & Halo Dress Hire, we offer a luxury alternative to buying a dress you may only wear once.</p>
      <p class="hero-sub mt-4">By choosing to <b>hire instead of purchase</b>, you’re joining a growing movement of women who want to look incredible without contributing to waste or overspending.</p>
      <p style="margin-top:14px; text-align:center;"><a class="brown-cta" href="<?= base_url('/products') ?>">Browse Dresses</a></p>

    </div>
  </div>
</section>

<section class="our-project">
  <div class="hero-inner">
    <h2 class="" style="text-align:center; color:var(--heading); text-transform: uppercase;">Dress Collections</h2>
    <p style="text-align:center; color:rgba(0,0,0,0.45); max-width:820px; margin:8px auto 30px;"><em>Find your perfect gown, <b>wear your story</b>, and shine at your next event.</em></p>

    <style>
      /* Our Project specific layout: three vertical columns with controlled image heights */
      .our-project {
        background-color: var(--heading-light);
        padding: 50px 0;
      }

      .our-project .project-cols {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 24px;
        max-width: 1180px;
        margin: 0 auto;
        padding: 0 18px;
        box-sizing: border-box;
      }

      .our-project .col {
        display: grid;
        grid-auto-rows: auto;
        gap: 24px;
      }

      .our-project .feature-card .image {
        height: 220px;
        background-position: center center;
        transition: transform 260ms cubic-bezier(.2, .9, .2, 1), box-shadow 260ms ease;
        will-change: transform;
        transform-origin: center center;
      }

      .our-project .feature-card.small .image {
        height: 220px;
      }

      .our-project .feature-card.medium .image {
        height: 360px;
      }

      .our-project .feature-card.tall .image {
        height: 520px;
      }

      /* Hover/tap: subtly scale images down to create a gentle press effect */
      .our-project .feature-card:hover .image,
      .our-project .feature-card:focus-within .image {
        transform: scale(0.9);
      }

      .our-project .feature-card:active .image {
        transform: scale(0.9);
      }

      /* Place captions directly below images for the our-project section */
      .our-project .feature-card .info {
        position: relative !important;
        left: auto !important;
        transform: none !important;
        bottom: auto !important;
        width: 100% !important;
        max-width: none !important;
        margin: 18px 0 0 0 !important;
        padding: 0 !important;
        background: transparent !important;
        text-align: center;
      }

      .our-project .feature-card .info h3 {
        margin: 0 0 6px;
      }

      @media (max-width: 980px) {
        .our-project .project-cols {
          grid-template-columns: 1fr;
          gap: 18px;
        }

        .our-project .feature-card .image {
          height: 360px;
        }
      }
    </style>

    <div class="project-cols" aria-hidden="false">
      <div class="col col-left">
        <div class="feature-card tall">
          <div class="image" style="background-image: url('<?= base_url('assets/IMG_4957.jpg') ?>');" aria-hidden="true"></div>
          <div class="info">
            <h3 class="brand-serif" style="text-transform: uppercase;">Wedding Dress</h3>
          </div>
        </div>

        <div class="feature-card small">
          <div class="image" style="background-image: url('<?= base_url('assets/prom dress 2.jpg') ?>');" aria-hidden="true"></div>
          <div class="info">
            <h3 class="brand-serif" style="text-transform: uppercase;">Prom Dress</h3>
          </div>
        </div>
      </div>

      <div class="col col-center">
        <div class="feature-card medium">
          <div class="image" style="background-image: url('<?= base_url('assets/luxury 1.jpg') ?>');" aria-hidden="true"></div>
          <div class="info">
            <h3 class="brand-serif" style="text-transform: uppercase;">Luxury Designer Wear</h3>
          </div>
        </div>

        <div class="feature-card small">
          <div class="image" style="background-image: url('<?= base_url('assets/beautiful-bridesmaids-pretty-dresses-outdoors.jpg') ?>');" aria-hidden="true"></div>
          <div class="info">
            <h3 class="brand-serif" style="text-transform: uppercase;">Bridesmaids Dress</h3>
            <p class="feature-sub"></p>
          </div>
        </div>
      </div>

      <div class="col col-right">
        <div class="feature-card tall">
          <div class="image" style="background-image: url('<?= base_url('assets/romantic-wedding-couple-love-walks-mountains-forest.jpg') ?>');" aria-hidden="true"></div>
          <div class="info">
            <h3 class="brand-serif" style="text-transform: uppercase;">Wedding Dress</h3>
          </div>
        </div>

        <div class="feature-card small">
          <div class="image" style="background-image: url('<?= base_url('assets/evening gowns 3.jpg') ?>'); background-position: left -50px; background-repeat: no-repeat;" aria-hidden="true"></div>
          <div class="info">
            <h3 class="brand-serif" style="text-transform: uppercase;">Evening Dresses</h3>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section id="why-hire" class="section">
  <div class="hero-inner">
    <h2 class="feature-title text-center mb-4 brand-serif">Why Hire Your Dress Instead of Buying?</h2>
    <div class="split">
      <div>
        <h3 class="brand-serif" style="margin:10px 0; color:var(--heading);">It’s the Sustainable Choice</h3>
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
        <img class="lazy" data-src="<?= base_url('assets/editorial-enchanted-realm.jpg') ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" alt="Sustainable and affordable luxury" decoding="async" fetchpriority="low">
      </div>
    </div>

    <div class="section-divider" aria-hidden="true">
      <svg class="divider-svg divider-dash" viewBox="0 0 1200 64" preserveAspectRatio="none" role="img" aria-hidden="true">
        <!-- Decorative dashed line with small diamonds -->
        <path d="M20 40 L1180 40" stroke="rgba(217,184,154,0.9)" stroke-width="2" fill="none" />
        <g fill="rgba(217,184,154,0.95)">
          <polygon points="600,32 610,40 600,48 590,40" opacity="0.95" />
        </g>
      </svg>
    </div>
    <div class="split-reverse" style="margin-top:26px;">
      <div class="img-frame">
        <img class="lazy" data-src="<?= base_url('assets/front-view-adorable-woman-with-stylish-hairdo-dressed-long-veil-mermaid-wedding-dress-with-long-trail-holding-white-peonies-flowers-smiling-posing-camera-landscape-background.jpg') ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" alt="Confident without commitment" decoding="async" fetchpriority="low" style="object-position: center -65px !important;">
      </div>
      <div>
        <h3 class="brand-serif" style="color:var(--heading);">Luxury Bridal Fashion Without the Luxury Price Tag</h3>
        <p class="feature-sub">Why spend £1,500–£3,000+ on a dress you’ll wear for a few hours?</p>
        <p class="feature-sub">With Crown & Halo, your dream bridal look becomes achievable for <b>£150–£500</b>.</p>
        <p class="feature-sub"><b>Hiring gives you the freedom to:</b></p>
        <ul class="feature-bullets">
          <li>Access premium quality and couture-inspired gowns</li>
          <li>Wear a dress that photographs beautifully</li>
          <li>Save money for the things that matter most — honeymoon, home, family</li>
          <li>Enjoy a champagne lifestyle on a realistic wedding budget</li>
        </ul>
        <blockquote aria-label="Feature quote">
          <p class="join-banner" style="font-style: italic;"><strong>Look exquisite, feel incredible, and invest your savings into unforgettable memories</strong></p>
        </blockquote>
        <p style="margin-top:14px;"><a class="brown-cta" href="<?= base_url('/products') ?>">Browse Dresses</a></p>
      </div>
    </div>

    <div class="section-divider" aria-hidden="true">
      <svg class="divider-svg divider-dash" viewBox="0 0 1200 64" preserveAspectRatio="none" role="img" aria-hidden="true">
        <!-- Decorative dashed line with small diamonds -->
        <path d="M20 40 L1180 40" stroke="rgba(217,184,154,0.9)" stroke-width="2" fill="none" />
        <g fill="rgba(217,184,154,0.95)">
          <polygon points="600,32 610,40 600,48 590,40" opacity="0.95" />
        </g>
      </svg>
    </div>
    <div class="split">
      <div>
        <h3 class="brand-serif" style="margin:10px 0; color:var(--heading);">Feel Confident Without Commitment</h3>
        <p class="feature-sub">Your 20s and 30s are full of major life decisions — buying a home, planning a family, building a career.</p>
        <p class="feature-sub">The last thing a modern bride needs is a <b>stressful, high-cost purchase</b> that will sit in storage for decades.</p>
        <div class="feature-sub"><b>Hiring your gown means:</b></div>
        <ul class="feature-bullets">
          <li>No long-term storage</li>
          <li>No preservation costs</li>
          <li>No pressure to resell</li>
          <li>No guilt over a dress you’ll never wear again</li>
        </ul>
        <p class="feature-sub"><em>Simply choose, wear, return — and keep the beautiful memory.</em></p>
      </div>
      <div class="img-frame">
        <img class="lazy" data-src="<?= base_url('assets/bride-bridesmaids-with-wedding-bouquets-sunny-wedding-reception-joyful-moment.jpg') ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" alt="Confident without commitment" decoding="async" fetchpriority="low">
      </div>
    </div>

    <div class="section-divider" aria-hidden="true">
      <svg class="divider-svg divider-dash" viewBox="0 0 1200 64" preserveAspectRatio="none" role="img" aria-hidden="true">
        <!-- Decorative dashed line with small diamonds -->
        <path d="M20 40 L1180 40" stroke="rgba(217,184,154,0.9)" stroke-width="2" fill="none" />
        <g fill="rgba(217,184,154,0.95)">
          <polygon points="600,32 610,40 600,48 590,40" opacity="0.95" />
        </g>
      </svg>
    </div>

    <div class="split-reverse" style="margin-top:26px;">
      <div class="img-frame">
        <img class="lazy" data-src="<?= base_url('assets/happy-bride-smile-talking-with-her-friend-smartphone-looking-her-nails.jpg') ?>" src="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==" alt="Confident without commitment" decoding="async" fetchpriority="low">
      </div>
      <div>
        <h3 class="brand-serif" style="margin:14px 0; color:var(--heading);">A Bridal Look That Matches Your Values</h3>
        <p class="feature-sub">Today’s bride is powerful, informed, and intentional.</p>
        <p class="feature-sub">You want your wedding day to reflect your story — your style AND your values.</p>
        <p class="feature-sub">Crown & Halo helps you celebrate your big day while staying true to what matters:</p>
        <ul class="feature-bullets">
          <li>Sustainability</li>
          <li>Smart spending</li>
          <li>Ethical fashion</li>
          <li>Mindful consumption</li>
          <li>Timeless elegance</li>
        </ul>
        <p class="feature-sub">This is bridal fashion for the women who care.</p>
        <p class="feature-sub">Those who love deeply, choose responsibly, and walk into marriage with clarity and confidence. <b>Easy. Elegant. Responsible.</b></p>
        <section class="join-banner" aria-label="Join other brides" style="margin-top:12px;">
          <div class="story-inner">
            <p class="story-line" style="margin:0; font-style: italic;">Join hundreds of brides choosing a better way to say <strong>“I Do.”</strong></p>
          </div>
        </section>
        <p class="feature-sub">If you're a bride who values style, sustainability, and smart choices, then Crown & Halo Dress Hire is here to help you create a bridal look that feels just as beautiful as it looks.</b></p>
        <p><a class="brown-cta" href="<?= base_url('/book-appointment') ?>">Book Now</a></p>
      </div>
    </div>

    <div class="section-divider" aria-hidden="true">
      <svg class="divider-svg divider-dash" viewBox="0 0 1200 64" preserveAspectRatio="none" role="img" aria-hidden="true">
        <!-- Decorative dashed line with small diamonds -->
        <path d="M20 40 L1180 40" stroke="rgba(217,184,154,0.9)" stroke-width="2" fill="none" />
        <g fill="rgba(217,184,154,0.95)">
          <polygon points="600,32 610,40 600,48 590,40" opacity="0.95" />
        </g>
      </svg>
    </div>


    <!-- Third row: Text | Image -->
    <section class="story-banner" aria-labelledby="story-banner-heading">
      <div class="story-inner">
        <h2 id="story-banner-heading" class="brand-serif">Because when you choose to hire…</h2>
        <p class="story-line">you’re not just wearing a dress — <strong>you’re wearing your story</strong>.</p>
      </div>
    </section>
  </div>
</section>