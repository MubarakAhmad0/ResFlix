<template>
  <div class="wrapper">
    <Header />

    <div class="headline-section animate-in-1">
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

    <div class="carousel-container animate-in-2">
      <div class="carousel" mask>
        <CarouselCard
          v-for="(item, index) in carouselItems"
          :key="index"
          :image="item.image"
          :svg-component="item.svgComponent"
          :alt="item.alt"
          :title="item.title"
          :description="item.description"
          :link="item.link"
          :link-text="item.linkText"
          :tags="item.tags"
          :is-live="item.isLive"
        />
      </div>
    </div>

    <p class="scroll-hint animate-in-3">← Hover to pause · Scroll to explore →</p>
  </div>
</template>

<script setup>
import { h } from 'vue'
import Header from '@/Components/Header.vue'
import CarouselCard from '@/Components/Carousel.vue'

// ── Custom SVGs ─────────────────────────────────────────────

const SvgUniHub = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('rect', { x: '12', y: '10', width: '40', height: '44', rx: '4', stroke: '#fff', 'stroke-width': '2' }),
    h('path', { d: 'M12 22 L32 10 L52 22', stroke: '#fff', 'stroke-width': '2', fill: 'none' }),
    h('path', { d: 'M20 30 L24 30 M28 30 L32 30 M36 30 L40 30', stroke: '#e50914', 'stroke-width': '2', 'stroke-linecap': 'round' }),
    h('path', { d: 'M20 38 L44 38 M20 46 L44 46', stroke: '#fff', 'stroke-width': '2', 'stroke-linecap': 'round', opacity: '0.5' }),
    h('circle', { cx: '50', cy: '14', r: '4', fill: '#e50914' }),
    h('rect', { x: '20', y: '52', width: '24', height: '2', fill: '#e50914', rx: '1' }),
  ])
}

const SvgEHealth = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('rect', { x: '10', y: '16', width: '44', height: '32', rx: '4', stroke: '#fff', 'stroke-width': '2' }),
    h('path', { d: 'M32 48 L32 56 M24 56 L40 56', stroke: '#fff', 'stroke-width': '2', 'stroke-linecap': 'round' }),
    h('polyline', { points: '14,32 22,32 26,20 34,44 38,32 50,32', stroke: '#e50914', 'stroke-width': '3', 'stroke-linejoin': 'round', fill: 'none' }),
    h('path', { d: 'M14 20 L18 20 M16 18 L16 22', stroke: '#fff', 'stroke-width': '2', 'stroke-linecap': 'round' }),
  ])
}

const SvgTalent = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('rect', { x: '16', y: '12', width: '32', height: '40', rx: '4', stroke: '#fff', 'stroke-width': '2' }),
    h('circle', { cx: '32', cy: '26', r: '6', stroke: '#e50914', 'stroke-width': '2', fill: 'none' }),
    h('path', { d: 'M22 42 C22 35 42 35 42 42', stroke: '#e50914', 'stroke-width': '2', fill: 'none' }),
    h('line', { x1: '24', y1: '46', x2: '40', y2: '46', stroke: '#fff', 'stroke-width': '2', opacity: '0.6', 'stroke-linecap': 'round' }),
    h('circle', { cx: '48', cy: '12', r: '3', fill: '#fff' }),
    h('circle', { cx: '16', cy: '52', r: '3', fill: '#fff' }),
    h('polyline', { points: '48,15 48,26 38,26', stroke: '#fff', 'stroke-width': '1.5', opacity: '0.4', fill: 'none' }),
  ])
}

const SvgFood = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('path', { d: 'M16 28 C16 16 48 16 48 28 Z', fill: '#e50914', opacity: '0.9' }),
    h('rect', { x: '14', y: '30', width: '36', height: '6', rx: '3', fill: '#fff' }),
    h('path', { d: 'M16 38 L48 38 C48 46 44 50 32 50 C20 50 16 46 16 38 Z', fill: '#fff', opacity: '0.7' }),
    h('circle', { cx: '24', cy: '22', r: '2', fill: '#fff' }),
    h('circle', { cx: '32', cy: '18', r: '2', fill: '#fff' }),
    h('circle', { cx: '40', cy: '22', r: '2', fill: '#fff' }),
  ])
}

