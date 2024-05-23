<?php

use App\Http\Controllers\PersonasController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PersonasController::class,'index']);
Route::get('/listado',[PersonasController::class,'lista']);
Route::post('/',[PersonasController::class,'store']);