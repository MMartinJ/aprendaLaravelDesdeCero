@extends('adminlte::page')

@section('title', 'Editar Post')

@section('content_header')
    <h1>Editar Post</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-info" role="alert">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.posts.update', $post) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
               
                @include('admin.posts.partials.form')

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

            //mostrar imagen del post
            document.getElementById('postImage').addEventListener('change', mostrarImagen);

            function mostrarImagen(e) {
                let file = e.target.files[0];
                let reader = new FileReader();
                reader.onload = (e) => {
                    
                    document.getElementById('image').setAttribute('src', e.target.result)
                };
                reader.readAsDataURL(file);
            }

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