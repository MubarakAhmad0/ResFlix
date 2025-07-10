<template>
  <section class="project-section">
    <h2 :id="categoryId" class="section-title">{{ title }}</h2>
    <div class="projects-grid">
      <ProjectCard
        v-for="project in projects"
        :key="project.id"
        :project="project"
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
</style>