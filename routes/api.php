<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::prefix('user/')->group(function () {
    Route::get('', [AuthController::class, 'get'])->middleware('auth:sanctum');
    Route::post('register/', [AuthController::class, 'store']);
    Route::post('issue_token/', [AuthController::class, 'issueToken']);
});
