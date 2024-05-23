<?php

use App\Http\Controllers\LibrosController;
use Illuminate\Support\Facades\Route;

Route::get('/',[LibrosController::class,'index']);
Route::get('/listalibros',[LibrosController::class,'lista']);
Route::post('/',[LibrosController::class,'store']);