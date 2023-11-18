<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Validation\ValidationException;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = 'Administrador';



    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    }

    protected function sendFailedLoginResponse(Request $request)
    {
        return redirect()->route('login')->with('error', 'El correo electrónico o la contraseña son incorrectos.');
    }


    protected function isApiRequest($request)
    {
        return strpos($request->getRequestUri(), '/api/') !== false;
    }


}