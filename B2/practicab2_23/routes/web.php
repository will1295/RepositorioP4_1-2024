<?php

use App\Http\Controllers\CarrosController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[CarrosController::class,'index']);
//Route::get('/form',[CarrosController::class,'createform'])->name('createform');
//Route::post('/form',[CarrosController::class,'crear'])->name('crear');
Route::match(['get','post'],'/crear',[CarrosController::class,'create']);
Route::get('/editform/{id}',[CarrosController::class,'formedit'])->name('editform');
Route::put('/editform/{id}',[CarrosController::class,'update'])->name('update');
Route::delete('/borrar/{id}',[CarrosController::class,'borrar'])->name('borrar');