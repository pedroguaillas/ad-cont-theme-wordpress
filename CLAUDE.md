# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Theme Purpose

**Mi Plantilla** is a custom classic PHP WordPress theme for **AD Cont — Estrategia Contable y Tributaria**, a tax consulting firm based in Guayaquil, Ecuador. It is a single-page marketing site with anchor-linked sections (Hero, Sobre Nosotros, Servicios, Misión, Contacto).

## Development Environment

The theme runs inside a Docker Compose stack defined one level up at `../../docker-compose.yml`:

```bash
# From the repo root (wordpress-theme/)
docker-compose up -d    # Start — site at localhost:8080
docker-compose down     # Stop
```

Theme files are volume-mounted directly into the container, so edits are live immediately — no build step, no restart needed.

## No Build System

There is no bundler, transpiler, linter, or test suite. CSS and JS are plain files enqueued directly by WordPress:

- **Styles:** `assets/css/main.css` — enqueued as `mi-plantilla-style`, depends on Google Fonts (`Playfair Display` + `Inter`)
- **Scripts:** `assets/js/main.js` — enqueued in the footer, no dependencies

To change styles or scripts, edit those files directly.

## Architecture

### Template Hierarchy

| File | Role |
|---|---|
| `front-page.php` | Homepage — all marketing sections live here |
| `index.php` | Blog post list fallback |
| `single.php` | Single post view |
| `page.php` | Generic page view |
| `header.php` | `<html>` open through `<header>`, includes nav |
| `footer.php` | `<footer>` through `</html>`, includes `wp_footer()` |

`front-page.php` is the primary template. It contains all five on-page sections as static HTML with PHP only for `get_header()`, `get_footer()`, and the `sobre-nosotros` image URL.

### Design Tokens (CSS Variables)

All colors and typography are defined as CSS custom properties at `:root` in `main.css`:

- Brand green scale: `--color-green-dark` (#1B5E20) → `--color-green-light` (#4CAF50)
- Headings: `--font-heading` (Playfair Display / Georgia)
- Body: `--font-body` (Inter / system-ui)
- Container: `--container-max: 1140px`

### Navigation

`functions.php` registers two nav menus (`primary`, `footer`). The `primary` menu is rendered in `header.php` with a `mi_plantilla_fallback_menu()` fallback that hard-codes five anchor links to the homepage sections. `main.js` handles the mobile hamburger toggle and applies a scroll offset equal to the header height when navigating to anchors.

### Registered Theme Features

Declared in `functions.php` via `after_setup_theme`:
- `title-tag`, `post-thumbnails`, `html5` (search-form, comment-form, gallery)
- `custom-logo` (180×50px, flex)
