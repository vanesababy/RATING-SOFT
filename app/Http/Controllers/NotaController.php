<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Nota;
use Illuminate\Http\Request;

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
}
