<!-- resources/views/autores/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalhes do Autor')

@section('content')
<h1>Detalhes do Autor</h1>
<p><strong>ID:</strong> {{ $autor->id }}</p>
<p><strong>Nome:</strong> {{ $autor->nome }}</p>
<p><strong>Apelido:</strong> {{ $autor->apelido }}</p>
<p><strong>Email:</strong> {{ $autor->email }}</p>
<a href="{{ url('/autores') }}" class="btn btn-secondary">Voltar</a>
@endsection