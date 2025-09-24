

@extends('layouts.plantilla')

@section('title','Curso de '. $curso)
    
@section('content')
    <h1>Bienvenido al curso de {{ $curso }}</h1>
@endsection