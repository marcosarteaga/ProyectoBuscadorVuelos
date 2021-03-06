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




//ver billetes
Route::get('/billete/{id}', 'billetes@showBillete');

Route::get('/billeteUser/{id}', 'billetes@showBilleteUser');


Route::get('/factura', 'FacturaController@generarFactura');

Route::get('/vistaFacturaPDF', 'FacturaController@indexFacturaPDF');


Route::get('/login2', function () {
    return view('login');
});


Route::get('/loginAdmin', function () {
    return view('loginAdmin');
});

//Route::post('/loginAdmin', 'loginAdmin@validarUser');


//vista perfil
Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

//update user
Route::post('/perfil', 'modificarUser@showUser')->name('modificar') ;


Route::get('/registro', function () {
    return view('registro');
});

Route::get('/recuperar', function () {
    return view('recuperar');
});



#Rutas mostrar clientes y billetes Backend
Route::get('/backendFiltro', 'filtro@buscar');
Route::get('/backend', 'billetes@showClientes');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Ruta buscador con ofertas
Route::get('/','BuscadorController@show');



//Ruta para guardar imagen de oferta
Route::post('/backend', 'billetes@storeOfertaImage')->name('billetes.storeOfertaImage');
//Ruta actualizar comision
//Route::get('/backendComision','billetes@indexComision');
Route::post('/backendComision','billetes@updateComision');

//Ruta resultados de busqueda
Route::get('/resultado','BuscadorController@index');
Route::post('/resultado','BuscadorController@resultadoBusqueda');


//Ruta pagar
Route::get('/pagar','DatosViajerosController@indexPagar');

//Ruta datos viajeros
Route::get('/datosviajeros','DatosViajerosController@index');
Route::post('/pagar','DatosViajerosController@store');


Route::get('pdf','PdfController@descargarPDF');

//paypal
Route::post('/paypal','PaymentController@payWithpaypal');
Route::get('/status','PaymentController@getPaymentStatus')->name('status');



//admin route for our multi-auth system
/*
Route::prefix('admin')->group(function () {
    Route::get('/', 'loginAdmin@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
});

*/