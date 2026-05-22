<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
Route::get('/esemenyeks',[EsemenyekController::class,'index']);
Route::put('/esemenyeks',[EsemenyekController::class,'update']);
Route::get('/kategoriaks',[KategoriakController::class,'index']);
Route::delet('/esemenyeks/{id}',[EsemenyekController::class,'destroy']);







