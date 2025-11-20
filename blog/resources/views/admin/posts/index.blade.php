@extends('adminlte::page')

@section('title', 'Posts')

@section('content_header')
    <h1>Lista de Posts</h1>
    <a  href="{{ route('admin.posts.create') }}" class="btn btn-primary my-4"><i class="fas fa-plus"></i>&nbsp; Crear nuevo Post</a>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-info" role="alert">
            {{ session('info') }}
        </div>
        
    @endif
    @livewire('admin.post-index')
@stop

