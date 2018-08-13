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
    return view('welcome');
});
Route::get('envios/ingresar', function () {
    //return 'Bienvenido al ingreso';
    return view('envios.ingresar');
});
Route::get('envios/modificar/{id}', function ($id) {
    //return 'Modificar Usuario '.$id;
    return view('envios.modificar');

});
Route::get('envios/visualizar/{id}', function ($id) {
    return 'visualizar Usuario '.$id;
});

Route::resource('envios', 'EnviosController');


Route::resource('usuarios', 'UsuariosController');
//Route::get('modificar','EnviosController@modificar');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
