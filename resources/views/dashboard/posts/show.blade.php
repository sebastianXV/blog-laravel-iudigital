@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>

                    <div class="card-body">
                        <p>Categoría: {{ $post->category->title }}</p>
                        <p>Contenido: {{ $post->content }}</p>

                        <!-- Otros detalles del post -->

                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Editar</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este post?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

