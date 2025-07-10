<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:api')->get('/user', [AuthController::class, 'user']);

Route::middleware('auth:api')->post('/logout', [AuthController::class, 'logout']);
