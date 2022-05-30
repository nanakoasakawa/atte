<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtteController;

//トップページの表示
Route::get('/', [AtteController::class, 'index']);

//会員登録
Route::get('/register', [App\Http\Controllers\AtteController::class, 'create']);
Route::post('/register', [App\Http\Controllers\AtteController::class, 'store']);
Auth::routes([
    'register' => false,  // ユーザー登録用のルート。デフォルトは true
]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//日付別一覧の表示
Route::get('/date', [AtteController::class, 'date']);
Route::post('/date', [AtteController::class, 'date']);

//打刻システム
Route::post('/', [AtteController::class, 'startadd']);