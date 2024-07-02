<!-- resources/views/itens-carrinho/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Item do Carrinho')

@section('content')
<h1>Editar Item do Carrinho</h1>
<form action="{{ url('/itens-carrinho/' . $itemCarrinho->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="carrinho_id">ID do Carrinho</label>
        <input type="text" class="form-control" id="carrinho_id" name="carrinho_id"
            value="{{ $itemCarrinho->carrinho_id }}" required>
    </div>
    <div class="form-group">
        <label for="livro_id">ID do Livro</label>
        <input type="text" class="form-control" id="livro_id" name="livro_id" value="{{ $itemCarrinho->livro_id }}"
            required>
    </div>
    <div class="form-group">
        <label for="quantidade">Quantidade</label>
        <input type="number" class="form-control" id="quantidade" name="quantidade"
            value="{{ $itemCarrinho->quantidade }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection