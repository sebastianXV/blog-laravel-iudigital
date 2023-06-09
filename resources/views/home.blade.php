@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="column d-flex justify-content-center gap-3">
                            <div class="col-md-6">
                                <div class="card">
                                    <img src="{{ asset('img/posts.jpg') }}" class="card-img-top" alt="Imagen 1">
                                    <div class="card-body">
                                        <h5 class="card-title">Modulo de post</h5>
                                        <p class="card-text">Mira y crea tu mejor post</p>
                                        <div class="butons">
                                            <a href="{{ route('posts.index') }}" class="btn btn-primary mt-2">Ver
                                                Publicaciones</a>
                                            <a href="{{ route('posts.create') }}" class="btn btn-primary mt-2">Crear
                                                Publicación</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="card">
                                    <img src="{{ asset('img/categorias.jpg') }}" class="card-img-top" alt="Imagen 2">
                                    <div class="card-body">
                                        <h5 class="card-title">Modulo de categorias</h5>
                                        <p class="card-text">Mira y crea tu propia categoria</p>
                                        <div class="butons">
                                            <a href="{{ route('categories.index') }}" class="btn btn-primary mt-2">Ver
                                                Categorías</a>
                                            <a href="{{ route('categories.create') }}" class="btn btn-primary mt-2">Crear
                                                Categoría</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
