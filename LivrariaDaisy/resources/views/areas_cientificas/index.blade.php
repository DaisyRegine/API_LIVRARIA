<!-- resources/views/areas-cientificas/index.blade.php -->
@extends('layouts.app')

@section('title', 'Áreas Científicas')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h1>Áreas Científicas</h1>
    <a href="{{ url('/areas-cientificas/create') }}" class="btn btn-primary">Adicionar Área Científica</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach($areasCientificas as $area)
        <tr>
            <td>{{ $area->id }}</td>
            <td>{{ $area->nome }}</td>
            <td>
                <a href="{{ url('/areas-cientificas/' . $area->id) }}" class="btn btn-info">Ver</a>
                <a href="{{ url('/areas-cientificas/' . $area->id . '/edit') }}" class="btn btn-warning">Editar</a>
                <form action="{{ url('/areas-cientificas/' . $area->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Excluir</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection