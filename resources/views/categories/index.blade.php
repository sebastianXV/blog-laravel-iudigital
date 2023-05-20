@extends('layouts.app')
@section('content')
    <div class="container">
        Listar categorias existentes
        <div class="table-responsive">
            <table class="table table-dark table-hover">
                <thead>
                    <tr>
                       <th>Columna 1</th>
                       <th>Columna 2</th> 
                       <th>Columna 3</th>  
                    </tr>
                </thead>
                <tbody>
                    <tr class="align-bottom">
                      <td>Texto 1</td>
                      <td>Texto 2</td>
                      <td class="align-top">Esta celda está alineada en la parte superior.</td>
                      <td>...</td>
                    </tr>
                    <tr class="align-bottom">
                        <td>Texto 1</td>
                        <td>Texto 2</td>
                        <td class="align-top">Esta celda está alineada en la parte superior.</td>
                        <td>...</td>
                      </tr>
                    
                  </tbody>
            </table>
        </div>
    </div>
@endsection
