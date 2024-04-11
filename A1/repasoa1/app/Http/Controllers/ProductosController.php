<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductosController extends Controller
{
    public function index(){
        $productos=[
            ['Cocacola','Cocacola de 2LT',2.25],
            ['Jabon para lavar platos','Jabon axion',0.25],
            ['Aceite para cocina','Aceite Mirasol',0.35]
        ];
        return view('Productos',compact('productos'));
    }
}
