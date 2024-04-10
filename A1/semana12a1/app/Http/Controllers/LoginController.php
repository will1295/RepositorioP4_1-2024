<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('login');

    }

    public function login(Request $request){

        /*
        $ingreso = $request->only('user','pass');
        if($ingreso['user']=="Pepito" && $ingreso['pass']=="1234"){
            return redirect('/');
        }
        else{
            return redirect('errorlogin');
        }*/

        $usuario = $request->input('user');
        $contra = $request->input('pass');
        if($usuario=="Pepito" && $contra=="1234"){
            return redirect('/');
        }
        else{
            return redirect('errorlogin');
        }
    }
}
