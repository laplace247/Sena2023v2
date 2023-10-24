@extends('layout')
@section('content')
    <div>
        <strong>Bienvenido: {{ session('usuario_autenticado')['usuario'] }}</strong>
    </div>
@endsection
