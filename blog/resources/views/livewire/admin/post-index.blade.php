<div class="card">
        <div class="card-header">
            <div class="form-group">
                <label for="Buscar Post">Buscar Post</label>
                <input type="text" class="form-control" placeholder="Escriba el nombre del post" wire:model.live="search">
            </div>
        </div>
        @if ($posts->count())
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Editar</th>
                        <th scope="col">Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                        <tr>
                            <th scope="row">{{ $post->id }}</th>
                            <td>{{ $post->title }}</td>
                            <td>
                                <a class="btn btn-warning" href="{{ route('admin.posts.edit',$post) }}">Editar</a>
                            </td>
                            <td>
                                <form action="{{ route('admin.posts.destroy',$post) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                   
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            {{ $posts->links() }}
        </div>
        @else
            <div class="card-body">
                No se encontró ningún post
            </div>
        @endif
    </div>
