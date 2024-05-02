<?php

namespace App\Http\Controllers;

use App\Models\tblcarros;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function index(){
        $carros = tblcarros::all();
        return view ('carros.index',compact('carros'));
    }

    /*public function createform(){
        return view('carros.addcarros');
    }

    public function crear(Request $request){
        tblcarros::create($request->all());
        return redirect('/');
    }*/

    public function create(Request $request){
        if($request->isMethod('get')){
            return view('carros.addcarros');
        }
        else if($request->isMethod('post')){
            tblcarros::create($request->all());
            return redirect('/');
        }

    }

    public function formedit($id){
        $registro = tblcarros::findOrFail($id);
        return view ('Carros.edit',compact('registro'));
    }

    public function update(Request $request,$id){
        $registro = tblcarros::findOrFail($id);
        $registro->update($request->all());
        return redirect('/');

    }

    public function borrar($id){
        $registro = tblcarros::findOrFail($id);
        $registro->delete();
        return redirect('/');

    }
}
