<!-- resources/views/itens-carrinho/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalhes do Item do Carrinho')

@section('content')
<h1>Detalhes do Item do Carrinho</h1>
<p><strong>ID:</strong> {{ $itemCarrinho->id }}</p>
<p><strong>ID do Carrinho:</strong> {{ $itemCarrinho->carrinho_id }}</p>
<p><strong>ID do Livro:</strong> {{ $itemCarrinho->livro_id }}</p>
<p><strong>Quantidade:</strong> {{ $itemCarrinho->quantidade }}</p>
<p><strong>Preco:</strong> {{ $itemCarrinho->preco }}</p>
<a href="{{ url('/itens-carrinho') }}" class="btn btn-secondary">Voltar</a>
@endsection