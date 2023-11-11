<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Nota;
use App\Models\Periodo;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Spatie\Permission\Models\Role;

class NotaController extends Controller
{
    public function index()
    {
        $materias = Asignatura::paginate();
        return view('nota.index', compact('materias'));
    }

    public function create()
    {
        $nota = new Nota();
        return view('nota.calificar', compact('nota'));
    }


    public function store(Request $request)
    {
        request()->validate(Nota::$rules);

        $nota = Nota::create($request->all());
        $nota->fecha = now()->format('Y-m-d H:i:s');
        $fechaNota = $nota->fecha;
        $periodo = Periodo::where('fechaInicio', '<=', $fechaNota)
                        ->where('fechaFin', '>=', $fechaNota)
                        ->first();
        $nota->idPeriodo = $periodo->id;
        $nota->save();

        return redirect()->route('calificar.create')
            ->with('success', 'Nota created successfully.');
    }


    public function show(Nota $nota)
    {
        //
    }


    public function edit(Nota $nota)
    {
        //
    }

 
    public function update(Request $request, Nota $nota)
    {
        //
    }


    public function destroy(Nota $nota)
    {
        //
    }


    public function notasPeriodo(){
        $notas = Nota::all();
        $user = Auth::user();
    
        if ($user->hasRole('Profesor')) {
            $estudiantes = User::role('alumno')->get();
            $estudiante = null;
        } else if ($user->hasRole('alumno')) {
            $estudiantes = [$user];
            $estudiante = Persona::find($user->id);
        }
    
        $resultados = $this->CalcularNotaPeriodo();
        $notaPeriodo = $resultados['promedio_notas'];
    
        return view('nota.notasPeriodos', compact('notas', 'estudiante', 'estudiantes', 'notaPeriodo'));
    }
    

    public function notaPeridoIndividual(){
        $periodos = Periodo::pluck('periodo', 'id');
        $estudiante = Persona::find(auth()->user()->id);
    
        // Obtener las notas asociadas al estudiante en el período seleccionado
        $idPeriodo = request()->input('periodo_id');
        $notas = Nota::where('idPersona', $estudiante->id)
                     ->where('idPeriodo', $idPeriodo)
                     ->get();
    
        return view('nota.notasPorPeriodo', compact('periodos', 'notas'));
    }
    
    
 
    public function CalcularNotaPeriodo()
    {
        $periodos = Periodo::all();
        $totalSumatoriaNotas = 0;
        $totalNumeroDeNotas = 0;

        foreach ($periodos as $periodo) {
            $notas = Nota::whereBetween('fecha', [$periodo->fechaInicio, $periodo->fechaFin])->get();
            $sumatoriaNotas = $notas->sum('valor');
            $numeroDeNotas = $notas->count();

            $totalSumatoriaNotas += $sumatoriaNotas;
            $totalNumeroDeNotas += $numeroDeNotas;
        }

        $promedioNotas = $totalNumeroDeNotas > 0 ? $totalSumatoriaNotas / $totalNumeroDeNotas : 0;

        return [
            'sumatoria_notas' => $totalSumatoriaNotas,
            'numero_de_notas' => $totalNumeroDeNotas,
            'promedio_notas' => $promedioNotas,
        ];
    }

    
}
