@extends('master')

@section('title', 'Início')

@section('content')
<div class="text-center py-5">
    <h1 class="mb-4">Bem-vindo ao CRUD de Usuários</h1>
    <a href="{{ route('users.index') }}" class="btn btn-primary btn-lg">Ver Usuários</a>
</div>
@endsection