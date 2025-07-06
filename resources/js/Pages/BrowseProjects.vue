<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
    projects: Object, // Projects grouped by category
});
</script>

<template>
    <Head title="My CV Projects" />

    <div class="relative min-h-screen bg-black text-white font-sans">
        <!-- Header -->
        <header class="fixed top-0 left-0 w-full z-20 p-6 bg-gradient-to-b from-black to-transparent flex justify-between items-center">
            <h1 class="text-4xl font-bold text-red-600">My Projects</h1>
            <div v-if="canLogin" class="flex space-x-4">
                <Link
                    v-if="$page.props.auth.user"
                    :href="route('dashboard')"
                    class="px-4 py-2 rounded-md text-white bg-red-600 hover:bg-red-700 transition-colors duration-300"
                    >Dashboard</Link
                >
                <template v-else>
                    <Link
                        :href="route('login')"
                        class="px-4 py-2 rounded-md text-white bg-gray-700 hover:bg-gray-600 transition-colors duration-300"
                        >Log in</Link
                    >
                    <Link
                        v-if="canRegister"
                        :href="route('register')"
                        class="px-4 py-2 rounded-md text-white bg-gray-700 hover:bg-gray-600 transition-colors duration-300"
                        >Register</Link
                    >
                </template>
            </div>
        </header>

        <!-- Main Content -->
        <main class="pt-24 p-6">
            <div v-for="(categoryProjects, category) in projects" :key="category" class="mb-12">
                <h2 class="text-3xl font-bold mb-6 text-white">{{ category }}</h2>
                <div class="flex overflow-x-scroll space-x-6 pb-4 scrollbar-hide">
                    <div v-for="project in categoryProjects" :key="project.id" class="flex-none w-64 h-auto bg-gray-900 rounded-lg shadow-lg overflow-hidden transform transition-transform duration-300 hover:scale-105 hover:shadow-2xl group relative">
                        <img :src="project.thumbnail_url || '/images/placeholder.jpg'" alt="Project Thumbnail" class="w-full h-40 object-cover" />
                        <div class="p-4">
                            <h3 class="text-xl font-bold mb-2 truncate text-white">{{ project.title }}</h3>
                            <p class="text-gray-400 text-sm mb-4 line-clamp-3">{{ project.description }}</p>
                            <Link :href="project.details_link || '#'" target="_blank" class="text-red-500 hover:underline font-semibold">
                                View Details
                            </Link>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</template>

<style scoped>
/* Hide scrollbar for Chrome, Safari and Opera */
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}

/* Hide scrollbar for IE, Edge and Firefox */
.scrollbar-hide {
    -ms-overflow-style: none;  /* IE and Edge */
    scrollbar-width: none;  /* Firefox */
}

/* Custom scrollbar for better UX on hover (optional) */
.flex.overflow-x-scroll:hover::-webkit-scrollbar {
    display: block;
    height: 8px;
}

.flex.overflow-x-scroll:hover::-webkit-scrollbar-track {
    background: #333;
    border-radius: 10px;
}

.flex.overflow-x-scroll:hover::-webkit-scrollbar-thumb {
    background: #888;
    border-radius: 10px;
}

.flex.overflow-x-scroll:hover::-webkit-scrollbar-thumb:hover {
    background: #555;
}
</style>
