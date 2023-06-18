@extends('layouts.app')

@section('content')
    <h1>Create Admin User</h1>

    <!-- Agrega un formulario para crear un nuevo usuario administrador -->
    <form action="{{ route('admin.users.store') }}" method="POST">
        @csrf
        <label for="name">Name:</label>
        <input type="text" name="name" id="name">
        <!-- Otros campos relevantes -->
        <button type="submit">Create</button>
    </form>
@endsection
