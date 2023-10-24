@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Listado de Alumnos</h4>
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Dni</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($alumnos as $alumno)
                            <tr>
                                <th scope="row">{{ $alumno->id }}</td>
                                <td>{{ $alumno->dni }}</td>
                                <td>{{ $alumno->nombres }}</td>
                                <td>{{ $alumno->apellidos }}</td>
                                <td>
                                    <form action="{{ route('alumnos.show', $alumno->id) }}" method="GET" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-info btn-sm">Ver</button>
                                    </form>

                                    <form action="{{ route('alumnos.edit', $alumno->id) }}" method="GET" style="display: inline;">
                                        @csrf
                                        <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                                    </form>

                                    <form action="{{ route('alumnos.destroy', $alumno->id) }}" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="{{ route('alumnos.create') }}" method="GET">
                    @csrf
                    <button type="submit" class="btn btn-success w-100">Agregar</button>
                </form>
            </div>
        </div>
    </div>
@endsection

