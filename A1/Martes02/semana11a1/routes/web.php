<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::post('/',function(Request $request){
    //return "Datos enviados correctamente";
    $datos = $request->all();
    return response()->json($datos);
}); 

