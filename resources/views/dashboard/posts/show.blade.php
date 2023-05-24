@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $post->title }}</div>

                    <div class="card-body">
                        <p><strong>Categoría:</strong> {{ $post->category->title }}</p>
                        <p><strong>Contenido:</strong> {{ $post->content }}</p>
                        <hr>
                        <p><strong>Título:</strong> {{ $post->title }}</p>
                        <p><strong>Slug:</strong> {{ $post->slug }}</p>
                        <p><strong>Descripción:</strong> {{ $post->description }}</p>
                        <p><strong>Imagen:</strong> {{ $post->image }}</p>
                        <p><strong>Publicado:</strong> {{ $post->posted == 'yes' ? 'Sí' : 'No' }}</p>
                        <p><strong>Fecha de creación:</strong> {{ $post->created_at }}</p>
                        <p><strong>Última actualización:</strong> {{ $post->updated_at }}</p>
                        <hr>

                        <!-- Otros detalles del post -->

                        <div class="row justify-content-center">
                            <div class="col-md-4">
                                <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary btn-block">Editar</a>
                            </div>
                            <div class="col-md-4">
                                <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar este post?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-block">Eliminar</button>
                                </form>
                            </div>
                            <div class="col-md-4">
                                <a href="{{ route('posts.index') }}" class="btn btn-secondary btn-block">Ver Publicaciones</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



