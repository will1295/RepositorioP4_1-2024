<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListaController extends Controller
{
    public function index(){
        $material=[
            ['id'=>1,'nombre'=>"Resma de papel bond",'descripcion'=>"Tamaño carta","precio"=>25],
            ['id'=>2,'nombre'=>"Caja de lapiceros",'descripcion'=>"Marca BIC","precio"=>2510],
            ['id'=>3,'nombre'=>"Lapices de colores",'descripcion'=>"Marca Facela","precio"=>2515.50]
        ];
        return view('Lista',compact('material'));
    }
}
