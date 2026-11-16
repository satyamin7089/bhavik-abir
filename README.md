# Bhavik Enterprises Polymer Materials — WordPress Theme (`v1.7.1`)

A custom, lightweight classic WordPress theme engineered for **Bhavik Enterprises** — the authorised distributor of **Abiroverseas LLC** in India — with a structured Knowledge Center.

This `README.md` is written so any developer, designer, or site administrator can understand **the entire theme flow, file map, CSS/JS isolation rules, header/footer setup, and editing workflow in one read**.

---

## 1. High-Level Theme Flow (How a Request Renders)

```text
Incoming WordPress URL
        │
        1. Loads header.php   (Bhavik Enterprises topbar + text logo + Appearance → Menus primary nav + SVG sprite)
        2. Runs the Page / CPT template (e.g., template-home.php, template-product-range.php, single-knowledge.php)
        3. Enqueues ONLY that page's CSS + JS (via ab_enqueue_assets() in functions.php) + site.css + navigation.js
        4. Loads footer.php   (Bhavik Enterprises 4-column footer: address, phone, email, WhatsApp + scroll-to-top)
```

The home page (`/`) renders `page-template/template-home.php`, which is the **Bhavik Enterprises layout**, so it
loads `bhavik.css` + `bhavik.js`. `/bhavik-enterprises/` is a legacy alias of the same home layout. There is exactly
**one header and one footer** in the theme — no page carries its own chrome.

---

## 2. Directory Structure at a Glance

```text
bhavik-enterprises-theme/
├── style.css                                   # WordPress theme header metadata (v1.6.0)
├── functions.php                               # Theme setup, per-page CSS/JS enqueue, CPT/taxonomies, SEO/FAQ meta, enquiry handler
├── header.php                                  # The site header (Bhavik Enterprises topbar, text logo, primary menu, icon sprite)
├── footer.php                                  # The site footer (Bhavik Enterprises 4-column footer + partner marquee)
├── header-bhavik.php                           # Legacy, no longer included anywhere (kept for reference)
├── footer-bhavik.php                           # Legacy, no longer included anywhere (kept for reference)
├── 404.php                                     # Custom Error 404 page with smart "Back to Previous Page" button
├── page.php / index.php                        # Fallback standard WordPress page & index templates
├── archive-knowledge.php                       # Knowledge Center hub (/knowledge/) with search & taxonomy filters
├── single-knowledge.php                        # Single Knowledge Center article (/knowledge/{slug}/)
├── taxonomy-knowledge_hub.php                  # Knowledge Hub taxonomy archive
├── taxonomy-knowledge_material.php             # Knowledge Material taxonomy archive
├── taxonomy-knowledge_topic.php                # Knowledge Topic taxonomy archive
├── inc/
│   └── default-content.php                     # Starter page definitions & default SEO/FAQ metadata seeded once on activation
├── page-template/
│   ├── template-home.php                       # Front Page / Home — Bhavik Enterprises layout
│   ├── template-about.php                      # About Us (/about/)
│   ├── template-contact.php                    # Contact Us (/contact-us/)
│   ├── template-product-families.php           # Product Families 6-card searchable directory (/products/)
│   ├── template-product-range.php              # Product Range 12-card 2x2 3D borderless directory (/product-range/)
│   ├── template-bhavik-enterprises.php         # Legacy alias of template-home.php (/bhavik-enterprises/)
│   ├── template-material.php                   # HDPE Material Page (/hdpe/)
│   ├── template-material-LDPE.php              # LDPE Material Page (/ldpe/)
│   ├── template-material-PP.php                # Polypropylene (PP) Material Page (/pp/)
│   ├── template-material-PVC.php               # PVC Material Page (/pvc/)
│   ├── template-material-PS.php                # Polystyrene (PS) Material Page (/ps/)
│   ├── template-material-ABS.php               # ABS Material Page (/abs/)
│   ├── template-material-EVA.php               # EVA Material Page (/eva/)
│   └── template-material-Recycled-Plastics.php # Recycled Plastics Material Page (/recycled-plastics/)
└── assets/
    ├── css/
    │   ├── home.css                            # Retained from the previous Abiroverseas home layout (no longer enqueued)
    │   ├── about.css                           # Isolated styles for About Us page ONLY
    │   ├── contact.css                         # Isolated styles for Contact Us page ONLY
    │   ├── products.css                        # Isolated styles for Product Families & 2x2 Product Range ONLY
    │   ├── material.css                        # Isolated styles for the 8 Material pages ONLY
    │   ├── knowledge.css                       # Isolated styles for Knowledge Center archive & articles ONLY
    │   ├── bhavik.css                          # Isolated styles for Bhavik Enterprises page ONLY
    │   ├── error-404.css                       # Isolated styles for Error 404 page ONLY
    │   ├── site.css                            # Shared header, topbar, mobile nav, 4-column footer & scroll-to-top ONLY
    │   └── knowledge-admin.css                 # WP Admin meta box styles for Knowledge Center editor
    ├── js/
    │   ├── navigation.js                       # Shared mobile drawer & scroll-to-top controller (loaded on every page)
    │   ├── home.js                             # Retained from the previous Abiroverseas home layout (no longer enqueued)
    │   ├── about.js                            # About scroll reveal & FAQ category tabs
    │   ├── products.js                         # Live instant client-side search filter for Product Families & Product Range
    │   ├── material.js                         # Material gallery carousel & scroll reveal
    │   ├── bhavik.js                           # Bhavik Enterprises scroll reveal controller
    │   ├── error-404.js                        # Smart "Back to Previous Page" referrer & history controller (404 ONLY)
    │   ├── knowledge-hub.js                    # Knowledge Hub filter interactions
    │   ├── knowledge-single.js                 # Single Knowledge article TOC / interactions
    │   └── knowledge-admin.js                  # WP Admin repeater & rich-text controls
    └── img/                                    # Bundled polymer & industrial photography assets
```

