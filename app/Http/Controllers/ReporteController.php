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

        $filtro = $request->filtro;

        $alumnos = [];

        if ($filtro) {
            $alumnos = Alumno::select('alumnos.nombres','alumnos.apellidos','cursos.nombre as curso', 'alumnos.dni')
                ->join('matriculas', 'matriculas.idAlumno', 'alumnos.id')
                ->join('cursos', 'matriculas.idCurso', 'cursos.id')
                ->where('cursos.nombre', 'like', "%$filtro%")
                ->orWhere('cursos.codigo', 'like', "%$filtro%")
                ->get();
        }

        return view("reportes.indexListaAlumnoPorCurso", compact('filtro', 'alumnos'));
    }

    public function indexListaCursoPorAlumno(Request $request)
    {
        if (!session('usuario_autenticado')) {
            return redirect()->route('main.index');
        }

        $filtro = $request->filtro;

        $cursos = [];

        if ($filtro) {
            $cursos = Curso::select('cursos.codigo','cursos.nombre','alumnos.nombres as alumno', 'cursos.ciclo')
                ->join('matriculas', 'matriculas.idCurso', 'cursos.id')
                ->join('alumnos', 'matriculas.idAlumno', 'alumnos.id')
                ->where('alumnos.nombres', 'like', "%$filtro%")
                ->orWhere('alumnos.apellidos', 'like', "%$filtro%")
                ->orWhere('alumnos.dni', 'like', "%$filtro%")
                ->get();
        }
        

        return view("reportes.indexListaCursoPorAlumno", compact('filtro', 'cursos'));
    }

    public function indexListaCursoPorInstructor(Request $request)
    {
        if (!session('usuario_autenticado')) {
            return redirect()->route('main.index');
        }

        $filtro = $request->filtro;

        $cursos = [];

        if ($filtro) {
            $cursos = Curso::select('cursos.codigo','cursos.nombre','instructores.nombres as instructor', 'cursos.ciclo')
                ->join('matriculas', 'matriculas.idCurso', 'cursos.id')
                ->join('instructores', 'matriculas.idInstructor', 'instructores.id')
                ->where('instructores.nombres', 'like', "%$filtro%")
                ->orWhere('instructores.apellidos', 'like', "%$filtro%")
                ->orWhere('instructores.dni', 'like', "%$filtro%")
                ->get();
        }

        return view("reportes.indexListaCursoPorInstructor", compact('filtro', 'cursos'));
    }    

    public function indexListaCursoConSinInstructor(Request $request)
    {
        if (!session('usuario_autenticado')) {
            return redirect()->route('main.index');
        }

        $filtro = $request->filtro;

        $cursos = [];

        if ($filtro) {
            $cursos = Curso::select('cursos.codigo','cursos.nombre','instructores.nombres as instructor', 'cursos.ciclo')
                ->join('matriculas', 'matriculas.idCurso', 'cursos.id')
                ->leftJoin('instructores', 'matriculas.idInstructor', 'instructores.id');

            if ($filtro == '1') {
                $cursos = $cursos->whereNotNull('matriculas.idInstructor')->get();
            } else {
                $cursos = $cursos->whereNull('matriculas.idInstructor')->get();
            }
        }

        return view("reportes.indexListaCursoConSinInstructor", compact('filtro', 'cursos'));
    }
}
