@extends('layouts.plantilla')

@section('title','Creacion de curso')
    
@section('content')
    <h1>Bienvenido a la página de edición de cursos</h1>

    
    <form action="{{  route('cursos.update', $curso->id) }}" method="POST">
        @csrf
        @method('PUT')
        {{-- equivalente a 
        <input type="hidden" name="_method" value="PUT">
        <input type="hidden" name="_token" value="{{ csrf_token() }}"> --}}
        <div class="formInput">
            <label for="nombre">Nombre: </label>
            <input type="text" name="nombre" id="nombre" value="{{ old('nombre',$curso->nombre) }}">
            @error('nombre')
                {{ $message }}
            @enderror
        </div>
        <div class="formInput">
            <label for="descripcion">Descripcion: </label>
            <textarea type="text" name="descripcion" id="descripcion" rows="5">{{ old('descripcion',$curso->descripcion) }}</textarea>
            @error('descripcion')
                {{ $message }}
            @enderror
        </div>
        <div class="formInput">
            <label for="categoria">Categoria: </label>
            <input type="text" name="categoria" id="categoria" value="{{ old('categoria',$curso->categoria) }}">
            @error('categoria')
                {{ $message }}
            @enderror
        </div>
        <div class="formInput">
            <button type="submit">Actualizar curso</button>
        </div>
    </form>

    <style>
        .formInput{
            width: 400px;
            margin: 20px 0;
        }
        .formInput label{
            display: block;
            margin-bottom: 10px;
            width: 100%;
        }
        .formInput input,
        .formInput textarea{
            width: 100%;
        }
    </style>
@endsection