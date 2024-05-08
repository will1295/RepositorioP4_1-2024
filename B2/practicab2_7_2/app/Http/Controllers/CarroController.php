<?php

namespace App\Http\Controllers;

use App\Models\carro;
use Illuminate\Http\Request;

class CarroController extends Controller
{
    public function index(){
        $carros = carro::with('marcas')->get();
        return view('Carro.index',compact('carros'));
        
    }
}