---

## 3. Strict Per-Page CSS & JS Isolation (Core Rule)

**Every page type owns its own dedicated CSS file.** Do **not** place page-specific card or section rules into `site.css`, and do **not** chain unrelated page stylesheets together.

`ab_enqueue_assets()` in `functions.php` resolves the current route (by slug first, then by assigned template) and loads **only** that route's CSS and JS:

| Page / Route | PHP Template | Dedicated CSS | Dedicated JS | Header / Footer |
| :--- | :--- | :--- | :--- | :--- |
| **Home** (`/`) — Bhavik Enterprises layout | `page-template/template-home.php` | `bhavik.css` | `bhavik.js` | `header.php` / `footer.php` |
| **About Us** (`/about/`) | `page-template/template-about.php` | `about.css` | `about.js` | `header.php` / `footer.php` |
| **Contact Us** (`/contact-us/`) | `page-template/template-contact.php` | `contact.css` | — | `header.php` / `footer.php` |
| **Product Families** (`/products/`) | `page-template/template-product-families.php` | `products.css` | `products.js` | `header.php` / `footer.php` |
| **Product Range** (`/product-range/`) | `page-template/template-product-range.php` | `products.css` | `products.js` | `header.php` / `footer.php` |
| **Material Pages** (`/hdpe/`, `/pp/`, `/ldpe/`, `/pvc/`, `/ps/`, `/abs/`, `/eva/`, `/recycled-plastics/`) | `page-template/template-material*.php` | `material.css` | `material.js` | `header.php` / `footer.php` |
| **Knowledge Hub** (`/knowledge/` & taxonomies) | `archive-knowledge.php`, `taxonomy-*.php` | `knowledge.css` | `knowledge-hub.js` | `header.php` / `footer.php` |
| **Knowledge Article** (`/knowledge/{slug}/`) | `single-knowledge.php` | `knowledge.css` | `knowledge-single.js` | `header.php` / `footer.php` |
| **Bhavik Enterprises** (`/bhavik-enterprises/`, legacy alias of the home layout) | `page-template/template-bhavik-enterprises.php` | `bhavik.css` | `bhavik.js` | `header.php` / `footer.php` |
| **Error 404** (any missing URL) | `404.php` | `error-404.css` | `error-404.js` | `header.php` / `footer.php` |

> **What `site.css` & `navigation.js` do:** Loaded on all front-end views solely to power the sticky header bar, topbar ticker, mobile hamburger drawer, 4-column footer, and floating back-to-top button.

---

## 4. One Header, One Footer — Bhavik Enterprises Brand Data

The site is the **Bhavik Enterprises** website, so every page shares the same header and footer:

1. **`header.php`**
   - Bhavik Enterprises topbar: `info@bhavikenterprises.com` · `+91 7007049478`
   - Bhavik Enterprises text logo, rendered as styled text without a logo-image dependency.
   - Primary menu from **Appearance → Menus → Primary Menu**; `wp_nav_menu()` is called with `echo => false` so the
     `ab_primary_menu_fallback()` menu is still printed when no menu is assigned.

