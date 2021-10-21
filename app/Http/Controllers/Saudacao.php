<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Saudacao extends Controller
{
    /**
     * Mostra a página de saudação
     *
     * @param string $nome
     * @return void
     */
    public function __invoke(string $nome = 'anônimo')
    {
        return view("saudacao", compact('nome'));
    }
}
