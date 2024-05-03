<?php

namespace App\Http\Controllers;

use App\Models\tblnotas;
use Illuminate\Http\Request;

class NotaController extends Controller
{
    public function index(){
        return view('Notas.Insert');
    }

    public function guardar(Request $request){
        tblnotas::create($request->all());
        return redirect('/');

    }
}
