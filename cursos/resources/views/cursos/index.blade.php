@extends('layouts.plantilla')

@section('title','Indice de cursos')
    
@section('content')
    <h1>Bienvenido al indice de cursos</h1>
    <a href="{{ route('cursos.create') }}">crear curso</a>
    <ul>
        @foreach ($cursos as $curso)
            <li><a href="{{ route('cursos.show', $curso) }}">{{ $curso->nombre }}</a> 
            <br><form action="{{ route('cursos.destroy', $curso->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Borrar curso</button>
                </form>
            </li>
        @endforeach
        {{ $cursos->links() }}
    </ul>
@endsection