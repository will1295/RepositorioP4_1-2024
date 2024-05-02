<?php

namespace App\Http\Controllers;
use App\Models\personas;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index(Request $request){
        if($request->isMethod('get')){
            $personas = personas::all();
            return view('Personas.index',compact('personas'));
        }
        
    }

    public function create(Request $request){
        if ($request->isMethod('get')){
            return view('Personas.createform');
        }
        else if($request->isMethod('post')){
            personas::create($request->all());
            return redirect('/');
        }
    }

    /*
    public function createform(){
        return view('Personas.createform');
    }

    public function create(Request $request){
        personas::create($request->all());
        return redirect('/');
    }
    */

    public function formedit($id){
        $personas = personas::findOrFail($id);
        return view('Personas.edit',compact('personas'));
        
    }

    public function update(Request $request, $id){
        $personas = personas::findOrFail($id);
        $personas->update($request->all());
        return redirect('/');

    }
}
