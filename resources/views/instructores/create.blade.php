@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Crear nuevo instructor</h4>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('instructores.store') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label mt-3" for="nombres">Dni : </label>
                        <input type="text" class="form-control" id="dni" name="dni" placeholder="Ingrese el dni" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="nombres">Nombres : </label>
                        <input type="text" class="form-control" id="nombres" name="nombres" placeholder="Ingrese los nombres" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="apellidos">Apellidos : </label>
                        <input type="text" class="form-control" id="apellidos" name="apellidos" placeholder="Ingrese los apellidos" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="edad">Edad : </label>
                        <input type="text" class="form-control" id="edad" name="edad" placeholder="Ingrese la edad" required>
                    </div>
                    <div class="form-group mt-3">
                        <label class="form-label" for="genero">Género : </label>
                        <select class="form-control" id="genero" name="genero" placeholder="Seleccione el genero" required>
                            <option value="" disabled selected>Seleccione el género</option>
                            <option value="Masculino" >MASCULINO</option>
                            <option value="Femenino">FEMENINO</option>
                        </select>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('instructores.index') }}" class="btn btn-danger">Volver a listado</a>
            </div>
        </div>
    </div>
@endsection