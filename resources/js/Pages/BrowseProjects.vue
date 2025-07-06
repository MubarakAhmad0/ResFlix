<template>
  <div class="wrapper">
    <Banner type="series" />

    <!-- MAIN CONTAINER -->
    <section class="main-container" style="padding-top: 100px;">
      <div class="location" id="home">
        <h1 id="home">My Projects</h1>
        <div class="box">
          <a v-for="project in projects.all" :key="project.id" :href="project.details_link || '#'">
            <img :src="project.thumbnail_url || '/images/placeholder.jpg'" :alt="project.title">
          </a>
        </div>
      </div>

      <template v-for="(categoryProjects, category) in projects" :key="category">
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

    <!-- FOOTER -->
    <footer>
      <Credits />
      <p>&copy 1997-2018 Netflix, Inc.</p>
      <p>Carlos Avila &copy 2018</p>
    </footer>
  </div>
</template>

<script setup>
import { defineProps, ref } from 'vue'
import { Link } from '@inertiajs/vue3'
import Banner from '@/Components/Banner.vue'
import Credits from '@/Components/Credits.vue'

const props = defineProps({
  projects: Object,
})

const userDropdownOpen = ref(false)
const guestDropdownOpen = ref(false)
</script>

<style>
/* The styles from netflix clone.txt are now in app.css */
</style>