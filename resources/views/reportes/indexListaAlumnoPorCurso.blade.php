@extends('layout')
@section('content')
    <h2>La lista de alumnos por curso</h2>
    <form action="{{ route('reportes.index_lista_alumnos_por_curso') }}">
        <span>BUSQUEDA POR:</span>
        <p></p>
        <span>Nombre o Código Unico de Curso:</span>
        <input type="text" name="filtro" @if ($filtro01) value="{{ $filtro01 }}" @endif>
        <button type="submit">Buscar</button>
    </form>
    <table border="1">
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
@endsection
