<?php

use Illuminate\Support\Facades\Route;

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
Route::view('/contratar', 'planes'); // Ejemplo: redirige al inicio de contratación