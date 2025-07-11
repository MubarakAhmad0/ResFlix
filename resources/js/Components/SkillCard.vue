<template>
  <div class="card">
    <span class="icon">
      <svg
        viewBox="0 0 24 24"
        fill="none"
        stroke="currentColor"
        stroke-width="1.2"
        stroke-linecap="round"
        stroke-linejoin="round"
        xmlns="http://www.w3.org/2000/svg"
      >
        <path
          d="M14.5 3.5C14.5 3.5 14.5 5.5 12 5.5C9.5 5.5 9.5 3.5 9.5 3.5H7.5L4.20711 6.79289C3.81658 7.18342 3.81658 7.81658 4.20711 8.20711L6.5 10.5V20.5H17.5V10.5L19.7929 8.20711C20.1834 7.81658 20.1834 7.18342 19.7929 6.79289L16.5 3.5H14.5Z"
        />
      </svg>
    </span>
    <h4>{{ skillName }}</h4>
    <p>
      <slot name="description"></slot>
    </p>
    <div class="shine"></div>
    <div class="background">
      <div class="tiles">
        <div class="tile tile-1"></div>
        <div class="tile tile-2"></div>
        <div class="tile tile-3"></div>
        <div class="tile tile-4"></div>
        <div class="tile tile-5"></div>
        <div class="tile tile-6"></div>
        <div class="tile tile-7"></div>
        <div class="tile tile-8"></div>
        <div class="tile tile-9"></div>
        <div class="tile tile-10"></div>
      </div>
      <div class="line line-1"></div>
      <div class="line line-2"></div>
      <div class="line line-3"></div>
    </div>
  </div>
</template>

<script setup>
defineProps({
  skillName: String,
});
</script>

