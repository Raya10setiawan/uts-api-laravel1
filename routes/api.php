<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MahasiswaController;

// Endpoint publik untuk login
Route::post('/login', [AuthController::class, 'login']);

// Endpoint yang dilindungi Sanctum
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/mahasiswa', [MahasiswaController::class, 'index']);
});
