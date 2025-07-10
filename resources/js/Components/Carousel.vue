<template>
  <article>
    <img :src="image" :alt="alt" />
    <h2>{{ title }}</h2>
    <div>
      <p>{{ description }}</p>
      <a :href="link" @click="handleClick">{{ linkText }}</a>
    </div>
  </article>
</template>

<script setup>
defineProps({
  image: {
    type: String,
    required: true
  },
  alt: {
    type: String,
    default: ''
  },
  title: {
    type: String,
    required: true
  },
  description: {
    type: String,
    required: true
  },
  link: {
    type: String,
    default: '#'
  },
  linkText: {
    type: String,
    default: 'Read more'
  }
})

const handleClick = (event) => {
  // Prevent default if using # as placeholder
  if (event.target.href.endsWith('#')) {
    event.preventDefault()
  }
}
</script>

<style scoped>
article {
  /* Layout & Dimensions */
  width: 340px;
  height: auto;
  min-height: 500px;
  display: grid;
  grid-template-rows: 250px 50px auto 50px;
  gap: 0.25rem;

  /* Color Scheme */
  background: #1e1e1e;
  color: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 6px 15px rgba(160, 16, 16, 0.6);

  /* Carousel positioning (preserved) */
  position: absolute;
  top: 0;
  left: calc(100% + var(--carousel-item-gap));
  will-change: transform; /* Good, indicates transform will change */

  /* Your existing animation properties */
  animation-name: marquee;
  animation-duration: var(--carousel-duration);
  animation-timing-function: linear; /* The animation itself is linear */
  animation-iteration-count: infinite;
  animation-delay: calc(
    var(--carousel-duration) / var(--items) * 1 * var(--i) * -1
  );

  /* Add transitions for properties you want to animate on hover/focus */
  transition: box-shadow 0.3s ease; /* Only transition box-shadow here */
}

/* Define the hover/focus effect */
article:hover,
article:focus-visible {
  
  transform: scale(1.04) translateY(-8px); /* This will *override* the animation's transform */
  box-shadow: 0 12px 32px rgba(229, 9, 20, 0.7);
  transition: transform 0.3s ease, box-shadow 0.3s ease; /* Apply transition here */
}

/* Child index variables (preserved) */
article:nth-child(1) { --i: 0; }
article:nth-child(2) { --i: 1; }
article:nth-child(3) { --i: 2; }
article:nth-child(4) { --i: 3; }
article:nth-child(5) { --i: 4; }
article:nth-child(6) { --i: 5; }
article:nth-child(7) { --i: 6; }
article:nth-child(8) { --i: 7; }

img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-bottom: 2px solid #e50914;
}

article > *:not(img) {
  padding: 0 20px;
}

article > div {
  grid-row: span 2;
  display: grid;
  grid-template-rows: subgrid;
  font-size: 0.8rem;
}

h2 {
  font-size: 1.2rem;
  font-weight: 300;
  padding: 20px 20px 0 20px;
  margin: 0 0 10px 0;
  color: #e50914;
}

p {
  margin: 0 0 0 0;
  line-height: 1.2rem;
}

a {
  text-decoration: none;
  text-transform: lowercase;
  padding: 0.25rem 0.5rem;
  place-self: start;
  
  /* Link styles matching tech badges */
  display: inline-flex;
  align-items: center;
  padding: 5px 10px;
  border-radius: 12px;
  background: #2c2c2c;
  color: white;
  font-size: 0.8rem;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
  transition: background 0.2s ease;
  border: none;
}

a:hover,
a:focus-visible {
  background-color: #e50914;
  color: white;
  outline: none;
}

/* Preserve carousel animation */
@keyframes marquee {
  100% {
    transform: translateX(
      calc(
        (var(--items) * (var(--carousel-item-width) + var(--carousel-item-gap))) *
          -1
      )
    );
  }
}
</style>