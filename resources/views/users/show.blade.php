@extends('layouts.admin')

@section('contenido')

<div class="card">
    <div class="card-header d-flex flex-row justify-content-between">
        <h3>Vista de Usuario</h3>
        <a href="{{ route('users.edit', ['user' => $user->id]) }}" class="btn btn-myColor shadow">Editar</a>
    </div>
    <div class="card-body">
        <p>Usuario: <b>{{$user->name}}</b> </p>
        <p>Correo: <b>{{$user->email}}</b> </p>
    </div>
</div>




@endsection