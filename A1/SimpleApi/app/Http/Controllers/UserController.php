<?php

namespace App\Http\Controllers;

use App\Models\User;
use Hash;
use Illuminate\Http\Request;

class UserController extends Controller
{
    function index(Request $request){
        $user = User::where('email',$request->email)->first();
        if(!$user || !Hash::check($request->password, $user->password)){
            return response([
                'mensaje' => ["Credenciales incorrectas, intento de nuevo"]
            ],404);
        }
        $token = $user->createToken('token-app')->plainTextToken;
        $response =[
            'user' => $user,
            'token' => $token
        ];
        return response($response,201);
    }
}
