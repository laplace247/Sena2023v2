@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Detalles de curso</h4>
        <div class="card">
            <div class="card-body">
                <p><strong>ID:</strong> {{ $curso->id }}</p>
				<p><strong>Nombre:</strong> {{ $curso->nombre }}</p>
				<p><strong>Codigo Unico:</strong> {{ $curso->codigo }}</p>
				<p><strong>Ciclo:</strong> {{ $curso->ciclo }}</p>

            </div>
            <div class="card-footer">
                <a href="{{ route('cursos.index') }}" class="btn btn-danger">Volver a listado</a>
            </div>
        </div>
    </div>
@endsection
