@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Editar Instructor</h4>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('instructores.update', $instructor->id) }}">
                    @csrf
                    @method('PUT') <!-- Utiliza PUT para la actualización -->
                    <div class="form-group">
                        <label class="form-label mt-3" for="nombres">Dni : </label>
                        <input type="text" class="form-control" id="dni" name="dni" value="{{ $instructor->dni }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="nombres">Nombres : </label>
                        <input type="text" class="form-control" id="nombres" name="nombres" value="{{ $instructor->nombres }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="apellidos">Apellidos : </label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" value="{{ $instructor->apellidos }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="edad">Edad : </label>
                        <input type="text" class="form-control" id="edad" name="edad" value="{{ $instructor->edad }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="genero">Género : </label>
                        <select class="form-control" id="genero" name="genero" required>
                            <option value="" disabled selected>Seleccione el género</option>
                            <option value="Masculino" @if($instructor->genero === 'Masculino') selected @endif>MASCULINO</option>
                            <option value="Femenino" @if($instructor->genero === 'Femenino') selected @endif>FEMENINO</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary w-100">Guardar cambios</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('alumnos.index') }}" class="card-link">Volver a listado</a>
            </div>
        </div>
    </div>
@endsection