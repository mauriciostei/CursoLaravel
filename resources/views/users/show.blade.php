@extends('layouts.admin')

@section('contenido')

<h2>Usuario: {{$user->name}} </h2>
<h4>Correo: {{$user->email}} </h4>

<a href="{{ route('users.edit', ['id' => $user->id]) }}" >Editar</a>

@endsection