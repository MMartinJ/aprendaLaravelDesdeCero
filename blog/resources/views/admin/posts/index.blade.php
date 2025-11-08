@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Lista de todos los posts</h1>
@stop

@section('content')
    @livewire('admin.post-index')
@stop
