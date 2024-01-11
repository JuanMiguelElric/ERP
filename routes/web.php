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
Route::get('/','\App\Http\Controllers\ProdutoController@funcionarios');
Route::get('/listaprodutos', '\App\Http\Controllers\ProdutoController@lista');
Route::get('/produto/mostra/', '\App\Http\Controllers\ProdutoController@mostrar');
Route::get('/outra',function(){
    return '<h1>Outra rota foi criada</h1>';
});
