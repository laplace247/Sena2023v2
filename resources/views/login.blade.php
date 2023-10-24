<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="{{ asset('css/styles02.css') }}" rel="stylesheet">
    <title>Sistema de Matrículas</title>
</head>
<body class="d-flex justify-content-center align-items-center vh-100">
    <div class="text-center">
        <h1>Iniciar Sesión</h1>
        <form method="POST" action="{{ route('login.login') }}" class="mb-3">
            @csrf
            <div class="form-group">
                <label class="form-label mt-3" for="email">Correo Electrónico:</label>
                <input type="text" name="email" id="email" class="form-control" value="">
            </div>
            <div class="form-group">
                <label class="form-label mt-3" for="contrasena">Contraseña:</label>
                <input type="password" name="contrasena" id="contrasena" class="form-control" value="">
            </div>
            <div class="form-group mt-4">
                <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
            </div>
        </form>
        @if(session('mensaje'))
            <p>{{ session('mensaje') }}</p>
        @endif
    </div>
    
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
