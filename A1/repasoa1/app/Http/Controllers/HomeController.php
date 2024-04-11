<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $user = 'Admin';
        return view('Home',compact('user'));
    }
}
