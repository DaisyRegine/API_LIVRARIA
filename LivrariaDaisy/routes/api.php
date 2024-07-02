<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\LivroController;
use App\Http\Controllers\AutorController;
use App\Http\Controllers\AreasCientificaController;
use App\Http\Controllers\CarrinhoController;
use App\Http\Controllers\ItemCarrinhoController;

Route::apiResource('clientes', ClienteController::class);
Route::apiResource('livros', LivroController::class);
Route::apiResource('autores', AutorController::class);
Route::apiResource('areas_cientificas', AreasCientificaController::class);
Route::apiResource('carrinhos', CarrinhoController::class);
Route::apiResource('itens-carrinho', ItemCarrinhoController::class);



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});