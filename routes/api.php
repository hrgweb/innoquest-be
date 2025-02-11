<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::post('/auth/login', [AuthController::class, 'login']);
Route::post('/auth/logout', [AuthController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/auth/register', [AuthController::class, 'register']);

Route::apiResource('users', UserController::class);
Route::apiResource('tasks', TaskController::class);
Route::get('/tasks/users/{task}/assign', [TaskController::class, 'assignTotal']);
Route::get('/tasks/users/{task}/completed', [TaskController::class, 'completedTotal']);
Route::post('/tasks/{task}/archive', [TaskController::class, 'archive']);
