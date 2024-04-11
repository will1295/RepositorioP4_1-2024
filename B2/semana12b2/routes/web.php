<?php

use App\Http\Controllers\DashController;
use App\Http\Controllers\PaginaController;
use Illuminate\Support\Facades\Route;

/*
Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/',[PaginaController::class,'index']);
Route::post('/',[PaginaController::class,'sumar']);
/*Route::get('/Pagina',function(){
    return view('Pagina');
});*/
Route::get('/dashboard',[DashController::class,'index']);


//Route::get('/','App\Http\Controllers\PaginaController@index');
Route::redirect('/crearusr','Pagina');