@extends('master')

@section('title', 'Criar Usuário')

@section('content')
<h2 class="mb-4">Criar Usuário</h2>

<form action="{{ route('users.store') }}" method="POST" class="card p-4">
    @csrf

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="name" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="email" name="email" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">CPF</label>
        <input type="text" name="cpf" class="form-control" required placeholder="000.000.000-00" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" maxlength="14" data-mask="cpf">
    </div>

    <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" name="password" class="form-control" required>
    </div>

    <div class="d-flex justify-content-end">
        <a href="{{ route('users.index') }}" class="btn btn-secondary me-2">Cancelar</a>
        <button type="submit" class="btn btn-success">Criar</button>
    </div>
</form>
@endsection