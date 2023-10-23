@extends('layout')
@section('content')
    <h2>La lista de cursos por instructor</h2>
    <form action="{{ route('reportes.index_lista_cursos_por_instructor') }}"> 
        <span>BUSQUEDA POR:</span>
        <p></p>
        <span>Nombres, Apellidos o DNI de Instructor:</span>
        <input type="text" name="filtro" @if ($filtro03) value="{{ $filtro03 }}" @endif>
        <button type="submit">Buscar</button>
    </form>
    <table border="1">
        <thead>
            <tr>
                <th>#</th>
                <th> Codigo</th>
                <th> Ciclo</th>
                <th> Curso</th>
                <th> Nombre</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cursos as $key => $curso)
                <tr>
                    <td>{{ $key + 1 }}</td>
                    <td>{{ $curso->codigo }}</td>
                    <td>{{ $curso->ciclo }}</td>
                    <td>{{ $curso->nombre }}</td>
                    <td>{{ $curso->instructor}}</td>
            
                </tr>
            @empty
                <tr>
                    <td colspan="5">No se encontro resultados</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
