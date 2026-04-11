<template>
  <div class="wrapper">
    <Header />

    <div class="headline-section">
      <p class="label">Selected Work</p>
      <h1 class="headline">
        Things I've<br />
        <span class="accent">Built.</span>
      </h1>
      <p class="subline">
        A collection of projects spanning web, mobile, systems, and AI —
        from internship-grade production features to academic deep-dives.
      </p>
    </div>

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
          :tags="item.tags"
        />
      </div>
    </div>

    <p class="scroll-hint">← Hover to pause · Scroll to explore →</p>
  </div>
</template>

<script setup>
import Header from '@/Components/Header.vue'
import CarouselCard from '@/Components/Carousel.vue'

const carouselItems = [
  {
    image: '/images/ehealth.png',
    alt: 'eHealth System',
    title: 'eHealth System',
    description: 'A comprehensive digital platform to streamline healthcare services — tracks student health, manages hostel assignments for sick and healthy students, and facilitates appointment booking to contain virus outbreaks.',
    link: '#',
    linkText: 'View Project',
    tags: ['PHP', 'MySQL', 'XAMPP']
  },
  {
    image: '/images/talent_connect.png',
    alt: 'Talent Connect',
    title: 'Talent Connect Portal',
    description: 'A portfolio-sharing platform where students and professionals showcase their work. Features authentication, role-based admin controls, and a clean browsable directory of talent profiles.',
    link: '#',
    linkText: 'View Project',
    tags: ['PHP', 'MySQL', 'HTML']
  },
  {
    image: '/images/food_delivery.png',
    alt: 'Food Delivery App',
    title: 'Grab-Style Food Delivery',
    description: 'A full-featured food delivery app inspired by Grab — with ordering, cart management, live order tracking, and Firebase-backed authentication. Built with a modern Laravel + Vue.js + Inertia stack.',
    link: '#',
    linkText: 'View Project',
    tags: ['Laravel', 'Vue.js', 'Firebase', 'Inertia']
  },
  {
    image: '/images/hostel.png',
    alt: 'Hostel Management',
    title: 'Hostel Management System',
    description: 'End-to-end hostel administration system handling room allocation, resident tracking, and payments — all with role-based access control to separate student, staff, and admin views.',
    link: '#',
    linkText: 'View Project',
    tags: ['Python', 'Django', 'MySQL']
  },
  {
    image: '/images/finance_app.png',
    alt: 'Financial Planner App',
    title: 'Student Finance Planner',
    description: 'A native Android app built with Jetpack Compose that gives students AI-powered financial insights, real-time transaction tracking, and budget visualisation — all stored locally with Room DB.',
    link: '#',
    linkText: 'View Project',
    tags: ['Kotlin', 'Jetpack Compose', 'Room DB', 'AI/ML']
  },
  {
    image: '/images/route_viz.png',
    alt: 'Route Visualizer',
    title: 'C++ Route Visualizer',
    description: 'An interactive graph algorithm visualiser that renders Dijkstra, BFS, and DFS step-by-step in real time using SFML. Demonstrates pathfinding visually on custom graph inputs.',
    link: '#',
    linkText: 'View Project',
    tags: ['C++', 'SFML', 'Graph Theory']
  },
  {
    image: '/images/drawing_app.png',
    alt: 'Drawing App',
    title: 'Drawing & Image Editor',
    description: 'A Java Swing desktop app with full image editing capabilities — filters, layers, drawing tools, and an undo/redo stack. A hand-built Photoshop-lite in pure Java.',
    link: '#',
    linkText: 'View Project',
    tags: ['Java', 'Swing']
  },
  {
    image: '/images/vending.png',
    alt: 'Vending Machine Simulator',
    title: 'NFA vs DFA Simulator',
    description: 'A vending machine simulator that demonstrates the difference between Nondeterministic and Deterministic Finite Automata through an interactive UI — bringing Theory of Computation to life.',
    link: '#',
    linkText: 'View Project',
    tags: ['JavaScript', 'Python', 'NiceGUI']
  },
]
</script>

<style scoped>
@import url('https://fonts.bunny.net/css?family=abel:400');
@import url('https://fonts.bunny.net/css?family=syne:700,800&display=swap');
@import url('https://fonts.bunny.net/css?family=dm-mono:400,500&display=swap');

/* ── Layout ─────────────────────────────────────────── */
.wrapper {
  display: flex;
  flex-direction: column;
  align-items: center;
  min-height: 100vh;
  gap: 2.5rem;
  padding-bottom: 3rem;
}

/* ── Headline ────────────────────────────────────────── */
.headline-section {
  text-align: center;
  max-width: 680px;
  padding: 0 1.5rem;
  margin-top: 1rem;
}

.label {
  font-family: 'DM Mono', monospace;
  font-size: 0.72rem;
  letter-spacing: 0.22em;
  text-transform: uppercase;
  color: #e50914;
  margin: 0 0 0.75rem;
  opacity: 0.9;
}

.headline {
  font-family: 'Syne', sans-serif;
  font-weight: 800;
  font-size: clamp(3rem, 8vw, 5.5rem);
  line-height: 1.0;
  margin: 0 0 1.1rem;
  color: inherit;
  letter-spacing: -0.02em;
}

.accent {
  color: #e50914;
  font-style: italic;
}

.subline {
  font-family: 'Abel', sans-serif;
  font-size: clamp(0.9rem, 2vw, 1.05rem);
  line-height: 1.7;
  opacity: 0.6;
  margin: 0;
  max-width: 520px;
  margin-inline: auto;
}

/* ── Carousel Container ──────────────────────────────── */
.carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  width: 100%;
}

/* ── Carousel ────────────────────────────────────────── */
.carousel {
  --items: 8;
  --carousel-duration: 55s;
  --carousel-width: min(90vw, 1300px);
  --carousel-item-width: 300px;
  --carousel-item-height: 580px;
  --carousel-item-gap: 5rem;

  position: relative;
  width: var(--carousel-width);
  height: var(--carousel-item-height);
  overflow: clip;
}

@media (width > 600px) {
  .carousel {
    --carousel-duration: 45s;
  }
}

.carousel[mask] {
  mask-image: linear-gradient(
    to right,
    transparent,
    black 12% 88%,
    transparent
  );
}

.carousel[reverse] > :deep(article) {
  animation-direction: reverse;
}

.carousel:hover > :deep(article) {
  animation-play-state: paused;
}

/* ── Scroll hint ─────────────────────────────────────── */
.scroll-hint {
  font-family: 'DM Mono', monospace;
  font-size: 0.68rem;
  letter-spacing: 0.15em;
  text-transform: uppercase;
  opacity: 0.35;
  margin: 0;
}
</style>