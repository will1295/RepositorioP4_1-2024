<?php

namespace App\Http\Controllers;

use App\Models\tbldocentes;
use Illuminate\Http\Request;

class docentecontroller extends Controller
{
    public function index(){
        $docentes = tbldocentes::all();
        return view('docentes.index',compact('docentes'));
    }
}
