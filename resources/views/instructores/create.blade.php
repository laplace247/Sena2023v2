@extends('layout')
@section('content')
<div class="container">
        <h2>Crear Instructor</h2>
        <form method="POST" action="{{ route('instructores.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombres">Dni</label>
                <input type="text" class="form-control" id="dni" name="dni" required>
            </div>
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" id="edad" name="edad" required>
            </div>
            <div class="form-group">
                <label for="genero">Genero</label>
                <input type="text" class="form-control" id="genero" name="genero" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection