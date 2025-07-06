<template>
  <section class="Row">
    <h2 class="Row__title">{{ title }}</h2>
    <swiper :slides-per-view="slidesPerView" :space-between="10" navigation>
      <swiper-slide v-for="item in items" :key="item.id">
        <img class="Row__poster" :src="`/storage/${item.poster_url}`" :alt="item.title" />
      </swiper-slide>
    </swiper>
  </section>
</template>

<script setup>
import { ref, onMounted } from 'vue'
import { Swiper, SwiperSlide } from 'swiper/vue'
import 'swiper/swiper-bundle.css'

const props = defineProps({ genre: String, title: String })
const items = ref([])

onMounted(async () => {
  const response = await fetch(`/api/genre/${props.genre}`)
  items.value = await response.json()
})

const slidesPerView = window.innerWidth > 1024 ? 6 : window.innerWidth > 768 ? 4 : 2
</script>

<style scoped>
.Row {
  padding: 2rem;
  color: white;
}
.Row__title {
  margin-bottom: 1rem;
}
.Row__poster {
  width: 100%;
  border-radius: 4px;
  transition: transform 0.3s;
  cursor: pointer;
}
.Row__poster:hover {
  transform: scale(1.08);
}
</style>