const SvgHostel = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('path', { d: 'M20 54 L20 16 L44 16 L44 54', stroke: '#fff', 'stroke-width': '3', fill: 'none' }),
    h('polygon', { points: '14,16 32,4 50,16', fill: '#e50914', opacity: '0.9' }),
    h('rect', { x: '26', y: '24', width: '4', height: '4', fill: '#fff' }),
    h('rect', { x: '34', y: '24', width: '4', height: '4', fill: '#fff' }),
    h('rect', { x: '26', y: '34', width: '4', height: '4', fill: '#fff' }),
    h('rect', { x: '34', y: '34', width: '4', height: '4', fill: '#fff' }),
    h('rect', { x: '28', y: '44', width: '8', height: '10', fill: '#fff', opacity: '0.7' }),
    h('line', { x1: '10', y1: '54', x2: '54', y2: '54', stroke: '#fff', 'stroke-width': '3' }),
  ])
}

const SvgFinance = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('polyline', { points: '12,50 24,34 36,40 52,18', stroke: '#e50914', 'stroke-width': '4', 'stroke-linecap': 'round', 'stroke-linejoin': 'round', fill: 'none' }),
    h('polyline', { points: '42,18 52,18 52,28', stroke: '#e50914', 'stroke-width': '4', 'stroke-linecap': 'round', 'stroke-linejoin': 'round', fill: 'none' }),
    h('circle', { cx: '24', cy: '34', r: '4', fill: '#fff' }),
    h('circle', { cx: '36', cy: '40', r: '4', fill: '#fff' }),
    h('line', { x1: '10', y1: '10', x2: '10', y2: '54', stroke: '#fff', 'stroke-width': '3', opacity: '0.5' }),
    h('line', { x1: '10', y1: '54', x2: '54', y2: '54', stroke: '#fff', 'stroke-width': '3', opacity: '0.5' }),
  ])
}

const SvgGraph = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('line', { x1: '20', y1: '20', x2: '44', y2: '32', stroke: '#fff', 'stroke-width': '3', opacity: '0.6' }),
    h('line', { x1: '44', y1: '32', x2: '28', y2: '50', stroke: '#fff', 'stroke-width': '3', opacity: '0.6' }),
    h('line', { x1: '20', y1: '20', x2: '28', y2: '50', stroke: '#fff', 'stroke-width': '3', opacity: '0.6' }),
    h('circle', { cx: '20', cy: '20', r: '6', fill: '#e50914' }),
    h('circle', { cx: '44', cy: '32', r: '6', fill: '#fff' }),
    h('circle', { cx: '28', cy: '50', r: '6', fill: '#fff' }),
  ])
}

const SvgDraw = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('path', { d: 'M46 18 L18 46 L14 50 L18 50 L46 22 Z', fill: '#fff', opacity: '0.8' }),
    h('polygon', { points: '46,18 50,14 54,18 50,22', fill: '#e50914' }),
    h('line', { x1: '24', y1: '40', x2: '32', y2: '48', stroke: '#111', 'stroke-width': '2' }),
    h('path', { d: 'M14 50 Q 8 50 10 44 L14 40 Z', fill: '#fff' }),
  ])
}

const SvgAutomata = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('circle', { cx: '18', cy: '32', r: '10', stroke: '#fff', 'stroke-width': '2', fill: 'none' }),
    h('circle', { cx: '46', cy: '32', r: '10', stroke: '#e50914', 'stroke-width': '2', fill: 'none' }),
    h('circle', { cx: '46', cy: '32', r: '7', stroke: '#e50914', 'stroke-width': '2', fill: 'none' }),
    h('path', { d: 'M28 32 Q 32 24 36 32', stroke: '#fff', 'stroke-width': '2', fill: 'none' }),
    h('polygon', { points: '36,32 32,28 32,36', fill: '#fff' }),
    h('path', { d: 'M18 22 Q 18 12 24 16', stroke: '#fff', 'stroke-width': '2', fill: 'none' }),
  ])
}

// ── Data Array ──────────────────────────────────────────────

