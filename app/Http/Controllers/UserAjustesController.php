<?php

namespace App\Http\Controllers;
use App\Models\UserAjustes;
use App\Models\User;
use App\Models\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

class UserAjustesController extends Controller
{
     public function Miperfil(){
return view('ConfigurarPerfil');
    }


public function Actualizar(Request $request){




    $file=$request->file("Avatar");
    $nombreArchivo = "img_".time().".".$file->guessExtension();
    $request->file('Avatar')->storeAs('public/Avatar', $nombreArchivo );
    $avatar['Avatar']= "$nombreArchivo";


$user = Auth::user();
$user->avatar = $nombreArchivo;
$user->save();

$user = Auth::user();
$name = $request->name;
$email = $request->email;
    $sqlBDUpdateName = DB::table('users')
    ->where('id', $user->id)
    ->update(['name'=>$name, 'email'=>$email]);
   
return redirect()->back()->with('name','El nombre fue cambiado correctamente.');;
// return $name;

}


public function perfil(){
    return view('configurarPerfil', array('user'=>Auth::user()) ); 
}


public function avatar(Request $request){

    $file=$request->file("Avatar");
    $nombreArchivo = "img_".time().".".$file->guessExtension();
    $request->file('Avatar')->storeAs('public/Avatar', $nombreArchivo );
    $avatar['Avatar']= "$nombreArchivo";


$user = Auth::user();
$user->avatar = $nombreArchivo;
$user->save();

return view('configurarPerfil', array('user'=>Auth::user()) );
}

}