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
    return view('home');
});


Route::get('/login2', function () {
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

#Rutas mostrar clientes y billetes Backend
Route::get('/backend', 'billetes@showClientes');
Route::get('/backend/{id}','billetes@showBillete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//Ruta para guardar imagen de oferta
Route::post('/backend', 'billetes@storeOferta')->name('insertOferta.storeOferta');
