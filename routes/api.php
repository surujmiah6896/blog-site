<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TaskController;

//route for post
Route::apiResource('posts', PostController::class);

//route for register
Route::post('/register', [AuthController::class, 'register']);

//route for task
Route::post('/tasks', [TaskController::class, 'store']);
Route::patch('/tasks/{id}', [TaskController::class, 'update']);
Route::get('/tasks/pending', [TaskController::class, 'getPending']);
