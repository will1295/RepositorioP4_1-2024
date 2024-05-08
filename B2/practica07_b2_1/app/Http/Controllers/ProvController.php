<?php

namespace App\Http\Controllers;

use App\Models\proveedores;
use Illuminate\Http\Request;

class ProvController extends Controller
{
    public function index(){
        $prov = proveedores::all();
        return view('Prov.index',compact('prov'));
    }
}
