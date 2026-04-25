# Static Site Conversion: Walkthrough & To-Do

This file tracks the process of converting your Laravel application into a standalone static website. You can follow the checklist to see the progress.

## To-Do List

- [ ] **1. Create Project Structure:** Set up a new `static-portfolio` directory for the new site.
- [ ] **2. Scaffold Vue.js Application:** Initialize a fresh Vue.js project inside the new directory.
- [ ] **3. Migrate Assets:**
    - [ ] Copy all Vue components (`.vue` files).
    - [ ] Copy all CSS and Tailwind configuration files.
    - [ ] Copy all public assets (images, fonts, audio).
- [ ] **4. Convert Dynamic Data to Static:**
    - [ ] Create a `projects.json` file to hold project data.
    - [ ] Update Vue components to load data from the JSON file.
- [ ] **5. Set Up Routing:** Configure `vue-router` to handle navigation between pages (Home, About, Projects).
- [ ] **6. Install Dependencies & Build:**
    - [ ] Install all necessary npm packages.
    - [ ] Run the final `npm run build` command.
- [ ] **7. Deployment:**
    - The final, deployable website will be in the `static-portfolio/dist` folder.
    - You can then create a new GitHub repository and push the contents of the `static-portfolio` folder to it. To deploy to GitHub Pages, you will typically push the contents of the `dist` subfolder or configure a GitHub Action to build and deploy it for you.

I will now begin working through these steps.