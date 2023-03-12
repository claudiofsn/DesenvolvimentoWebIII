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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/clientes', function () {
    return view('clientes.index');
});

Route::post('/clientes', function () {
    return '<h1>Cliente inserido com sucesso!</h1>';
});

Route::put('/clientes', function () {
    return '<h1>Registro alterado com sucesso!</h1>';
});

Route::delete('/clientes', function () {
    return '<h1>Registro excluído com sucesso!</h1>';
});

Route::get('/pesquisa/{id?}/{nome?}', function ($id = 0, $nome = '') {
    if ($id == 0) {
        return "<h1>Todos os registros do banco";
    } else {
        return '<h1>Pesquisa pelo ID: ' . $id . '</h1>' . $nome;
    }
})->name('pesquisa-cliente');

//no php puro as variáveis são referenciadas com $nomedavariavel
//no php é utilizado o . para realizar concanetação, exemplo: "<h1>Pesquisa pelo ID: ' . $id . '</h1>"
// também pode ser feito com aspas duplas "<h1>Pesquisa pelo ID: $id</h1>"
// a relaçaõ de paramêtros e variaveis na função não é feita por nome, e sim por posição. O primeiro parametro da rota irá para o primeiro parametro da função, e assim, sucessivamente
// utilizando -> após os parentes do mesmo route, você pode nomear aquela rota ou definir outras propriedades
