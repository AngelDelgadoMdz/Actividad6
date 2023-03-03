<?php

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Vista index de productos*/
Route::get('/', function () {
    return view('productos.index');
});

/*Vista edit de productos*/
Route::get('/productos/edit', function () {
    return view('productos.edit');
});

/*Vista create de productos*/
Route::get('/productos/create', function () {
    return view('productos.create');
}) -> name('productos.create'); /* Use name para ponerle nombre a la ruta y poder hacer referencia a ella */



