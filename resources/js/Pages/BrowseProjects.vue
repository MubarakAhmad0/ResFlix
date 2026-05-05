<template>
  <div class="page-wrapper">
    <Header />
    <Banner type="series" />

    <main class="content-container">
      
      <ProjectSection
        v-for="(projects, category) in staticProjects"
        :key="category"
        :title="category"
        :projects="projects"
        :category-id="category"
      />

      <section class="project-section">
        <h2 class="section-title animate-title" style="animation-delay: 0.3s;">
          <span class="title-badge series-badge">Series</span>
          Experience
        </h2>
        <div class="projects-grid">
          <div class="card-cell animate-card" style="animation-delay: 0.4s;">
            <a href="#" class="project-card" @click.prevent="toggleEpisodes">
              <div class="card-bg bloomthis-bg">
                <div class="card-svg-wrap">
                  <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="32" cy="32" r="8" fill="#fff"/>
                    <ellipse cx="32" cy="16" rx="6" ry="10" fill="#ffb3c6"/>
                    <ellipse cx="32" cy="48" rx="6" ry="10" fill="#ffb3c6"/>
                    <ellipse cx="16" cy="32" rx="10" ry="6" fill="#ff85a1"/>
                    <ellipse cx="48" cy="32" rx="10" ry="6" fill="#ff85a1"/>
                    <ellipse cx="20" cy="20" rx="6" ry="10" transform="rotate(-45 20 20)" fill="#ffc8d8"/>
                    <ellipse cx="44" cy="44" rx="6" ry="10" transform="rotate(-45 44 44)" fill="#ffc8d8"/>
                    <ellipse cx="44" cy="20" rx="6" ry="10" transform="rotate(45 44 20)" fill="#ffc8d8"/>
                    <ellipse cx="20" cy="44" rx="6" ry="10" transform="rotate(45 20 44)" fill="#ffc8d8"/>
                    <circle cx="32" cy="32" r="7" fill="#fff"/>
                    <circle cx="32" cy="32" r="4" fill="#ffcc00"/>
                  </svg>
                </div>
                <span class="card-label">BloomThis</span>
              </div>
              <div class="project-overlay">
                <span class="project-title">BloomThis</span>
                <span class="overlay-sub">Software Engineering Intern · May–Aug 2025</span>
                <span class="overlay-cta">{{ showEpisodes ? '▲ Hide Episodes' : '▼ View Episodes' }}</span>
              </div>
            </a>
          </div>

          <template v-for="(ep, index) in bloomThisEpisodes" :key="ep.id">
            <Transition name="fade-slide" appear>
              <div v-if="showEpisodes" class="card-cell" :style="{ '--delay': `${index * 0.08}s` }">
                <a href="#" class="project-card" @click.prevent>
                  <div class="card-bg episode-bg">
                    <span class="ep-num-big">EP{{ ep.episode }}</span>
                    <div class="card-svg-wrap ep-svg">
                      <svg viewBox="0 0 64 64" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <rect x="4" y="10" width="56" height="44" rx="4" fill="#1e1e1e" stroke="#e5a000" stroke-width="2"/>
                        <rect x="4" y="10" width="56" height="12" rx="4" fill="#e5a000"/>
                        <circle cx="14" cy="16" r="3" fill="#1e1e1e"/>
                        <circle cx="24" cy="16" r="3" fill="#1e1e1e"/>
                        <circle cx="34" cy="16" r="3" fill="#1e1e1e"/>
                        <polyline points="12,34 20,40 12,46" stroke="#e5a000" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" fill="none"/>
                        <line x1="24" y1="46" x2="40" y2="46" stroke="#666" stroke-width="2.5" stroke-linecap="round"/>
                      </svg>
                    </div>
                  </div>
                  <div class="project-overlay">
                    <span class="project-title">{{ ep.title }}</span>
                    <span class="overlay-sub red-sub">{{ ep.stack }}</span>
                    <span class="overlay-desc">{{ ep.description }}</span>
                  </div>
                </a>
              </div>
            </Transition>
          </template>
        </div>
      </section>

      <section class="project-section">
        <h2 class="section-title animate-title" style="animation-delay: 0.6s;">
          <span class="title-badge">Certified</span>
          Certifications
        </h2>
        <div class="projects-grid">
          <div 
            v-for="(cert, index) in certifications" 
            :key="cert.id" 
            class="card-cell animate-card"
            :style="{ 'animation-delay': `${0.7 + (index * 0.08)}s` }"
          >
            <a href="#" class="project-card">
              <div class="card-bg" :style="{ background: cert.color }">
                <div class="card-svg-wrap">
                  <component :is="cert.svgComponent" />
                </div>
              </div>
              <div class="project-overlay">
                <span class="project-title">{{ cert.title }}</span>
                <span class="overlay-sub">{{ cert.platform }} · {{ cert.duration }} · {{ cert.year }}</span>
              </div>
            </a>
          </div>
        </div>
      </section>

      <section class="project-section">
        <h2 class="section-title animate-title" style="animation-delay: 1.0s;">
          <span class="title-badge coming-badge">On Radar</span>
          Coming Soon
        </h2>
        <div class="projects-grid">
          <div 
            v-for="(item, index) in comingSoon" 
            :key="item.id" 
            class="card-cell animate-card"
            :style="{ 'animation-delay': `${1.1 + (index * 0.08)}s` }"
          >
            <a href="#" class="project-card" @click.prevent>
              <div class="card-bg soon-bg">
                <div class="soon-ribbon">TBA</div>
                <div class="card-svg-wrap">
                  <component :is="item.svgComponent" />
                </div>
              </div>
              <div class="project-overlay">
                <span class="project-title">{{ item.title }}</span>
                <span class="overlay-desc">{{ item.description }}</span>
                <div class="overlay-tags">
                  <span v-for="tag in item.tags" :key="tag" class="overlay-tag">{{ tag }}</span>
                </div>
              </div>
            </a>
          </div>
        </div>
      </section>
    </main>

    <Footer />
  </div>
