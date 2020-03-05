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
Route::resource("productos", "ProductosController");
Route::get("/vender", "VenderController@index")->name("vender.index");
Route::post("/productoDeVenta", "VenderController@agregarProductoVenta")->name("agregarProductoVenta");
Route::delete("/productoDeVenta", "VenderController@quitarProductoDeVenta")->name("quitarProductoDeVenta");
Route::post("/cancelarVenta", "VenderController@cancelarVenta")->name("cancelarVenta");
Route::post("/terminarVenta", "VenderController@terminarVenta")->name("terminarVenta");
