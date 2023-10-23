@extends('layout')
@section('content')
    <h1>REPORTES</h1>
    <ul>
        <li>
            <a href="{{ route('reportes.index_lista_alumnos_por_curso') }}">La lista de alumnos por curso</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="{{ route('reportes.index_lista_cursos_por_alumno') }}">La lista de cursos por alumno</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="{{ route('reportes.index_lista_cursos_por_instructor') }}">La lista de cursos por instructor</a>
        </li>
    </ul>
@endsection