</template>

<script setup>
import { ref, h } from 'vue'
import Header from '@/Components/Header.vue'
import Banner from '@/Components/Banner.vue'
import ProjectSection from '@/Components/ProjectSection.vue'
import Footer from '@/Components/Footer.vue'

const showEpisodes = ref(true)
const toggleEpisodes = () => { showEpisodes.value = !showEpisodes.value }

// ── SVG components defined inline ──────────────────────────────

const SvgGradCap = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('polygon', { points: '32,8 60,22 32,36 4,22', fill: '#fff', opacity: '0.95' }),
    h('polyline', { points: '16,29 16,46', stroke: '#fff', 'stroke-width': '3', 'stroke-linecap': 'round' }),
    h('path', { d: 'M16 46 C16 52 48 52 48 46 L48 32', stroke: '#fff', 'stroke-width': '3', 'stroke-linecap': 'round', fill: 'none' }),
    h('circle', { cx: '57', cy: '22', r: '4', fill: '#fff', opacity: '0.7' }),
    h('line', { x1: '57', y1: '26', x2: '57', y2: '38', stroke: '#fff', 'stroke-width': '3', 'stroke-linecap': 'round' }),
  ])
}

const SvgPython = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('path', { d: 'M20 12 C20 6 44 6 44 12 L44 28 C44 30 42 32 40 32 L24 32 C20 32 18 34 18 38 L18 52 C18 58 42 58 42 52 L42 48', stroke: '#fff', 'stroke-width': '4', 'stroke-linecap': 'round', fill: 'none' }),
    h('circle', { cx: '28', cy: '20', r: '3', fill: '#fff' }),
    h('circle', { cx: '36', cy: '44', r: '3', fill: '#fff' }),
    h('rect', { x: '18', y: '8', width: '8', height: '4', rx: '2', fill: '#fff', opacity: '0.5' }),
    h('rect', { x: '38', y: '52', width: '8', height: '4', rx: '2', fill: '#fff', opacity: '0.5' }),
  ])
}

const SvgCoffee = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('path', { d: 'M12 22 L16 54 L48 54 L52 22 Z', fill: '#fff', opacity: '0.9' }),
    h('path', { d: 'M52 28 C60 28 60 40 52 40', stroke: '#fff', 'stroke-width': '3', 'stroke-linecap': 'round', fill: 'none' }),
    h('rect', { x: '10', y: '18', width: '44', height: '6', rx: '3', fill: '#fff' }),
    h('path', { d: 'M24 10 C24 6 28 6 28 10 C28 14 32 14 32 10', stroke: '#fff', 'stroke-width': '2', 'stroke-linecap': 'round', fill: 'none', opacity: '0.6' }),
    h('path', { d: 'M32 10 C32 6 36 6 36 10 C36 14 40 14 40 10', stroke: '#fff', 'stroke-width': '2', 'stroke-linecap': 'round', fill: 'none', opacity: '0.6' }),
  ])
}

