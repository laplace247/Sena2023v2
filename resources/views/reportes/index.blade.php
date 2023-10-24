@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Reportes</h4>
        <div class="card">
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <a href="{{ route('reportes.index_lista_alumnos_por_curso') }}" class="btn btn-success">La lista de alumnos por curso</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('reportes.index_lista_cursos_por_alumno') }}" class="btn btn-success">La lista de cursos por alumno</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('reportes.index_lista_cursos_con_sin_instructor') }}" class="btn btn-success">La lista de cursos con o sin instructor</a>
                </li>
                <li class="list-group-item">
                    <a href="{{ route('reportes.index_lista_cursos_por_instructor') }}" class="btn btn-success">La lista de cursos por instructor</a>
                </li>
            </ul>
        </div>
    </div>
@endsection
