<template>
  <div class="bg-gray-900 min-h-screen text-white">
    <header class="flex justify-between items-center p-4">
      <h1 class="text-2xl font-bold text-red-600">CVFLIX</h1>
      <a href="/login" class="bg-red-600 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">
        Sign In
      </a>
    </header>
    <main class="flex flex-col items-center justify-center text-center h-full mt-40">
        <h2 class="text-5xl font-bold mb-4">Showcase Your Projects, Netflix Style.</h2>
        <p class="text-xl">The ultimate platform to present your CV and projects like never before.</p>
    </main>
  </div>
</template>

<script setup>
// No layout is used for this specific page to have a unique background
defineOptions({ layout: null })
</script>

<style scoped>
/* You can add specific styles here if needed */
</style>