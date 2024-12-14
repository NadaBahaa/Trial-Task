<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::middleware('api')->get('/tasks', [TaskController::class, 'index']);


// Route::get('/tasks', [TaskController::class, 'index']);
// Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);