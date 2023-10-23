@extends('layout')    
@section('content')
    <h1>Menu Principal</h1>
    <form action="{{ route('alumnos.index') }}" method="GET" style="display: inline;">
        @csrf
        <button>ALUMNOS</button>
    </form>

    <form action="{{ route('instructores.index') }}" method="GET" style="display: inline;">
        @csrf
        <button>INSTRUCTORES</button>
    </form>

    <form action="{{ route('cursos.index') }}" method="GET" style="display: inline;">
        @csrf
        <button>CURSOS</button>
    </form>

    <form action="{{ route('matricula.index') }}" method="GET" style="display: inline;">
        @csrf
        <button>MATRICULAS</button>
    </form>

    <form action="{{ route('reportes.index') }}" method="GET" style="display: inline;">
        @csrf
        <button>REPORTES</button>
    </form>


    <button>CURSOS INSTRUCTORES</button>

    <a href="{{ route('login.logout') }}">Cerrar Sesion</a>
@endsection