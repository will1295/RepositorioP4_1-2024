<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $user = "Juan";
        return view('Index',compact('user'));
    }
}
