@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Editar Curso</h4>
        <div class="card">
            <div class="card-body">
                <form method="POST" action="{{ route('cursos.update', $curso->id) }}">
                    @csrf
                    @method('PUT') <!-- Utiliza PUT para la actualización -->
                    <div class="form-group">
                        <label class="form-label mt-3" for="nombre">Nombre : </label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $curso->nombre }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" for="nombre">Codigo Unico : </label>
                        <input type="text" class="form-control" id="codigo" name="codigo" value="{{ $curso->codigo }}" required>
                    </div>
                    <div class="form-group">
                        <label class="form-label mt-3" vfor="ciclo">Ciclo : </label>
                        <input type="text" class="form-control" id="ciclo" name="ciclo" value="{{ $curso->ciclo }}" required>
                    </div>
                    <div class="form-group mt-3">
                        <button type="submit" class="btn btn-primary w-100">Guardar cambios</button>
                    </div>
                </form>
            </div>
            <div class="card-footer">
                <a href="{{ route('cursos.index') }}" class="btn btn-danger">Volver a listado</a>
            </div>
        </div>
    </div>
@endsection