@extends('master')

@section('title', 'Usuários')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="mb-0">Usuários</h2>
    <a href="{{ route('users.create') }}" class="btn btn-success">Novo Usuário</a>
</div>

@if($users->isEmpty())
    <div class="alert alert-info">Nenhum usuário encontrado.</div>
@else
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>E-mail</th>
                <th class="text-end" style="width: 220px;">Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->cpf }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="text-end">
                        <a href="{{ route('users.show', $user) }}" class="btn btn-sm btn-info">Detalhes</a>
                        <a href="{{ route('users.edit', $user) }}" class="btn btn-sm btn-primary">Editar</a>
                        <form action="{{ route('users.destroy', $user) }}" method="POST" class="d-inline" onsubmit="return confirm('Excluir este usuário?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endif
@endsection