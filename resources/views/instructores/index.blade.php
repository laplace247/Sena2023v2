@extends('layout')
@section('content')
<div class="container">
    <h2>Listado de Instructores</h2>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Dni</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Edad</th>
                <th>Genero</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($instructores as $instructor)
            <tr>
                <td>{{ $instructor->id }}</td>
                <td>{{ $instructor->dni }}</td>
                <td>{{ $instructor->nombres }}</td>
                <td>{{ $instructor->apellidos }}</td>
                <td>{{ $instructor->edad }}</td>
                <td>{{ $instructor->genero }}</td>
                <td>
                    <form action="{{ route('instructores.show', $instructor->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-info">Ver</button>
                    </form>

                    <form action="{{ route('instructores.edit', $instructor->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-warning">Editar</button>
                    </form>

                    <form action="{{ route('instructores.destroy', $instructor->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('instructores.create') }}" method="GET" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-success">Agregar</button>
    </form>
</div>
@endsection


