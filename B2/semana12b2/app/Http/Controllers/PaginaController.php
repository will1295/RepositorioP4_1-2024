<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginaController extends Controller
{
    public function index(){
        return view('Pagina');
    }

    public function sumar(Request $request){
        $num1 = $request->input('n1');
        $num2 = $request->input('n2');
        return $num1+$num2;
    }


}
