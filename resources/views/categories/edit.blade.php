@extends('layouts.app')

@section('content')
    <h1>Edit Category: {{ $category->title }}</h1>

    <form action="{{ route('categories.update', $category) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ $category->title }}" required>

        <!-- Otros campos del formulario -->

        <button type="submit">Update</button>
    </form>
@endsection
