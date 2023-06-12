@extends('layouts.app')

@section('content')
    <label for="title">Title:</label>
    <input type="text" name="title" id="title" value="{{ isset($category) ? $category->title : '' }}" required>
@endsection
<!-- Otros campos del formulario -->
