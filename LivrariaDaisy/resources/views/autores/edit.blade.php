<!-- resources/views/autores/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Autor')

@section('content')
<h1>Editar Autor</h1>
<form action="{{ url('/autores/' . $autor->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $autor->nome }}" required>
    </div>
    <div class="form-group">
        <label for="apelido">Apelido</label>
        <input type="text" class="form-control" id="apelido" name="apelido" value="{{ $autor->apelido }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $autor->email }}" required>
    </div>
    <div class="form-group">
        <label for="biografia">Biografia</label>
        <textarea class="form-control" id="biografia" name="biografia" rows="3"
            required>{{ $autor->biografia }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection