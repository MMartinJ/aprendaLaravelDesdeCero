

@extends('layouts.plantilla')

@section('title','Curso de '. $curso->nombre)
    
@section('content')
    <h1>Bienvenido al curso de: {{ $curso->nombre }}</h1>

    <p>
        <a href="{{ route('cursos.index') }}">Volver a cursos</a>
    </p>
    <p>Nombre del curso: {{ $curso->nombre }}</p>
    <p>Descripción del curso: {{ $curso->descripcion }}</p>
    <p>Categoria del curso: {{ $curso->categoria }}</p>


    <p><a href="{{ route('cursos.edit', $curso->id) }}">Editar el curso</p>

    <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Borrar curso</button>
    </form>
    
@endsection