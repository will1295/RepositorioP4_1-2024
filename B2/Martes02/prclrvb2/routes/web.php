<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hola_mundo',function(){
    return "Hola Mundo";
});

Route::get('/bienvenido',function(){
    return view('bienvenido');

});