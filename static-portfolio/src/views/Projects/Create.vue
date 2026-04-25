<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';
import { Head, useForm } from '@inertiajs/vue3';

const form = useForm({
    title: '',
    description: '',
    thumbnail_url: '',
    category: '',
    details_link: '',
});

const submit = () => {
    form.post(route('projects.store'));
};
</script>

<template>
    <Head title="Create Project" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">Create New Project</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <form @submit.prevent="submit">
                            <div>
                                <InputLabel for="title" value="Title" />
                                <TextInput
                                    id="title"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.title"
                                    required
                                    autofocus
                                    autocomplete="title"
                                />
                                <InputError class="mt-2" :message="form.errors.title" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="description" value="Description" />
                                <textarea
                                    id="description"
                                    class="mt-1 block w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
                                    v-model="form.description"
                                    required
                                ></textarea>
                                <InputError class="mt-2" :message="form.errors.description" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="thumbnail_url" value="Thumbnail URL" />
                                <TextInput
                                    id="thumbnail_url"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.thumbnail_url"
                                    autocomplete="thumbnail_url"
                                />
                                <InputError class="mt-2" :message="form.errors.thumbnail_url" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="category" value="Category" />
                                <TextInput
                                    id="category"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.category"
                                    required
                                    autocomplete="category"
                                />
                                <InputError class="mt-2" :message="form.errors.category" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="details_link" value="Details Link" />
                                <TextInput
                                    id="details_link"
                                    type="text"
                                    class="mt-1 block w-full"
                                    v-model="form.details_link"
                                    autocomplete="details_link"
                                />
                                <InputError class="mt-2" :message="form.errors.details_link" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <PrimaryButton :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Create Project
                                </PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
