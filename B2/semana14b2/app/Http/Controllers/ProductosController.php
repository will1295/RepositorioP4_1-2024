<?php

namespace App\Http\Controllers;

use App\Models\tblproductos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $productos = tblproductos::all();
        return view ('Productos.Index',compact('productos'));
    }

    public function forminsertar(){
        return view('Productos.CreateForm');
    }

    public function crearreg(Request $request){
        tblproductos::create($request->all());
        return redirect('/');

    }

    public function buscarreg(Request $request){
        $nombre = $request->input('nombre');
        $registro = tblproductos::where('nombre',$nombre)->first();
        return view ('Productos.VerRegistro',compact('registro'));



    }
}
