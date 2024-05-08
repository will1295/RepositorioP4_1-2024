<?php

namespace App\Http\Controllers;

use App\Models\telefonos;
use App\Models\usuarios;
use Illuminate\Http\Request;

class TelefonoController extends Controller
{
    public function index(){
        $telefonos = telefonos::with('usuarios')->get();
        return view ('Telefono.index',compact('telefonos'));
    }

    public function crear(){
        $usuarios = usuarios::all();
        return view('Telefono.create',compact('usuarios'));

    }

    public function guardar(Request $request){
        telefonos::create($request->all());
        return redirect('/');

    }

    public function mostrar(){

    }
}
