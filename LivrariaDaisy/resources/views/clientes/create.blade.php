<!-- resources/views/clientes/create.blade.php -->
@extends('layouts.app')

@section('title', 'Adicionar Cliente')

@section('content')
<h1>Adicionar Cliente</h1>
<form action="{{ url('/clientes') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="nome">Nome</label>
        <input type="text" class="form-control" id="nome" name="nome" required>
    </div>
    <div class="form-group">
        <label for="apelido">Apelido</label>
        <input type="text" class="form-control" id="apelido" name="apelido" required>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" required>
    </div>
    <div class="form-group">
        <label for="login">Login</label>
        <input type="text" class="form-control" id="login" name="login" required>
    </div>
    <div class="form-group">
        <label for="password">Senha</label>
        <input type="password" class="form-control" id="password" name="password" required>
    </div>
    <div class="form-group">
        <label for="password_confirmation">Confirme a Senha</label>
        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
    </div>
    <div class="form-group">
        <label for="cartao_credito">Cartão de Crédito</label>
        <input type="text" class="form-control" id="cartao_credito" name="cartao_credito" required>
    </div>
    <div class="form-group">
        <label for="profissao">Profissão</label>
        <input type="text" class="form-control" id="profissao" name="profissao" required>
    </div>
    <div class="form-group">
        <label for="bi_passaporte">BI/Passaporte</label>
        <input type="text" class="form-control" id="bi_passaporte" name="bi_passaporte" required>
    </div>
    <div class="form-group">
        <label for="morada">Morada</label>
        <input type="text" class="form-control" id="morada" name="morada" required>
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input type="text" class="form-control" id="telefone" name="telefone" required>
    </div>
    <button type="submit" class="btn btn-primary">Salvar</button>
</form>
@endsection