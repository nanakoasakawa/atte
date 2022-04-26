<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtteController;

//トップページの表示
Route::get('/', [AtteController::class, 'index']);

//会員登録
Route::get('/register', [App\Http\Controllers\AtteController::class, 'create']);
Route::post('/register', [App\Http\Controllers\AtteController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
