<!-- resources/views/areas-cientificas/create.blade.php -->
@extends('layouts.app')

@section('title', 'Adicionar Área Científica')

@section('content')
<h1>Adicionar Área Científica</h1>
<form action="{{ url('/areas_cientificas') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection