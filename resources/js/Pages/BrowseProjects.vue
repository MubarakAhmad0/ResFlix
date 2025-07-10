<template>
  <div class="page-wrapper">
    <Header />
    <Banner type="series" />
    
    <main class="content-container">
      <ProjectSection
        v-for="(projects, category) in staticProjects"
        :key="category"
        :title="category"
        :projects="projects"
        :category-id="category"
      />
    </main>
    
    <Footer />
  </div>
</template>

<script setup>
import { ref } from 'vue'
import Header from '@/Components/Header.vue'
import Banner from '@/Components/Banner.vue'
import ProjectSection from '@/Components/ProjectSection.vue'
import Footer from '@/Components/Footer.vue'

// Consider moving this to a composable or store
const staticProjects = ref({
  'Today\'s Top Picks for Guest': [
    { id: 1, title: 'Project Alpha', thumbnail_url: '/images/1.png', details_link: '/whoiswatching' },
    { id: 2, title: 'Project Beta', thumbnail_url: '/images/2.png', details_link: '#' },
    { id: 3, title: 'Project Gamma', thumbnail_url: '/images/1.png', details_link: '#' },
    { id: 4, title: 'Project Delta', thumbnail_url: '/images/2.png', details_link: '#' },
    { id: 5, title: 'Project Epsilon', thumbnail_url: '/images/1.png', details_link: '#' },
    { id: 6, title: 'Project Zeta', thumbnail_url: '/images/1.png', details_link: '#' },
  ],
  'Trending Now': [
    { id: 7, title: 'Project Eta', thumbnail_url: '/images/1.png', details_link: '#' },
    { id: 8, title: 'Project Theta', thumbnail_url: '/images/2.png', details_link: '#' },
    { id: 9, title: 'Project Iota', thumbnail_url: '/images/1.png', details_link: '#' },
  ],
  'TV Shows': [
    { id: 10, title: 'Project Kappa', thumbnail_url: '/images/2.png', details_link: '#' },
    { id: 11, title: 'Project Lambda', thumbnail_url: '/images/1.png', details_link: '#' },
    { id: 12, title: 'Project Mu', thumbnail_url: '/images/2.png', details_link: '#' },
  ],
})
</script>

<style scoped>
.page-wrapper {
  background-color: #141414;
  min-height: 100vh;
}

.content-container {
  padding: 2rem 1.25rem;
  color: white;
}
</style>