@extends('layout')
@section('content')
    <div>   
        <h4 class="mb-3">Listado de Cursos</h4>
        <div class="card">
            <div class="card-body">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Codigo Unico</th>
                            <th scope="col">Ciclo</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($cursos as $curso)
                        <tr>
                            <th scope="row">{{ $curso->id }}</td>
                            <td>{{ $curso->nombre }}</td>
                            <td>{{ $curso->codigo }}</td>
                            <td>{{ $curso->ciclo }}</td>
                            <td>
                                <form action="{{ route('cursos.show', $curso->id) }}" method="GET" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-info btn-sm">Ver</button>
                                </form>

                                <form action="{{ route('cursos.edit', $curso->id) }}" method="GET" style="display: inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-warning btn-sm">Editar</button>
                                </form>

                                <form action="{{ route('cursos.destroy', $curso->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <form action="{{ route('cursos.create') }}" method="GET" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-success w-100">Agregar</button>
                </form>
            </div>
        </div>
    </div>
@endsection


