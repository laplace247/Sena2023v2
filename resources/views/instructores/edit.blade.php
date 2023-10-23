@extends('layout')
@section('content')
<div class="container">
        <h2>Editar Instructor</h2>
        <form method="POST" action="{{ route('instructores.update', $instructor->id) }}">
            @csrf
            @method('PUT') <!-- Utiliza PUT para la actualización -->
            <div class="form-group">
                <label for="nombres">Dni</label>
                <input type="text" class="form-control" id="dni" name="dni" value="{{ $instructor->dni }}" required>
            </div>
            <div class="form-group">
                <label for="nombres">Nombres</label>
                <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $instructor->nombres }}" required>
            </div>
            <div class="form-group">
                <label for="apellidos">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $instructor->apellidos }}" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" id="edad" name="edad" value="{{ $instructor->edad }}" required>
            </div>
            <div class="form-group">
            <label for="genero">Género</label>
                <select class="form-control" id="genero" name="genero" required>
                    <option value="Masculino" @if($instructor->genero === 'Masculino') selected @endif>MASCULINO</option>
                    <option value="Femenino" @if($instructor->genero === 'Femenino') selected @endif>FEMENINO</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Guardar cambios</button>
        </form>
</div>
@endsection