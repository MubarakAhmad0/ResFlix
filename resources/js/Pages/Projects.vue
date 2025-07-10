<template>
  <div class="wrapper">
    <Header />
    <div class="carousel-container">
      <div class="carousel" mask>
        <CarouselCard
          v-for="(item, index) in carouselItems"
          :key="index"
          :image="item.image"
          :alt="item.alt"
          :title="item.title"
          :description="item.description"
          :link="item.link"
          :link-text="item.linkText"
        />
      </div>
    </div>
  </div>
</template>

<script setup>
import Header from '@/Components/Header.vue'
import CarouselCard from '@/Components/Carousel.vue'

// Define carousel items data
const carouselItems = [
  {
    image: 'https://images.pexels.com/photos/635699/pexels-photo-635699.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    alt: 'The Cross',
    title: 'The Cross',
    description: 'The Cross is a central symbol of Easter, representing the crucifixion of Jesus Christ and his sacrifice for humanity. It serves as a reminder of suffering, love, and redemption, and is often displayed during Holy Week and Easter Sunday to honor the foundation of Christian faith.',
    link: '#',
    linkText: 'Read more'
  },
  {
    image: 'https://images.pexels.com/photos/7168798/pexels-photo-7168798.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    alt: 'Easter Eggs',
    title: 'Easter Eggs',
    description: 'Easter eggs are a colorful symbol of new life and rebirth, often decorated and hidden for festive hunts. The tradition comes from ancient spring rituals and was later adopted into Easter celebrations to represent the resurrection.',
    link: '#',
    linkText: 'Read more'
  },
  {
    image: 'https://images.pexels.com/photos/4099179/pexels-photo-4099179.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    alt: 'Hot Cross Buns',
    title: 'Hot Cross Buns',
    description: 'Hot cross buns are sweet, spiced buns marked with a cross on top, traditionally eaten on Good Friday. They originated in England and symbolize the crucifixion, with the cross representing Jesus and the spices recalling burial traditions.',
    link: '#',
    linkText: 'Read more'
  },
  {
    image: 'https://images.pexels.com/photos/5145/animal-easter-chick-chicken.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    alt: 'Easter Chick',
    title: 'Easter Chick',
    description: 'Easter chicks are a cheerful symbol of new life and beginnings, often seen alongside eggs in spring decorations. They represent birth and renewal, tying into the themes of Easter and the arrival of spring.',
    link: '#',
    linkText: 'Read more'
  },
  {
    image: 'https://images.pexels.com/photos/2072158/pexels-photo-2072158.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    alt: 'Easter Bunny',
    title: 'Easter Bunnies',
    description: 'Easter bunnies are a popular symbol of spring and new life, often seen delivering colorful eggs to children.',
    link: '#',
    linkText: 'Read more'
  },
  {
    image: 'https://images.pexels.com/photos/12787666/pexels-photo-12787666.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    alt: 'Crown of Thorns',
    title: 'Crown of Thorns',
    description: 'The Crown of Thorns symbolizes the suffering of Jesus before his crucifixion. It represents the pain he endured for humanity\'s salvation and is a reminder of his sacrifice during Easter.',
    link: '#',
    linkText: 'Redsasmore'
  }
]
</script>

<style scoped>
@import url(https://fonts.bunny.net/css?family=abel:400);

/* Wrapper and Container Styles */
.wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  min-height: 100vh;
  gap: 2rem;
}

.carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
  flex: 1;
}

/* Carousel Styles */
.carousel {
  --items: 6;
  --carousel-duration: 40s;
  --carousel-width: min(80vw, 1200px);
  --carousel-item-width: 280px;
  --carousel-item-height: 600px;
  --carousel-item-gap: 6rem;
  --clr-cta: rgb(0, 132, 209);

  position: relative;
  width: var(--carousel-width);
  height: var(--carousel-item-height);
  overflow: clip;
}

@media (width > 600px) {
  .carousel {
    --carousel-duration: 30s;
  }
}

.carousel[mask] {
  /* fade out on sides */
  mask-image: linear-gradient(
    to right,
    transparent,
    black 10% 90%,
    transparent
  );
}

.carousel[reverse] > :deep(article) {
  animation-direction: reverse;
}

/* hover pauses animation */
.carousel:hover > :deep(article) {
  animation-play-state: paused;
}

/* General Styling */
* {
  box-sizing: border-box;
}

:root {
  color-scheme: light dark;
  --bg-dark: rgb(2, 6, 24);
  --bg-light: rgb(229, 229, 229);
  --txt-light: rgb(10, 10, 10);
  --txt-dark: rgb(245, 245, 245);
}

body {
  background-color: light-dark(var(--bg-light), var(--bg-dark));
  color: light-dark(var(--txt-light), var(--txt-dark));
  min-height: 100svh;
  margin: 0;
  padding: 1rem;
  font-size: 1rem;
  font-family: "Abel", sans-serif;
  line-height: 1.5;
  display: grid;
  place-items: center;
  gap: 2rem;
}
</style>