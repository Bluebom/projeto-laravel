<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
        $clientes = Cliente::get();

        return view("clientes.clientes", compact('clientes'));
    }

    public function create()
    {
        return view('clientes.create');
    }

    public function show(int $id)
    {
        $cliente = Cliente::find($id);

        return view("clientes.clientes", compact('cliente'));
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $cliente = new Cliente();
        if ($cliente::create($data)) {
            return redirect('/clientes');
        }
    }
}
