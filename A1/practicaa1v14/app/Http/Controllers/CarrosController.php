<?php

namespace App\Http\Controllers;

use App\Models\tblcarros;
use Illuminate\Http\Request;

class CarrosController extends Controller
{
    public function index(){
        return view('Carros.index');
    }

    public function guardar(Request $request){
        tblcarros::create($request->all());
        return redirect('/');

    }
}
