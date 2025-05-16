<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import Breadcrumb from '@/Components/Breadcrumb.vue';

const props = defineProps({
    title: {
        type: String,
        required: true
    }
});

const breadcrumbItems = [
    { name: props.title, href: null }
];
</script>

<template>
    <AppLayout :title="title">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ title }}
            </h2>
        </template>

        <div class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Breadcrumb :items="breadcrumbItems" class="mb-6" />
                
                <div class="bg-white overflow-hidden shadow-md rounded-lg p-8">
                    <div class="flex flex-col items-center text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-24 w-24 text-yellow-500 mb-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                        </svg>
                        <h1 class="text-3xl font-bold text-gray-900 mb-4">Página en Construcción</h1>
                        <p class="text-lg text-gray-600 mb-8 max-w-xl">
                            Estamos trabajando para implementar esta funcionalidad próximamente. 
                            Gracias por su paciencia.
                        </p>
                        <Link href="/dashboard" class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                            </svg>
                            Volver al Dashboard
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template> 