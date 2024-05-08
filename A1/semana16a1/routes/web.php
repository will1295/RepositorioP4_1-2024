<?php

use App\Http\Controllers\TelefonoController;
use Illuminate\Support\Facades\Route;

Route::get('/',[TelefonoController::class,'index']);
Route::get('/crear',[TelefonoController::class,'crear']);
Route::post('/crear',[TelefonoController::class,'guardar']);