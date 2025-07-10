<template>
  <footer class="site-footer">
    <div class="footer-content">
      <div class="social-links">
        <a href="#" aria-label="Facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
        <a href="https://www.instagram.com/mubarak_ahmad_5/" aria-label="Instagram"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="#" aria-label="Twitter"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="#" aria-label="YouTube"><i class="fab fa-youtube fa-2x"></i></a>
      </div>
      
      <nav class="footer-nav">
        <ul class="footer-links">
          <li><a href="#">Audio and Subtitles</a></li>
          <li><a href="#">Audio Description</a></li>
          <li><a href="#">Help Center</a></li>
          <li><a href="#">Gift Cards</a></li>
          <li><a href="#">Media Center</a></li>
          <li><a href="#">Investor Relations</a></li>
          <li><a href="#">Jobs</a></li>
          <li><a href="#">Terms of Use</a></li>
          <li><a href="#">Privacy</a></li>
          <li><a href="#">Legal Notices</a></li>
          <li><a href="#">Corporate Information</a></li>
          <li><a href="#">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </footer>
</template>

<script setup>
// No props needed for this component
</script>

<style scoped>
.site-footer {
  background-color: #141414;
  border-top: 1px solid #333;
  padding: 2.5rem 1.25rem;
  color: #757575;
}

.footer-content {
  max-width: 1200px;
  margin: 0 auto;
}

.social-links {
  display: flex;
  justify-content: center;
  gap: 2rem;
  margin-bottom: 2rem;
}

.social-links a {
  color: #757575;
  transition: color 0.3s ease;
}

.social-links a:hover {
  color: #e50914;
}

.footer-nav {
  text-align: center;
}

.footer-links {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 1.5rem;
  list-style: none;
  padding: 0;
  margin: 0;
}

.footer-links a {
  color: #757575;
  text-decoration: none;
  font-size: 0.9rem;
  transition: color 0.3s ease;
}

.footer-links a:hover {
  color: #e5e5e5;
}

@media (max-width: 768px) {
  .social-links {
    gap: 1rem;
  }
  
  .footer-links {
    gap: 1rem;
  }
  
  .footer-links a {
    font-size: 0.8rem;
  }
}
</style>