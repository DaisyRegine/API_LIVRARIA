<!-- resources/views/clientes/edit.blade.php -->
@extends('layouts.app')

@section('title', 'Editar Cliente')

@section('content')
<h1>Editar Cliente</h1>
<form action="{{ url('/clientes/' . $cliente->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $cliente->nome }}" required>
    </div>
    <div class="form-group">
        <label for="apelido">Apelido</label>
        <input type="text" class="form-control" id="apelido" name="apelido" value="{{ $cliente->apelido }}" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="{{ $cliente->email }}" required>
    </div>
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" name="login" value="{{ $cliente->login }}" required>
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password">
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirme a Senha</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>
    <div class="form-group">
        <label for="cartao_credito">Cartão de Crédito</label>
        <input type="text" class="form-control" id="cartao_credito" name="cartao_credito"
            value="{{ $cliente->cartao_credito }}" required>
    </div>
    <div class="form-group">
        <label for="profissao">Profissão</label>
        <input type="text" class="form-control" id="profissao" name="profissao" value="{{ $cliente->profissao }}"
            required>
    </div>
    <div class="form-group">
        <label for="bi_passaporte">BI/Passaporte</label>
        <input type="text" class="form-control" id="bi_passaporte" name="bi_passaporte"
            value="{{ $cliente->bi_passaporte }}" required>
    </div>
    <div class="form-group">
        <label for="morada">Morada</label>
        <input type="text" class="form-control" id="morada" name="morada" value="{{ $cliente->morada }}" required>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" value="{{ $cliente->telefone }}" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection