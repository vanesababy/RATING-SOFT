<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\TipoIdentificacion;
use App\Models\User;
use Illuminate\Http\Request;

class PersonaController extends Controller
{

    Public function index(){
        return view('persona.index');
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        $persona = $usuario->persona;
        $tiposIdentificacion = TipoIdentificacion::pluck('detalle', 'id');

        return view('persona.edit', compact('usuario', 'persona','tiposIdentificacion'));
    }


    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $user->persona()->update([
            'nombre1' => $request->input('nombre1'),
            'nombre2' => $request->input('nombre2'),
            'apellido1' => $request->input('apellido1'),
            'apellido2' => $request->input('apellido2'),
            'idTipoIdentificacion' => $request->input('tipoIdentificacion'),
            'identificacion' => $request->input('identificacion'),
            'fechaNac' => $request->input('fechaNac'),
            'direccion' => $request->input('direccion'),
            'email' => $request->input('email'),
            'telefonoFijo' => $request->input('telefonoFijo'),
            'celular' => $request->input('celular'),
            'padre' => $request->input('nombrePadre'),
            'madre' => $request->input('nombreMadre'),
            'ocupacionPadre' => $request->input('ocupacionPadre'),
            'ocupacionMadre' => $request->input('ocupacionMadre'),
            'sexo' => $request->input('sexo'),
            'rh' => $request->input('rh'),
        ]);

        return redirect('Administrador')->with('success', 'Información de persona actualizada correctamente.');
    }
}
