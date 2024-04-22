<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $productos = productos::all();
        return view('Productos.index',compact('productos'));
    }

    public function create(){
        return view('Productos.create');
    }

    public function guardar(Request $request){
        productos::create($request->all());
        return redirect('/');
    }
}
