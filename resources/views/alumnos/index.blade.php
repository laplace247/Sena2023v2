@extends('layout')    
@section('content')
<div class="container">
    <h2>Listado de Alumnos</h2>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Dni</th>
                <th>Nombres</th>
                <th>Apellidos</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($alumnos as $alumno)
            <tr>
                <td>{{ $alumno->id }}</td>
                <td>{{ $alumno->dni }}</td>
                <td>{{ $alumno->nombres }}</td>
                <td>{{ $alumno->apellidos }}</td>
                <td>
                    <form action="{{ route('alumnos.show', $alumno->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Ver</button>
                    </form>

                    <form action="{{ route('alumnos.edit', $alumno->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-danger">Editar</button>
                    </form>

                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>

                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <form action="{{ route('alumnos.create') }}" method="GET" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-success">Agregar</button>
    </form>
    
</div>
@endsection