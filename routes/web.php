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
    return view('home');
})->name("home");

Route::get('/chi_sono', function () {
    return view('chi_sono');
})->name("chi_sono");

Route::get('/contatti', function () {
    return view('contatti');
})->name("contatti");

Route::get('/portfolio', function () {
    return view('portfolio');
})->name("portfolio");