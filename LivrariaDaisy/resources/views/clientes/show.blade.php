<!-- resources/views/clientes/show.blade.php -->
<!-- resources/views/clientes/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalhes do Cliente')

@section('content')
<h1>Detalhes do Cliente</h1>
<p><strong>ID:</strong> {{ $cliente->id }}</p>
<p><strong>Nome:</strong> {{ $cliente->nome }}</p>
<p><strong>Apelido:</strong> {{ $cliente->apelido }}</p>
<p><strong>Email:</strong> {{ $cliente->email }}</p>
<a href="{{ url('/clientes') }}" class="btn btn-secondary">Voltar</a>
@endsection