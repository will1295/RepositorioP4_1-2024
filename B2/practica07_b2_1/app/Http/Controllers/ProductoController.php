<?php

namespace App\Http\Controllers;

use App\Models\productos;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    public function index(){
        //$prod = productos::all();
        $prod = productos::with('proveedores')->get();
        return view('Prod.index',compact('prod'));
    }
}
