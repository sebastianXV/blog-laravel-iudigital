@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-4">
                    <div class="card-header">{{ $category->title }}</div>

                    <div class="card-body">
                        <p>ID: {{ $category->id }}</p>
                        <!-- Otros detalles de la categoría -->

                        <div class="d-flex justify-content-between">
                            <a href="{{ route('categories.edit', ['category' => $category->id]) }}" class="btn btn-primary">Edit</a>

                            <form action="{{ route('categories.destroy', $category) }}" method="POST"
                                onsubmit="return confirm('Are you sure you want to delete this category?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