const SvgRobot = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('rect', { x: '12', y: '20', width: '40', height: '32', rx: '6', fill: '#fff', opacity: '0.9' }),
    h('rect', { x: '26', y: '10', width: '12', height: '12', rx: '3', fill: '#fff', opacity: '0.7' }),
    h('line', { x1: '32', y1: '10', x2: '32', y2: '20', stroke: '#e50914', 'stroke-width': '2' }),
    h('circle', { cx: '24', cy: '34', r: '5', fill: '#e50914' }),
    h('circle', { cx: '40', cy: '34', r: '5', fill: '#e50914' }),
    h('rect', { x: '22', y: '44', width: '20', height: '4', rx: '2', fill: '#e50914' }),
    h('rect', { x: '6', y: '30', width: '6', height: '12', rx: '3', fill: '#fff', opacity: '0.5' }),
    h('rect', { x: '52', y: '30', width: '6', height: '12', rx: '3', fill: '#fff', opacity: '0.5' }),
  ])
}

const SvgChat = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('rect', { x: '6', y: '8', width: '40', height: '28', rx: '6', fill: '#fff', opacity: '0.9' }),
    h('polygon', { points: '14,36 6,46 24,36', fill: '#fff', opacity: '0.9' }),
    h('rect', { x: '22', y: '32', width: '36', height: '22', rx: '6', fill: '#e50914', opacity: '0.9' }),
    h('polygon', { points: '50,54 58,62 40,54', fill: '#e50914', opacity: '0.9' }),
    h('circle', { cx: '18', cy: '22', r: '3', fill: '#e50914' }),
    h('circle', { cx: '26', cy: '22', r: '3', fill: '#e50914' }),
    h('circle', { cx: '34', cy: '22', r: '3', fill: '#e50914' }),
  ])
}

const SvgRocket = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('path', { d: 'M32 6 C32 6 50 16 50 36 L32 58 L14 36 C14 16 32 6 32 6Z', fill: '#fff', opacity: '0.9' }),
    h('circle', { cx: '32', cy: '30', r: '7', fill: '#e50914' }),
    h('path', { d: 'M14 36 C8 36 6 44 10 48 L20 44 Z', fill: '#ddd', opacity: '0.7' }),
    h('path', { d: 'M50 36 C56 36 58 44 54 48 L44 44 Z', fill: '#ddd', opacity: '0.7' }),
    h('rect', { x: '28', y: '52', width: '8', height: '10', rx: '2', fill: '#f97316', opacity: '0.8' }),
  ])
}

const SvgGlobe = {
  render: () => h('svg', { viewBox: '0 0 64 64', fill: 'none', xmlns: 'http://www.w3.org/2000/svg' }, [
    h('circle', { cx: '32', cy: '32', r: '26', stroke: '#fff', 'stroke-width': '3', fill: 'none' }),
    h('ellipse', { cx: '32', cy: '32', rx: '12', ry: '26', stroke: '#fff', 'stroke-width': '2', fill: 'none' }),
    h('line', { x1: '6', y1: '22', x2: '58', y2: '22', stroke: '#fff', 'stroke-width': '2', opacity: '0.6' }),
    h('line', { x1: '6', y1: '42', x2: '58', y2: '42', stroke: '#fff', 'stroke-width': '2', opacity: '0.6' }),
    h('line', { x1: '32', y1: '6', x2: '32', y2: '58', stroke: '#fff', 'stroke-width': '2', opacity: '0.4' }),
  ])
}

// ── Data ────────────────────────────────────────────────────────

const staticProjects = ref({})

const certifications = ref([
  {
    id: 1,
    title: 'Laravel Full-Stack Development',
    platform: 'Udemy',
    svgComponent: SvgGradCap,
    color: 'linear-gradient(135deg, #7b0000 0%, #e50914 100%)',
    duration: '40+ hrs',
    year: '2024',
  },
  {
    id: 2,
    title: 'Python for Data Science',
    platform: 'Udemy',
    svgComponent: SvgPython,
    color: 'linear-gradient(135deg, #1a3d5c 0%, #3776ab 100%)',
    duration: '30+ hrs',
    year: '2024',
  },
  {
    id: 3,
    title: 'Java Programming',
    platform: 'Udemy',
    svgComponent: SvgCoffee,
    color: 'linear-gradient(135deg, #7a4000 0%, #f89820 100%)',
    duration: '25+ hrs',
    year: '2023',
  },
])

