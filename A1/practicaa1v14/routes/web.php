<?php

use App\Http\Controllers\CarrosController;
use Illuminate\Support\Facades\Route;

Route::get('/',[CarrosController::class,'index']);
Route::post('/',[CarrosController::class,'guardar']);