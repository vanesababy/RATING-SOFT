<?php

namespace App\Http\Controllers;
use App\Models\Lugar;
use Illuminate\Http\Request;

class RestaurantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lugar = Lugar::all();
        return view('Restaurantes', compact('lugar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

// public function index()
// {
//     $pots = Pot::paginate();

//     return view('pot.index', compact('pots'))
//         ->with('i', (request()->input('page', 1) - 1) * $pots->perPage());
// }

// /**
//  * Show the form for creating a new resource.
//  *
//  * @return \Illuminate\Http\Response
//  */
// public function create()
// {
//     $pot = new Pot();
//     $User = User::all();
//     foreach($User as $user)
//   if(Auth()->user()->id==$user->id){
//     $pot->users_id = $user->id;
//   };

//     return view('pot.create', compact('pot'));
// }

// /**
//  * Store a newly created resource in storage.
//  *
//  * @param  \Illuminate\Http\Request $request
//  * @return \Illuminate\Http\Response
//  */
// public function store(Request $request)
// {
//     request()->validate(Pot::$rules);
    
//     $pot = Pot::create($request->all());
//     $User = User::all();
//     foreach($User as $user)
//   if(Auth()->user()->id==$user->id){
//     $pot->users_id = $user->id;
//   };
//     return redirect()->route('pots.index')
//         ->with('success', 'Pot created successfully.');
// }

// /**
//  * Display the specified resource.
//  *
//  * @param  int $id
//  * @return \Illuminate\Http\Response
//  */
// public function show($id)
// {
//     $pot = Pot::find($id);

//     return view('pot.show', compact('pot'));
// }

// /**
//  * Show the form for editing the specified resource.
//  *
//  * @param  int $id
//  * @return \Illuminate\Http\Response
//  */
// public function edit($id)
// {
//     $pot = Pot::find($id);

//     return view('pot.edit', compact('pot'));
// }

// /**
//  * Update the specified resource in storage.
//  *
//  * @param  \Illuminate\Http\Request $request
//  * @param  Pot $pot
//  * @return \Illuminate\Http\Response
//  */
// public function update(Request $request, Pot $pot)
// {
//     request()->validate(Pot::$rules);

//     $pot->update($request->all());

//     return redirect()->route('pots.index')
//         ->with('success', 'Pot updated successfully');
// }

// /**
//  * @param int $id
//  * @return \Illuminate\Http\RedirectResponse
//  * @throws \Exception
//  */
// public function destroy($id)
// {
//     $pot = Pot::find($id)->delete();

//     return redirect()->route('pots.index')
//         ->with('success', 'Pot deleted successfully');
// }
// }
