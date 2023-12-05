<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserControllerApi extends Controller
{

    public function index()
    {
        return User::all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());
        return response()->json([
            'respuesta'=> true,
            'mensaje' => 'usuario guardado con exito'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return response()->json($user);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $user->update($request->all());
        return response()->json($user);
        // return response()->json([
        //     "respuesta" => True,
        //     "mensaje" => "Usuario Actualizado Correctamente"
        // ],200);
    }

    /**
     * Remove the specified resource from storage.
     */
    
     public function destroy(User $user)
     {
         $user->delete();
         return response()->json([
             "respuesta" => True,
             "mensaje" => "Usuario Eliminado Exitosamente"
         ],200);
     }

}
