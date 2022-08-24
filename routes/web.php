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

//Login
Route::get('/Login', 'LoginController@index')->name('LoginSIMEC');
Route::get('/Login/ValidateUser', 'LoginController@ValidateUser')->name('ValidateUser');//valida el usuario y redirecciona al layout principal


//Compras
Route::get('/Compras/Requisiciones', 'ComprasController@GetRequisiciones')->name('GetRequisiciones');//Obtiene la lista de requisiciones
//Muestra la pagina para crear o editar una requisicion
Route::get('/Compras/Requisicion/{RequisicionId}', 'ComprasController@Requisicion')->name('Requisicion');
