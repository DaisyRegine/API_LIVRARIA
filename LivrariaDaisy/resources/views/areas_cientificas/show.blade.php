<!-- resources/views/areas-cientificas/show.blade.php -->
@extends('layouts.app')

@section('title', 'Detalhes da Área Científica')

@section('content')
<h1>Detalhes da Área Científica</h1>
<p><strong>ID:</strong> {{ $areaCientifica->id }}</p>
<p><strong>Nome:</strong> {{ $areaCientifica->nome}}</p>
<a href="{{ url('/areas-cientificas') }}" class="btn btn-secondary">Voltar</a>
@endsection