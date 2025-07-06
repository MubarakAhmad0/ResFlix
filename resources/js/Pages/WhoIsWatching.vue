<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: Boolean,
    canRegister: Boolean,
});
</script>

<template>
    <Head title="Who's Watching?" />

    <div class="flex items-center justify-center min-h-screen bg-black text-white">
        <div class="text-center">
            <h1 class="text-5xl font-bold mb-12">Who's watching?</h1>
            <div class="flex justify-center space-x-8">
                <Link :href="route('login')" class="flex flex-col items-center group">
                    <img src="https://via.placeholder.com/150/FF0000/FFFFFF?text=Admin" alt="Admin Profile" class="rounded-lg w-40 h-40 object-cover border-4 border-transparent group-hover:border-white transition-all duration-300" />
                    <span class="mt-4 text-xl text-gray-400 group-hover:text-white transition-colors duration-300">Admin</span>
                </Link>
                <Link :href="route('browse')" class="flex flex-col items-center group">
                    <img src="https://via.placeholder.com/150/0000FF/FFFFFF?text=Guest" alt="Guest Profile" class="rounded-lg w-40 h-40 object-cover border-4 border-transparent group-hover:border-white transition-all duration-300" />
                    <span class="mt-4 text-xl text-gray-400 group-hover:text-white transition-colors duration-300">Guest</span>
                </Link>
            </div>
        </div>
    </div>
</template>
