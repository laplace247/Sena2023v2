@extends('layout')
@section('content')
    <div>
        <h5 class="mb-3">Detalles de alumno</h5>
        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $alumno->id }}</p>
                <strong>Dni:</strong> {{ $alumno->dni }}</p>
                <p><strong>Nombres:</strong> {{ $alumno->nombres }}</p>
                <p><strong>Apellidos:</strong> {{ $alumno->apellidos }}</p>

            </div>
            <div class="card-footer">
                <a href="{{ route('alumnos.index') }}" class="card-link">Volver a listado</a>
            </div>
        </div>
    </div>
@endsection
