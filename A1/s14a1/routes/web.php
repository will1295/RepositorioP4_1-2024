<?php

use App\Http\Controllers\docentecontroller;
use App\Http\Controllers\materiacontroller;
use Illuminate\Support\Facades\Route;
/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[docentecontroller::class,'index']);
Route::get('/materia',[materiacontroller::class,'index']);
