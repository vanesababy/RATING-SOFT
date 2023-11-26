<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\TipoIdentificacion;
use Illuminate\Support\Facades\Validator;

class PersonaControllerApi extends Controller
{
    public function index()
    {
        $personas = User::all();
        return response()->json($personas, 200);
    }

    public function edit($id)
    {
        $usuario = User::find($id);

        if (!$usuario) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        $persona = $usuario->persona;
        $tiposIdentificacion = TipoIdentificacion::pluck('detalle', 'id');

        $data = [
            'usuario' => $usuario,
            'persona' => $persona,
            'tiposIdentificacion' => $tiposIdentificacion,
        ];

        return response()->json($data, 200);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        if (!$user) {
            return response()->json(['error' => 'Usuario no encontrado'], 404);
        }

        $validator = Validator::make($request->all(), [
            // Coloca aquí las reglas de validación necesarias
            'nombre1' => 'required',
            'apellido1' => 'required',
            // Asegúrate de agregar las reglas necesarias para otros campos
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 422);
        }

        $user->persona()->update([
            'nombre1' => strtoupper($request->input('nombre1')),
            'nombre2' => strtoupper($request->input('nombre2')),
            'apellido1' => strtoupper($request->input('apellido1')),
            'apellido2' => strtoupper($request->input('apellido2')),
            'idTipoIdentificacion' => $request->input('tipoIdentificacion'),
            'identificacion' => $request->input('identificacion'),
            'fechaNac' => $request->input('fechaNac'),
            'direccion' => strtoupper($request->input('direccion')),
            'email' => $request->input('email'),
            'telefonoFijo' => $request->input('telefonoFijo'),
            'celular' => $request->input('celular'),
            'padre' => strtoupper($request->input('nombrePadre')),
            'madre' => strtoupper($request->input('nombreMadre')),
            'ocupacionPadre' => strtoupper($request->input('ocupacionPadre')),
            'ocupacionMadre' => strtoupper($request->input('ocupacionMadre')),
            'sexo' => $request->input('sexo'),
            'rh' => $request->input('rh'),
        ]);

        return response()->json(['message' => 'Información de persona actualizada correctamente.'], 200);
    }
}
