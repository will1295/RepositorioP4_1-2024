<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('index');
});*/

Route::get('/',[PersonaController::class,'index']);
Route::get('/form',[PersonaController::class,'createform']);
Route::post('/form',[PersonaController::class,'create'])->name('crear');
