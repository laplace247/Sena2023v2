@extends('layout')
@section('content')
    <div>
        <h5 class="mb-3">Buscar curso a matricular</h5>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('matricula.curso.search') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-auto">
                            <input type="text" name="codigo" id="codigo" class="form-control"
                                placeholder="Codigo de curso"
                                @if (isset($curso)) value="{{ $curso->codigo }}" @endif>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Buscar Curso</button>
                        </div>
                    </div>
                </form>

                @isset($curso)
                    <div class="mt-3">
                        <div>
                            <label class="fw-bolder" style="width: 100px"> Codigo:</label> {{ $curso->codigo }}
                        </div>
                        <div>
                            <label class="fw-bolder" style="width: 100px"> Nombre:</label> {{ $curso->nombre }}
                        </div>
                        <div>
                            <label class="fw-bolder" style="width: 100px"> Ciclo:</label> {{ $curso->ciclo }}
                        </div>
                    </div>

                    <form action="{{ route('matricula.curso.matricular') }}" method="post">
                        @csrf

                        <div class="d-inline-flex">
                            <label class="fw-bolder" style="width: 100px"> Instructor:</label>
                            <select name="idInstructor" class="form-select form-select-sm w-auto">
                                @foreach ($instructores as $instructor)
                                    <option value="null">Sin instructor</option>
                                    <option value="{{ $instructor->id }}">{{ $instructor->nombres }}
                                        {{ $instructor->apellidos }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-success px-5 ">Matricular</button>
                        </div>
                    </form>
                @endisset

                {{-- Manejo de mensajes de error --}}
                @if (session('mensaje'))
                    <p>{{ session('mensaje') }}</p>
                @endif
                @if (isset($mensaje))
                    <p>{{ $mensaje }}</p>
                @endif
            </div>

            <div class="card-footer">
                <a href="{{ route('matricula.index') }}" class="btn btn-danger">Volver a matriculas</a>
            </div>
        </div>
    </div>
@endsection