const bloomThisEpisodes = ref([
  {
    id: 1, episode: 1,
    title: 'Item Management Module',
    stack: 'Next.js · Drizzle ORM · PostgreSQL',
    description: 'Core ERP feature with BOM integration, SKU automation, and live sync with Microsoft Dynamics 365.',
  },
  {
    id: 2, episode: 2,
    title: 'Customer Care Kanban',
    stack: 'Next.js · Full-Stack',
    description: 'Order-flow tracking system with real-time alerts, analytics dashboards, and status lanes.',
  },
  {
    id: 3, episode: 3,
    title: 'System Monitoring',
    stack: 'UptimeKuma · WhatsApp API · Gmail API',
    description: 'Uptime monitoring with multi-channel alerting via WhatsApp and Gmail integrations.',
  },
  {
    id: 4, episode: 4,
    title: 'Legacy ERP Maintenance',
    stack: 'MSSQL · AWS Lambda · jQuery',
    description: 'Improved logistics routing and backend logic on the existing Omni V1 ERP system.',
  },
])

const comingSoon = ref([
  {
    id: 1,
    title: 'AI Resume Analyser',
    svgComponent: SvgRobot,
    description: 'Upload a job description, get instant feedback on resume fit — FastAPI + LLM backend.',
    tags: ['FastAPI', 'Python', 'LLM', 'React'],
  },
  {
    id: 2,
    title: 'Real-Time Chat App',
    svgComponent: SvgChat,
    description: 'E2E encrypted messaging with WebSockets, presence indicators, and media sharing.',
    tags: ['Flutter', 'Dart', 'WebSockets', 'Node.js'],
  },
  {
    id: 3,
    title: 'DevOps Dashboard',
    svgComponent: SvgRocket,
    description: 'Personal CI/CD and container management dashboard using Docker, GitHub Actions, and GCP.',
    tags: ['Docker', 'GCP', 'GitHub Actions'],
  },
  {
    id: 4,
    title: 'Open Source Contribution',
    svgComponent: SvgGlobe,
    description: 'First meaningful PR merged into a Vue.js or Django open source project by end of 2025.',
    tags: ['Vue.js', 'Django', 'Open Source'],
  },
])
</script>

<style scoped>
/* ── Page ────────────────────────────────────────────── */
.page-wrapper {
  background-color: #141414;
  min-height: 100vh;
}

.content-container {
  padding: 2rem 1.25rem;
  color: white;
}

.project-section {
  margin-bottom: 3rem;
}

.section-title {
  font-size: 1.8rem;
  font-weight: 600;
  margin-bottom: 1rem;
  color: #e5e5e5;
  display: flex;
  align-items: center;
  gap: 0.6rem;
}

.projects-grid {
  display: grid;
  grid-template-columns: repeat(minmax(200px, 1fr));
  gap: 0;
}

@media (min-width: 768px) {
  .projects-grid {
    grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
  }
}

@media (min-width: 1024px) {
  .projects-grid {
    grid-template-columns: repeat(6, 1fr);
  }
}

.card-cell {
  display: flex;
  align-items: center;
  justify-content: center;
}

