@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Nueva Categoria') }}</div>

                    <div class="card-body">
                        <form action="{{ route('categories.store') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="title">{{ __('Titulo') }}</label>
                                <input type="text" name="title" id="title" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label for="slug">{{ __('Descripcion') }}</label>
                                <input type="text" name="slug" id="slug" class="form-control" required>
                            </div>

                            <button type="submit" class="btn btn-primary" style="margin-top: 15px
                            ">{{ __('Create') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



