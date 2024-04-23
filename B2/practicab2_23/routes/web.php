<?php

use App\Http\Controllers\CarrosController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[CarrosController::class,'index']);
Route::get('/form',[CarrosController::class,'createform']);
