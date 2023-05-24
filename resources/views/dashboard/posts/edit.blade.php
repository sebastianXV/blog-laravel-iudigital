@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Editar Post') }}</div>
                    <div class="card-body">
                        <form action="{{ route('posts.update', $post) }}" method="POST">
                            @csrf
                            @method('PUT')

                            <div class="form-group row">
                                <label for="title"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Título') }}</label>
                                <div class="col-md-6">
                                    <input type="text" name="title" id="title" class="form-control"
                                        value="{{ $post->title }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="slug"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Slug') }}</label>
                                <div class="col-md-6">
                                    <input type="text" name="slug" id="slug" class="form-control"
                                        value="{{ $post->slug }}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="category"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Categoría') }}</label>
                                <div class="col-md-6">
                                    <select name="category_id" id="category" class="form-control">
                                        @foreach ($categories as $id => $title)
                                            <option value="{{ $id }}"
                                                {{ $id == $post->category_id ? 'selected' : '' }}>
                                                {{ $title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="description"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Descripción') }}</label>
                                <div class="col-md-6">
                                    <textarea name="description" id="description" class="form-control" rows="3">{{ $post->description }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="content"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Contenido') }}</label>
                                <div class="col-md-6">
                                    <textarea name="content" id="content" class="form-control" rows="5">{{ $post->content }}</textarea>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="image"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Imagen') }}</label>
                                <div class="col-md-6">
                                    <input type="file" name="image" id="image" class="form-control-file">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="posted"
                                    class="col-md-4 col-form-label text-md-right">{{ __('Publicado') }}</label>
                                <div class="col-md-6">
                                    <select name="posted" id="posted" class="form-control">
                                        <option value="yes" {{ $post->posted == 'yes' ? 'selected' : '' }}>
                                            {{ __('Sí') }}</option>
                                        <option value="no" {{ $post->posted == 'no' ? 'selected' : '' }}>
                                            {{ __('No') }}</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">{{ __('Guardar cambios') }}</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
