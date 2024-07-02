<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\AreasCientificaController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ItemCarrinhoController;
use App\Http\Controllers\CompraController;

Route::resource('clientes', ClienteController::class);
Route::resource('livros', LivroController::class);
Route::resource('autores', AutorController::class);
Route::resource('areas-cientificas', AreasCientificaController::class);
Route::resource('carrinhos', CarrinhoController::class);
Route::resource('itens-carrinho', ItemCarrinhoController::class);
// Route::resource('compras', CompraController::class);

Route::get('/', function () {
    return view('welcome');
});