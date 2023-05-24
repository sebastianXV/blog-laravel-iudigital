@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Posts</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Categoría</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->title }}</td>
                        <td>
                            <div class="d-flex gap-2">
                                <a href="{{ route('posts.show', $post) }}" class="btn btn-primary">Ver</a>
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-secondary">Editar</a>
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este post?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        {{ $posts->links() }}
    </div>
@endsection



