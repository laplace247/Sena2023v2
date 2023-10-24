@extends('layout')
@section('content')
    <div>
        <h4 class="mb-3">Registrar matricula</h4>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('matricula.alumno.search') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-auto">
                            <select name="anioAcad" class="form-select">
                                <option value="2023-I" @if (isset($anioAcad) == '2023-I') selected @endif>2023-I</option>
                                <option value="2023-II" @if (isset($anioAcad) == '2023-II') selected @endif>2023-II</option>
                                <option value="2024-I" @if (isset($anioAcad) == '2024-I') selected @endif>2024-I</option>
                                <option value="2024-II" @if (isset($anioAcad) == '2024-II') selected @endif>2024-II</option>
                            </select>
                        </div>
                        <div class="col-auto">
                            <input type="text" name="dni" id="dni" class="form-control"
                                placeholder="DNI de alumno"
                                @if (isset($alumno)) value="{{ $alumno->dni }}" @endif>
                        </div>
                        <div class="col-auto">
                            <button type="submit" class="btn btn-primary">Buscar alumno</button>
                        </div>
                    </div>
                </form>

                @if (isset($alumno))
                    <div class="my-3">
                        @isset($anioAcad)
                        <div>
                            <label class="fw-bolder" style="width: 150px"> Año Academico:</label> {{ $anioAcad }}
                        </div>
                        @endisset
                        <div>
                            <label class="fw-bolder" style="width: 150px"> Nombres:</label> {{ $alumno->nombres }}
                        </div>
                        <div>
                            <label class="fw-bolder" style="width: 150px"> Dni:</label> {{ $alumno->dni }}
                        </div>
                    </div>
                    <div>
                        <div class="card">
                            <div class="card-body p-0">
                                <table class="table table-hover my-1">
                                    <thead>
                                        <tr>
                                            <th>Año academico</th>
                                            <th>Codigo curso</th>
                                            <th>Nombre curso</th>
                                            <th>Instructor</th>
                                            <th>Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($matriculas as $matricula)
                                            <tr>
                                                <td>{{ $matricula->anioAcad }}</td>
                                                <td>{{ $matricula->curso->codigo }}</td>
                                                <td>{{ $matricula->curso->nombre }}</td>
                                                @if ($matricula->instructor)
                                                    <td>
                                                        {{ $matricula->instructor->nombres }}
                                                        {{ $matricula->instructor->apellidos }}
                                                    </td>
                                                @else
                                                    <td>-</td>
                                                @endif
                                                <td>
                                                    <form
                                                        action="{{ route('matricula.destroy', ['idMatricula' => $matricula->id]) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <input type="hidden" name="dni" value="{{ $alumno->dni }}">
                                                        <input type="hidden" name="anioAcad" value="{{ $anioAcad }}">
                                                        <button type="submit" class="btn btn-danger btn-sm">Eliminar
                                                            matricula</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td colspan="5">
                                                    No hay Cursos añadidos
                                                </td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                                <div class="text-center">
                                    <form action="{{ route('matricula.curso.index') }}" method="get">
                                        @csrf
                                        <button type="submit" class="btn btn-success w-100">Agregar Cursos</button>
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                @else
                @endif

                {{-- Manejo de mensajes de error --}}
                @if (session('mensaje') || isset($mensaje))
                    <div class="alert alert-danger alert-dismissible fade show mt-5" role="alert">
                        @if (session('mensaje'))
                            <span>{{ session('mensaje') }}</span>
                        @endif
                        @if (isset($mensaje))
                            <span>{{ $mensaje }}</span>
                        @endif
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
