<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\Saudacao;
use App\Http\Controllers\SiteController;
use App\Models\Cliente;
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

Route::get('/home', [SiteController::class, 'index']);
Route::get('/servico/{id?}', [SiteController::class, 'servico']);
Route::get('/saudacao/{nome?}', Saudacao::class);


Route::get('/clientes', [ClienteController::class, 'index'])->name("clientes");
Route::get('/clientes/create', [ClienteController::class, 'create'])->name("cliente.create");
Route::get('/clientes/{id}', [ClienteController::class, 'show'])->name("cliente.show");
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::get('/clientes/{id}/edit', [ClienteController::class, 'edit'])->name('cliente.edit');
Route::put('/clientes/{id}', [ClienteController::class, 'update'])->name('cliente.update');
