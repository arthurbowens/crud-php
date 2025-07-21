@extends('master')

@section('title', 'Detalhes do Usuário')

@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="mb-0">Detalhes do Usuário</h3>
    </div>
    <div class="card-body">
        <p><strong>Nome:</strong> {{ $user->name }}</p>
        <p><strong>CPF:</strong> {{ $user->cpf }}</p>
        <p><strong>E-mail:</strong> {{ $user->email }}</p>
    </div>
    <div class="card-footer text-end">
        <a href="{{ route('users.edit', $user) }}" class="btn btn-primary">Editar</a>
        <a href="{{ route('users.index') }}" class="btn btn-secondary">Voltar</a>
    </div>
</div>
@endsection