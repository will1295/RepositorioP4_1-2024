<?php

namespace App\Http\Controllers;

use App\Models\marcas;
use Illuminate\Http\Request;

class MarcaController extends Controller
{
    public function index(){
        $marcas = marcas::all();
        return view('Marca.index',compact('marcas'));
        
    }
}
