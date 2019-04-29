<?php

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
    return view('inicio');
});


Route::get('/login', function () {
    return view('login');
});


Route::get('/registro', function () {
    return view('registro');
});

Route::get('/recuperar', function () {
    return view('recuperar');
});

Route::get('/resultado', function () {
    return view('resultado');
});

Route::get('/datosviajeros', function () {
    return view('datosViajeros');
});
