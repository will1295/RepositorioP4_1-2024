<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});
*/ 

Route::get('/',[HomeController::class,'index'])->name('Home');
Route::get('prod',[ProductosController::class,'index'])->name('Pro');