<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use Illuminate\Http\Request;

class GradoControllerApi extends Controller
{
    public function index()
    {
        $grados = Grado::all();
        return response()->json(['grados' => $grados], 200);
    }

    public function show($id)
    {
        $grado = Grado::find($id);

        if (!$grado) {
            return response()->json(['message' => 'Grado not found'], 404);
        }

        return response()->json(['grado' => $grado], 200);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string',
            // Otras reglas de validación aquí
        ]);

        $grado = Grado::create($request->all());

        return response()->json(['message' => 'Grado created successfully', 'grado' => $grado], 201);
    }

    public function update(Request $request, $id)
    {
        $grado = Grado::find($id);

        if (!$grado) {
            return response()->json(['message' => 'Grado not found'], 404);
        }

        $request->validate([
            'nombre' => 'required|string',
            // Otras reglas de validación aquí
        ]);

        $grado->update($request->all());

        return response()->json(['message' => 'Grado updated successfully', 'grado' => $grado], 200);
    }

    public function destroy($id)
    {
        $grado = Grado::find($id);

        if (!$grado) {
            return response()->json(['message' => 'Grado not found'], 404);
        }

        $grado->delete();

        return response()->json(['message' => 'Grado deleted successfully'], 200);
    }
}
