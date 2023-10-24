@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Crear nuevo alumno</h4>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('alumnos.store') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label mt-3" for="dni">Dni : </label>
                        <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese su dni" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="nombres">Nombres : </label>
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese sus nombres" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="apellidos">Apellidos : </label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese sus apellidos" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('alumnos.index') }}" class="card-link">Volver a listado</a>
            </div>
        </div>
    </div>
@endsection
