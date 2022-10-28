@extends('layouts.admin')

@section('contenido')

<h2 class="mb-3">Creare nuevo usuario</h2>

<div class="card">
    <form method="POST" action="{{ route('users.store') }}" class="card-body">
        @csrf

        <x-input nombre="name" label="Nombre de usuario" value="{{ old('name') }}" />

        <x-input type="email" nombre="email" label="Correo de usuario" value="{{ old('email') }}"/>

        <x-input type="password" nombre="password" label="Contraseña de usuario"/>

        <input type="submit" value="Crear" class="btn btn-myColor shadow"/>

    </form>
</div>

@endsection