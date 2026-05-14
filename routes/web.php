<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


Route::get('/', [TaskController::class, 'index']);

Route::get('/create', [TaskController::class, 'create']);

Route::post('/store', [TaskController::class, 'store']);

Route::get('/show/{id}', [TaskController::class, 'show']);

Route::get('/edit/{id}', [TaskController::class, 'edit']);

Route::post('/update/{id}', [TaskController::class, 'update']);

Route::get('/delete/{id}', [TaskController::class, 'destroy']);