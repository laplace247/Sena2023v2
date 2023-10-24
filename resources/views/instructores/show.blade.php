@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Detalles de instructor</h4>
        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $instructor->id }}</p>
				<p><strong>Dni:</strong> {{ $instructor->dni }}</p>
				<p><strong>Nombres:</strong> {{ $instructor->nombres }}</p>
				<p><strong>Apellidos:</strong> {{ $instructor->apellidos }}</p>
				<p><strong>Edad:</strong> {{ $instructor->edad }}</p>
				<p><strong>Genero:</strong> {{ $instructor->genero }}</p>

            </div>
            <div class="card-footer">
                <a href="{{ route('instructores.index') }}" class="btn btn-danger">Volver a listado</a>
            </div>
        </div>
    </div>
@endsection
