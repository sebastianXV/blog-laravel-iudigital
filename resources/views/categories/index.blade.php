@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Listar Categorías Existentes</h1>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Columna 1</th>
                        <th>Columna 2</th>
                        <th>Columna 3</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Texto 1</td>
                        <td>Texto 2</td>
                        <td class="align-top">Esta celda está alineada en la parte superior.</td>
                        <td>
                            <a href="#" class="btn btn-primary">Editar</a>
                            <form action="#" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta categoría?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                    <tr>
                        <td>Texto 1</td>
                        <td>Texto 2</td>
                        <td class="align-top">Esta celda está alineada en la parte superior.</td>
                        <td>
                            <a href="#" class="btn btn-primary">Editar</a>
                            <form action="#" method="POST" onsubmit="return confirm('¿Estás seguro de eliminar esta categoría?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection


