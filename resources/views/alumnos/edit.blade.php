@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Editar Alumno</h4>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('alumnos.update', $alumno->id) }}">
                    @csrf
                    @method('PUT') <!-- Utiliza PUT para la actualización -->
                    <div class="form-group">
                        <label class="form-label mt-3" for="dni">Dni : </label>
                        <input type="text" class="form-control" id="dni" name="dni" value="{{ $alumno->dni }}"
                            required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="nombres">Nombres : </label>
                        <input type="text" class="form-control" id="nombres" name="nombres"
                            value="{{ $alumno->nombres }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="apellidos">Apellidos : </label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos"
                            value="{{ $alumno->apellidos }}" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary w-100">Guardar cambios</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('alumnos.index') }}" class="btn btn-danger">Volver a listado</a>
            </div>
        </div>
    </div>
@endsection
