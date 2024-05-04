<?php

namespace App\Http\Controllers;

use App\Models\tblcarros;
use Illuminate\Http\Request;

class CarrosController extends Controller
{

    public function index(Request $request){
        $carros = tblcarros::all();
        return view('Carros.Index',compact('carros'));
    }

    public function guardar(Request $request){
        if($request->isMethod('GET')){
            return view('Carros.FormGuardar');
        }else if($request->isMethod('POST')){
            tblcarros::create($request->all());
            return redirect('/');
        }
    }

    /*
    public function formguardar(){
        return view('Carros.FormGuardar');
    }

    public function guardar(Request $request){
        tblcarros::create($request->all());
        return redirect('/');

    }
    */
    public function editarform($id){
        $registro = tblcarros::findOrFail($id);
        return view('Carros.Editar',compact('registro'));

    }

    public function update(Request $request, $id){
        $registro = tblcarros::findOrFail($id);
        $registro->update($request->all());
        return redirect('/');

    }

    public function delete($id){
        $registro = tblcarros::findOrFail($id);
        $registro->delete();
          return redirect('/');

    }
}