2. **`footer.php`**
   - Bhavik Enterprises text logo, partner marquee, and the full Bhavik Enterprises data:
     - **Address:** Village Barhat Bangar, Mandhana Bithoor Road, Kanpur – 209217, UP, India
     - **Head Office:** Kanpur · **Branches:** Mumbai, Mundra
     - **Phone / WhatsApp:** `+91 7007049478`
     - **Email:** `info@bhavikenterprises.com`
   - Every internal link is generated with `home_url()` / `ab_home_anchor_url()` — no hardcoded paths.

3. **Legacy files:** `header-bhavik.php` and `footer-bhavik.php` are no longer included by any template. They are kept
   only for reference and can be deleted safely.

4. **Social profiles:** `ab_social_links()` in `functions.php` currently returns empty URLs, so no Abiroverseas profile
   is linked from the Bhavik Enterprises site. Add Bhavik Enterprises' own profile URLs there to show the icons.

---

## 5. Visual & UI Design System Conventions

When editing or adding sections, follow these established design rules:

- **All Buttons = Borderless 3D Orange Accent (Subtle Shadows):** Every button across the theme (`.ab-btn`, `.ab-btn--blue`, `.ab-btn--outline`, `.ab-btn--light`, `.ab-contact-submit`, `.ab-range-card-cta`, `.kh-button`, `.kh-button-light`, `.kh-enquiry-button`, header quote button, footer CTA, and scroll-to-top) uses the orange accent gradient (`#ff9238 → #f58220 → #e26d0c`), white text, **`border: 0`**, and restrained 3D elevation shadows in both resting and `:hover` states.
- **Unified Eyebrows & Equal-Height Split/Hero Images:** Every page (including Bhavik Enterprises) shares the exact `.ab-eyebrow` design (`17px` desktop/tablet-landscape, `15px` tablet portrait, `14px` mobile, `#008080` teal text or `#a8ded6` on dark sections, and a `24px × 2px` `#f58220` orange leading dash aligned to the first line) and stretches right-side banner/split image containers (`align-items: stretch` + `position: absolute; inset: 0` cover media) to equal the exact height of the left-side copy container on desktop and tablet landscape (`>= 1024px`).
- **Borderless 3D Image Cards:**
  - **Bhavik "Industries We Serve"** (`#industries` in `bhavik.css`) uses a 3-column desktop / 2-column tablet / 1-column mobile borderless 3D pedestal card with a rounded 16:10 photo stage, frosted badge, and floating `#008080` icon box overlapping the image bottom.
  - **Product Range** (`#ab-range-grid` in `products.css`) uses the same borderless 3D image-card craft in a **2×2 layout** (`repeat(2, minmax(0, 1fr))` on desktop & tablet, `1fr` on mobile), paired with a recessed borderless spec table and two separate 3D orange CTA buttons (`Explore <Material>` + `Enquire Now`) per card, isolated strictly inside `products.css`.
- **Bhavik FAQ Question Boxes:** Styled in `bhavik.css` (`.ab-faq-item`) with a tinted sage-mist 3D surface, **no border and no left accent bar**, 3D circular rotating trigger icon, and recessed white answer well so each question stands out cleanly against the white section background.
- **Unified Icon Boxes:** Icon containers (`.ab-icon-box`, `.ab-contact-detail-icon`, `.ab-range-card-icon`) use the `#008080` teal palette on soft 3D surfaces.
- **Clean Photography:** Banner and slider images do not render decorative circle/ring overlays on top of photography.

---

## 6. Forms & Lead Submission Flow

All enquiry forms across **Home**, **Contact Us**, **all 8 Material pages**, and **Bhavik Enterprises** post securely to WordPress `admin-post.php` (`action=ab_material_enquiry`, handled in `functions.php`):

1. Verifies WordPress nonce (`ab_material_enquiry_nonce`) and invisible honeypot (`ab_website`).
2. Sanitizes all submitted fields (`name`, `company`, `email`, `phone`, `material`, `quantity`, `application`, `enquiry_kind`).
3. Supports optional spec/datasheet file attachments up to 5 MB (`.pdf`, `.doc`, `.docx`, `.xls`, `.xlsx`, `.csv`, `.jpg`, `.jpeg`, `.png`) on Material forms without exposing uploads in the public Media Library.
4. Sends formatted notification email to **Settings → General → Administration Email Address** and redirects back to the originating page with `?ab_enquiry=sent` (or `?ab_enquiry=error`).

---

## 7. Knowledge Center Architecture (`/knowledge/`)

