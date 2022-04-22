<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtteController;

//トップページの表示
Route::get('/', [AtteController::class, 'index']);

//会員登録
Route::get('/register', [App\Http\Controllers\AtteController::class, 'create']);
Route::post('/register', [App\Http\Controllers\AtterController::class, 'store']);