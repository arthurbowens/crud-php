@extends('master')

@section('title', 'Editar Usuário')

@section('content')
<h2 class="mb-4">Editar Usuário</h2>

<form action="{{ route('users.update', $user) }}" method="POST" class="card p-4">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">Nome</label>
        <input type="text" name="name" value="{{ $user->name }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">E-mail</label>
        <input type="email" name="email" value="{{ $user->email }}" class="form-control" required>
    </div>

    <div class="mb-3">
        <label class="form-label">CPF</label>
        <input type="text" name="cpf" value="{{ $user->cpf }}" class="form-control" required pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" maxlength="14" data-mask="cpf">
    </div>

    <div class="d-flex justify-content-end">
        <a href="{{ route('users.index') }}" class="btn btn-secondary me-2">Cancelar</a>
        <button type="submit" class="btn btn-primary">Atualizar</button>
    </div>
</form>
@endsection