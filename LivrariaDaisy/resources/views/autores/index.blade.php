<!-- resources/views/autores/index.blade.php -->
@extends('layouts.app')

@section('title', 'Autores')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Autores</h1>
    <a href="{{ url('/autores/create') }}" class="btn btn-primary">Adicionar Autor</a>
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
        @foreach($autores as $autor)
        <tr>
            <td>{{ $autor->id }}</td>
            <td>{{ $autor->nome }}</td>
            <td>{{ $autor->apelido }}</td>
            <td>{{ $autor->email }}</td>
            <td>
                <a href="{{ url('/autores/' . $autor->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ url('/autores/' . $autor->id . '/edit') }}" class="btn btn-warning">Editar</a>
                <form action="{{ url('/autores/' . $autor->id) }}" method="POST" class="d-inline">
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