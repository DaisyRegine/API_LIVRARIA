<!-- resources/views/areas-cientificas/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Área Científica')

@section('content')
<h1>Editar Área Científica</h1>
<form action="{{ url('/areas-cientificas/' . $areaCientifica->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $areaCientifica->designacao }}"
            required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection