<!-- resources/views/autores/create.blade.php -->
@extends('layouts.app')

@section('title', 'Adicionar Autor')

@section('content')
<h1>Adicionar Autor</h1>
<form action="{{ url('/autores') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="apelido">Apelido</label>
        <input type="text" class="form-control" id="apelido" name="apelido" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="biografia">Biografia</label>
        <textarea class="form-control" id="biografia" name="biografia" rows="3" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection