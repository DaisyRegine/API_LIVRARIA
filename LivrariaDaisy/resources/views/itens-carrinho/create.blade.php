<!-- resources/views/itens-carrinho/create.blade.php -->
@extends('layouts.app')

@section('title', 'Adicionar Item ao Carrinho')

@section('content')
<h1>Adicionar Item ao Carrinho</h1>
<form action="{{ url('/itens-carrinho') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="carrinho_id">ID do Carrinho</label>
        <input type="text" class="form-control" id="carrinho_id" name="carrinho_id" required>
    </div>
    <div class="form-group">
        <label for="livro_id">ID do Livro</label>
        <input type="text" class="form-control" id="livro_id" name="livro_id" required>
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade" required>
    </div>
    <div class="form-group">
        <label for="preco">Preço</label>
        <input type="number" class="form-control" id="preco" name="preco" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection