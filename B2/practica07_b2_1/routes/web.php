<?php

use App\Http\Controllers\ProductoController;
use App\Http\Controllers\ProvController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProvController::class,'index']);
Route::get('/prod',[ProductoController::class,'index']);