<template>
  <section class="Banner" :style="{ backgroundImage: `url(${imgUrl})` }">
    <div class="Banner__content">
      <h1 class="Banner__title">{{ title }}</h1>
      <p class="Banner__description">{{ truncatedOverview }}</p>
      <div class="Banner__buttons">
        <Link href="/play" class="Banner__button">
          <i class="fas fa-play"></i> Play
        </Link>
        <button class="Banner__button" @click="showMoreInfo">
          <i class="fas fa-info-circle"></i> More Info
        </button>
      </div>
    </div>
    <div class="Banner__bottom-shadow" />
  </section>
</template>

<script setup>
import { ref, onMounted, computed } from 'vue'
import { Link } from '@inertiajs/vue3'
const props = defineProps({ type: String })
const data = ref([])
const title = ref('')
const overview = ref('')
const imgUrl = ref('')
const fallback = 'Netflix Content'

onMounted(async () => {
  const response = await fetch(`/api/${props.type}`)
  const items = await response.json()
  const item = items[Math.floor(Math.random() * items.length)]

  title.value = item?.title || item?.name || fallback
  overview.value = item?.overview || ''
  imgUrl.value = `/storage/${item?.backdrop_path}`
})

const truncatedOverview = computed(() =>
  overview.value.length > 150 ? overview.value.slice(0, 150) + '...' : overview.value
)

const showMoreInfo = () => {
  console.log('Open modal for more info')
}
</script>

<style scoped>
.Banner {
  height: 70vh;
  background-size: cover;
  background-position: center;
  position: relative;
  color: white;
}
.Banner__content {
  padding: 2rem;
  max-width: 700px;
}
.Banner__button {
  background-color: rgba(51, 51, 51, 0.5);
  border: none;
  padding: 0.5rem 1.5rem;
  margin-right: 1rem;
  border-radius: 5px;
  color: white;
  cursor: pointer;
}
.Banner__bottom-shadow {
  position: absolute;
  bottom: 0;
  height: 7rem;
  width: 100%;
  background: linear-gradient(180deg, transparent, rgba(37, 37, 37, 0.61), #111);
}
</style>
