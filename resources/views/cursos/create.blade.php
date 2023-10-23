@extends('layout')
@section('content')
<div class="container">
        <h2>Crear Curso</h2>
        <form method="POST" action="{{ route('cursos.store') }}">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="codigo">Codigo Unico</label>
                <input type="text" class="form-control" id="codigo" name="codigo" required>
            </div>
            <div class="form-group">
                <label for="ciclo">Ciclo</label>
                <input type="text" class="form-control" id="ciclo" name="ciclo" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection