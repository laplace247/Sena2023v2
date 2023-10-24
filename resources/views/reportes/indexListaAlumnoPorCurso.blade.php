@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">La lista de alumnos por curso</h4>
        <div class="card">
            <div class="card-header">
                <form action="{{ route('reportes.index_lista_alumnos_por_curso') }}">
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="filtro" class="form-control" 
                                placeholder="Buscar por Nombre o Código Unico de Curso:"
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
                                <th> Dni</th>
                                <th> Nombre completo</th>
                                <th> Curso</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($alumnos as $key => $alumno)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $alumno->dni }}</td>
                                    <td>{{ $alumno->nombres }} {{ $alumno->apellidos }}</td>
                                    <td>{{ $alumno->curso }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">No se encontro resultados</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div class="p-2"> Total de resultados {{  count($alumnos) }}</div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ route('reportes.index') }}" class="card-link">Volver a Reportes</a>
            </div>
        </div>
    </div>
@endsection
