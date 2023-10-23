@extends('layout')
@section('content')
<div class="container">
    <h2>Listado de Cursos</h2>
    <table class="table" border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Codigo Unico</th>
                <th>Ciclo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cursos as $curso)
            <tr>
                <td>{{ $curso->id }}</td>
                <td>{{ $curso->nombre }}</td>
                <td>{{ $curso->codigo }}</td>
                <td>{{ $curso->ciclo }}</td>
                <td>
                    <form action="{{ route('cursos.show', $curso->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-info">Ver</button>
                    </form>

                    <form action="{{ route('cursos.edit', $curso->id) }}" method="GET" style="display: inline;">
                        @csrf
                        <button type="submit" class="btn btn-warning">Editar</button>
                    </form>

                    <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
                
            </tr>
            @endforeach
        </tbody>
    </table>
    <form action="{{ route('cursos.create') }}" method="GET" style="display: inline;">
        @csrf
        <button type="submit" class="btn btn-success">Agregar</button>
    </form>
</div>
@endsection


