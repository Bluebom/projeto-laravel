<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('layout', function ($view) {
            $view->with('itensMenu', [
                [
                    'descricao' => 'Portfolio',
                    'link' => route('heranca.portfolio'),
                ],
                [
                    'descricao' => 'Sobre',
                    'link' => route('heranca.about'),
                ],
                [
                    'descricao' => 'Contato',
                    'link' => route('heranca.contact'),
                ],
            ]);
        });
    }
}
