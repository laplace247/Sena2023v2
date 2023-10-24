@extends('layout')
@section('content')
<div class="container">
    <h2>La lista de cursos con o sin instructor</h2>
    <form action="{{ route('reportes.index_lista_cursos_con_sin_instructor') }}" method="GET">
        <div class="form-group">
            <label for="filtro">Tipo de búsqueda:</label>
            <select name="filtro" class="form-control">
                <option value="null" disabled selected>Seleccione el tipo de busqueda</option>
                <option value="1" @if ($filtro == '1') selected @endif>Con instructor</option>
                <option value="2" @if ($filtro == '2') selected @endif>Sin instructor</option>
            </select>
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Código</th>
                <th>Curso</th>
                <th>Ciclo</th>
                <th>Instructor</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($cursos as $key => $curso)
            <tr>
                <td>{{ $key + 1 }}</td>
                <td>{{ $curso->codigo }}</td>
                <td>{{ $curso->nombre }}</td>
                <td>{{ $curso->ciclo }}</td>
                <td>{{ $curso->instructor }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="5">No se encontraron resultados</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
