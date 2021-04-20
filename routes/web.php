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
    return view('welcome');
});

Route::resource('/pedidos', 'App\Http\Controllers\PedidosController');
Route::resource('/productos', 'App\Http\Controllers\ProductosController');
Route::resource('/clientes', 'App\Http\Controllers\ClientesController');
Route::resource('/vendedores', 'App\Http\Controllers\VendedoresController');
