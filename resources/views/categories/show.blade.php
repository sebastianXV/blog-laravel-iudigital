@extends('layouts.app')

@section('content')
    <h1>Category: {{ $category->title }}</h1>

    <p>ID: {{ $category->id }}</p>
    <!-- Otros detalles de la categoría -->

    <a href="{{ route('categories.edit', $category) }}">Edit</a>
    <form action="{{ route('categories.destroy', $category) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
@endsection
