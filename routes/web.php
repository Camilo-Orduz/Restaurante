<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('ofertas', function () {
    return view('ofertas');
})->name('ofertas');

Route::get('contact', function () {
    return view('contacto');
})->name('contact');

Route::get('promo', function () {
    return view('promociones');
})->name('promo');

Route::get('ubicacion', function () {
    return view('ubicacion');
})->name('ubicacion_restaurante');