<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Mostra a página home
     *
     * @return void
     */
    public function index()
    {
        echo "Conteúdo Dinâmico Home";
    }

    /**
     * Mostra um seviço por id do servico
     *
     * @param integer $id
     * @return void
     */
    public function servico(int $id = 1)
    {
        $servicos = [
            1 => [
                'nome' => 'Lavagem de Roupa',
                'descricao' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit.'
            ],
            2 => [
                'nome' => 'Lavagem de coberta',
                'descricao' => 'Dolores repellat soluta illo ipsa veniam sint, deserunt molestiae autem nam ab aspernatur quis voluptates laborum.'
            ],
            3 => [
                'nome' => 'Lavagem de urso',
                'descricao' => 'Error quos rem voluptate a non?'
            ],
        ];

        $nome = $servicos[$id]['nome'];
        $descricao = $servicos[$id]['descricao'];
        return view('servico', compact('nome', 'descricao'));
    }
}
