@extends('adminlte::page')

@section('title', 'Admin Blog')

@section('content_header')
    <h1>Editar Categoria</h1>
@endsection

@section('content')

    @if (session('info'))
    <div class="alert alert-info" role="alert">
        {{ session('info') }}
    </div>
        
    @endif
    <form action="{{ route('admin.categories.update', $category) }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="nombre" class="form-label">Nombre</label>
            <input type="text" class="form-control" name="nombre" id="nombre" value="{{ $category->nombre }}">
            @error('nombre')
             <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug" value="{{ $category->slug }}" readonly>
            @error('slug')
             <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
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