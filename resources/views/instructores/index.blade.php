@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Listado de Instructores</h4>
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Dni</th>
                            <th scope="col">Nombres</th>
                            <th scope="col">Apellidos</th>
                            <th scope="col">Edad</th>
                            <th scope="col">Genero</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($instructores as $instructor)
                        <tr>
                            <th scope="row">{{ $instructor->id }}</td>
                            <td>{{ $instructor->dni }}</td>
                            <td>{{ $instructor->nombres }}</td>
                            <td>{{ $instructor->apellidos }}</td>
                            <td>{{ $instructor->edad }}</td>
                            <td>{{ $instructor->genero }}</td>
                            <td>
                                <form action="{{ route('instructores.show', $instructor->id) }}" method="GET" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-info btn-sm">Ver</button>
                                </form>

                                <form action="{{ route('instructores.edit', $instructor->id) }}" method="GET" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                                </form>

                                <form action="{{ route('instructores.destroy', $instructor->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="{{ route('instructores.create') }}" method="GET" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-success w-100">Agregar</button>
                </form>
            </div>
        </div>
    </div>
@endsection


