## Stan Ventures – Homepage Task (WordPress Theme)

This repository contains a custom **WordPress theme** that implements the Homepage Task from the provided Figma design.

The focus is on:
- **Modern PHP 8+**, modular structure, and dynamic data.
- **Pixel-perfect frontend** using semantic HTML5 and modern CSS (Flexbox/Grid, CSS variables).
- **Reusable components** for Services, Case Studies, Testimonials, and Comparison Table.

---

### 1. Project Structure

```text
Stan-ventures/
  README.md
  .gitignore
  stan-ventures-theme/
    style.css
    functions.php
    index.php
    front-page.php
    header.php
    footer.php
    inc/
      data.php
    template-parts/
      section-hero.php
      section-services.php
      section-testimonials.php
      section-case-studies.php
      section-comparison.php
      section-stats.php
    assets/
      css/
        main.css
      js/
        main.js
      images/
        (exported SVGs/PNGs from Figma)
```

> **Note**: This repo only contains the theme. You should drop the `stan-ventures-theme` folder into `wp-content/themes/` of a WordPress installation.

---

### 2. Requirements Covered

- **WordPress + PHP 8+**
  - Theme uses standard WordPress functions like `get_header()`, `get_footer()`, and `get_template_part()`.
  - Content for **Services, Testimonials, Case Studies, Comparison Table** is loaded from centralized PHP arrays in `inc/data.php`.
- **Modular Architecture**
  - Header and footer are split into `header.php` and `footer.php`.
  - Homepage sections are split into `template-parts/section-*.php` and included via `get_template_part`.
- **Dynamic Data**
  - Arrays or JSON-driven content (implemented via PHP arrays; easy to convert to JSON if desired).
- **Frontend**
  - Modern CSS with variables and Flexbox/Grid in `assets/css/main.css`.
  - Responsive breakpoints for Desktop, Tablet, and Mobile.
  - Hover states for buttons, cards, and links.
  - Basic JS email validation for the footer email input (`assets/js/main.js`).

---

### 3. Local Setup (with XAMPP or Native PHP)

1. **Install WordPress** (if not already set up).
   - Create a folder under your web root, e.g.:
     - `C:\xampp\htdocs\wordpress` (or any other folder).
   - Download WordPress from `https://wordpress.org` and extract into that folder.

2. **Copy Theme into WordPress**
   - From this repo, copy the `stan-ventures-theme` folder into:
     - `C:\xampp\htdocs\wordpress\wp-content\themes\stan-ventures-theme`
   - Ensure the folder name stays exactly `stan-ventures-theme`.

3. **Activate Theme**
   - Visit `http://localhost/wordpress/wp-admin`.
   - Log in and go to **Appearance → Themes**.
   - Activate **Stan Ventures Homepage**.

4. **Set Homepage**
   - In WordPress admin, go to **Settings → Reading**.
   - Set **Your homepage displays** to **A static page**.
   - Create a page named “Home” (or any title).
   - Set that page as the **Homepage**.
   - The theme’s `front-page.php` template will be used automatically.

---

### 4. Running the Project

Once the theme is activated and the homepage is assigned:

1. Open `http://localhost/wordpress/` (or your local URL).
2. You should see the custom homepage layout using dynamic data.
3. To tweak for pixel-perfection:
   - Export SVGs and images from the Figma file:
     - [Homepage Task Figma design](https://www.figma.com/design/o5KmJztYVCazmY5IMdvPlZ/Homepage-Task?node-id=16-3784&t=aqx7IkWbkx06DVO6-0)
   - Drop them into `stan-ventures-theme/assets/images`.
   - Update image `src` paths in the section templates as needed.

---

### 5. Git & GitHub Workflow

From **PowerShell** in this project root (`C:\xampp2\htdocs\Stan-ventures`):

```powershell
cd C:\xampp2\htdocs\Stan-ventures
git init
git add .
git commit -m "Initial commit: Stan Ventures WP homepage theme"
```

Then create a new **public repository** on GitHub (e.g. `stan-ventures-homepage`) and follow their instructions, usually:

```powershell
git remote add origin https://github.com/<your-username>/stan-ventures-homepage.git
git branch -M main
git push -u origin main
```

---

### 6. Architectural Decisions

- **Theme-only repository**: Keeps the assessment focused on the homepage implementation while letting any WordPress instance use the theme.
- **Centralized data source** (`inc/data.php`):
  - All dynamic content (Services, Case Studies, Testimonials, Comparison Table) lives in one place.
  - Makes it trivial to replace PHP arrays with a JSON loader later if desired.
- **Template parts per section**:
  - Each section of the homepage is a small PHP “component”.
  - Encourages reusability and keeps files short and readable.
- **CSS variables and utility classes**:
  - Colors, spacing, and typography are controlled via CSS variables in `main.css`.
  - Simplifies achieving pixel-perfection and future design tweaks.

---



