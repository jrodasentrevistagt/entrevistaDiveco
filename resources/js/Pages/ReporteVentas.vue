<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import Breadcrumb from '@/Components/Breadcrumb.vue';

const breadcrumbItems = [
    { name: 'Reporte de Ventas', href: null }
];
</script>

<template>
    <AppLayout title="Reporte de Ventas">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Reporte de Ventas
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Breadcrumb :items="breadcrumbItems" class="mb-4" />
                
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6">
                    <h1 class="text-2xl font-semibold text-gray-800 mb-4">Informe Power BI</h1>
                    <div class="mt-4">
                        <iframe 
                            title="jr" 
                            width="100%" 
                            height="541.25" 
                            src="https://app.powerbi.com/reportEmbed?reportId=33ac691b-adbc-40de-97e9-5d3b3e4e8b00&autoAuth=true&ctid=e7744151-acb7-4516-a9ef-828e5529b311&actionBarEnabled=true" 
                            frameborder="0" 
                            allowFullScreen="true">
                        </iframe>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template> 