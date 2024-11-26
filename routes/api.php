<?php

use App\Http\Controllers\BukuController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('/buku')->group(function(){
    Route::get('/',[BukuController::class,'index']);
    Route::get('/detil/{id}',[BukuController::class,'show']);
    Route::post('/cari',[BukuController::class,'cari']);
    Route::post('/tambah',[BukuController::class,'store']);
    Route::delete('/hapus/{id}',[BukuController::class,'destroy']);
    Route::patch('/edit/{id}',[BukuController::class,'update']);
});