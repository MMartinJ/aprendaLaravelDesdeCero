

@extends('layouts.plantilla')

@section('title','Curso de '. $curso)
    
@section('content')
    <h1>Bienvenido al curso de: {{ $curso->nombre }}</h1>

    <p>
        <a href="{{ route('cursos.index') }}">Volver a cursos</a>
    </p>
    <p>Nombre del curso: {{ $curso->nombre }}</p>
    <p>Descripción del curso: {{ $curso->descripcion }}</p>
    <p>Categoria del curso: {{ $curso->categoria }}</p>


    <p><a href="{{ route('cursos.edit', $curso->id) }}">Editar el curso</p>
@endsection