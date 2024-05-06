<?php

use App\Http\Controllers\EstudiantesController;
use Illuminate\Support\Facades\Route;

Route::get('/',[EstudiantesController::class,'index']);
