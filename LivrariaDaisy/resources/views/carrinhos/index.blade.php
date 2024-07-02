<!-- resources/views/carrinhos/index.blade.php -->
@extends('layouts.app')

@section('title', 'Carrinhos')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Carrinhos</h1>
    <a href="{{ url('/carrinhos/create') }}" class="btn btn-primary">Adicionar Carrinho</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>ID do Cliente</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($carrinhos as $carrinho)
        <tr>
            <td>{{ $carrinho->id }}</td>
            <td>{{ $carrinho->cliente_id }}</td>
            <td>
                <a href="{{ url('/carrinhos/' . $carrinho->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ url('/carrinhos/' . $carrinho->id . '/edit') }}" class="btn btn-warning">Editar</a>
                <form action="{{ url('/carrinhos/' . $carrinho->id) }}" method="POST" class="d-inline">
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