<style scoped>
.card {
  --card-background-color: rgba(255, 255, 255, 0.03);
  --card-border-color: rgba(255, 255, 255, 0.15);
  --card-box-shadow-1: rgba(0, 0, 0, 0.1);
  --card-box-shadow-1-y: 3px;
  --card-box-shadow-1-blur: 6px;
  --card-box-shadow-2: rgba(0, 0, 0, 0.2);
  --card-box-shadow-2-y: 8px;
  --card-box-shadow-2-blur: 15px;
  --card-label-color: #FFFFFF;
  --card-icon-color: #E50914;
  --card-icon-background-color: rgba(229, 9, 20, 0.1);
  --card-icon-border-color: rgba(229, 9, 20, 0.3);
  --card-shine-opacity: .15;
  --card-shine-gradient: conic-gradient(from 205deg at 50% 50%, rgba(229, 9, 20, 0) 0deg, #E50914 25deg, rgba(229, 9, 20, 0.18) 295deg, rgba(229, 9, 20, 0) 360deg);
  --card-line-color: #333333;
  --card-tile-color: rgba(229, 9, 20, 0.05);
  --card-hover-border-color: rgba(255, 255, 255, 0.3);
  --card-hover-box-shadow-1: rgba(0, 0, 0, 0.08);
  --card-hover-box-shadow-1-y: 5px;
  --card-hover-box-shadow-1-blur: 10px;
  --card-hover-box-shadow-2: rgba(0, 0, 0, 0.4);
  --card-hover-box-shadow-2-y: 15px;
  --card-hover-box-shadow-2-blur: 25px;
  --card-hover-icon-color: #FF2626;
  --card-hover-icon-background-color: rgba(255, 38, 38, 0.15);
  --card-hover-icon-border-color: rgba(255, 38, 38, 0.4);

  background-color: var(--card-background-color);
  box-shadow: 0px var(--card-box-shadow-1-y) var(--card-box-shadow-1-blur) var(--card-box-shadow-1), 0px var(--card-box-shadow-2-y) var(--card-box-shadow-2-blur) var(--card-box-shadow-2), 0 0 0 1px var(--card-border-color);
  padding: 56px 16px 16px 16px;
  border-radius: 15px;
  cursor: pointer;
  position: relative;
  transition: box-shadow .25s;
  width: 240px;
}

.card::before {
  content: '';
  position: absolute;
  inset: 0;
  border-radius: 15px;
  background-color: var(--card-background-color);
}

.card .icon {
  z-index: 2;
  position: relative;
  display: table;
  padding: 8px;
}

.card .icon::after {
  content: '';
  position: absolute;
  inset: 4.5px;
  border-radius: 50%;
  background-color: var(--card-icon-background-color);
  border: 1px solid var(--card-icon-border-color);
  backdrop-filter: blur(2px);
  transition: background-color .25s, border-color .25s;
}

.card .icon svg {
  position: relative;
  z-index: 1;
  display: block;
  width: 24px;
  height: 24px;
  transform: translateZ(0);
  color: var(--card-icon-color);
  transition: color .25s;
}

.card h4 {
  z-index: 2;
  position: relative;
  margin: 12px 0 4px 0;
  font-family: inherit;
  font-weight: 600;
  font-size: 14px;
  line-height: 2;
  color: var(--card-label-color);
}

.card p {
  z-index: 2;
  position: relative;
  margin: 0;
  font-size: 14px;
  line-height: 1.7;
  color: var(--text-color);
}

.card .shine {
  border-radius: inherit;
  position: absolute;
  inset: 0;
  z-index: 1;
  overflow: hidden;
  opacity: 0;
  transition: opacity .5s;
}

.card .shine:before {
  content: '';
  width: 150%;
  padding-bottom: 150%;
  border-radius: 50%;
  position: absolute;
  left: 50%;
  bottom: 55%;
  filter: blur(35px);
  opacity: var(--card-shine-opacity);
  transform: translateX(-50%);
  background-image: var(--card-shine-gradient);
}

.card .background {
  border-radius: inherit;
  position: absolute;
  inset: 0;
  overflow: hidden;
  -webkit-mask-image: radial-gradient(circle at 60% 5%, black 0%, black 15%, transparent 60%);
  mask-image: radial-gradient(circle at 60% 5%, black 0%, black 15%, transparent 60%);
}

.card .background .tiles {
  opacity: 0;
  transition: opacity .25s;
}

.card .background .tiles .tile {
  position: absolute;
  background-color: var(--card-tile-color);
  animation-duration: 8s;
  animation-iteration-count: infinite;
  opacity: 0;
}

.card .background .tiles .tile.tile-4,
.card .background .tiles .tile.tile-6,
.card .background .tiles .tile.tile-10 {
  animation-delay: -2s;
}

.card .background .tiles .tile.tile-3,
.card .background .tiles .tile.tile-5,
.card .background .tiles .tile.tile-8 {
  animation-delay: -4s;
}

.card .background .tiles .tile.tile-2,
.card .background .tiles .tile.tile-9 {
  animation-delay: -6s;
}

.card .background .tiles .tile.tile-1 { top: 0; left: 0; height: 10%; width: 22.5%; }
.card .background .tiles .tile.tile-2 { top: 0; left: 22.5%; height: 10%; width: 27.5%; }
.card .background .tiles .tile.tile-3 { top: 0; left: 50%; height: 10%; width: 27.5%; }
.card .background .tiles .tile.tile-4 { top: 0; left: 77.5%; height: 10%; width: 22.5%; }
.card .background .tiles .tile.tile-5 { top: 10%; left: 0; height: 22.5%; width: 22.5%; }
.card .background .tiles .tile.tile-6 { top: 10%; left: 22.5%; height: 22.5%; width: 27.5%; }
.card .background .tiles .tile.tile-7 { top: 10%; left: 50%; height: 22.5%; width: 27.5%; }
.card .background .tiles .tile.tile-8 { top: 10%; left: 77.5%; height: 22.5%; width: 22.5%; }
.card .background .tiles .tile.tile-9 { top: 32.5%; left: 50%; height: 22.5%; width: 27.5%; }
.card .background .tiles .tile.tile-10 { top: 32.5%; left: 77.5%; height: 22.5%; width: 22.5%; }

@keyframes tile {
  0%, 12.5%, 100% { opacity: 1; }
  25%, 82.5% { opacity: 0; }
}

.card .background .line {
  position: absolute;
  inset: 0;
  opacity: 0;
  transition: opacity .35s;
}

.card .background .line:before,
.card .background .line:after {
  content: '';
  position: absolute;
  background-color: var(--card-line-color);
  transition: transform .35s;
}

.card .background .line:before {
  left: 0;
  right: 0;
  height: 1px;
  transform-origin: 0 50%;
  transform: scaleX(0);
}

.card .background .line:after {
  top: 0;
  bottom: 0;
  width: 1px;
  transform-origin: 50% 0;
  transform: scaleY(0);
}

.card .background .line.line-1:before { top: 10%; }
.card .background .line.line-1:after { left: 22.5%; }
.card .background .line.line-1:before,
.card .background .line.line-1:after {
  transition-delay: .3s;
}

.card .background .line.line-2:before { top: 32.5%; }
.card .background .line.line-2:after { left: 50%; }
.card .background .line.line-2:before,
.card .background .line.line-2:after {
  transition-delay: .15s;
}

.card .background .line.line-3:before { top: 55%; }
.card .background .line.line-3:after { right: 22.5%; }

.card:hover {
  box-shadow: 0px 3px 6px var(--card-hover-box-shadow-1), 0px var(--card-hover-box-shadow-2-y) var(--card-hover-box-shadow-2-blur) var(--card-hover-box-shadow-2), 0 0 0 1px var(--card-hover-border-color);
}

.card:hover .icon::after {
  background-color: var(--card-hover-icon-background-color);
  border-color: var(--card-hover-icon-border-color);
}

.card:hover .icon svg {
  color: var(--card-hover-icon-color);
}

.card:hover .shine {
  opacity: 1;
  transition-duration: .5s;
  transition-delay: 0s;
}

.card:hover .background .tiles {
  opacity: 1;
  transition-delay: .25s;
}

.card:hover .background .tiles .tile {
  animation-name: tile;
}

.card:hover .background .line {
  opacity: 1;
  transition-duration: .15s;
}

.card:hover .background .line:before {
  transform: scaleX(1);
}

.card:hover .background .line:after {
  transform: scaleY(1);
}

.card:hover .background .line.line-1:before,
.card:hover .background .line.line-1:after {
  transition-delay: 0s;
}

.card:hover .background .line.line-2:before,
.card:hover .background .line.line-2:after {
  transition-delay: .15s;
}

.card:hover .background .line.line-3:before,
.card:hover .background .line.line-3:after {
  transition-delay: .3s;
}
</style>