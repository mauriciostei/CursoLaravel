@extends('layouts.admin')

@section('contenido')

<div class="card mb-3">
    <div class="card-body d-flex flex-row justify-content-between">
        <h2>Lista de Usuarios</h2>
        
        <a href="{{ route('users.create') }}" class="btn btn-myColor shadow">Nuevo Usuario</a>
    </div>
</div>

<div class="card">
    <div class="card-body">
        
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
                        <a href="{{ route('users.show', ['user' => $item->id]) }}"> Ver </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
    </div>
</div>
        
@endsection