# CLAUDE.md — Lexia Design Block Theme

**Repo:** https://github.com/specflux/lexiadesign

For the AI Bridge plugin architecture, see [parent CLAUDE.md](../CLAUDE.md). The bridge is a separate repo — it's designed to work with any FSE theme, not just Lexia.

---

## Theme Overview

WordPress Full Site Editing block theme. 81 patterns, 4 font families, fluid design system, 6 industry persona style variations, 34 block styles.

---

## Design System (theme.json)

### Colors — 34 palette entries
Numbered scale: `brand`, `brand-50` through `brand-950`, `base-0` through `base-900`, `main-accent`, `transparent`.

Semantic colors: `success`, `success-light`, `success-dark`, `error`, `error-light`, `error-dark`, `warning`, `warning-light`, `warning-dark`, `info`, `info-light`, `info-dark`.

AI semantic roles in `custom.ai.colorRoles` map brand concepts to token slugs (e.g., `primary` → `brand`, `surface` → `base-100`).

### AI Bridge Metadata (theme.json `custom.ai`)
Version 2.0. Ships with the theme so the AI bridge plugin (and any AI tool) can read it via REST API.

- **`colorRoles`** — Maps semantic concepts (primary, surface, text, success, error) to palette slugs
- **`typographyRoles`** — Maps roles (heading, body, display, editorial) to font family slugs
- **`spacingRoles`** — Maps layout concepts (sectionPadding, contentGap) to spacing presets
- **`tailwindMap`** — Complete translation layer: Tailwind utility concepts → WordPress tokens
  - `colors`: Tailwind color names → palette slugs (e.g., `blue-500` → `brand`)
  - `spacing`: Tailwind spacing scale → spacing presets (e.g., `8` → `medium`)
  - `fontSize`: Tailwind text sizes → font size presets (e.g., `xl` → `x-large`)
  - `fontFamily`: Tailwind font stacks → font family slugs (e.g., `sans` → `primary`)
  - `shadow`: Tailwind shadow utils → shadow presets (e.g., `lg` → `large-light`)
  - `blockStyles`: Tailwind-like concepts → WordPress block style classes (e.g., `btn-pill` → `is-style-pill`)

### Typography — 4 font families
| Slug | Font | Use | File |
|------|------|-----|------|
| `primary` | Inter | Body text | `assets/fonts/inter/Inter-VariableFont_slnt,wght.woff2` |
| `secondary` | DM Sans | Headings | `assets/fonts/dm-sans/DMSans-VariableFont_opsz,wght.woff2` |
| `serif` | Source Serif 4 | Editorial style variations | `assets/fonts/source-serif/SourceSerif4-VariableFont_opsz,wght.woff2` |
| `display` | Space Grotesk | Bold display/Agency/Commerce personas | `assets/fonts/space-grotesk/SpaceGrotesk-VariableFont_wght.woff2` |

All are variable fonts. Patterns reference headings via `has-secondary-font-family` class.

Font sizes use **fluid typography** with min/max ranges (e.g., `"fluid": {"min": "1rem", "max": "1.165rem"}`).

### Spacing — Fluid with clamp()
All 7 spacing sizes use viewport-relative `clamp()`:
```
xx-small: clamp(0.5rem, 1.5vw, 0.875rem)
x-small:  clamp(0.875rem, 2.5vw, 1.3rem)
small:    clamp(1.3rem, 3.5vw, 2rem)
medium:   clamp(1.75rem, 4.5vw, 2.6rem)
large:    clamp(2.5rem, 6vw, 3.9rem)
x-large:  clamp(3.5rem, 8vw, 5.2rem)
xx-large: clamp(4.5rem, 11vw, 7.8rem)
```

### Shadows — 12 presets
Light: `small-light`, `medium-light`, `large-light`. Dark: `small-dark`, `medium-dark`, `large-dark`. Interactive: `hover-lift`, `floating`, `dropdown`, `focus-ring`, `inner-light`, `card-elevated`. Use via `var(--wp--preset--shadow--medium-light)` in CSS or `"shadow":"var:preset|shadow|medium-light"` in block JSON.

---

## Block Styles (34 registered)

Registered in `functions.php` via array-loop pattern. CSS auto-discovered from `assets/styles/core-*.css`.

| Block | Styles | CSS File |
|-------|--------|----------|
| `core/button` | outline, ghost, pill, elevated, text-only | `core-button.css` |
| `core/separator` | separator-dotted, separator-thin | `core-separator.css` |
| `core/image` | rounded, circle, shadow, border-frame, grayscale-hover | `core-image.css` |
| `core/group` | background-blur, shadow-light, shadow-dark, glass, hover-lift, card-elevated, border-left-accent, gradient-subtle | `core-group.css` |
| `core/heading` | underline-accent, overline | `core-heading.css` |
| `core/quote` | left-border | `core-quote.css` |
| `core/paragraph` | lead, highlight | `core-paragraph.css` |
| `core/list` | checkmark-list, arrow-list, no-marker | `core-list.css` |
| `core/cover` | rounded-cover | `core-cover.css` |
| `core/table` | striped | `core-table.css` |
| `core/columns` | column-box-shadow, columns-gap-none | `core-columns.css` |
| `core/navigation` | (base styles, no named variants) | `core-navigation.css` |
| `core/details` | arrow-icon-details | (inline) |
| `core/post-terms` | pill | (inline) |

