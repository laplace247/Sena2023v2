<h1>MATRICULA</h1>

<form action="{{ route('matricula.alumno.search') }}" method="post">
    @csrf

    @if (isset($anioAcad))
        <select name="anioAcad" style="width: 150px">
            <option value="2023-I" @if($anioAcad == '2023-I') selected @endif>2023-I</option>
            <option value="2023-II" @if($anioAcad == '2023-II') selected @endif>2023-II</option>
            <option value="2024-I" @if($anioAcad == '2024-I') selected @endif>2024-I</option>
            <option value="2024-II" @if($anioAcad == '2024-II') selected @endif>2024-II</option>
        </select>
    @else
        <select name="anioAcad" style="width: 150px">
            <option value="2023-I" >2023-I</option>
            <option value="2023-II" >2023-II</option>
            <option value="2024-I" >2024-I</option>
            <option value="2024-II" >2024-II</option>
        </select>
    @endif
    
    <input type="text" name="dni" id="dni" @if(isset($alumno)) value="{{$alumno->dni}}" @endif>
    <button type="submit">Buscar alumno</button>

</form>

@isset($alumno)
    @isset($anioAcad)
    <div>
        Año Academico: {{ $anioAcad}}
    </div>
    @endisset
    <div>
        Nombres: {{ $alumno->nombres}}
    </div>
    <div>
        Dni: {{ $alumno->dni}}
    </div>
@endisset

@isset($alumno)
    
    <table border="1">
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
                    <td>{{ $matricula->instructor->nombres }} {{ $matricula->instructor->apellidos }}</td>
                    <td>
                        <form action="{{ route('matricula.destroy', ['idMatricula' => $matricula->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <input type="hidden" name="dni" value="{{$alumno->dni}}">
                            <input type="hidden" name="anioAcad" value="{{$anioAcad}}">
                            <button type="submit">Eliminar matricula</button>
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
  
    <form action="{{ route('matricula.curso.index') }}" method="get">
        @csrf
        <button type="submit">Agregar curso</button>
    </form>

    
    
    

    
@endisset

{{-- Manejo de mensajes de error--}}
@if(session('mensaje'))
    <p>{{ session('mensaje') }}</p>
@endif
@if(isset($mensaje))
    <p>{{ $mensaje }}</p>
@endif