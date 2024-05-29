<?php

use App\Http\Controllers\Api\BooksController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


/*Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');*/

//Route::apiResource('books',BooksController::class);

Route::group(['middleware'=>'auth:sanctum'],function(){
    Route::apiResource('books',BooksController::class);
});

Route::post("login",[UserController::class,'index']);
