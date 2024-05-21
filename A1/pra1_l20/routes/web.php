<?php

use App\Http\Controllers\EjemploController;
use Illuminate\Support\Facades\Route;

Route::get('/',[EjemploController::class,'index']);