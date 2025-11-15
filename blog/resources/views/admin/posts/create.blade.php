@extends('adminlte::page')

@section('title', 'Crear Post')

@section('content_header')
    <h1>Crear nuevo Post</h1>
@stop

@section('content')
   

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.posts.store') }}" method="POST">
                @csrf
                <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                <div class="form-group">
                    <label for="titulo" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="title" id="title">
                    @error('title')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="slug" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" id="slug" readonly>
                    @error('slug')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Categoria" class="form-label">Categoria</label>
                    <select name="category_id" id="category_id" class="form-control">
                        @foreach ($categories_array as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                        @endforeach
                    </select>
                    @error('categories')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="status" id="status" value="1" checked>
                        <label for="radio1" class="form-check-label">Borrador</label>
                    </div>
                    <div class="form-check">
                        <input type="radio" class="form-check-input" name="status" id="status" value="2">
                        <label for="radio2" class="form-check-label">Publicado</label>
                    </div>
                    @error('status')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Tags" class="form-label">Etiquetas:&nbsp; </label>
                    @foreach ($tags as $key => $value)
                        <div class="form-check-inline">
                            <input type="checkbox" class="form-check-input" name="tags[]" id="tag-{{ $key }}" value="{{ $value }}">
                            <label for="tag-{{ $key }}" class="form-check-label">{{ $value }}</label>
                        </div>
                    @endforeach
                    @error('tags')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Extracto" class="form-label">Extracto</label>
                    <textarea name="extract" id="extract" rows="5"></textarea>
                    @error('extract')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="Contenido" class="form-label">Contenido</label>
                    <textarea name="content" id="content" rows="5"></textarea>
                    @error('content')
                        <small class="text-danger">{{ $message }}</small>
                    @enderror
                </div>
                <button class="btn btn-primary">Crear Post</button>
            </form>
        </div>
    </div>
@stop

@section('js')

    <!-- String to slug script -->
    <script src="{{ asset('vendor/stringToSlug-1.3/jquery.stringToSlug.min.js') }}"></script>

     <script>
        $(() => {
            $('#title').stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            })
        })
    </script>

    <!-- CKEditor 5 Classic desde CDN -->
    <script src="https://cdn.ckeditor.com/ckeditor5/40.1.0/classic/ckeditor.js"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#extract'))
            .catch(error => {
                console.error(error);
            });
    </script>

    <script>
        ClassicEditor
            .create(document.querySelector('#content'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection

@section('css')
    <style>
        /* Ajusta la altura del área editable */
        .ck-editor__editable {
            min-height: 200px;   /* puedes poner la altura que quieras */
        }
    </style>
    
@endsection