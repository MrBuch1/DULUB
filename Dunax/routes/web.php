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
Route::get('/Renox', function(){return view('renox');});

# Produtos
Route::get('/Produtos/Ciclo_Otto', 'ProdutoController@otto')->name('otto');
Route::get('/Produtos/Diesel', 'ProdutoController@diesel')->name('diesel');
Route::get('/Produtos/Motocicletas', 'ProdutoController@motos')->name('motos');
Route::get('/Produtos/Transmissao', 'ProdutoController@trans')->name('trans');
Route::get('/Produtos/Engrenagens', 'ProdutoController@engrenagens')->name('eng');
Route::get('/Produtos/Industrial', 'ProdutoController@industrial')->name('ind');
Route::get('/Produtos/Graxas', 'ProdutoController@graxas')->name('graxas');
Route::get('/Produtos/Arla32', 'ProdutoController@arla')->name('arla');
Route::get('/Produtos/Equipamentos', 'ProdutoController@equipamentos')->name('equip');
Route::get('/Produtos/Hidraulicos', 'ProdutoController@hidraulicos')->name('hidra');
Route::get('/Produtos/Refrigeracao', 'ProdutoController@refrigeracao')->name('refri');
Route::get('/Produtos/Compressores-Turbinas', 'ProdutoController@compressores')->name('compress');
Route::get('/Produtos/Engrenagens_Industriais', 'ProdutoController@engrenagens_industriais')->name('eng_ind');
Route::get('/Produtos/Termicos', 'ProdutoController@termicos')->name('term');
Route::get('/Produtos/Desmoldantes', 'ProdutoController@desmoldantes')->name('desmold');
Route::get('/Produtos/Textil', 'ProdutoController@textil')->name('textil');
Route::get('/Produtos/Transformadores', 'ProdutoController@transformadores')->name('transform');
//
Route::get('/Produto/{id}', 'ProdutoController@produto')->name('produto');
Route::get('/FichaTecnica/{id}', 'ProdutoController@downloadFicha')->name('ficha');
Route::get('/FISPQ/{id}', 'ProdutoController@downloadFispq')->name('fispq');

# Teste
Route::get('/index', 'ProdutoController@index');

# Noticias
Route::get('/Noticias', 'NoticiaController@index')->name('noticias');
Route::get('/Noticias/New', 'NoticiaController@create')->name('noticias.new')->middleware('auth');
Route::get('/Noticias/{id}', 'NoticiaController@show')->name('noticia.id');
Route::post('/Noticias', 'NoticiaController@store');

# Vendedores
Route::get('/Form', 'VendedorController@index')->name('form');
Route::get('/FormKm', 'VendedorController@formKm')->name('formKm');
Route::get('/FormDespesas', 'VendedorController@formDespesas')->name('formDespesas');
Route::post('/FormKm', 'VendedorController@createKm');
Route::post('/FormDespesas', 'VendedorController@createDespesas');

# Admins
Route::get('/Forms/{id}', 'AdminController@showForms')->name('forms');
Route::get('FormKms/{id}', 'AdminController@showKm')->name('form_completo_km');
Route::get('FormDespesas/{id}', 'AdminController@showDespesas')->name('form_completo_desp');

# Documentos
Route::get('/Documentos', 'DocumentosController@index')->name('documentos_index');
Route::get('/CadastrarDocumento', 'DocumentosController@create')->name('create');
Route::get('/ListarDocumentos', 'DocumentosController@show')->name('show');
Route::get('/EditarDocumento/{id}', 'DocumentosController@edit')->name('edit');

Route::post('/CadastrarDocumento', 'DocumentosController@store');
Route::post('/EditarDocumento/{id}', 'DocumentosController@update');

Route::get('/json-api', 'ApiController@index')->name('pedido_tm');
Route::get('/situacaoCliente', 'ApiController@situacaoCliente');
Route::get('/json-api2', 'ApiController@form2');
Route::get('/json-api3', 'ApiController@tipoCobranca');
Route::get('/json-api4', 'ApiController@formaPagamento');
Route::get('/json-api5', 'ApiController@Etapa2');
Route::get('/json-api6', 'ApiController@Unidade');
//Route::get('/json-api7', 'ApiController@Preco');
Route::get('/teste-pedido', 'ApiController@store');

Route::get('/Dev', function(){return view('develop');});