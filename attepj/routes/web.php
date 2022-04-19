<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AtteController;

Route::get('/', [AtteController::class, 'index']);

Route::post('/atte/create', [AtteController::class, 'create']);
Route::post('/atte/update', [AtteController::class, 'update']);
Route::post('/atte/delete', [AtteController::class, 'delete']);