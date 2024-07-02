<!-- resources/views/clientes/index.blade.php -->
<!-- resources/views/clientes/index.blade.php -->
@extends('layouts.app')

@section('title', 'Clientes')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Clientes</h1>
    <a href="{{ url('/clientes/create') }}" class="btn btn-primary">Adicionar Cliente</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Apelido</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->apelido }}</td>
            <td>{{ $cliente->email }}</td>
            <td>
                <a href="{{ url('/clientes/' . $cliente->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ url('/clientes/' . $cliente->id . '/edit') }}" class="btn btn-warning">Editar</a>
                <form action="{{ url('/clientes/' . $cliente->id) }}" method="POST" class="d-inline">
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