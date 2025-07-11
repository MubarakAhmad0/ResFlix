<template>
  <div class="skills-container">
    <Header />

    <div class="skills-section">
      <h2>Backend</h2>
      <div class="grid">
        <SkillCard skillName="PHP">
          <template #description>A general-purpose scripting language geared towards web development.</template>
        </SkillCard>

        <SkillCard skillName="Laravel">
          <template #description>A popular open-source PHP web framework used for building robust web applications following the model-view-controller (MVC) architectural pattern.</template>
        </SkillCard>

        <SkillCard skillName="MySQL">
          <template #description>An open-source relational database management system (RDBMS) that uses Structured Query Language (SQL) to manage and organize data in tables with predefined relationships.</template>
        </SkillCard>
      </div>
    </div>

    <div class="skills-section">
      <h2>Frontend</h2>
      <div class="grid">
        <SkillCard skillName="Vue.js">
          <template #description>A progressive JavaScript framework for building user interfaces and single-page applications, known for its approachability, performance, and versatility.</template>
        </SkillCard>  

        <SkillCard skillName="JavaScript">
          <template #description>A high-level, interpreted programming language primarily used for making web pages interactive and dynamic, enabling client-side scripting and increasingly server-side development.</template>
        </SkillCard>

        <SkillCard skillName="Tailwind CSS" >
          <template #description>A utility-first CSS framework that provides low-level utility classes to build custom designs without leaving your HTML, promoting rapid UI development.</template>
        </SkillCard>

        <SkillCard skillName="Bootstrap">
          <template #description>A popular front-end framework for developing responsive and mobile-first websites, featuring a collection of CSS and JavaScript components.</template>
        </SkillCard>
      </div>
    </div>

    <div class="skills-section">
      <h2>Database  </h2>
      <div class="grid">
        <SkillCard skillName="MySQL">
          <template #description>An open-source relational database management system (RDBMS) that uses Structured Query Language (SQL) to manage and organize data in tables with predefined relationships.</template>
        </SkillCard>

        <SkillCard skillName="PostgreSQL">
          <template #description>An advanced, open-source relational database management system known for its robustness, extensibility, and support for complex queries and large datasets.</template>
        </SkillCard>
      </div>
    </div>

    <div class="skills-section">
      <h2>Other</h2>
      <div class="grid">
        <SkillCard skillName="Git">
          <template #description>A distributed version control system for tracking changes in source code during software development.</template>
        </SkillCard>

        <SkillCard skillName="Docker">
          <template #description>A platform for developing, shipping, and running applications in containers, enabling consistent environments across various stages of development.</template>
        </SkillCard>
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


