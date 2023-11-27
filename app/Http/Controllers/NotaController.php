<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Nota;
use App\Models\Periodo;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotaController extends Controller
{
    public function index()
    {
        $materias = Asignatura::paginate();
        return view('nota.index', compact('materias'));
    }

    public function create($id)
    {
        $idAsignatura = $id;
        $nota = new Nota();
        return view('nota.calificar', compact('nota','idAsignatura'));
    }


    public function store(Request $request)
    {
        request()->validate(Nota::$rules);

        $fechaNota = now()->format('Y-m-d H:i:s');
        
        $periodo = Periodo::where('fechaInicio', '<=', $fechaNota)
                        ->where('fechaFin', '>=', $fechaNota)
                        ->first();

        if (!$periodo) {
            return redirect()->route('notasPeriodos')
                ->with('error', 'La fecha de la nota no está dentro de ningún periodo existente.');
        }

        $nota = Nota::create($request->all());
        $nota->fecha = $fechaNota;
        $nota->idPeriodo = $periodo->id;
        $nota->save();

        $idAsignatura = $request->idAsignatura;
        return redirect()->route('notasPeriodos',$idAsignatura)
            ->with('success', 'Nota creada exitosamente.');
    }


    public function edit($id)
    {
        $nota = Nota::find($id);
        return view ('nota.edit',compact('nota'));
    }

 
    public function update(Request $request, Nota $nota)
    {
        $request->validate(Nota::$rules);
        $nota->update($request->all());
        $periodos = Periodo::all();

        $notas = Nota::all();
        return view('nota.notasPorPeriodo', compact('notas','periodos'))
            ->with('success', 'Nota actualizada correctamente.');
    }



    public function destroy($id)
    {
        Nota::find($id)->delete();
        $notas = Nota::all();
        $periodos = Periodo::all();
        
        return view('nota.notasPorPeriodo',compact('notas','periodos'))
        ->with('success', 'Nota delete successfully.');
    }


    public function notasPeriodo($id)
    {
        if (Auth::check()) {
            $idAsignatura = $id;
            $user = Auth::user();
            $periodos = Periodo::all();

            // Verifica los roles del usuario
            if ($user->hasRole('Profesor') || $user->hasRole('Admin') || $user->hasRole('Directivo')) {
                $estudiantes = User::role('alumno')->get();
                $estudiante = null;
            } elseif ($user->hasRole('alumno')) {
                $estudiantes = [$user];
                $estudiante = Persona::find($user->id);
            }

            $resultados = $this->CalcularNotaFinalPorPeriodo($idAsignatura);
            return view('nota.notasPeriodos', compact('estudiantes','periodos', 'estudiante', 'resultados','idAsignatura'));
        } else {
            return redirect()->route('login');
        }
    } 
        

    public function notaPeriodoIndividual(Request $request, $id)
    {
        $idAsignatura = $id;
        $periodos = Periodo::all();
        $periodoSeleccionado = $request->input('periodo');

        if ($periodoSeleccionado) {
            $notas = Nota::whereHas('periodo', function ($query) use ($periodoSeleccionado) {
                    $query->where('id', $periodoSeleccionado);
                })
                ->where('idAsignatura', $idAsignatura)
                ->get();
        } else {
            $notas = Nota::where('idAsignatura', $idAsignatura)->get();
        }

        return view('nota.notasPorPeriodo', compact('notas', 'periodos', 'idAsignatura'));
    }
    
    
 
    public function CalcularNotaFinalPorPeriodo($idAsignatura)
    {
        $periodos = Periodo::all();
        $notasFinalesPorPeriodo = [];
    
        foreach ($periodos as $periodo) {
            $notas = Nota::whereBetween('fecha', [$periodo->fechaInicio, $periodo->fechaFin])
                ->where('idAsignatura', $idAsignatura)
                ->get();
    
            $sumatoriaNotas = $notas->sum('valor');
            $numeroDeNotas = $notas->count();
    
            $promedioNotas = $numeroDeNotas > 0 ? $sumatoriaNotas / $numeroDeNotas : 0;
    
            $notasFinalesPorPeriodo[$periodo->id] = $promedioNotas;
        }
    
        return $notasFinalesPorPeriodo;
    }

    
}
