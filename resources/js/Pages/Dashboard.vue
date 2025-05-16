<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import { Link } from '@inertiajs/vue3';
import Breadcrumb from '@/Components/Breadcrumb.vue';

const breadcrumbItems = [
    { name: 'Dashboard', href: null }
];

const statCards = [
    { 
        title: 'Ventas Totales', 
        value: '$1,245,890', 
        increase: '12.5%',
        icon: 'M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z'
    },
    { 
        title: 'Clientes Nuevos', 
        value: '438', 
        increase: '8.2%',
        icon: 'M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z'
    },
    { 
        title: 'Tasa de Conversión', 
        value: '28.6%', 
        increase: '3.1%',
        icon: 'M13 7h8m0 0v8m0-8l-8 8-4-4-6 6'
    }
];
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Panel de Control
            </h2>
        </template>

        <div class="py-12 bg-gray-50">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <Breadcrumb :items="breadcrumbItems" class="mb-6" />
                
                <!-- Descripción de la aplicación -->
                <div class="bg-white overflow-hidden shadow-md rounded-lg p-8 mb-6">
                    <div class="flex flex-col md:flex-row items-start md:items-center">
                        <div class="flex-1">
                            <h1 class="text-3xl font-bold text-gray-900 mb-2">Sistema de Reportes de Ventas Olympia</h1>
                            <p class="text-lg text-gray-600 mb-6 leading-relaxed">
                                Plataforma empresarial diseñada para análisis avanzado y visualización de datos de ventas en tiempo real. 
                                Esta herramienta ofrece insights detallados para la toma de decisiones estratégicas, 
                                seguimiento de KPIs y optimización de resultados comerciales.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <Link href="/reporte-ventas" class="inline-flex items-center px-6 py-3 bg-blue-600 border border-transparent rounded-md font-semibold text-white hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                    </svg>
                                    Ver Informe de Ventas
                                </Link>
                            </div>
                        </div>
                        <div class="mt-6 md:mt-0 md:ml-8 flex-shrink-0">
                            <img src="/img/analytics-dashboard.svg" alt="Dashboard Analytics" class="w-64 h-64 object-contain" onerror="this.style.display='none'" />
                        </div>
                    </div>
                </div>
                
                <!-- Tarjetas de estadísticas -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-6">
                    <div v-for="(card, index) in statCards" :key="index" class="bg-white overflow-hidden shadow-md rounded-lg p-6 hover:shadow-lg transition-shadow duration-300">
                        <div class="flex items-center">
                            <div class="p-3 rounded-full bg-blue-50 text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" :d="card.icon" />
                                </svg>
                            </div>
                            <div class="ml-5">
                                <p class="text-gray-500 text-sm">{{ card.title }}</p>
                                <div class="flex items-center">
                                    <h3 class="font-bold text-2xl text-gray-900">{{ card.value }}</h3>
                                    <span class="text-green-500 text-sm ml-2 bg-green-50 px-2 py-1 rounded-full">+{{ card.increase }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Acceso rápido -->
                <div class="bg-white overflow-hidden shadow-md rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Acceso Rápido</h2>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <Link href="/reporte-ventas" class="flex flex-col p-6 border border-gray-200 rounded-lg hover:bg-blue-50 hover:border-blue-200 transition-colors duration-300">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600 w-12 h-12 flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg text-gray-800">Informe de Ventas</h3>
                            <p class="text-gray-600 mt-2">Visualiza el rendimiento de ventas con gráficos interactivos y datos detallados.</p>
                        </Link>
                        
                        <Link href="/gestion-pagos" class="flex flex-col p-6 border border-gray-200 rounded-lg hover:bg-blue-50 hover:border-blue-200 transition-colors duration-300">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600 w-12 h-12 flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg text-gray-800">Gestión de Pagos</h3>
                            <p class="text-gray-600 mt-2">Administra transacciones, facturas y pagos de manera eficiente.</p>
                        </Link>
                        
                        <Link href="/analisis-financiero" class="flex flex-col p-6 border border-gray-200 rounded-lg hover:bg-blue-50 hover:border-blue-200 transition-colors duration-300">
                            <div class="p-3 rounded-full bg-blue-100 text-blue-600 w-12 h-12 flex items-center justify-center mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold text-lg text-gray-800">Análisis Financiero</h3>
                            <p class="text-gray-600 mt-2">Monitorea métricas financieras clave y obtén proyecciones futuras.</p>
                        </Link>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
