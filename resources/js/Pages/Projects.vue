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

const carouselItems = [
  {
    image: '/images/ehealth.png',
    alt: 'eHealth',
    title: 'eHealth System',
    description: 'The eHealth System is a comprehensive digital platform designed to streamline healthcare services, track student health status, manage hostel assignments for sick and healthy students, automatically track and assign hostel rooms, and facilitate appointment making to enhance the overall efficiency of virus breakout containment.',
    link: '#',
    linkText: 'Read more'
  },
  {
    image: '/images/talent_connect.png',
    alt: 'Talent Connect',
    title: 'Talent Connect',
    description: 'Easter eggs are a colorful symbol of new life and rebirth, often decorated and hidden for festive hunts. The tradition comes from ancient spring rituals and was later adopted into Easter celebrations to represent the resurrection.',
    link: '#',
    linkText: 'Read more'
  },
  {
    image: 'https://images.pexels.com/photos/4099179/pexels-photo-4099179.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    alt: 'Hot Cross Buns',
    title: 'Lorem Ipsum',
    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    link: '#',
    linkText: 'Read more'
  },
  {
    image: 'https://images.pexels.com/photos/5145/animal-easter-chick-chicken.jpg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1',
    alt: 'Easter Chick',
    title: 'Lorem Ipsum',
    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
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
    title: 'Lorem Ipsum',
    description: 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.',
    link: '#',
    linkText: 'Read more'
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