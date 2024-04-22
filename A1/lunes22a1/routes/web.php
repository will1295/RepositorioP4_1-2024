<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductosController::class,'index'])->name('productosindex');
Route::get('/crear',[ProductosController::class,'create'])->name('crearpro');
Route::post('/crear',[ProductosController::class,'guardar'])->name('insertarpro');