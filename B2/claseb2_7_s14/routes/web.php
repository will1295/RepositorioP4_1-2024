<?php

use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('index');
});*/

//Route::get('/',[PersonaController::class,'index']);
//Route::get('/form',[PersonaController::class,'createform'])->name('formcrear');
//Route::post('/form',[PersonaController::class,'create'])->name('crear');
Route::get('/edit/{id}',[PersonaController::class,'formedit'])->name('formedit');
Route::put('/edit/{id}',[PersonaController::class,'update'])->name('update');

Route::match(['get','post'],'/',[PersonaController::class,'index']);
Route::match(['get','post'],'/form',[PersonaController::class,'create']);
