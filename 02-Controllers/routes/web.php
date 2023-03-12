<?php

use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\ClienteController;
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

/* Atividade dada em aula
Route::get('welcome/{nome}', [ProdutoController::class, 'welcome']);
Route::get('produtos', [ProdutoController::class, 'lista_produtos']);
Route::get('soma/{valor1}/{valor2}', [ProdutoController::class, 'soma']);
*/

Route::resource('clientes', ClienteController::class);
