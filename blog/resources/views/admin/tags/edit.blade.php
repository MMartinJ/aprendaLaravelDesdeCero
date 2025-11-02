@extends('adminlte::page')

@section('title', 'Editar Etiqueta')

@section('content_header')
    <h1>Editar Etiqueta</h1>
@endsection

@section('content')

    @if (session('info'))
    <div class="alert alert-warning" role="alert">
        {{ session('info') }}
    </div>
        
    @endif
    <form action="{{ route('admin.tags.update', $tag) }}" method="post">
        @csrf
        @method('put')

        @include('admin.tags.partials.form')
        
        <button type="submit" class="btn btn-primary">Actualizar Etiqueta</button>
    </form>
@endsection



@section('js')
    <script src="{{ asset('vendor/stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>
    <script>
        $(() => {
            $('#nombre').stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            })
        })
    </script>
@endsection