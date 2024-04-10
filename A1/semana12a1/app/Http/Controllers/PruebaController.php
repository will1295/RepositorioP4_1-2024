<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PruebaController extends Controller
{
    public function index(){
        $nombres = ["Juan","Maria","Pepe","Luis"];
        return view ('Home',compact('nombres'));
    }
}
