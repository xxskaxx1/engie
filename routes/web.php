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

//Ordenes de trabajo
Route::get('/','OrdenesController@indexOrdenes');
Route::get('IndexOrdenes','OrdenesController@indexOrdenes');
Route::post('IndexOrdenes','OrdenesController@indexOrdenes')->name('IndexOrdenes');
Route::post('AdicionarOrden','OrdenesController@adicionarOrden')->name('AdicionarOrden');
Route::post('ModificarOrden','OrdenesController@modificarOrden')->name('ModificarOrden');
Route::post('EliminarOrden','OrdenesController@eliminarOrden')->name('EliminarOrden');

//Operadores
Route::get('IndexOperadores','OperadoresController@indexOperadores');
Route::post('IndexOperadores','OperadoresController@indexOperadores')->name('IndexOperadores');
Route::post('AdicionarOperadores','OperadoresController@adicionarOperadores')->name('AdicionarOperadores');
Route::post('ModificarOperadores','OperadoresController@modificarOperadores')->name('ModificarOperadores');
Route::post('EliminarOperadores','OperadoresController@eliminarOperadores')->name('EliminarOperadores');

//Tipos
Route::get('IndexTipos','OperadoresController@indexOperadores');
Route::post('IndexTipos','OperadoresController@indexOperadores')->name('IndexTipos');