<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan; // Importante para que funcione el comando

// Tu página de inicio actual
Route::get('/', function () {
    return view('welcome');
});

// Agrega estas nuevas rutas para tus botones
Route::view('/planes', 'planes');
Route::view('/cobertura', 'cobertura');
Route::view('/soporte', 'soporte');
Route::view('/nosotros', 'nosotros');
Route::view('/blog', 'blog');
Route::view('/contratar', 'planes');

// --- RUTA TEMPORAL PARA CREAR LAS TABLAS ---
Route::get('/migrar-base-de-datos', function () {
    try {
        Artisan::call('migrate:fresh', [
            '--force' => true,
        ]);
        return "¡Éxito! Las tablas se han creado correctamente en MySQL.";
    } catch (\Exception $e) {
        return "Error al migrar: " . $e->getMessage();
    }
});
