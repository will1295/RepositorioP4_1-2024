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

    public function editform($id){
        $producto = productos::findOrFail($id);
        return view('Productos.edit',compact('producto'));
    }

    public function actualizar(Request $request,$id){
        $producto = productos::findOrFail($id);
        $producto->update($request->all());
        return redirect('/');

    }

    public function eliminar($id){
        $producto = productos::findOrFail($id);
        $producto->delete();
        return redirect('/');
    }
}
