@extends('adminlte::page')

@section('title', 'Roles')

@section('content_header')
    <h1>Roles</h1>
    <a href="{{ route('admin.roles.create') }}" class="btn btn-primary my-4">Crear nuevo rol</a>
@stop

@section('content')

@if (session('info'))
        <div class="alert alert-info">
            {{ session('info') }}
        </div>
    @endif
    
    <div class="card">
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Rol</th>
                        <th colspan="2" scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($roles as $rol)
                        <tr>
                            <th scope="row">{{ $rol->id }}</th>
                            <td>{{ $rol->name }}</td>
                            <td width="200px">
                                <a class="btn btn-warning" href="{{ route('admin.roles.edit',$rol) }}">Editar</a>
                            </td>
                            <td width="200px">
                                <form action="{{ route('admin.roles.destroy',$rol) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
    </div>
@stop