- **Custom Post Type:** `knowledge` (URL structure `/knowledge/{exact-slug}/`).
- **Taxonomies:**
  1. `knowledge_hub` — Material/topic hubs (HDPE, PP, LDPE / LLDPE, PVC, Recycled Polymers)
  2. `knowledge_material` — Product Type / Material filter
  3. `knowledge_topic` — Topic filter (Comparisons, FAQs, Grades & Selection, Processing Methods, Applications, Recycling & Sustainability)
- **Structured Editor Fields (`functions.php`):** Custom native meta boxes let editors manage Exact URL Slug, SEO Title/Description, Direct Answer, 3-Column Comparison Table, Why Materials Differ, WordPress Block Editor extra content, When to Consider, FAQs (auto-generating `FAQPage` JSON-LD schema), Related Materials, and Article-End CTA — with zero paid plugin dependencies.

---

## 8. Installation & Quick Editing Guide

### Installing the Theme
1. Zip the theme directory (ensuring `style.css` is at the root of the archive).
2. In WordPress Admin, go to **Appearance → Themes → Add New → Upload Theme**, upload the zip, and click **Activate**.
3. Starter pages (`Home`, `About`, `HDPE`, `Product Families`, `Product Range`, `Bhavik Enterprises`) and the starter `Primary Menu` are created automatically without overwriting existing content. The Home page renders the Bhavik Enterprises layout.
4. Visit **Settings → Permalinks** and click **Save Changes** once to flush `/knowledge/` rewrite rules.
5. The shared header and footer render "Bhavik Enterprises" as a styled text logo; no logo uploads are required for them. Retain the existing partner-logo uploads for the footer marquee.

### Common Maintenance Tasks
- **Edit the Header / Menu / Footer:** Edit `header.php`, `footer.php`, or **Appearance → Menus → Primary Menu**.
- **Edit Contact Details:** The Bhavik Enterprises email/phone/WhatsApp/address live in `header.php`, `footer.php`, the `$bv_*` variables at the top of `page-template/template-home.php`, and the legal/support pages.
- **Edit the Home Page:** Edit `page-template/template-home.php` (the layout is Bhavik Enterprises; `home.css` / `home.js` from the previous Abiroverseas home page are no longer used).
- **Edit Styles Safely:** Open only the target page's CSS file in `assets/css/` (see the table in Section 3) and bump `AB_THEME_VERSION` in `functions.php` so browsers fetch the updated stylesheet immediately.
- **Requirements:** WordPress 6.0+ and PHP 7.4+. No WooCommerce or ACF Pro required.
#   b h a v i k - a b i r 
 
 #   b h a v i k - a b i r 
 
 
## 9. Separate Material Supply Pages (v1.7.0)

The product design stays on the existing `material.css` / `material.js` layout. The compact supply selector below the shared header is **normal page navigation**, not same-page tabs. Its current-page highlight is written into the HTML with `aria-current="page"`; it does not need JavaScript.

### Routes

Each of these materials has an overview and four independent, root-level WordPress pages:

| Material | Overview | Prime / Virgin | Off-grade | Recycled | Scrap / Regrind |
| --- | --- | --- | --- | --- | --- |
| LDPE | `/ldpe/` | `/ldpe-prime/` | `/ldpe-offgrade/` | `/ldpe-recycled/` | `/ldpe-scrap-regrind/` |
| HDPE | `/hdpe/` | `/hdpe-prime/` | `/hdpe-offgrade/` | `/hdpe-recycled/` | `/hdpe-scrap-regrind/` |
| PP | `/pp/` | `/pp-prime/` | `/pp-offgrade/` | `/pp-recycled/` | `/pp-scrap-regrind/` |
| PVC | `/pvc/` | `/pvc-prime/` | `/pvc-offgrade/` | `/pvc-recycled/` | `/pvc-scrap-regrind/` |
| PS | `/ps/` | `/ps-prime/` | `/ps-offgrade/` | `/ps-recycled/` | `/ps-scrap-regrind/` |
| ABS | `/abs/` | `/abs-prime/` | `/abs-offgrade/` | `/abs-recycled/` | `/abs-scrap-regrind/` |
| EVA | `/eva/` | `/eva-prime/` | `/eva-offgrade/` | `/eva-recycled/` | `/eva-scrap-regrind/` |

- Every overview introduces all four supply types and links to their pages.
- Every supply page links to its overview and the other three types in both the top selector and the related-supply section.
- PS is a Polystyrene-specific GPPS/HIPS guide, not the old HDPE placeholder. It is linked from the home page and both product directories.
- The shared wordmark is **Bhavik** on the large upper line with **Enterprises** below it. Its sizing and colours are shared by `header.php`, `footer.php` and `assets/css/site.css`.

