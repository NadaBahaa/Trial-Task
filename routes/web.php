<?php

use Illuminate\Support\Facades\Route;


Route::get('/tasks', [TaskController::class, 'index']);
Route::delete('/tasks/{id}', [TaskController::class, 'destroy']);


Route::get('/', function () {
    return view('welcome');
});
