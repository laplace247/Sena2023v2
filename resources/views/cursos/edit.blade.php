@extends('layout')
@section('content')
<div class="container">
        <h2>Editar Curso</h2>
        <form method="POST" action="{{ route('cursos.update', $curso->id) }}">
            @csrf
            @method('PUT') <!-- Utiliza PUT para la actualización -->
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $curso->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="nombre">Codigo Unico</label>
                <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $curso->codigo }}" required>
            </div>
            <div class="form-group">
                <label for="ciclo">Ciclo</label>
                <input type="text" class="form-control" id="ciclo" name="ciclo" value="{{ $curso->ciclo }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
</div>
@endsection