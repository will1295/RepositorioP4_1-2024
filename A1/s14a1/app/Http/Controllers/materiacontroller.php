<?php

namespace App\Http\Controllers;

use App\Models\tblmaterias;
use Illuminate\Http\Request;

class materiacontroller extends Controller
{
    public function index(){
        $materias = tblmaterias::all();
        return view('materias.index',compact('materias'));
    }
}
