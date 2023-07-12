<?php

namespace App\Http\Controllers\V1;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
  public function login(Request $request){
    $this->validateLogin($request);

    // login true
    if(Auth::attempt($request -> only('emial', 'password'))){
      return response() -> json([
        'token' => $request->user()->createToken($request->name)->plainTextToken,
        'message' => 'Succes'
      ]);

    }

    // login false
    return response()->json([
      'message' => 'Unhatorized'
    ], 401);



  }

  public function validateLogin(Request $request){
    return $request ->validate([
      'email' => 'required|email',
      'password' => 'required',
      'name' => 'required'
    ]); 
  }
}
