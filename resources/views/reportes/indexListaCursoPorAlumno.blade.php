@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">La lista de cursos por alumno</h4>
        <div class="card">
            <div class="card-header">
                <form action="{{ route('reportes.index_lista_cursos_por_alumno') }}"> 
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="filtro" class="form-control" 
                                placeholder="Buscar por Nombres, Apellidos o DNI de Alumno:"
                                @if ($filtro) value="{{ $filtro }}" @endif>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary w-100">Buscar</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-body">
                <div class="card">
                    <table class="table table-hover my-1">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th> Codigo</th>
                                <th> Curso</th>
                                <th> Ciclo</th>
                                <th> Alumno</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cursos as $key => $curso)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $curso->codigo }}</td>
                                    <td>{{ $curso->nombre }}</td>
                                    <td>{{ $curso->ciclo }}</td>
                                    <td>{{ $curso->alumno}}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No se encontro resultados</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="p-2"> Total de resultados {{  count($cursos) }}</div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('reportes.index') }}" class="card-link">Volver a Reportes</a>
            </div>
        </div>
    <div>
@endsection
