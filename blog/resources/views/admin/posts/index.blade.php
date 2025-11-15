@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Lista de Posts</h1>
    <a class="btn btn-primary my-4" href="{{ route('admin.posts.create') }}" ><i class="fas fa-plus"></i>&nbsp; Crear nuevo Post</a>
@stop

@section('content')
    
    @livewire('admin.post-index')
@stop

