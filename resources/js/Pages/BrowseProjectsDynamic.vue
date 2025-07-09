<template>
  <div class="wrapper">
    <div class="body-font fixed top-0 z-50 w-full bg-black text-white p-0 m-0">
        <div class="flex flex-col flex-wrap items-center p-3 px-5 md:flex-row">
            <Link href="/" class="title-font mb-4 flex items-center text-2xl font-bold uppercase md:mb-0">
                <img src="/images/logo.png" alt="Mubyflix logo" class="h-12">
            </Link>

            <ul class="flex space-x-6 pl-8">
              <Link href="/"><li>Home</li></Link>
              <Link href="#"><li>Skills</li></Link>
              <Link href="#"><li>Projects</li></Link>
              <Link href="#"><li>Contact Me</li></Link>
            </ul>

            <nav class="hidden flex-wrap items-center justify-center space-x-6 text-base font-bold md:ml-auto lg:flex">
                <div v-if="$page.props.auth.user" class="relative inline-block" :class="{'text-gray-900': userDropdownOpen, 'text-gray-600': !userDropdownOpen }">
                    <button @click="userDropdownOpen = !userDropdownOpen" class="flex items-center">
                        <img src="https://occ-0-58-64.1.nflxso.net/dnm/api/v6/0RO1pLmU93-gdXvuxd_iYjzPqkc/AAAABTw7t_oDR-SWh9ddj9kh9AlOqCabZMupMWano7R5wg9x1_KPjvABqKHNeCxcMddK7Ku9HsV6keglPmWPZeh0lKU.png?r=fcc" alt="avatar">
                        <span :class="userDropdownOpen ? '' : '-rotate-180'" class="transform transition-transform duration-500">
                            <!-- Chevron Down Icon Placeholder -->
                            <svg class="h-4 w-4 stroke-current pl-1 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div v-show="userDropdownOpen" @click.away="userDropdownOpen = false"
                        class="absolute right-0 min-w-max rounded-md bg-white text-gray-500 shadow-xl">
                        <Link :href="route('logout')" method="post" as="button" class="block rounded-md px-8 py-2 font-bold hover:bg-gray-200 hover:text-gray-600">Log Out</Link>
                        <Link v-if="$page.props.auth.user && $page.props.auth.user.is_admin" href="/admin" class="block rounded-b-md px-8 py-2 hover:bg-gray-200 hover:text-gray-600">Admin Dashboard</Link>
                    </div>
                </div>

                <div v-else class="relative inline-block" :class="{'text-gray-900': guestDropdownOpen, 'text-gray-600': !guestDropdownOpen }">
                    <button @click="guestDropdownOpen = !guestDropdownOpen" class="flex items-center">
                        <img src="https://occ-0-58-64.1.nflxso.net/dnm/api/v6/0RO1pLmU93-gdXvuxd_iYjzPqkc/AAAABTw7t_oDR-SWh9ddj9kh9AlOqCabZMupMWano7R5wg9x1_KPjvABqKHNeCxcMddK7Ku9HsV6keglPmWPZeh0lKU.png?r=fcc" alt="avatar">
                        <span :class="guestDropdownOpen ? '' : '-rotate-180'" class="transform transition-transform duration-500">
                            <!-- Chevron Down Icon Placeholder -->
                            <svg class="h-4 w-4 stroke-current pl-1 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                        </span>
                    </button>
                    <div v-show="guestDropdownOpen" @click.away="guestDropdownOpen = false"
                        class="absolute right-0 min-w-max rounded-md bg-white text-gray-500 shadow-xl">
                        <Link href="/register" class="block rounded-t-md px-8 py-2 hover:bg-gray-200 hover:text-gray-600">Register</Link>
                        <Link href="/login" class="block rounded-b-md px-8 py-2 hover:bg-gray-200 hover:text-gray-600">Log in</Link>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    
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

</style>