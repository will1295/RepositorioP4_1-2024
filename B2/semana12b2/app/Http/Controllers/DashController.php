<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    public function index(){
        $user = "Admin";
        return view('DashBoard',compact('user'));
    }
}
