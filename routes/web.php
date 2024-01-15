<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ApiController;
Route::get('/apiDeNoticias', ApiController::class);
Route::get('/produto/remove/{id}', '\App\Http\Controllers\ProdutoController@Remover')->name('remove');
Route::get('/listaJSON', '\App\Http\Controllers\ProdutoController@listaJson');
Route::get('/login','\App\Http\Controllers\LoginController@Login');
Route::get('/produto/novo', '\App\Http\Controllers\ProdutoController@novo');
Route::post('/produto/adiciona', '\App\Http\Controllers\ProdutoController@Adiciona');
Route::get('/listaprodutos', '\App\Http\Controllers\ProdutoController@lista')->name('listaprodutos');
Route::get('/produto/mostra/{id}', '\App\Http\Controllers\ProdutoController@mostrar');
Route::get('/home', '\App\Http\Controllers\HomeController@index');

// Rotas de Autenticação


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
