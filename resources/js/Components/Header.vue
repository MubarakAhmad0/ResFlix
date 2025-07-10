<template>
  <div :class="['body-font fixed top-0 z-50 w-full text-white p-0 m-0 transition-all duration-300', isScrolled ? 'bg-black shadow-lg' : 'bg-gradient-to-b from-black to-transparent']">
    <div class="flex flex-col flex-wrap items-center p-3 px-5 md:flex-row">
      <Link href="/" class="title-font mb-4 flex items-center text-2xl font-bold uppercase md:mb-0">
        <img src="/images/logo3.png" alt="Mubyflix logo" class="h-12 mr-3">
      </Link>

      <ul class="flex space-x-6 pl-8">
        <Link href="/browse"><li>Home</li></Link>
        <Link href="/skills"><li>Skills</li></Link>
        <Link href="/projects"><li>Projects</li></Link>
        <Link href="/contact"><li>Contact Me</li></Link>
      </ul>

      <nav class="hidden flex-wrap items-center justify-center space-x-6 text-base font-bold md:ml-auto lg:flex">
        <div v-if="$page.props.auth.user" class="relative inline-block" :class="{'text-gray-900': userDropdownOpen, 'text-gray-600': !userDropdownOpen }">
          <button @click="userDropdownOpen = !userDropdownOpen" class="flex items-center">
            <img src="https://occ-0-58-64.1.nflxso.net/dnm/api/v6/0RO1pLmU93-gdXvuxd_iYjzPqkc/AAAABTw7t_oDR-SWh9ddj9kh9AlOqCabZMupMWano7R5wg9x1_KPjvABqKHNeCxcMddK7Ku9HsV6keglPmWPZeh0lKU.png?r=fcc" alt="avatar">
            <span :class="userDropdownOpen ? '' : '-rotate-180'" class="transform transition-transform duration-500">
              <!-- Chevron Down Icon Placeholder -->
              <svg class="h-4 w-4 stroke-current pl-1 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </span>
          </button>
          <div v-show="userDropdownOpen" @click.away="userDropdownOpen = false"
            class="absolute right-0 min-w-max rounded-md bg-white text-gray-500 shadow-xl">
            <Link :href="route('logout')" method="post" as="button" class="block rounded-md px-8 py-2 font-bold hover:bg-gray-200 hover:text-gray-600">Log Out</Link>
            <Link v-if="$page.props.auth.user && $page.props.auth.user.is_admin" href="/admin" class="block rounded-b-md px-8 py-2 hover:bg-gray-200 hover:text-gray-600">Admin Dashboard</Link>
          </div>
        </div>

        <div v-else class="relative inline-block" :class="{'text-gray-900': guestDropdownOpen, 'text-gray-600': !guestDropdownOpen }">
          <button @click="guestDropdownOpen = !guestDropdownOpen" class="flex items-center">
            <img src="https://occ-0-58-64.1.nflxso.net/dnm/api/v6/0RO1pLmU93-gdXvuxd_iYjzPqkc/AAAABTw7t_oDR-SWh9ddj9kh9AlOqCabZMupMWano7R5wg9x1_KPjvABqKHNeCxcMddK7Ku9HsV6keglPmWPZeh0lKU.png?r=fcc" alt="avatar">
            <span :class="guestDropdownOpen ? '' : '-rotate-180'" class="transform transition-transform duration-500">
              <!-- Chevron Down Icon Placeholder -->
              <svg class="h-4 w-4 stroke-current pl-1 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
            </span>
          </button>
          <div v-show="guestDropdownOpen" @click.away="guestDropdownOpen = false"
            class="absolute right-0 min-w-max rounded-md bg-white text-gray-500 shadow-xl">
            <Link href="/register" class="block rounded-t-md px-8 py-2 hover:bg-gray-200 hover:text-gray-600">Register</Link>
            <Link href="/login" class="block rounded-b-md px-8 py-2 hover:bg-gray-200 hover:text-gray-600">Log in</Link>
          </div>
        </div>
      </nav>
    </div>
  </div>
</template>

<script setup>
import { ref, onMounted, onBeforeUnmount } from 'vue'
import { Link } from '@inertiajs/vue3'

const userDropdownOpen = ref(false)
const guestDropdownOpen = ref(false)
const isScrolled = ref(false)

onMounted(() => {
  const handleScroll = () => {
    isScrolled.value = window.scrollY > 10
  }

  window.addEventListener('scroll', handleScroll)
  handleScroll()

  onBeforeUnmount(() => {
    window.removeEventListener('scroll', handleScroll)
  })
})
</script>

<style scoped>
/* Header component styles */
.body-font {
  font-family: inherit;
}

/* Navigation links styling */
ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

ul li {
  cursor: pointer;
  transition: color 0.3s ease;
}

ul li:hover {
  color: #e50914;
}

/* Logo styling */
.title-font img {
  transition: transform 0.3s ease;
}

.title-font:hover img {
  transform: scale(1.05);
}

/* Dropdown styling */
.relative button {
  transition: all 0.3s ease;
}

.relative button:hover {
  opacity: 0.8;
}

/* Avatar styling */
.relative button img {
  width: 32px;
  height: 32px;
  border-radius: 4px;
  margin-right: 8px;
}

/* Dropdown menu styling */
.absolute {
  top: 100%;
  margin-top: 8px;
  z-index: 1000;
}

.absolute a {
  display: block;
  width: 100%;
  text-align: left;
  white-space: nowrap;
}

.absolute a:hover {
  background-color: #f3f4f6;
  color: #374151;
}

/* Responsive adjustments */
@media (max-width: 768px) {
  .title-font {
    margin-bottom: 1rem;
  }
  
  ul {
    display: none;
  }
  
  nav {
    margin-left: auto;
  }
}

@media (max-width: 640px) {
  .flex-col {
    align-items: flex-start;
  }
  
  .title-font {
    margin-bottom: 0.5rem;
  }
}
</style>