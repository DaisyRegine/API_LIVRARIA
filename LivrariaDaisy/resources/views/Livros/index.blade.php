<!-- resources/views/livros/index.blade.php -->
@extends('layouts.app')

@section('title', 'Livros')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Livros</h1>
    <a href="{{ url('/livros/create') }}" class="btn btn-primary">Adicionar Livro</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Título</th>
            <th>ISBN</th>
            <th>Editora</th>
            <th>Ano</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($livros as $livro)
        <tr>
            <td>{{ $livro->id }}</td>
            <td>{{ $livro->titulo }}</td>
            <td>{{ $livro->isbn }}</td>
            <td>{{ $livro->editora }}</td>
            <td>{{ $livro->ano_publicacao }}</td>
            <td>
                <a href="{{ url('/livros/' . $livro->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ url('/livros/' . $livro->id . '/edit') }}" class="btn btn-warning">Editar</a>
                <form action="{{ url('/livros/' . $livro->id) }}" method="POST" class="d-inline">
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