<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function lista_produtos()
    {
        return "
        <h1>Lista de Produtos</h1>
        <ul>
            <li>Produto 1</li>
            <li>Produto 2</li>
            <li>Produto 3</li>
            <li>Produto 4</li>
            <li>Produto 5</li>
            <li>Produto 6</li>
        </ul>
        ";
    }

    public function welcome($nome)
    {
        return 'Seja bem vindo ao laravel ' . $nome . '!';
    }

    public function soma($valor1, $valor2)
    {
        return '<h1>' . $valor1 * $valor2 . '</h1>';
    }
}
