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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// PRODUTOS
Route::get('/produtos', [\App\Http\Controllers\ProdutosController::class, 'index']);
Route::post('/produtos', [\App\Http\Controllers\ProdutosController::class, 'store']);
Route::get('/produtos/{id}', [\App\Http\Controllers\ProdutosController::class, 'show']);
Route::post('/produtos/{id}', [\App\Http\Controllers\ProdutosController::class, 'update']);
Route::delete('/produtos/{id}', [\App\Http\Controllers\ProdutosController::class, 'destroy']);
Route::get('/delprod/{id}', [\App\Http\Controllers\ProdutosController::class, 'destroy']);

// CUPONS
Route::get('/cupons', 'App\Http\Controllers\CuponDescontosController@index');
Route::post('/cupons', 'App\Http\Controllers\CuponDescontosController@store');
Route::get('/cupons/{id}', 'App\Http\Controllers\CuponDescontosController@show');
Route::post('/cupons/{id}', 'App\Http\Controllers\CuponDescontosController@update');
Route::delete('/cupons/{id}', 'App\Http\Controllers\CuponDescontosController@destroy');


