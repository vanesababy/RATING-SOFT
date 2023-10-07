<?php

namespace App\Http\Controllers;
use App\Models\Lugar;
use App\Models\Tipolugar;
use App\Models\Ruta;
use App\Models\Gastronomia;
use App\Models\Evento;
use App\Models\Calificasione;
use App\Models\Servicio;
use Illuminate\Http\Request;
use PDF;
use Illuminate\Support\Facades\Storage;




/**
 * Class LugarController
 * @package App\Http\Controllers
 */
class LugarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // buscador
          $buscar = $request->buscar;
        $lugars = Lugar::where('id','LIKE', '%'.$buscar.'%')
        ->orWhere('nombre','LIKE', '%'.$buscar.'%')
        ->latest('id')
        ->paginate(5);


        $tipolugares = Tipolugar::all();
        $tipolugar = Tipolugar::pluck('nombre');#consulta para retornar
        $ruta = Ruta::pluck('ubicasion');
        $gastronomia = Gastronomia::pluck('ubicasion');
        $evento = Evento::pluck('nombre');
        $calificasiones = Calificasione::pluck('comentarios');
        $servicio = Servicio ::pluck('nombre');
        return view('lugar.index', compact('lugars','tipolugar','ruta','gastronomia','evento','calificasiones','servicio','tipolugares'))
            ->with('i', (request()->input('page', 1) - 1) * $lugars->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $lugar = new Lugar();
        $tipolugar = Tipolugar::pluck('nombre','id');#consulta para retornar
        $ruta = Ruta::pluck('ubicasion','id');
        $gastronomia = Gastronomia::pluck('ubicasion','id');
        $evento = Evento::pluck('nombre','id');
        $calificasiones = Calificasione::pluck('comentarios','id');
        $servicio = Servicio ::pluck('nombre','id');

        return view('lugar.create', compact('lugar','tipolugar','ruta','gastronomia','evento','calificasiones','servicio'));
      
 
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

request()->validate(Lugar::$rules);
$lugar = $request->all();


$file=$request->file("foto_url");
$nombreArchivo = "img_".time().".".$file->guessExtension();
$request->file('foto_url')->storeAs('public/Fotos', $nombreArchivo );
$lugar['foto_url']= "$nombreArchivo";
Lugar::create($lugar);

   return redirect()->route('lugars.index')
        ->with('success', 'Lugar created successfully.');
            
           
        
         
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lugar = Lugar::find($id);

        return view('lugar.show', compact('lugar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $lugar = Lugar::find($id);
        $tipolugar = Tipolugar::pluck('nombre','id');#consulta para retornar
        $ruta = Ruta::pluck('ubicasion');
        $gastronomia = Gastronomia::pluck('ubicasion');
        $evento = Evento::pluck('nombre');
        $calificasiones = Calificasione::pluck('comentarios');
        $servicio = Servicio ::pluck('nombre');
  return view('lugar.edit', compact('lugar','tipolugar','ruta','gastronomia','evento','calificasiones','servicio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Lugar $lugar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lugar $lugar)
    {
        // request()->validate(Lugar::$rules);
        $lugar->update($request->all());
        
        $file=$request->file("foto_url");
$nombreArchivo = "img_".time().".".$file->guessExtension();
$request->file('foto_url')->storeAs('public/Fotos', $nombreArchivo );
$lugar['foto_url']= "$nombreArchivo";
$lugar->save();

        return redirect()->route('lugars.index')
        ->with('success', 'Lugar update successfully');
    


    }

       
     
    

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $lugar = Lugar::find($id)->delete();

        return redirect()->route('lugars.index')
            ->with('success', 'Lugar deleted successfully');

    }


    public function pdf(){
        $lugars = Lugar::paginate();


        $pdf = PDF::loadView('lugar.pdf',['lugars'=>$lugars]);
        return $pdf->stream();
      

    }
    
    public function form(){
        $lugars = Lugar::paginate();
        $lugar= Lugar::all();
        return view('lugar.formulario',compact('lugars'));
      

    }
}
