@extends('layouts.admin')

@section('contenido')

<h2>Lista de Usuarios</h2>

<a href="{{ route('users.create') }}">Nuevo Usuario</a>

<table class="table table-hover table-sm">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Correo electrónico</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach($users as $item)
            <tr>
                <td> {{$item->name}} </td>
                <td> {{$item->email}} </td>
                <td>
                    <a href="{{ route('users.show', ['id' => $item->id]) }}"> Ver </a>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection