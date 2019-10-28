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

Route::get('/', 'HomeController@index')->name('home');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/Empresa', function(){return view('empresa');});
Route::get('/Regenesis', function(){return view('regenesis');});
Route::get('/Contato', function(){return view('contato');});
Route::get('/Devolucao', function(){return view('devolucao');});

# Produtos
Route::get('/Produtos/Ciclo_Otto', 'ProdutoController@otto')->name('otto');
Route::get('/Produtos/Diesel', 'ProdutoController@diesel')->name('diesel');
Route::get('/Produtos/Motocicletas', 'ProdutoController@motos')->name('motos');
Route::get('/Produtos/Transmissao', 'ProdutoController@trans')->name('trans');
//
Route::get('/Produto/{id}', 'ProdutoController@produto')->name('produto');
Route::get('/bucetaficha/{id}', 'ProdutoController@downloadFicha')->name('ficha');
Route::get('/bucetafispq/{id}', 'ProdutoController@downloadFispq')->name('fispq');

# Teste
Route::get('/index', 'ProdutoController@index');

# Noticias
Route::get('/Noticias', 'NoticiaController@index')->name('noticias');
Route::get('/Noticias/New', 'NoticiaController@create')->name('noticias.new')->middleware('auth');
Route::get('/Noticias/{id}', 'NoticiaController@show')->name('noticia.id');
Route::post('/Noticias', 'NoticiaController@store');