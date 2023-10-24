@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Detalles de alumno</h4>
        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $alumno->id }}</p>
                <p><strong>Dni:</strong> {{ $alumno->dni }}</p>
                <p><strong>Nombres:</strong> {{ $alumno->nombres }}</p>
                <p><strong>Apellidos:</strong> {{ $alumno->apellidos }}</p>

            </div>
            <div class="card-footer">
                <a href="{{ route('alumnos.index') }}" class="btn btn-danger">Volver a listado</a>
            </div>
        </div>
    </div>
@endsection
