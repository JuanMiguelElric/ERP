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
Route::get('/produto/remove/{id}','\App\Http\Controllers\ProdutoController@Remover')->name('remove');
Route::get('/listaJSON','\App\Http\Controllers\ProdutoController@listaJson');
Route::get('/produto/novo','\App\Http\Controllers\ProdutoController@novo');
Route::post('/produto/adiciona', '\App\Http\Controllers\ProdutoController@Adiciona');
Route::get('/listaprodutos', '\App\Http\Controllers\ProdutoController@lista')->name('listaprodutos');
Route::get('/produto/mostra/{id}', '\App\Http\Controllers\ProdutoController@mostrar');
Route::get('/outra',function(){
    return '<h1>Outra rota foi criada</h1>';
});
