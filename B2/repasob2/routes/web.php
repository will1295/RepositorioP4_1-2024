<?php

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ListaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[IndexController::class,'index']);
Route::get('/listado',[ListaController::class,'index']);
