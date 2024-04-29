<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductosController::class,'index'])->name('productosindex');
Route::get('/crear',[ProductosController::class,'create'])->name('crearpro');
Route::post('/crear',[ProductosController::class,'guardar'])->name('insertarpro');
Route::get('/editar/{id}',[ProductosController::class,'editform'])->name('editar');
Route::put('/actualizar/{id}',[ProductosController::class,'actualizar'])->name('actualizar');
Route::delete('/eliminar/{id}',[ProductosController::class,'eliminar'])->name('eliminar');