.project-card {
  position: relative;
  display: block;
  border-radius: 8px;
  width: 90%;
  height: 0;
  padding-bottom: 56%;
  overflow: hidden;
  text-decoration: none;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

.project-card:hover {
  transform: scale(1.05);
  box-shadow: 0 8px 16px rgba(0, 0, 0, 0.5);
  z-index: 2;
}

.card-bg {
  position: absolute;
  inset: 0;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  gap: 0.5rem;
}

.card-svg-wrap {
  width: 52px;
  height: 52px;
}

.card-svg-wrap svg {
  width: 100%;
  height: 100%;
}

.bloomthis-bg {
  background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
}

.card-label {
  font-size: 0.85rem;
  font-weight: 700;
  color: #fff;
  letter-spacing: 0.06em;
}

.episode-bg {
  background: linear-gradient(135deg, #1c1c1c 0%, #2a2a2a 100%);
  border-left: 3px solid #e5a000;
}

.ep-num-big {
  font-size: 1rem;
  font-weight: 800;
  color: #e5a000;
  letter-spacing: 0.1em;
}

.ep-svg {
  width: 40px;
  height: 40px;
}

/* ── Coming Soon Background ─────────────────────────── */
.soon-bg {
  background: linear-gradient(135deg, #111 0%, #1a1a1a 100%);
  position: relative;
  border: 1px solid rgba(255, 255, 255, 0.05);
}

.soon-bg::before {
  content: '';
  position: absolute;
  inset: 0;
  background: repeating-linear-gradient(
    45deg,
    transparent,
    transparent 10px,
    rgba(255, 255, 255, 0.02) 10px,
    rgba(255, 255, 255, 0.02) 20px
  );
  pointer-events: none;
}

.soon-ribbon {
  position: absolute;
  top: 8px;
  right: 0;
  background: #e50914; 
  color: #fff;
  font-size: 0.5rem;
  font-weight: 800;
  letter-spacing: 0.1em;
  padding: 0.3em 0.6em;
  border-radius: 3px 0 0 3px;
  box-shadow: 0 2px 5px rgba(0,0,0,0.4);
}

/* ── Overlays ───────────────────────────────────────── */
.project-overlay {
  position: absolute;
  bottom: 0;
  left: 0;
  right: 0;
  background: linear-gradient(transparent, rgba(0, 0, 0, 0.85));
  padding: 1.5rem 0.75rem 0.6rem;
  opacity: 0;
  transition: opacity 0.3s ease;
  display: flex;
  flex-direction: column;
  gap: 0.15rem;
}

.project-card:hover .project-overlay {
  opacity: 1;
}

.project-title {
  color: white;
  font-size: 0.9rem;
  font-weight: 500;
}

.overlay-sub {
  color: #aaa;
  font-size: 0.62rem;
}

.red-sub  { color: #e50914; }

.overlay-cta {
  color: #e5a000;
  font-size: 0.62rem;
  font-weight: 700;
  letter-spacing: 0.06em;
}

.overlay-desc {
  color: #999;
  font-size: 0.6rem;
  line-height: 1.4;
}

.overlay-tags {
  display: flex;
  flex-wrap: wrap;
  gap: 0.25rem;
  margin-top: 0.2rem;
}

.overlay-tag {
  font-size: 0.55rem;
  font-weight: 600;
  background: rgba(255, 255, 255, 0.1);
  color: #ccc;
  border: 1px solid rgba(255, 255, 255, 0.15);
  padding: 0.1em 0.4em;
  border-radius: 3px;
}

/* ── Badges ──────────────────────────────────────────── */
.title-badge {
  font-size: 0.58rem;
  font-weight: 700;
  letter-spacing: 0.1em;
  text-transform: uppercase;
  background: #e50914;
  color: #fff;
  padding: 0.2em 0.5em;
  border-radius: 2px;
  line-height: 1;
}

.series-badge { background: #e5a000; }
.coming-badge { 
  background: transparent; 
  color: #aaa; 
  border: 1px solid #555; 
}

/* ── Animations ──────────────────────────────────────── */

@keyframes simpleFade {
  0% {
    opacity: 0;
    transform: translateY(10px);
  }
  100% {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes softPop {
  0% {
    opacity: 0;
    transform: scale(0.85) translateY(20px);
  }
  70% {
    opacity: 1;
    transform: scale(1.02) translateY(-2px);
  }
  100% {
    opacity: 1;
    transform: scale(1) translateY(0);
  }
}

.animate-title {
  opacity: 0;
  animation: simpleFade 0.6s ease-out forwards;
}

.animate-card {
  opacity: 0;
  animation: softPop 0.5s cubic-bezier(0.2, 0.8, 0.2, 1) forwards;
}

.fade-slide-enter-active {
  transition: all 0.4s cubic-bezier(0.2, 0.8, 0.2, 1);
  transition-delay: var(--delay);
}

.fade-slide-leave-active {
  transition: all 0.25s ease-in;
}

.fade-slide-enter-from,
.fade-slide-leave-to {
  opacity: 0;
  transform: translateY(-20px) scale(0.95);
}
</style>