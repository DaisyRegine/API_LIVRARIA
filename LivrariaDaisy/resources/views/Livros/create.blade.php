<!-- resources/views/livros/create.blade.php -->
@extends('layouts.app')

@section('title', 'Adicionar Livro')

@section('content')
<h1>Adicionar Livro</h1>
<form action="{{ url('/livros') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="titulo">Título</label>
        <input type="text" class="form-control" id="titulo" name="titulo" required>
    </div>
    <div class="form-group">
        <label for="isbn">ISBN</label>
        <input type="text" class="form-control" id="isbn" name="isbn" required>
    </div>
    <div class="form-group">
        <label for="editora">Editora</label>
        <input type="text" class="form-control" id="editora" name="editora" required>
    </div>
    <div class="form-group">
        <label for="ano_publicacao">Ano de Publicação</label>
        <input type="number" class="form-control" id="ano_publicacao" name="ano_publicacao" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection