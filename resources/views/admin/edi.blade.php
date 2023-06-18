@extends('layouts.app')

@section('content')
    <h1>Edit Admin User</h1>

    <!-- Agrega un formulario para editar el usuario administrador -->
    <form action="{{ route('admin.users.update', $user->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}">
        <!-- Otros campos relevantes -->
        <button type="submit">Update</button>
    </form>
@endsection