To add a new block style:
1. Add entry to `$block_styles` array in `functions.php`
2. Create `assets/styles/core-{blockname}.css` with `.is-style-{name}` selectors
3. The `lexiadesign_enqueue_custom_block_styles()` function auto-loads it

---

## Pattern Categories (15)

blog-blocks, call-to-action, contact, content, hero, features, footer, header, pages, posts, pricing, team, testimonial, atoms.

### Pattern types by count
- Headers: 7 | Footers: 5 | Heroes: 5 | CTAs: 8 | Content: 9
- Features: 2 | Testimonials: 7 | Pricing: 4 | Contact: 2
- Blog/Posts: 8 | Team: 2 | Pages: 6 | Hidden: 6 | Atoms: 2

### Atomic patterns (hidden from inserter)
Prefixed with `_atom-`. `Inserter: false`. Only used by the AI bridge assembler.
- `_atom-button-primary.php`
- `_atom-feature-card.php`

---

## Templates (12)

| Template | Use |
|----------|-----|
| `page.html` | Default page |
| `page-no-title.html` | Pattern-composed pages (no title block) |
| `page-with-featured-image.html` | Pages with hero image |
| `page-with-sidebar.html` | Sidebar layout |
| `page-landing.html` | Landing page (no header/footer) |
| `page-services.html` | Services page with branded title area |
| `single.html` | Blog posts |
| `archive.html` | Archive listings |
| `search.html` | Search results |
| `404.html` | Not found |
| `coming-soon.html` | Coming soon |
| `index.html` | Fallback |

## Template Parts (3)

All delegate to patterns:
- `parts/header.html` → `lexiadesign/header`
- `parts/footer.html` → `lexiadesign/footer-with-colophon`
- `parts/post-meta.html` → `lexiadesign/hidden-post-meta`

---

## Style Variations (6 industry personas)

Each variation changes colors, typography, spacing, and shadow treatment — not just hue.

| File | Persona | Brand Color | Body Font | Heading Font | Border Radius | Feel |
|------|---------|------------|-----------|-------------|--------------|------|
| `emerald.json` | Clinic | Emerald green | Inter | DM Sans | 12px rounded | Calming, airy, trustworthy |
| `indigo.json` | SaaS | Indigo | Inter | Inter | 6px sharp | Compact, efficient, modern |
| `rose.json` | Consultant | Rose | Source Serif | Source Serif | 4px refined | Editorial, warm, professional |
| `fuchsia.json` | Studio | Fuchsia | DM Sans | Space Grotesk | 0px sharp | Bold, dramatic, creative |
| `orange.json` | Commerce | Orange | Inter | Space Grotesk | 8px friendly | Conversion-heavy, energetic |
| `lime.json` | Startup | Lime | Inter | DM Sans | 10px modern | Fresh, energetic, growth |

Additional overrides in subdirectories:
- `styles/colors/` — color-only variations (same 6 personas)
- `styles/typography/` — typography-only variations: Editorial (serif body), Modern (DM Sans body), Sans Serif (Inter body), Display (Space Grotesk headings)
- `styles/blocks/` — block-level overrides (`reverse-column.json`)
- `styles/sections/` — section overrides (`section-dark.json`, `section-light.json`)

---

## Page Composition Patterns (6)

Full-page layouts that compose sub-patterns via `<!-- wp:pattern {"slug":"..."} /-->`:

| Pattern | Sub-patterns composed |
|---------|----------------------|
| `page-home.php` | hero, feature-grid, wide-image, testimonial, posts, cta |
| `page-about.php` | Read to check |
| `page-blog.php` | post loop |
| `page-pricing.php` | pricing + testimonials |
| `page-features.php` | features layout |
| `page-download.php` | download layout |

---

## Key Conventions

### All text must use esc_html_e()
```php
// CORRECT — detectable as slot by AI bridge
<?php esc_html_e( 'Tell Me More', 'lexiadesign' ); ?>

// WRONG — invisible to slot detection
Tell Me More
```

### Image references use get_template_directory_uri()
```php
src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/laptop-on-table.webp"
```

### Color references in block JSON
```
"backgroundColor":"brand-100"        // slug reference
"textColor":"base-700"               // slug reference
"var:preset|color|brand"             // CSS custom property reference
```

### Spacing references in block JSON
```
"padding":{"top":"var:preset|spacing|x-large"}
```

---

## Adding a New Pattern

1. Create `patterns/{name}.php` with standard WordPress docblock headers
2. Add `@ai-*` metadata fields (see [parent CLAUDE.md](../CLAUDE.md) for convention)
3. Wrap ALL text strings with `esc_html_e('text', 'lexiadesign')`
4. Use theme color slugs (not hex values)
5. Use theme spacing presets (not hardcoded px/rem)
6. Reference shadow presets where appropriate: `"shadow":"var:preset|shadow|medium-light"`
7. Test in WordPress editor before committing
