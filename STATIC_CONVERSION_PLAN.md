# Static Site Conversion: Technical Plan

This document outlines the detailed technical steps for converting the Laravel/Inertia/Vue project into a static Vue.js project suitable for hosting on GitHub Pages.

## Phase 1: Project Scaffolding

1.  **Create Directory:** Create a new directory named `static-portfolio`.
2.  **Initialize Vue Project:** `cd` into `static-portfolio` and run `npm create vue@latest . -- --js` to scaffold a new JavaScript-based Vue.js project using Vite. This will create the basic file structure (`package.json`, `vite.config.js`, `src/`, `public/`).

## Phase 2: Asset Migration

1.  **Copy Vue Components:**
    *   Copy `resources/js/Components` -> `static-portfolio/src/components`
    *   Copy `resources/js/Pages` -> `static-portfolio/src/views` (a common convention for router pages).
2.  **Copy Styling:**
    *   Copy `resources/css/app.css` -> `static-portfolio/src/assets/app.css`.
    *   Copy `tailwind.config.js` and `postcss.config.js` -> `static-portfolio/`.
3.  **Copy Public Assets:**
    *   Copy `public/images` -> `static-portfolio/public/images`.
    *   Copy `public/fonts` -> `static-portfolio/public/fonts`.
    *   Copy `public/audio` -> `static-portfolio/public/audio`.

## Phase 3: Data Conversion (Dynamic to Static)

1.  **Analyze Schema:** Inspect `database/migrations/*_create_projects_table.php` to determine the data structure for projects (e.g., `title`, `description`, `image_url`, `link`).
2.  **Create JSON Data File:** Create a new file at `static-portfolio/src/data/projects.json`.
3.  **Populate JSON:** Add several project objects to the `projects.json` file based on the schema.
4.  **Refactor Components:**
    *   Identify components that fetch data (e.g., `BrowseProjectsDynamic.vue`).
    *   Modify these components to remove Inertia-specific logic.
    *   Change the data source to a direct import: `import projects from '@/data/projects.json';`.

## Phase 4: Application Setup & Routing

1.  **Install Router:** In the `static-portfolio` directory, run `npm install vue-router@4`.
2.  **Configure Router:**
    *   Create `static-portfolio/src/router/index.js`.
    *   Define routes for the pages copied into `src/views` (e.g., Home, About, Projects).
3.  **Update Main Entrypoint:**
    *   Modify `static-portfolio/src/main.js` to import and use the new router.
4.  **Update Root Component:**
    *   Modify `static-portfolio/src/App.vue` to use `<router-view></router-view>` to render the pages.
    *   Incorporate shared layout components like `Header.vue` and `Footer.vue` directly into `App.vue`.

## Phase 5: Dependencies and Build

1.  **Install Dependencies:**
    *   `cd static-portfolio`.
    *   Install necessary packages for styling: `npm install -D tailwindcss postcss autoprefixer`.
    *   Review the original `package.json` for any other explicit frontend dependencies and install them.
2.  **Configure Tailwind:** Update `tailwind.config.js` content section to scan `.vue` files in the new `src` directory: `content: ['./index.html', './src/**/*.{vue,js,ts,jsx,tsx}']`.
3.  **Final Install:** Run `npm install` to ensure all packages are correctly installed.
4.  **Build:** Run `npm run build` to compile the application into static assets in the `dist` directory.
5.  **Verification:** Check that `static-portfolio/dist` contains `index.html` and the associated JS/CSS assets. This folder is the final product.
