<!-- resources/views/carrinhos/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalhes do Carrinho')

@section('content')
<h1>Detalhes do Carrinho</h1>
<p><strong>ID:</strong> {{ $carrinho->id }}</p>
<p><strong>ID do Cliente:</strong> {{ $carrinho->cliente_id }}</p>
<a href="{{ url('/carrinhos') }}" class="btn btn-secondary">Voltar</a>
@endsection