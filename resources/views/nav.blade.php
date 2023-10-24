<nav class="navbar navbar-expand-lg bg-body-tertiary mb-4 rounded-2">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('main.index')}}">Sistema</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('alumnos.index') }}">ALUMNOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('instructores.index') }}">INSTRUCTORES</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cursos.index') }}">CURSOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('matricula.index') }}">MATRICULAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reportes.index') }}">REPORTES</a>
                </li>
            </ul>
            <div>
                <strong>Bienvenido: {{ session('usuario_autenticado')['usuario'] }}</strong>

                <form action="{{route('login.logout')}}" method="GET">
                    <button class="btn btn-danger btn-sm w-100" type="submit">CERRAR SESIÓN</button>
                </form>
            </div>
        </div>
    </div>
</nav>
