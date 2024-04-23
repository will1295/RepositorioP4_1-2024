<?php

namespace App\Http\Controllers;
use App\Models\personas;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index(){
        $personas = personas::all();
        return view('Personas.index',compact('personas'));
    }

    public function createform(){
        return view('Personas.createform');
    }

    public function create(Request $request){
        personas::create($request->all());
        return redirect('/');
    }
}
