@extends('layouts.app')

@section('content')
    <h1>Admin Users</h1>

    <!-- Aquí puedes mostrar una tabla con los usuarios administradores -->
    <table>
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <!-- Otros campos relevantes -->
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <!-- Otros campos relevantes -->
                    <td>
                        <!-- Agrega enlaces para editar y eliminar usuarios -->
                        <a href="{{ route('admin.users.edit', $user->id) }}">Edit</a>
                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
