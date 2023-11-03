<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Grado;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Http\Request;

class GradoController extends Controller
{
 
    public function index()
    {
        $grados = Grado::paginate();

        return view('grado.index', compact('grados'))
            ->with('i', (request()->input('page', 1) - 1) * $grados->perPage());
    }

   
    public function create()
    {
        $grado = new Grado();
        $cursos = Curso::pluck('nombre', 'id');
        return view(' grado.create', compact('grado','cursos'));
    }

    public function store(Request $request)
    {
        request()->validate(Grado::$rules);

        $grado = Grado::create($request->all());

        return redirect()->route('grados.index')
            ->with('success', 'Grado created successfully.');
    }

    public function show($id)
    {
        $grado = Grado::find($id);
        return view('grado.show', compact('grado'));
    }


    public function edit($id)
    {
        $grado = Grado::find($id);
        return view('grado.edit', compact('grado'));
    }


    public function update(Request $request, Grado $grado)
    {
        request()->validate(Grado::$rules);
        $grado->update($request->all());
        return redirect()->route('grado.index')->with('success','Grado updated successfully');
    }


    public function destroy($id)
    {
        $grado = Grado::find($id)->delete();
        return redirect()->route('grados.index')->with('success','Grado deleted succesfully');
    }

    public function viewAgregar(){
        $grados = Grado::pluck('grado','id');
        $estudiantes = User::role('alumno')->get();
        return view('grado.agregarEstudiantes',compact('grados','estudiantes'));
    }

    public function agregarEstudianteAGrado(Request $request)
    {
        $grado = request()->input('idgrado');
        $idPersona = $request->input('idPersona');
        $persona = Persona::find($idPersona);
        $persona->update([
            'idGrado' => $request->input('idGrado')
        ]);

        return redirect()->route('agregarEstudiantes')->with('success', 'Estudiante agregado al grado correctamente.');
    }
}
