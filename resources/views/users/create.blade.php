@extends('layouts.admin')

@section('contenido')

<h2>Creare nuevo usuario</h2>

<form method="POST" action="{{ route('users.store') }}">
    @csrf

    <x-input nombre="name" label="Nombre de usuario" />

    <x-input type="email" nombre="email" label="Correo de usuario"/>

    <x-input type="password" nombre="password" label="Contraseña de usuario"/>

    <input type="submit" value="Crear" class="btn btn-primary"/>

</form>

@endsection