<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'
import { RouterLink } from 'vue-router'

const isScrolled = ref(false)

onMounted(() => {
  const handleScroll = () => {
    isScrolled.value = window.scrollY > 10
  }

  window.addEventListener('scroll', handleScroll)
  handleScroll()

  onBeforeUnmount(() => {
    window.removeEventListener('scroll', handleScroll)
  })
})
</script>

<template>
  <div :class="['body-font fixed top-0 z-50 w-full text-white p-0 m-0 transition-all duration-300', isScrolled ? 'bg-black shadow-lg' : 'bg-gradient-to-b from-black to-transparent']">
    <div class="flex flex-col flex-wrap items-center p-3 px-5 md:flex-row">
      <RouterLink to="/" class="title-font mb-4 flex items-center text-2xl font-bold uppercase md:mb-0">
        <img src="/images/logo3.png" alt="Mubyflix logo" class="h-12 mr-3">
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
</template>

<style scoped>
/* Header component styles */
.body-font {
  font-family: inherit;
}

/* Navigation links styling */
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

ul li {
  cursor: pointer;
  transition: color 0.3s ease;
}

ul li:hover {
  color: #e50914;
}

/* Logo styling */
.title-font img {
  transition: transform 0.3s ease;
}

.title-font:hover img {
  transform: scale(1.05);
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .title-font {
    margin-bottom: 1rem;
  }
  
  ul {
    display: none;
  }
  
  nav {
    margin-left: auto;
  }
}

@media (max-width: 640px) {
  .flex-col {
    align-items: flex-start;
  }
  
  .title-font {
    margin-bottom: 0.5rem;
  }
}
</style>
