<!-- resources/views/carrinhos/create.blade.php -->
@extends('layouts.app')

@section('title', 'Adicionar Carrinho')

@section('content')
<h1>Adicionar Carrinho</h1>
<form action="{{ url('/carrinhos') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="cliente_id">ID do Cliente</label>
        <input type="text" class="form-control" id="cliente_id" name="cliente_id" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection