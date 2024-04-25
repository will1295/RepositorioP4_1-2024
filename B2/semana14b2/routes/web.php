<?php

use App\Http\Controllers\ProductosController;
use Illuminate\Support\Facades\Route;

Route::get('/',[ProductosController::class,'index']);
Route::get('/nuevoreg',[ProductosController::class,'forminsertar'])->name('forminsertar');
Route::post('/nuevoreg',[ProductosController::class,'crearreg'])->name('crear');
Route::get('/verreg',[ProductosController::class,'buscarreg'])->name('buscar');
