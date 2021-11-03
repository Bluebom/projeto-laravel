<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class siteHerancaController extends Controller
{
    /**
     * Mostra a view 
     *
     * @return View
     */
    public function home(): View
    {
        return view('heranca.home');
    }

    /**
     * Mostra a view 
     *
     * @return View
     */
    public function portfolio(): View
    {
        $projetos = [
            [
                'status' => 'ativo',
                'imagem' => 'cabin.png'
            ],
            [
                'status' => 'ativo',
                'imagem' => 'cake.png'

            ],
            [
                'status' => 'ativo',
                'imagem' => 'circus.png'

            ],
            [
                'status' => 'ativo',
                'imagem' => 'game.png'

            ],
            [
                'status' => 'inativo',
                'imagem' => 'safe.png'

            ],
            [
                'status' => 'ativo',
                'imagem' => 'submarine.png'

            ]
        ];
        return view('heranca.portfolio', compact('projetos'));
    }

    /**
     * Mostra a view 
     *
     * @return View
     */
    public function about(): View
    {
        return view('heranca.about');
    }

    /**
     * Mostra a view 
     *
     * @return View
     */
    public function contact(): View
    {
        return view('heranca.contact');
    }
}
