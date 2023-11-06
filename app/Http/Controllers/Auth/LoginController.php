<?php

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth; 
use Illuminate\Support\Facades\Validator; 
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{

    use AuthenticatesUsers;

    protected $redirectTo = 'Administrador';



    public function __construct()
    {
        $this->middleware('guest')->except('logout');

    } 
    public function login(Request $request)
      {
          if (!Auth::attempt($request->only('email', 'password'))) {
              return response()
              ->json(['message' => 'Unauthorized'], 401);
          }
 
          $user = User::where('email', $request['email'])->firstOrFail();
 
          $token = $user->createToken('auth_token')->plainTextToken;
 
          return response()
          ->json([
              'message'      => 'Hola! ' . $user->name,
              'access_token']);
}
}