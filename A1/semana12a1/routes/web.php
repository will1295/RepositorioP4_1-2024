<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PruebaController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\RedirectResponse;

/*
Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/',[PruebaController::class,'index']);
Route::get('login',[LoginController::class,'index']);
Route::post('login',[LoginController::class,'login']);
Route::redirect('errorlogin','login');

