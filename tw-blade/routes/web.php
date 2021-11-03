<?php

use App\Http\Controllers\siteHerancaController;
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

Route::get('/site/heranca', [siteHerancaController::class, 'home'])->name('heranca');
Route::get('/site/heranca/portfolio', [siteHerancaController::class, 'portfolio'])->name('heranca.portfolio');
Route::get('/site/heranca/sobre', [siteHerancaController::class, 'about'])->name('heranca.about');
Route::get('/site/heranca/contato', [siteHerancaController::class, 'contact'])->name('heranca.contact');



Route::get('/', function () {
    return view('index', [
        'paginacao' => true,
    ]);
});
