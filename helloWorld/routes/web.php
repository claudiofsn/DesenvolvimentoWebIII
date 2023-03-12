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

Route::get('clientes', function () {
    return '<ul>
        <li>Cliente 1</li>
        <li>Cliente 2</li>
        <li>Cliente 3</li>
    </ul>';
});

Route::post('clientes', function () {
    return 'Registro inserido com sucesso!';
});
