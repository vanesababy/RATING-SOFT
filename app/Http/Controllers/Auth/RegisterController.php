<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\Persona;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegisterController extends Controller
{

    use RegistersUsers;

   
    protected $redirectTo = RouteServiceProvider::HOME;

 
    public function __construct()
    {
        $this->middleware('guest');
    }

 
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:5', 'confirmed'],
        ]);
    }

   
    protected function create(array $data)
    {
        // Crea una nueva persona
        $persona = new Persona([
        ]);

        // Guarda la persona y obtén su ID
        $persona->save();

        // Crea un nuevo usuario y asigna el idPersona
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'idPersona' => $persona->id,
        ]);

        return $user;
    }

    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        // Aquí puedes agregar la lógica de redirección o manejar el registro de manera personalizada
        $this->validator($request->all())->validate();

        $user = $this->create($request->all());

        return $this->registered($request, $user)
            ?: redirect()->route('usuarios.index');
    }

}
