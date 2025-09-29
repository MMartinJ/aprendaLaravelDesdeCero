@extends('layouts.plantilla')

@section('title','Indice de cursos')
    
@section('content')
    <h1>Bienvenido al indice de cursos</h1>
    <a href="{{ route('cursos.create') }}">crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li><a href="{{ route('cursos.show', $curso->id) }}">{{ $curso->nombre }}</a></li>
        @endforeach
        {{ $cursos->links() }}
    </ul>
@endsection