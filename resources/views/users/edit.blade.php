@extends('layouts.admin')

@section('contenido')

<h2> Editar el usuario {{$user->name}} </h2>

<form method="POST" action="{{ route('users.update', ['id' => $user->id]) }}">
    @csrf

    <x-input nombre="name" label="Nombre de usuario" value="{{$user->name}}" />

    <x-input type="email" nombre="email" label="Correo de usuario" value="{{$user->email}}"/>

    <x-input type="password" nombre="password" label="Contraseña de usuario"/>

    <input type="submit" value="Actualizar" class="btn btn-primary"/>

</form>

@endsection