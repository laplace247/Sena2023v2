<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use App\Models\Curso;
use App\Models\Instructor;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        if (!session('usuario_autenticado')) {
            return redirect()->route('main.index');
        }
        return view("reportes.index");
    }

    public function indexListaAlumnoPorCurso(Request $request)
    {
        if (!session('usuario_autenticado')) {
            return redirect()->route('main.index');
        }

        $filtro01 = $request->filtro;

        $alumnos = [];

        if ($filtro01) {
            $alumnos = Alumno::select('alumnos.nombres','alumnos.apellidos','cursos.nombre as curso', 'alumnos.dni')
                ->join('matriculas', 'matriculas.idAlumno', 'alumnos.id')
                ->join('cursos', 'matriculas.idCurso', 'cursos.id')
                ->where('cursos.nombre', 'like', "%$filtro01%")
                ->orWhere('cursos.codigo', 'like', "%$filtro01%")
                ->get();
        }

        return view("reportes.indexListaAlumnoPorCurso", compact('filtro01', 'alumnos'));
    }

    public function indexListaCursoPorAlumno(Request $request)
    {
        if (!session('usuario_autenticado')) {
            return redirect()->route('main.index');
        }

        $filtro02 = $request->filtro;

        $cursos = [];

        if ($filtro02) {
            $cursos = Curso::select('cursos.codigo','cursos.nombre','alumnos.nombres as alumno', 'cursos.ciclo')
                ->join('matriculas', 'matriculas.idCurso', 'cursos.id')
                ->join('alumnos', 'matriculas.idAlumno', 'alumnos.id')
                ->where('alumnos.nombres', 'like', "%$filtro02%")
                ->orWhere('alumnos.apellidos', 'like', "%$filtro02%")
                ->orWhere('alumnos.dni', 'like', "%$filtro02%")
                ->get();
        }
        

        return view("reportes.indexListaCursoPorAlumno", compact('filtro02', 'cursos'));
    }

    public function indexListaCursoPorInstructor(Request $request)
    {
        if (!session('usuario_autenticado')) {
            return redirect()->route('main.index');
        }

        $filtro03 = $request->filtro;

        $cursos = [];

        if ($filtro03) {
            $cursos = Curso::select('cursos.codigo','cursos.nombre','instructores.nombres as instructor', 'cursos.ciclo')
                ->join('matriculas', 'matriculas.idCurso', 'cursos.id')
                ->join('instructores', 'matriculas.idInstructor', 'instructores.id')
                ->where('instructores.nombres', 'like', "%$filtro03%")
                ->orWhere('instructores.apellidos', 'like', "%$filtro03%")
                ->orWhere('instructores.dni', 'like', "%$filtro03%")
                ->get();
        }

        return view("reportes.indexListaCursoPorInstructor", compact('filtro03', 'cursos'));
    }
}
