<template>
  <div class="skills-container">
    <Header />

    <div class="skills-section">
      <h2>Backend</h2>
      <div class="grid">
        <SkillCard skillName="PHP">
          <template #description>The best language.</template>
        </SkillCard>
        <SkillCard skillName="Laravel">
          <template #description>The best framework.</template>
        </SkillCard>
        <SkillCard skillName="MySQL">
          <template #description>The best database.</template>
        </SkillCard>
      </div>
    </div>

    <div class="skills-section">
      <h2>Frontend</h2>
      <div class="grid">
        <SkillCard skillName="Vue.js" />
        <SkillCard skillName="JavaScript" />
        <SkillCard skillName="Tailwind CSS" />
      </div>
    </div>

    <div class="skills-section">
      <h2>Database  </h2>
      <div class="grid">
        <SkillCard skillName="Git" />
        <SkillCard skillName="Docker" />
      </div>
    </div>

    <div class="skills-section">
      <h2>Other</h2>
      <div class="grid">
        <SkillCard skillName="Git" />
        <SkillCard skillName="Docker" />
      </div>
    </div>
  </div>
</template>

<script setup>
import Header from '@/Components/Header.vue';
import SkillCard from '@/Components/SkillCard.vue';
</script>

<style scoped>
@font-face {
  font-family: 'BebasNeue';
  src: url('/fonts/BebasNeue.otf') format('opentype');
}

.skills-container {
  text-align: center;
  padding-top: 100px;
}

.skills-section {
  margin-top: 40px;
}

h2 {
  margin-bottom: 20px;
  font-size: 32px;
  font-family: 'BebasNeue', sans-serif;
  font-weight: bold;
  text-decoration: underline;
  text-decoration-color: #e50914;
  text-underline-offset: 7px;
  text-decoration-thickness: 2px;
}

.grid {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 32px;
}
</style>


