@extends('layouts.plantilla')

@section('title','Indice de cursos')
    
@section('content')
    <h1>Bienvenido al indice de cursos</h1>
    <ul>
        @foreach ($cursos as $curso)
            <li>{{ $curso->nombre }}</li>
        @endforeach
        {{ $cursos->links() }}
    </ul>
@endsection