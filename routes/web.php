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





Route::get('/billete/{id}', 'billetes@showBillete');




Route::get('/login2', function () {
    return view('login');
});


Route::get('/registro', function () {
    return view('registro');
});

Route::get('/recuperar', function () {
    return view('recuperar');
});



#Rutas mostrar clientes y billetes Backend
Route::get('/backend', 'billetes@showClientes');

Route::get('/backend', 'filtro@buscar');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Ruta buscador con ofertas
Route::get('/','BuscadorController@show');


//Ruta para guardar imagen de oferta
Route::post('/backend', 'billetes@storeOfertaImage')->name('billetes.storeOfertaImage');


//Ruta resultados de busqueda
Route::get('/resultado','BuscadorController@index');
Route::post('/resultado','BuscadorController@resultadoBusqueda');


//Ruta pagar
Route::get('/pagar','DatosViajerosController@indexPagar');

//Ruta datos viajeros
Route::get('/datosviajeros','DatosViajerosController@index');
Route::post('/pagar','DatosViajerosController@store');

