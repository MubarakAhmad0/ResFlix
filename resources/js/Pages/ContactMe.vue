<template>
  <div class="wrapper">
    <Header />
    <svg style="width:0;height:0;position:absolute;" aria-hidden="true" focusable="false">
      <linearGradient id="halfGradient">
        <stop offset="50%" stop-color="#E50914" />
        <stop offset="50%" stop-color="rgba(255, 255, 255, 0.2)" />
      </linearGradient>
    </svg>

    <div class="movie-card">
      <div class="movie-img-container">
        <div class="movie-img" style="background-position: center;"></div>
        <div class="movie-overlay"></div>
      </div>
      <div class="movie-content">
        <div class="title-row">
          <h1 class="movie-title">Mubarak Ahmad <span class="year-badge">2004</span></h1>
          <span class="rating-badge">R</span>
        </div>

        <div class="metadata">
          <div class="duration">
            <svg class="duration-icon" viewBox="0 0 24 24">
              <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"/>
              <path d="M12.5 7H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
            </svg>
            2h 34min
          </div>
        </div>

        <div class="genres">
          <span class="genre-tag">Student</span>
          <span class="genre-tag">Open to work</span>
          <span class="genre-tag">Web Developer</span>
        </div>

        <div class="ratings-row">
          <div class="star-rating">
            <div class="stars">
              <svg class="star star-filled" viewBox="0 0 24 24">
                <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
              </svg>
              <svg class="star star-filled" viewBox="0 0 24 24">
                <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
              </svg>
              <svg class="star star-filled" viewBox="0 0 24 24">
                <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
              </svg>
              <svg class="star star-filled" viewBox="0 0 24 24">
                <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
              </svg>
              <svg class="star star-half" viewBox="0 0 24 24">
                <path d="M12 2l2.4 7.4h7.6l-6 4.6 2.3 7-6.3-4.6-6.3 4.6 2.3-7-6-4.6h7.6z"/>
              </svg>
            </div>
            <span class="rating-text">9.9/10</span>
          </div>

          <div class="likes">
            <svg class="heart-icon" viewBox="0 0 24 24">
              <path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"/>
            </svg>
            <span class="likes-count">2.3M</span>
          </div>
        </div>

        <div class="description-section">
          <h5 class="section-title">SUMMARY</h5>
          <p class="movie-description" id="description">
            In a world built on code... <br>
            Follow the journey of a developer navigating the chaos of modern software with focus, precision, and an overworked laptop. From squashing bugs to crafting intuitive front-ends, Mubarak faces shifting tech and tight deadlines with quiet determination. This is the story of a developer shaping his own path — one commit at a time.
          </p>
        </div>

        <div class="action-row">
            <a href="mailto:mubarakelmughrabi@gmail.com" class="watch-btn">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                <path d="M8 5v14l11-7z"/>
              </svg>
              <span class="watch-btn-text">WATCH TRAILER</span>
            </a>

          <a href="https://www.linkedin.com/in/mubarak-elmughrabi-687450355/" target="_blank" class="action-btn">
            <svg class="action-icon" viewBox="0 0 24 24">
              <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
            </svg>
          </a>

          <a href="https://github.com/MubarakAhmad0" target="_blank" class="action-btn">
            <svg class="action-icon" viewBox="0 0 24 24">
              <path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
            </svg>
          </a>

          <a href="https://www.instagram.com/mubarak_ahmad_5/" target="_blank" class="action-btn">
            <svg class="action-icon" viewBox="0 0 24 24">
              <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/>
            </svg>
          </a>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import Header from '@/Components/Header.vue'
</script>

<!-- Global styles for CSS variables -->
<style>
:root {
  --netflix-black: #141414;
  --netflix-dark-gray: #1E1E1E;
  --netflix-red: #E50914;
  --netflix-text-light: #FFFFFF;
  --netflix-text-med: #B3B3B3;
  --netflix-text-dark: #8C8C8C;
  --section-space: 16px;
  --card-padding: 24px;
}
</style>

<style scoped>
*, *:before, *:after {
  box-sizing: border-box;
  margin: 0;
  padding: 0;
}

body {
  background-color: var(--netflix-black);
  font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
  color: var(--netflix-text-light);
  min-height: 100vh;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 20px;
}

.wrapper {
  background-color: var(--netflix-black);
  min-height: 100vh;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}

a {
  text-decoration: none;
  color: var(--netflix-text-light);
}

.movie-card {
  width: 100%;
  background-color: var(--netflix-dark-gray);
  border-radius: 8px;
  overflow: hidden;
  box-shadow: 0 5px 15px #e5091460;
  position: relative;
  border: 1px solid rgba(255, 255, 255, 0.1);
  transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
}

.movie-card:hover {
  transform: scale(1.03);
  box-shadow: 0 10px 25px var(--netflix-red);
}

.movie-img-container {
  height: 380px;
  position: relative;
}

