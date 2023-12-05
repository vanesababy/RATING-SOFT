<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Nota;
use App\Models\Periodo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class NotaControllerApi extends Controller
{
    public function index()
    {
        $materias = Nota::all();
        return response()->json($materias, 200);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), Nota::$rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $fechaNota = now()->format('Y-m-d H:i:s');

        $periodo = Periodo::where('fechaInicio', '<=', $fechaNota)
            ->where('fechaFin', '>=', $fechaNota)
            ->first();

        if (!$periodo) {
            return response()->json(['error' => 'La fecha de la nota no está dentro de ningún periodo existente.'], 422);
        }

        $nota = Nota::create($request->all());
        $nota->fecha = $fechaNota;
        $nota->idPeriodo = $periodo->id;
        $nota->save();

        return response()->json(['message' => 'Nota creada exitosamente.'], 201);
    }


    public function update(Request $request, $id)
    {
        $nota = Nota::find($id);

        if (!$nota) {
            return response()->json(['error' => 'Nota no encontrada'], 404);
        }

        $validator = Validator::make($request->all(), Nota::$rules);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $nota->update($request->all());

        $periodos = Periodo::all();
        $notas = Nota::all();

        return response()->json(['notas' => $notas, 'periodos' => $periodos, 'message' => 'Nota actualizada correctamente.'], 200);
    }

    public function destroy($id)
    {
        $nota = Nota::find($id);

        if (!$nota) {
            return response()->json(['error' => 'Nota no encontrada'], 404);
        }

        $nota->delete();

        $notas = Nota::all();
        $periodos = Periodo::all();

        return response()->json(['notas' => $notas, 'periodos' => $periodos, 'message' => 'Nota eliminada exitosamente.'], 200);
    }

    public function notasPeriodo()
    {
        // Verifica si el usuario está autenticado
        if (Auth::check()) {
            $user = Auth::user();
            $periodos = Periodo::all();

            // Verifica los roles del usuario
            if ($user->hasRole('Profesor')) {
                $estudiantes = User::role('alumno')->get();
                $estudiante = null;
            } elseif ($user->hasRole('alumno')) {
                $estudiantes = [$user];
                $estudiante = Persona::find($user->id);
            }

            $resultados = $this->CalcularNotaFinalPorPeriodo();
            return response()->json([
                'estudiantes' => $estudiantes,
                'periodos' => $periodos,
                'estudiante' => $estudiante,
                'resultados' => $resultados,
            ], 200);
        } else {
            // El usuario no está autenticado, redirige a la página de inicio de sesión
            return response()->json(['error' => 'Usuario no autenticado'], 401);
        }
    }

    public function notaPeriodoIndividual(Request $request)
    {
        $periodos = Periodo::all();
        $periodoSeleccionado = $request->input('periodo');

        if ($periodoSeleccionado) {
            $notas = Nota::whereHas('periodo', function ($query) use ($periodoSeleccionado) {
                $query->where('id', $periodoSeleccionado);
            })->get();
        } else {
            $notas = Nota::all();
        }

        return response()->json(['notas' => $notas, 'periodos' => $periodos], 200);
    }

    public function CalcularNotaFinalPorPeriodo()
    {
        $periodos = Periodo::all();
        $notasFinalesPorPeriodo = [];

        foreach ($periodos as $periodo) {
            $notas = Nota::whereBetween('fecha', [$periodo->fechaInicio, $periodo->fechaFin])->get();

            $sumatoriaNotas = $notas->sum('valor');
            $numeroDeNotas = $notas->count();

            $promedioNotas = $numeroDeNotas > 0 ? $sumatoriaNotas / $numeroDeNotas : 0;

            $notasFinalesPorPeriodo[$periodo->id] = $promedioNotas;
        }

        return $notasFinalesPorPeriodo;
    }

    
    public function notasPorEstudiante($idEstudiante)
    {
        $notas = Nota::where('idPersona', $idEstudiante)->get();

        if ($notas->isEmpty()) {
            return response()->json(['message' => 'No se encontraron notas para el estudiante.'], 404);
        }

        return response()->json(['notas' => $notas], 200);
    }
}
