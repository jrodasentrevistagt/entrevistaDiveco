<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\HomeController;

// Ruta principal que redirige según el estado de autenticación
Route::get('/', function () {
    if (auth()->check()) {
        return redirect()->route('dashboard');
    }
    
    return redirect()->route('login');
})->name('home');

// Ruta Welcome original (opcional, solo si necesitas mantenerla)
Route::get('/welcome', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
})->name('welcome');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
    
    Route::get('/reporte-ventas', function () {
        return Inertia::render('ReporteVentas');
    })->name('reporte.ventas');
    
    Route::get('/gestion-pagos', function () {
        return Inertia::render('EnConstruccion', [
            'title' => 'Gestión de Pagos'
        ]);
    })->name('gestion.pagos');
    
    Route::get('/analisis-financiero', function () {
        return Inertia::render('EnConstruccion', [
            'title' => 'Análisis Financiero'
        ]);
    })->name('analisis.financiero');
});
