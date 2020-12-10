<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.main');
})->name('accueil');

Route::get('/A-propos', function () {
    return view('pages.apropos');
})->name('A-propos');

Route::get('/clients', function () {
    return view('pages.clients');
})->name('clients');

Route::get('/contacts', function () {
    return view('pages.contact');
})->name('contacts');

Route::get('/galerie', function () {
    return view('pages.gallery');
})->name('galerie');

Route::get('/services', function () {
    return view('pages.services');
})->name('services');

Route::get('/notre-equipe', function () {
    return view('pages.team');
})->name('notre-equipe');
