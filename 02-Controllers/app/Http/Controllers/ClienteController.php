<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clientes = Cliente::all();
        foreach ($clientes as $cliente) {
            echo $cliente->name . '<br>';
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return '<h1>Método Create</h1>';
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return '<h1>Método Store</h1>';
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return '<h1>Método show</h1>' . $id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return '<h1>Método edit!</h1>' . $id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return '<h1>Método update!</h1>' . $id;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return '<h1>Método destroy!</h1>' . $id;
    }
}
