@extends('adminlte::page')

@section('title', 'Categorias')

@section('content_header')
    <h1>Lista de todas las categorias</h1>
@stop

@section('content')
    @if (session('info'))
    <div class="alert alert-danger" role="alert">
        {!! session('info') !!}
    </div>
        
    @endif
    <div class="card">
        <div class="card-body">
            <div class="card-header">
                <a class="btn btn-primary" href="{{ route('admin.categories.create') }}" ><i class="fas fa-plus"></i>&nbsp; Crear Categoría</a>
            </div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <th scope="row">{{ $category->id }}</th>
                            <td>{{ $category->nombre }}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('admin.categories.edit',$category) }}">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.categories.destroy',$category) }}" method="POST">
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
