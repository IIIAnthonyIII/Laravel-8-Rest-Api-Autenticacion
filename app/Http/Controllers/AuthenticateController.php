<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticateController extends Controller
{
    public function login(Request $request){
        if (Auth::attempt($request->only('email', 'password'))){
            $user = User::where('email', $request['email'])->firstOrFail();
            $token = $user->createToken('auth_token')->plainTextToken;

            return response()->json(['message' => 'Hola '.$user->name.' con token: '.$token]);
        }else{
            return response()->json(['message' => 'El usuario ingresado no existe']);
        }
    }
}