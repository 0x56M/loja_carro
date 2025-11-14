<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\CarrosController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Rotas públicas
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

/*
|--------------------------------------------------------------------------
| Rotas protegidas (autenticadas)
|--------------------------------------------------------------------------
*/

Route::get('/carros', [CarrosController::class, 'index'])->name('carros.index');

Route::get('/carros/{id}/detalhes', [CarrosController::class, 'detalhes'])->name('carros.detalhes');

Route::middleware('auth')->group(function () {

    Route::get('/dashboard', [CarrosController::class, 'dashboard'])->name('dashboard');
    

    Route::get('/admin', function () {
    return view('template_admin.index');
    })->name('admin');

    //Route::get('/carros', function(){return view('carros');});

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Rotas de Clientes
    Route::post('clientes', [ClienteController::class, 'recebeDados'])->name('clientes.novo');
    Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes');
    Route::get('/clientes/{id}', [ClienteController::class, 'buscarCliente'])->name('clientes.buscar');
    Route::post('/clientes/alterar', [ClienteController::class, 'alterarCliente'])->name('clientes.alterar');
    Route::get('/clientes/deletar', [ClienteController::class, 'deletarCliente'])->name('clientes.deletar');
    Route::delete('/clientes/deletar/{id}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

    // Rotas de Carros
    Route::prefix('/carros')->group(function() {
    Route::get('/cadastrar', function() { return view('carros.cadastrar'); })->name('carros.cadastrar');
    Route::post('/', [CarrosController::class, 'salvarCarro'])->name('carros.novo');
    Route::get('/{id}', [CarrosController::class, 'buscarCarro'])->name('carros.buscar');
    Route::post('/alterar', [CarrosController::class, 'alterarCarro'])->name('carros.alterar');
    Route::delete('/deletar/{id}', [CarrosController::class, 'deletarCarro'])->name('carros.deletar');
});
});

/*
|--------------------------------------------------------------------------
| Autenticação (rotas Breeze)
|--------------------------------------------------------------------------
*/
require __DIR__.'/auth.php';
