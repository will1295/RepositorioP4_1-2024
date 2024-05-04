<?php

use App\Http\Controllers\CarrosController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CarrosController::class,'index']);
//Route::get('/guardar',[CarrosController::class,'formguardar'])->name('formguardar');
//Route::post('/guardar',[CarrosController::class,'guardar']);
Route::match(['get','post'],'/guardar',[CarrosController::class,'guardar']);
Route::get('/editar/{id}',[CarrosController::class,'editarform'])->name('formeditar');
Route::put('/editar/{id}',[CarrosController::class,'update'])->name('update');
Route::delete('/{id}',[CarrosController::class,'delete'])->name('delete');