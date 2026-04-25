<template>
  <section class="Banner" :style="{ backgroundImage: `url(${imgUrl})` }">
    <div class="Banner__content">
      <h1 class="Banner__title">{{ title }}</h1>
      <p class="Banner__description">{{ truncatedOverview }}</p>
      <div class="Banner__buttons">
        <button @click="openResumeModal" class="Banner__button2">
          <i class=""></i> ▷ Resume
        </button>
        <button class="Banner__button" @click="showMoreInfo">
          <i class="fas fa-info-circle"></i> &nbspMore Info
        </button>
      </div>
    </div>
    <div class="Banner__bottom-shadow" />
  </section>

  <Modal :show="showResumeModal" @close="closeResumeModal">
    <div class="p-4">
      <iframe src="/resume.pdf#toolbar=0" style="width: 100%; height: 80vh;"></iframe>
    </div>
  </Modal>
</template>

<script setup>
import { ref, computed } from 'vue'
import Modal from './Modal.vue'

const title = ref('Mubarak Ahmad - Full Stack Developer')
const overview = ref('Hi, I\'m a passionate software engineering student with a love for building things that live on the internet. I’m currently learning the ins and outs of code, problem-solving, and turning ideas into working applications. This site is where I share my projects, thoughts, and progress along my journey as a developer.')
const imgUrl = ref('/images/banner1.gif')
const showResumeModal = ref(false)

const truncatedOverview = computed(() =>
  overview.value.length > 350 ? overview.value.slice(0, 150) + '...' : overview.value
)

const openResumeModal = () => {
  showResumeModal.value = true
}

const closeResumeModal = () => {
  showResumeModal.value = false
}

const showMoreInfo = () => {
  console.log('Open modal for more info')
}
</script>

<style scoped>
/* @font-face must be at the root level of the style block */
@font-face {
  font-family: 'BabasNeue';
  src: url('/fonts/BabasNeue.ttf') format('truetype');
  font-weight: normal;
  font-style: normal;
}

.Banner {
  height: 70vh;
  background-size: cover;
  background-position: center;
  position: relative;
  color: white;
  display: flex;
  align-items: flex-end;
}

.Banner__content {
  padding: 2rem;
  max-width: 850px;
  z-index: 2;
  position: relative;
}

/* ── Entrance Animations ─────────────────────────────── */

@keyframes heroFadeUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

.Banner__title {
  font-size: 2.5rem;
  font-weight: bold;
  margin-bottom: 1rem;
  font-family: 'BabasNeue', sans-serif;
  
  /* Animation */
  opacity: 0;
  animation: heroFadeUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
  animation-delay: 0.1s;
}

.Banner__description {
  /* Animation */
  opacity: 0;
  animation: heroFadeUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
  animation-delay: 0.3s;
}

.Banner__buttons {
  margin-top: 1.5rem;
  
  /* Animation */
  opacity: 0;
  animation: heroFadeUp 0.8s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
  animation-delay: 0.5s;
}

/* ── Button Styles ───────────────────────────────────── */

.Banner__button {
  background-color: rgba(109, 109, 110, 0.7);
  border: none;
  padding: 0.5rem 1.5rem;
  margin-right: 1rem;
  border-radius: 5px;
  color: white;
  cursor: pointer;
  transition: background-color 0.2s ease, transform 0.2s ease;
}

.Banner__button2 {
  background-color: white;
  border: none;
  padding: 0.5rem 1.5rem;
  margin-right: 1rem;
  border-radius: 5px;
  color: black;
  cursor: pointer;
  text-decoration: none;
  display: inline-block;
  transition: background-color 0.2s ease, transform 0.2s ease;
}

/* Added a slight scale on hover to make the buttons feel more interactive */
.Banner__button:hover,
.Banner__button2:hover {
  background-color: grey;
  transform: scale(1.05);
}

.Banner__bottom-shadow {
  position: absolute;
  bottom: 0;
  height: 7rem;
  width: 100%;
  background: linear-gradient(180deg, transparent, rgba(37, 37, 37, 0.61), #111);
}
</style>