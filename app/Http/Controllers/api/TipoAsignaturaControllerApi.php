<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\TipoAsignatura;
use Illuminate\Http\Request;

class TipoAsignaturaControllerApi extends Controller
{
    public function index()
    {
        $tipoAsignaturas = TipoAsignatura::all();

        return response()->json($tipoAsignaturas);
    }


    public function store(Request $request)
    {
        $request->validate(TipoAsignatura::$rules);

        $tipoAsignatura = TipoAsignatura::create($request->all());

        return response()->json(['message' => 'Tipo Asignatura created successfully', 'data' => $tipoAsignatura], 201);
    }

    public function show($id)
    {
        $tipoAsignatura = TipoAsignatura::find($id);

        return response()->json($tipoAsignatura);
    }

 

    public function update(Request $request, TipoAsignatura $tipoAsignatura)
    {
        $request->validate(TipoAsignatura::$rules);

        $tipoAsignatura->update($request->all());

        return response()->json(['message' => 'Tipo Asignatura updated successfully', 'data' => $tipoAsignatura]);
    }

    
    public function destroy($id)
    {
        $tipoAsignatura = TipoAsignatura::find($id);

        if ($tipoAsignatura) {
            $tipoAsignatura->delete();
            return response()->json(['message' => 'Tipo Asignatura deleted successfully']);
        } else {
            return response()->json(['message' => 'Tipo Asignatura not found'], 404);
        }
    }
}
