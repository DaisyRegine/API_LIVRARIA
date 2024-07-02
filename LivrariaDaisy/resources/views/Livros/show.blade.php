<!-- resources/views/livros/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalhes do Livro')

@section('content')
<h1>Detalhes do Livro</h1>
<p><strong>ID:</strong> {{ $livro->id }}</p>
<p><strong>Título:</strong> {{ $livro->titulo }}</p>
<p><strong>ISBN:</strong> {{ $livro->isbn }}</p>
<p><strong>Editora:</strong> {{ $livro->editora }}</p>
<p><strong>Ano:</strong> {{ $livro->ano_publicacao }}</p>
<a href="{{ url('/livros') }}" class="btn btn-secondary">Voltar</a>
@endsection