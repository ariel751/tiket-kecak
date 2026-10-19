<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TiketController;

// Route bawaan Laravel Sanctum
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Route untuk API Tiket (CRUD lengkap)
Route::apiResource('tikets', TiketController::class);