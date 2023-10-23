@extends('layout')
@section('content')
<div class="container">
        <h2>Detalles de Alumno</h2>
        <p><strong>ID:</strong> {{ $curso->id }}</p>
        <p><strong>Nombre:</strong> {{ $curso->nombre }}</p>
        <p><strong>Codigo Unico:</strong> {{ $curso->codigo }}</p>
        <p><strong>Ciclo:</strong> {{ $curso->ciclo }}</p>
        <a href="{{ route('cursos.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection