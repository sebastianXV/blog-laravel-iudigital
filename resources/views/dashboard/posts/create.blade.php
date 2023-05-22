@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Crear Nuevo Post') }}</div>

                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="title">{{ __('Título') }}</label>
                                <input type="text" name="title" id="title" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="category">{{ __('Categoría') }}</label>
                                <select name="category_id" id="category" class="form-control">
                                    @foreach($categories as $id => $title)
                                        <option value="{{ $id }}">{{ $title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <!-- Otros campos del formulario -->

                            <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
