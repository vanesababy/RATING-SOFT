<?php

namespace App\Http\Controllers;

use App\Models\Grado;
use Illuminate\Http\Request;

class GradoController extends Controller
{
 
    public function index()
    {
        $grados = Grado::paginate();

        return view(' grado.index', compact('grados'))
            ->with('i', (request()->input('page', 1) - 1) * $grados->perPage());
    }

   
    public function create()
    {
        $grado = new Grado();
        return view(' grado.create', compact('grado'));
    }

    public function store(Request $request)
    {
        request()->validate(Curso::$rules);

        $curso = Curso::create($request->all());

        return redirect()->route('cursos.index')
            ->with('success', 'Curso created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function show(Grado $grado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function edit(Grado $grado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Grado $grado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Grado  $grado
     * @return \Illuminate\Http\Response
     */
    public function destroy(Grado $grado)
    {
        //
    }
}
