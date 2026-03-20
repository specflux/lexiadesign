# CLAUDE.md — Lexia Design Block Theme

**Repo:** https://github.com/specflux/lexiadesign

For the AI Bridge plugin architecture, see [parent CLAUDE.md](../CLAUDE.md). The bridge is a separate repo — it's designed to work with any FSE theme, not just Lexia.

---

## Theme Overview

WordPress Full Site Editing block theme. 75 patterns, 3 font families, fluid design system, 6 style variations.

---

## Design System (theme.json)

### Colors — 21 palette entries
Numbered scale: `brand`, `brand-50` through `brand-950`, `base-0` through `base-900`, `main-accent`, `transparent`.

AI semantic roles in `custom.ai.colorRoles` map brand concepts to token slugs (e.g., `primary` → `brand`, `surface` → `base-100`).

### Typography — 3 font families
| Slug | Font | Use | File |
|------|------|-----|------|
| `primary` | Inter | Body text | `assets/fonts/inter/Inter-VariableFont_slnt,wght.woff2` |
| `secondary` | DM Sans | Headings | `assets/fonts/dm-sans/DMSans-VariableFont_opsz,wght.woff2` |
| `serif` | Source Serif 4 | Editorial style variations | `assets/fonts/source-serif/SourceSerif4-VariableFont_opsz,wght.woff2` |

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

### Shadows — 6 presets
`small-light`, `medium-light`, `large-light`, `small-dark`, `medium-dark`, `large-dark`. Use via `var(--wp--preset--shadow--medium-light)` in CSS or `"shadow":"var:preset|shadow|medium-light"` in block JSON.

---

## Block Styles (15 registered)

Registered in `functions.php` via array-loop pattern. CSS auto-discovered from `assets/styles/core-*.css`.

| Block | Styles | CSS File |
|-------|--------|----------|
| `core/button` | outline, ghost, pill | `core-button.css` |
| `core/separator` | separator-dotted, separator-thin | `core-separator.css` |
| `core/image` | rounded, circle, shadow | `core-image.css` |
| `core/group` | background-blur, shadow-light, shadow-dark | `core-group.css` |
| `core/columns` | column-box-shadow | `core-columns.css` |
| `core/navigation` | (base styles, no named variants) | `core-navigation.css` |
| `core/details` | arrow-icon-details | (inline) |
| `core/post-terms` | pill | (inline) |
| `core/list` | checkmark-list | (inline) |

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

## Templates (8)

| Template | Use |
|----------|-----|
| `page.html` | Default page |
| `page-no-title.html` | Pattern-composed pages (no title block) |
| `page-with-featured-image.html` | Pages with hero image |
| `single.html` | Blog posts |
| `archive.html` | Archive listings |
| `search.html` | Search results |
| `404.html` | Not found |
| `index.html` | Fallback |

## Template Parts (3)

All delegate to patterns:
- `parts/header.html` → `lexiadesign/header`
- `parts/footer.html` → `lexiadesign/footer-with-colophon`
- `parts/post-meta.html` → `lexiadesign/hidden-post-meta`

---

## Style Variations (6 color schemes)

JSON files in `styles/`: emerald, fuchsia, indigo, lime, orange, rose.

Additional overrides in subdirectories:
- `styles/colors/` — color-only variations (same 6)
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
