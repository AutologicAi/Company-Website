# autologicAI — Modern Website (WordPress Theme)

A redesigned, **AI-native** website for [autologicAI](https://www.autologicai.com), repositioning the company from traditional IT services to an applied-AI engineering partner.

Built on the existing **WordPress + PHP** stack as a self-contained custom theme — drop it into any WordPress install, activate, and the new homepage renders immediately (no page builder or extra plugins required).

## Focus areas showcased

1. **AI Application Development** — generative AI, LLM/RAG apps, agentic workflows, MLOps.
2. **Legacy Modernization with AI** — AI-assisted code analysis, refactoring, and re-platforming.
3. **AI-Integrated Data Engineering** — lakehouse pipelines, AI-driven data quality, vector/feature stores.
4. **Data Integration Solutions** — a unified, ignate-style integration fabric (ELT/ETL, CDC, APIs, events).
5. **AI-Augmented Quality Engineering** — AI test generation, self-healing automation, predictive defect analytics.

## Quick preview (no WordPress needed)

Open [`preview/index.html`](preview/index.html) directly in a browser to see the homepage design. This is a static mirror of the WordPress homepage for review purposes.

## Install as a WordPress theme

1. Copy this repository's contents into `wp-content/themes/autologicai-modern/` on your WordPress site.
   _(Or zip the repo and upload it via **Appearance → Themes → Add New → Upload Theme**.)_
2. In the WordPress admin, go to **Appearance → Themes** and **Activate** "autologicAI Modern".
3. The homepage uses `front-page.php`, so the redesigned landing page shows automatically on the site root.
4. Optional:
   - **Appearance → Menus** — create a menu and assign it to the **Primary** location (a sensible default menu is shown until you do).
   - **Appearance → Customize → Site Identity** — upload a custom logo to replace the built-in wordmark.

## Structure

```
.
├── style.css              # Theme header + pointer to assets/css/main.css
├── functions.php          # Theme setup, asset enqueue, menus, SVG icon helper
├── header.php / footer.php # Global chrome (nav, contact, footer)
├── front-page.php         # Homepage — assembles the section template parts
├── index.php / page.php / 404.php
├── template-parts/        # hero, services, solutions, process, why, stats, cta, logos
├── assets/
│   ├── css/main.css       # All styling (dark, modern, responsive, accessible)
│   └── js/main.js         # Sticky header, mobile nav, scroll reveal
└── preview/index.html     # Static preview of the homepage
```

## Design notes

- Dark, modern aesthetic with gradient accents; **Inter** + **Space Grotesk** typography.
- Fully responsive (desktop → mobile), with a `prefers-reduced-motion` fallback.
- Accessible: skip link, semantic landmarks, keyboard-friendly nav, ARIA on the menu toggle.
- No build step — pure PHP/CSS/JS, consistent with the current stack.

## Contact

8 The Green, STE 4000, Dover, DE 19901 · info@autologicai.com · sales@autologicai.com
