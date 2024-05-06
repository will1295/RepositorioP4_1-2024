<?php

namespace App\Http\Controllers;

use App\Models\estudiantes;
use Illuminate\Http\Request;

class EstudiantesController extends Controller
{
    public function index(){
        //$estudiantes = estudiantes::all();
        $estudiantes = estudiantes::with('materias')->get();
        return view('index',compact('estudiantes'));

    }

    public function formcrear(){

    }

    public function guardar(){

    }
}
