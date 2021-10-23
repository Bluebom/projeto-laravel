<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use Illuminate\Foundation\Mix;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use phpDocumentor\Reflection\Types\Boolean;
use phpDocumentor\Reflection\Types\Mixed_;

class ClienteController extends Controller
{
    /**
     * Lista os clientes
     * 
     * @return View
     */
    public function index(): View
    {
        $clientes = Cliente::get();

        return view("clientes.clientes", compact('clientes'));
    }

    /**
     * Mostra a tela de criação de Cliente
     *
     * @return View
     */
    public function create(): View
    {
        return view('clientes.create');
    }

    /**
     * Mostra um Cliente
     *
     * @param integer $id
     * @return View
     */
    public function show(int $id): View
    {
        $cliente = Cliente::find($id);

        return view("clientes.clientes", compact('cliente'));
    }

    /**
     * Armazena um novo Cliente no Banco de Dados
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request): RedirectResponse
    {
        $data = $request->except('_token');
        $cliente = new Cliente();
        if ($cliente::create($data)) {
            return redirect('/clientes');
        }
    }

    /**
     * Mostra o formulário de edição do Cliente
     *
     * @param integer $id
     * @return View
     */
    public function edit(int $id): View
    {
        $clientes = new Cliente();
        $cliente = $clientes::whereId($id)->get();
        return view("clientes.edit", compact('cliente'));
    }

    /**
     * Atualiza o usuário
     *
     * @param integer $id
     * @param Request $request
     * @return RedirectResponse
     */
    public function update(int $id, Request $request): RedirectResponse
    {
        $data = $request->except('_token');
        $clientes = new Cliente();
        $cliente = $clientes::find($id);
        $cliente->update($data);
        return redirect("/clientes/$id/edit");
    }

    // Deleta o usuário
    public function delete(int $id)
    {
        $clientes = new Cliente();
        if ($clientes::whereId($id)->delete()) {
            return true;
        }
    }
}
