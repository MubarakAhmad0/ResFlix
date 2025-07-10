<template>
  <div class="wrapper">
    <Header />
    <div class="contact-card">
      <div class="profile-picture-placeholder"></div>
      <h2>Contact Me</h2>
      <div class="contact-info-body">
        <p><strong></strong> Mubarak Ahmad Elmughrabi</p>
        <p><strong></strong> Software Engineer</p>
        <p><strong></strong> mubarakelmughrabi@gmail.com</p>
        <p><strong></strong> +601163878633</p>
        <div class="social-links">
          <a href="https://www.linkedin.com/in/mubarak-elmughrabi-687450355/" target="_blank" rel="noopener"><i class="fab fa-linkedin"></i> LinkedIn</a>
          <a href="https://github.com/MubarakAhmad0" target="_blank" rel="noopener"><i class="fab fa-github"></i> GitHub</a>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import Header from '@/Components/Header.vue'


</script>

<style scoped>
.wrapper {
  background-color: black;
  min-height: 100vh;
  display: flex; /* Use flexbox for centering */
  flex-direction: column; /* Arrange items in a column */
  align-items: center; /* Center horizontally */
  justify-content: center; /* Center vertically */
}

.profile-picture-placeholder {
  width: 120px;
  height: 120px;
  background-color: #333;
  border-radius: 50%;
  border: 4px solid #e50914; /* Netflix red border */
  position: absolute;
  top: 20px;
  left: 20px;
  z-index: 10;
  background-image: url('/images/profilepic.jpeg'); /* Placeholder image */
  background-size: cover;
  background-position: center;
}

.contact-card {
  background-color: #1a1a1a; /* Darker background for the card */
  color: white;
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.7), 0 0 15px rgba(229, 9, 20, 0.3); /* Subtle shadow */
  text-align: left; /* Align text to left */
  max-width: 500px;
  width: 90%; /* Responsive width */
  min-height: 450px;
  background-image: linear-gradient(to bottom right, #2a2a2a, #1a1a1a);
  border: 1px solid rgba(255, 255, 255, 0.1);
  position: relative;
}

.contact-info-body {
  margin-left: 20px;
  gap: 10px;
  margin-top: 60px;
  display: flex;
  flex-direction: column;
}

.contact-card h2 {
  font-size: 2.5rem;
  margin-bottom: 20px;
  margin-left: 140px;
  margin-top: 30px;
  color: #e50914; /* Netflix red for heading */
}

.contact-card p {
  font-size: 1.1rem;
  margin-bottom: 10px;
}

.social-links a {
  color: #e50914; /* Netflix red for links */
  text-decoration: none;
  margin-right: 15px;
  font-size: 1.2rem;
  transition: color 0.3s ease;
}

.social-links a:hover {
  color: #ff4d4d; /* Lighter red on hover */
}
</style>