const carouselItems = [
  {
    image: null,
    svgComponent: SvgEHealth,
    alt: 'eHealth System',
    title: 'eHealth System',
    description: 'A comprehensive digital platform to streamline healthcare services — tracks student health, manages hostel assignments for sick and healthy students, and facilitates appointment booking to contain virus outbreaks.',
    link: '#',
    linkText: 'View Project',
    tags: ['PHP', 'MySQL', 'XAMPP'],
    isLive: false
  },
  {
    image: null,
    svgComponent: SvgUniHub,
    alt: 'UniHub',
    title: 'UniHub',
    description: 'A comprehensive university student portal built with Next.js 15 — features four main sections: Academic, Campus, Community, and Services. Includes role-based authentication with better-auth, PostgreSQL database with Drizzle ORM, and a full admin module for managing users, roles, and permissions.',
    link: 'https://uni-hub-seven.vercel.app/',
    linkText: 'View Project',
    tags: ['Next.js 15', 'TypeScript', 'PostgreSQL', 'Drizzle ORM', 'better-auth', 'shadcn/ui'],
    isLive: true
  },
  {
    image: null,
    svgComponent: SvgTalent,
    alt: 'Talent Connect',
    title: 'Talent Connect Portal',
    description: 'A portfolio-sharing platform where students and professionals showcase their work. Features authentication, role-based admin controls, and a clean browsable directory of talent profiles.',
    link: '#',
    linkText: 'View Project',
    tags: ['PHP', 'MySQL', 'HTML'],
    isLive: false
  },
  {
    image: null,
    svgComponent: SvgFood,
    alt: 'Food Delivery App',
    title: 'Grab-Style Food Delivery',
    description: 'A full-featured food delivery app inspired by Grab — with ordering, cart management, live order tracking, and Firebase-backed authentication. Built with a modern Laravel + Vue.js + Inertia stack.',
    link: '#',
    linkText: 'View Project',
    tags: ['Laravel', 'Vue.js', 'Firebase', 'Inertia'],
    isLive: false
  },
  {
    image: null,
    svgComponent: SvgHostel,
    alt: 'Hostel Management',
    title: 'Hostel Management System',
    description: 'End-to-end hostel administration system handling room allocation, resident tracking, and payments — all with role-based access control to separate student, staff, and admin views.',
    link: '#',
    linkText: 'View Project',
    tags: ['Python', 'Django', 'MySQL'],
    isLive: false
  },
  {
    image: null,
    svgComponent: SvgFinance,
    alt: 'Financial Planner App',
    title: 'Student Finance Planner',
    description: 'A native Android app built with Jetpack Compose that gives students AI-powered financial insights, real-time transaction tracking, and budget visualisation — all stored locally with Room DB.',
    link: '#',
    linkText: 'View Project',
    tags: ['Kotlin', 'Jetpack Compose', 'Room DB', 'AI/ML'],
    isLive: false
  },
  {
    image: null,
    svgComponent: SvgGraph,
    alt: 'Route Visualizer',
    title: 'C++ Route Visualizer',
    description: 'An interactive graph algorithm visualiser that renders Dijkstra, BFS, and DFS step-by-step in real time using SFML. Demonstrates pathfinding visually on custom graph inputs.',
    link: '#',
    linkText: 'View Project',
    tags: ['C++', 'SFML', 'Graph Theory'],
    isLive: false
  },
  {
    image: null,
    svgComponent: SvgDraw,
    alt: 'Drawing App',
    title: 'Drawing & Image Editor',
    description: 'A Java Swing desktop app with full image editing capabilities — filters, layers, drawing tools, and an undo/redo stack. A hand-built Photoshop-lite in pure Java.',
    link: '#',
    linkText: 'View Project',
    tags: ['Java', 'Swing'],
    isLive: false
  },
  {
    image: null,
    svgComponent: SvgAutomata,
    alt: 'Vending Machine Simulator',
    title: 'NFA vs DFA Simulator',
    description: 'A vending machine simulator that demonstrates the difference between Nondeterministic and Deterministic Finite Automata through an interactive UI — bringing Theory of Computation to life.',
    link: '#',
    linkText: 'View Project',
    tags: ['JavaScript', 'Python', 'NiceGUI'],
    isLive: false
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
  overflow-x: hidden;
}

/* ── Entrance Animations ─────────────────────────────── */
.animate-in-1,
.animate-in-2,
.animate-in-3 {
  opacity: 0;
  animation: fadeUp 1s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
}

.animate-in-1 { animation-delay: 0.1s; }
.animate-in-2 { animation-delay: 0.3s; }
.animate-in-3 { animation-delay: 0.5s; }

@keyframes fadeUp {
  0% {
    opacity: 0;
    transform: translateY(30px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
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
  --items: 9;
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