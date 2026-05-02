<template>
  <article>
    <div class="card-content">
      
      <div class="media">
        <img v-if="image" :src="image" :alt="alt" />
        <div v-else-if="svgComponent" class="svg-fallback">
          <component :is="svgComponent" />
        </div>
      </div>

      <h2>{{ title }}</h2>
      
      <div class="details">
        <div class="tags" v-if="tags && tags.length">
          <span v-for="tag in tags" :key="tag" class="tag">{{ tag }}</span>
        </div>
        
        <p>{{ description }}</p>
        
        <a :href="link" @click="handleClick">{{ linkText }}</a>
      </div>
      
    </div>
  </article>
</template>

<script setup>
defineProps({
  image: {
    type: String,
    default: null
  },
  svgComponent: {
    type: Object,
    default: null
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
  },
  tags: {
    type: Array,
    default: () => []
  }
})

const handleClick = (event) => {
  if (event.target.href.endsWith('#')) {
    event.preventDefault()
  }
}
</script>

<style scoped>
/* The article ONLY handles positioning and the marquee animation now */
article {
  position: absolute;
  top: 24px;
  left: calc(100% + var(--carousel-item-gap));
  width: 340px;
  height: 500px;
  will-change: transform; 

  /* Marquee animation */
  animation-name: marquee;
  animation-duration: var(--carousel-duration);
  animation-timing-function: linear; 
  animation-iteration-count: infinite;
  animation-delay: calc(
    var(--carousel-duration) / var(--items) * 1 * var(--i) * -1
  );
}

/* Child index variables */
article:nth-child(1) { --i: 0; }
article:nth-child(2) { --i: 1; }
article:nth-child(3) { --i: 2; }
article:nth-child(4) { --i: 3; }
article:nth-child(5) { --i: 4; }
article:nth-child(6) { --i: 5; }
article:nth-child(7) { --i: 6; }
article:nth-child(8) { --i: 7; }

/* The new wrapper handles styling, colors, layout, and the hover scale */
.card-content {
  width: 100%;
  height: 100%;
  display: flex;
  flex-direction: column;
  background: #1e1e1e;
  color: #fff;
  border-radius: 12px;
  overflow: hidden;
  box-shadow: 0 6px 15px rgba(160, 16, 16, 0.6);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* Apply hover effects to the INNER wrapper to prevent the "snapping" bug */
article:hover .card-content,
article:focus-visible .card-content {
  transform: scale(1.04) translateY(-8px); 
  box-shadow: 0 12px 32px rgba(229, 9, 20, 0.7);
}

/* ── Media Styles (Image & SVG) ── */
.media {
  width: 100%;
  height: 250px;
  flex-shrink: 0;
  border-bottom: 2px solid #e50914;
  background: #111; 
}

.media img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.svg-fallback {
  width: 100%;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.svg-fallback :deep(svg) {
  width: 120px;
  height: 120px;
}

/* ── Text Content Styles ── */
h2 {
  font-size: 1.2rem;
  font-weight: 600;
  padding: 20px 20px 10px 20px;
  margin: 0;
  color: #e50914;
}

.details {
  display: flex;
  flex-direction: column;
  padding: 0 20px 20px 20px;
  flex-grow: 1;
  gap: 12px; 
}

/* ── Tags Styles ── */
.tags {
  display: flex;
  flex-wrap: wrap;
  gap: 6px;
}

.tag {
  font-size: 0.65rem;
  font-weight: 600;
  background: rgba(229, 9, 20, 0.1);
  color: #e50914;
  padding: 4px 8px;
  border-radius: 4px;
  border: 1px solid rgba(229, 9, 20, 0.3);
  letter-spacing: 0.05em;
}

p {
  margin: 0;
  line-height: 1.4rem;
  font-size: 0.85rem;
  color: #ccc;
  flex-grow: 1; 
  display: -webkit-box;
  -webkit-line-clamp: 4;
  -webkit-box-orient: vertical;
  overflow: hidden;
}

/* ── Button Styles ── */
a {
  text-decoration: none;
  text-transform: lowercase;
  align-self: flex-start;
  display: inline-flex;
  align-items: center;
  padding: 6px 14px;
  border-radius: 12px;
  background: #2c2c2c;
  color: white;
  font-size: 0.8rem;
  box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.3);
  transition: background 0.2s ease;
  border: none;
  margin-top: 4px;
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