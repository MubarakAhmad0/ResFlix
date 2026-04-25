<script setup>
import { ref, computed } from 'vue'
import { RouterLink } from 'vue-router'
import Banner from '../components/Banner.vue'
import projectsData from '../data/projects.json'

// Group projects by category
const projectsByCategory = computed(() => {
  return projectsData.reduce((acc, project) => {
    const category = project.category || 'Uncategorized';
    if (!acc[category]) {
      acc[category] = [];
    }
    acc[category].push(project);
    return acc;
  }, {});
});
</script>

<template>
  <div class="wrapper">
    <div class="body-font fixed top-0 z-50 w-full bg-black text-white p-0 m-0">
        <div class="flex flex-col flex-wrap items-center p-3 px-5 md:flex-row">
            <RouterLink to="/" class="title-font mb-4 flex items-center text-2xl font-bold uppercase md:mb-0">
                <img src="/images/logo.png" alt="Mubyflix logo" class="h-12">
            </RouterLink>

            <ul class="flex space-x-6 pl-8">
              <RouterLink to="/"><li>Home</li></RouterLink>
              <RouterLink to="/skills"><li>Skills</li></RouterLink>
              <RouterLink to="/projects"><li>Projects</li></RouterLink>
              <RouterLink to="/contact"><li>Contact Me</li></RouterLink>
            </ul>

            <nav class="hidden flex-wrap items-center justify-center space-x-6 text-base font-bold md:ml-auto lg:flex">
                <!-- Auth section removed for static site -->
            </nav>
        </div>
    </div>
    
    <Banner type="series" />

    <!-- MAIN CONTAINER -->
    <section class="main-container" style="padding-top: 100px;">
      <div class="location" id="home">
        <h1 id="home">All Projects</h1>
        <div class="box">
          <a v-for="project in projectsData" :key="project.id" :href="project.details_link || '#'">
            <img :src="project.thumbnail_url || '/images/placeholder.jpg'" :alt="project.title">
          </a>
        </div>
      </div>

      <template v-for="(categoryProjects, category) in projectsByCategory" :key="category">
        <h1 :id="category">{{ category }}</h1>
        <div class="box">
          <a v-for="project in categoryProjects" :key="project.id" :href="project.details_link || '#'">
            <img :src="project.thumbnail_url || '/images/placeholder.jpg'" :alt="project.title">
          </a>
        </div>
      </template>

    </section>
    <!-- END OF MAIN CONTAINER -->

    <!-- LINKS -->
    <section class="link">
      <div class="logos">
        <a href="#"><i class="fab fa-facebook-square fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-instagram fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-twitter fa-2x logo"></i></a>
        <a href="#"><i class="fab fa-youtube fa-2x logo"></i></a>
      </div>
      <div class="sub-links">
        <ul>
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Legal Notices</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </div>
    </section>
    <!-- END OF LINKS -->

  
  </div>
</template>

<style>

</style>