### Static editing

All new product copy, links, checklists, FAQs and selected form options are **literal HTML in each template**. There is no product-content array, shared data-driven renderer, AJAX fetch or client-side content swap. For example, edit `page-template/template-material-LDPE-prime.php` directly to change the prime LDPE page. Each template uses the same existing hero/gallery, section navigation and enquiry-form classes. The existing general-purpose page interaction script handles the gallery and form validation only; supply navigation works with JavaScript disabled.

The grade form defaults to that page's supply type and carries its own `enquiry_page` value, so a submission can return to the same grade page even without a browser referrer. The shared handler accepts detailed enquiries for all seven materials, includes the supply type in the email, and applies the existing nonce, honeypot and attachment checks.

### WordPress provisioning and deployment

`inc/material-supply-pages.php` contains explicit installation calls for all 35 material routes. On the first request after deployment, it creates missing pages with their own template, SEO title and description. It preserves existing page titles, editorial content, publication status, custom templates and SEO values. A short-lived installation lock prevents concurrent first requests from creating duplicate pages; failed insertions leave the migration available to retry. The completion option is `ab_static_supply_pages_v1_ready`.

After deployment:
1. Visit the site once, then check **Pages** for the material overviews and 28 new supply pages.
2. Check any pre-existing draft, private or custom-template page occupying one of the listed slugs. It is intentionally not republished or overwritten; publish or assign the appropriate supplied template manually if needed.
3. Test navigation from an overview through all four types and back, including on mobile. Keep these documented slugs if editing the pages: their static cross-links use `home_url()`.
4. Submit a real test enquiry and verify email delivery on the WordPress host. Local tests stub the mail transport; they do not prove SMTP delivery.
5. Confirm the site's existing pretty-permalink configuration. These are regular WordPress pages, not custom rewrite endpoints.

### Search indexing

These are separate published pages with distinct titles, descriptions and material/supply-specific guidance. WordPress's normal singular-page canonical links and page sitemap apply; the new templates do not canonicalise grades to the overview or add `noindex`. Existing SEO plugin settings and WordPress search-visibility settings remain authoritative. Check those settings on the deployed site and submit the sitemap through your usual search tools. Separate URLs can be indexed independently, but no implementation can guarantee that a search engine will index or rank every page.

### Regression checks

Run `PYTHONDONTWRITEBYTECODE=1 python3 -m unittest discover -s tests -v` for route, link, active-state, static-content, HTML-nesting, form-default, PS and logo contracts. Also perform PHP lint and browser checks on deployment. Knowledge Hub templates, assets and logic are outside this change and remain untouched.


## 10. Product category navigation (v1.7.1)

- **Home and About:** Each now has a static product-category section with seven polymer overview links and four supply-category cards. Each card links directly to all seven matching supply pages. Edit these literal sections in `page-template/template-home.php` and `page-template/template-about.php`; their shared styling is in `assets/css/product-categories.css`, loaded only on those layouts (including the legacy Bhavik home alias).
- **Products mega menu:** `template-parts/products-mega-menu.php` contains the static seven-polymer/four-supply-type link grid. `inc/navigation-mega-menu.php` attaches it to the primary menu's top-level Products item, recognised by its Products/Product Range URL, Products title, or explicit `ab-menu-mega` CSS class. The fallback primary menu uses the same panel. Saved menu items are not deleted or rewritten. Additional custom links under Products are retained under “More product links”; other menu branches and locations are left alone.
- **Interaction:** The shared `assets/js/navigation.js` controller supports desktop hover, focus, disclosure buttons, touch, Escape with focus return, outside-click dismissal and viewport resizing. At 1100px and below, navigation collapses before the logo, links and quote button can overlap; the mega menu expands inside that scrollable panel, so its final links remain reachable. Without JavaScript, desktop hover/focus still exposes the panel.
- **Supply-page cleanup:** The new supply templates no longer render breadcrumb trails or the repeated supply disclaimer note. Their body copy, eyebrow labels and text-arrow links use 17px; the new supply-card headings use 22px. Typography overrides are scoped to the new supply-page layout and new supply-directory components, not older page headings or Knowledge Hub styles. The five-way links between separate supply pages remain intact.
- **Checks:** Run `PYTHONDONTWRITEBYTECODE=1 python3 -m unittest discover -s tests -v`. In WordPress, also check your assigned primary menu's Products branch, any additional custom links, mobile scrolling, keyboard access and the new Home/About category destinations.
