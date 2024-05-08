<?php

use App\Http\Controllers\CarroController;
use App\Http\Controllers\MarcaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[MarcaController::class,'index']);
Route::get('/carro',[CarroController::class,'index']);