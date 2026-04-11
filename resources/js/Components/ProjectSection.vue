<template>
  <section class="project-section">
    <h2 :id="categoryId" class="section-title animate-title">{{ title }}</h2>
    
    <div class="projects-grid">
      <ProjectCard
        v-for="(project, index) in projects"
        :key="project.id"
        :project="project"
        class="animate-card"
        :style="{ 'animation-delay': `${0.15 + (index * 0.08)}s` }"
      />
    </div>
  </section>
</template>

<script setup>
import ProjectCard from '@/Components/ProjectCard.vue'

defineProps({
  title: {
    type: String,
    required: true
  },
  projects: {
    type: Array,
    required: true
  },
  categoryId: {
    type: String,
    required: true
  }
})
</script>

<style scoped>
.project-section {
  margin-bottom: 3rem;
}

.section-title {
  font-size: 1.8rem;
  font-weight: 600;
  margin-bottom: 1rem;
  color: #e5e5e5;
}

.projects-grid {
  display: grid;
  grid-template-columns: repeat(minmax(200px, 1fr));
  gap: 0rem; /* Reduced from 1rem to 0.5rem */
}

@media (min-width: 768px) {
  .projects-grid {
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  }
}

@media (min-width: 1024px) {
  .projects-grid {
    grid-template-columns: repeat(6, 1fr);
  }
}

/* ── Custom Animations (Synced with the rest of the site) ───────────────── */

@keyframes simpleFade {
  0% {
    opacity: 0;
    transform: translateY(10px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes softPop {
  0% {
    opacity: 0;
    transform: scale(0.85) translateY(20px);
  }
  70% {
    opacity: 1;
    transform: scale(1.02) translateY(-2px);
  }
  100% {
    opacity: 1;
    transform: scale(1) translateY(0);
  }
}

/* Base states: hidden until the animation delay triggers */
.animate-title {
  opacity: 0;
  animation: simpleFade 0.6s ease-out forwards;
}

.animate-card {
  opacity: 0;
  /* Uses the softPop animation; the delay is handled dynamically inline in the template */
  animation: softPop 0.5s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
}
</style>