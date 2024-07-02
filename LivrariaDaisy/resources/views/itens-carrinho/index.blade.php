<!-- resources/views/itens-carrinho/index.blade.php -->
@extends('layouts.app')

@section('title', 'Itens do Carrinho')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Itens do Carrinho</h1>
    <a href="{{ url('/itens-carrinho/create') }}" class="btn btn-primary">Adicionar Item ao Carrinho</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>ID do Carrinho</th>
            <th>ID do Livro</th>
            <th>Quantidade</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($itensCarrinho as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->carrinho_id }}</td>
            <td>{{ $item->livro_id }}</td>
            <td>{{ $item->quantidade }}</td>
            <td>
                <a href="{{ url('/itens-carrinho/' . $item->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ url('/itens-carrinho/' . $item->id . '/edit') }}" class="btn btn-warning">Editar</a>
                <form action="{{ url('/itens-carrinho/' . $item->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection