@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Crear nuevo curso</h4>
        <div class="card w-100">
            <div class="card-body">
                <form method="POST" action="{{ route('cursos.store') }}">
                    @csrf
                    <div class="form-group">
                        <label class="form-label mt-3" for="nombre">Nombre : </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombre del curso" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="codigo">Codigo Unico : </label>
                        <input type="text" class="form-control" id="codigo" name="codigo" placeholder="Ingrese el codigo unico" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="ciclo">Ciclo : </label>
                        <input type="text" class="form-control" id="ciclo" name="ciclo" placeholder="Ingrese el ciclo" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary w-100">Guardar</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('cursos.index') }}" class="btn btn-danger">Volver a listado</a>
            </div>
        </div>
    </div>
@endsection