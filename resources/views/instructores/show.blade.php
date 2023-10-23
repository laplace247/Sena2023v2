@extends('layout')
@section('content')
<div class="container">
        <h2>Detalles de Instructor</h2>
        <p><strong>ID:</strong> {{ $instructor->id }}</p>
        <p><strong>Dni:</strong> {{ $instructor->dni }}</p>
        <p><strong>Nombres:</strong> {{ $instructor->nombres }}</p>
        <p><strong>Apellidos:</strong> {{ $instructor->apellidos }}</p>
        <p><strong>Edad:</strong> {{ $instructor->edad }}</p>
        <p><strong>Genero:</strong> {{ $instructor->genero }}</p>
        <a href="{{ route('instructores.index') }}" class="btn btn-primary">Volver</a>
</div>
@endsection