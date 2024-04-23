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

    public function createform(){
        return view('carros.addcarros');
    }
}
