<!-- resources/views/livros/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Livro')

@section('content')
<h1>Editar Livro</h1>
<form action="{{ url('/livros/' . $livro->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $livro->titulo }}" required>
    </div>
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" id="isbn" name="isbn" value="{{ $livro->isbn }}" required>
    </div>
    <div class="form-group">
        <label for="editora">Editora</label>
        <input type="text" class="form-control" id="editora" name="editora" value="{{ $livro->editora }}" required>
    </div>
    <div class="form-group">
        <label for="ano_publicacao">Ano de Publicação</label>
        <input type="number" class="form-control" id="ano_publicacao" name="ano_publicacao"
            value="{{ $livro->ano_publicacao }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection