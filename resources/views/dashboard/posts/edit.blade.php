@extends('layouts.app')

@section('content')
    <h1>Editar Post: {{ $post->title }}</h1>

    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">Título:</label>
        <input type="text" name="title" id="title" value="{{ $post->title }}">
        
        <label for="category">Categoría:</label>
        <select name="category_id" id="category">
            @foreach($categories as $id => $title)
                <option value="{{ $id }}" {{ $id == $post->category_id ? 'selected' : '' }}>{{ $title }}</option>
            @endforeach
        </select>
        
        <!-- Otros campos del formulario -->
        
        <button type="submit">Guardar</button>
    </form>
@endsection
