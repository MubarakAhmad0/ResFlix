<template>
  <a 
    :href="project.details_link || '#'" 
    class="project-card"
    :title="project.title"
  >
    <img 
      :src="project.thumbnail_url || '/images/placeholder.jpg'" 
      :alt="project.title"
      class="project-image"
      loading="lazy"
    >
    <div class="project-overlay">
      <span class="project-title">{{ project.title }}</span>
    </div>
  </a>
</template>

<script setup>
defineProps({
  project: {
    type: Object,
    required: true
  }
})
</script>

<style scoped>
.project-card {
  position: relative;
  display: block;
  border-radius: 8px;
  width: 90%;
  height: 80%;
  overflow: hidden;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.project-card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
}

.project-image {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
  display: block;
}

.project-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.8));
  padding: 1rem;
  opacity: 0;
  transition: opacity 0.3s ease;
}

.project-card:hover .project-overlay {
  opacity: 1;
}

.project-title {
  color: white;
  font-size: 1.5rem;
  font-weight: 500;
}
</style>