.movie-img {
  height: 100%;
  width: 100%;
  background: url("/images/profilepic.jpeg") no-repeat center center;
  background-size: cover;
}

.movie-overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(180deg, rgba(20, 20, 20, 0) 0%, rgba(20, 20, 20, 0.8) 80%, var(--netflix-dark-gray) 100%);
  z-index: 1;
}

.movie-content {
  padding: 20px;
  position: relative;
  margin-top: -120px;
  z-index: 2;
}

.title-row {
  display: flex;
  justify-content: space-between;
  align-items: flex-start;
  margin-bottom: 8px;
}

.movie-title {
  font-size: 28px;
  font-weight: 700;
  color: var(--netflix-text-light);
  text-shadow: 0 2px 4px rgba(0,0,0,0.5);
  flex: 1;
}

.year-badge {
  font-size: 16px;
  font-weight: 500;
  color: var(--netflix-text-med);
  margin-left: 10px;
}

.rating-badge {
  background-color: rgba(0,0,0,0.6);
  border: 1px solid var(--netflix-text-dark);
  color: var(--netflix-text-light);
  padding: 3px 9px;
  border-radius: 4px;
  font-size: 14px;
  font-weight: 600;
  margin-top: 5px;
}

.metadata {
  display: flex;
  align-items: center;
  margin-bottom: var(--section-space);
}

.duration {
  font-size: 14px;
  color: var(--netflix-text-med);
  display: flex;
  align-items: center;
}

.duration-icon {
  width: 16px;
  height: 16px;
  fill: var(--netflix-text-med);
  margin-right: 6px;
}

.genres {
  display: flex;
  flex-wrap: wrap;
  gap: 8px;
  margin-bottom: var(--section-space);
}

.genre-tag {
  background-color: #333333;
  border: 1px solid #4D4D4D;
  padding: 4px 12px;
  border-radius: 16px;
  font-size: 12px;
  font-weight: 500;
  color: var(--netflix-text-light);
}

.ratings-row {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-bottom: var(--section-space);
  padding-bottom: var(--section-space);
  border-bottom: 1px solid #404040;
}

.star-rating {
  display: flex;
  align-items: center;
}

.stars {
  display: flex;
}

.star {
  width: 18px;
  height: 18px;
  margin-right: 3px;
}

.star-filled {
  fill: var(--netflix-red);
}

.star-half {
  fill: url(#halfGradient);
}

.star-empty {
  fill: #4D4D4D;
}

.rating-text {
  font-size: 14px;
  font-weight: 600;
  color: var(--netflix-text-med);
  margin-left: 10px;
}

.likes {
  display: flex;
  align-items: center;
}

.heart-icon {
  width: 18px;
  height: 18px;
  margin-right: 8px;
  fill: var(--netflix-red);
}

.likes-count {
  font-size: 14px;
  font-weight: 600;
  color: var(--netflix-text-med);
}

.description-section {
  margin-bottom: var(--section-space);
}

.section-title {
  font-size: 16px;
  font-weight: 700;
  margin-bottom: 12px;
  color: var(--netflix-text-light);
  text-transform: uppercase;
  letter-spacing: 1px;
}

.movie-description {
  font-size: 14px;
  line-height: 1.5;
  color: var(--netflix-text-med);
}

.action-row {
  display: grid;
  grid-template-columns: 1fr repeat(3, auto);
  gap: 12px;
  align-items: center;
  margin-top: 15px;
}

.watch-btn {
  background-color: var(--netflix-red);
  border: none;
  border-radius: 4px;
  padding: 12px 18px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  transition: background-color 0.3s ease;
  color: var(--netflix-text-light);
}

.watch-btn:hover {
  background-color: #B20710; /* Darker red on hover */
}

.watch-btn-text {
  font-size: 14px;
  font-weight: 600;
  margin-left: 10px;
}

.action-btn {
  width: 42px;
  height: 42px;
  display: flex;
  align-items: center;
  justify-content: center;
  cursor: pointer;
  background-color: #2A2A2A;
  border: 1px solid #4D4D4D;
  border-radius: 50%;
  transition: background-color 0.2s ease, border-color 0.2s ease;
}

.action-btn:hover {
  background-color: #3C3C3C;
  border-color: var(--netflix-text-med);
}

.action-icon {
  width: 20px;
  height: 20px;
  fill: var(--netflix-text-light);
}

@media (min-width: 768px) {
  .movie-card {
    max-width: 800px;
    display: flex;
  }

  .movie-img-container {
    width: 300px;
    height: auto;
    flex-shrink: 0;
  }

  .movie-content {
    width: calc(100% - 300px);
    margin-top: 0;
    padding: 30px;
    display: flex;
    flex-direction: column;
  }

  .movie-overlay {
    background: linear-gradient(90deg, rgba(30, 30, 30, 0) 0%, var(--netflix-dark-gray) 100%);
  }
  
  .description-section {
    flex-grow: 1;
  }
}
</style>