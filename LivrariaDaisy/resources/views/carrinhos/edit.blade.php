<!-- resources/views/carrinhos/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Carrinho')

@section('content')
<h1>Editar Carrinho</h1>
<form action="{{ url('/carrinhos/' . $carrinho->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="cliente_id">ID do Cliente</label>
        <input type="text" class="form-control" id="cliente_id" name="cliente_id" value="{{ $carrinho->cliente_id }}"
            required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection