@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Nuevo Post') }}</div>
                    <div class="card-body p-4">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="title">{{ __('Título') }}</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="slug">{{ __('Slug') }}</label>
                                <input type="text" name="slug" id="slug" class="form-control">
                            </div>

                            <div class="form-group mb-3">
                                <label for="description">{{ __('Descripción') }}</label>
                                <textarea name="description" id="description" class="form-control" rows="3"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="content">{{ __('Contenido') }}</label>
                                <textarea name="content" id="content" class="form-control" rows="5"></textarea>
                            </div>

                            <div class="form-group mb-3">
                                <label for="image">{{ __('') }}</label>
                                <input type="file" name="image" id="image" class="form-control-file">
                            </div>

                            <div class="form-group mb-3">
                                <label for="posted">{{ __('Publicado') }}</label>
                                <select name="posted" id="posted" class="form-control">
                                    <option value="yes">{{ __('Sí') }}</option>
                                    <option value="no">{{ __('No') }}</option>
                                </select>
                            </div>
                            

                            <div class="form-group mb-3">
                                <label for="category">{{ __('Categoría') }}</label>
                                <select name="category_id" id="category" class="form-control">
                                    @foreach ($categories as $id => $title)
                                        <option value="{{ $id }}">{{ $title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

