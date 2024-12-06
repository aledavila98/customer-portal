<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;

Route::get('/', [DashboardController::class, 'homePage']);

// Authentication routes

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('authenticate/', [AuthController::class, 'authenticate'])->name('authenticate');

Route::group([
        'prefix' => '/',
        'middleware' => ['auth']
],  function () {
        Route::get('home', [DashboardController::class, 'dashboard'])->name('dashboard');
    }
);
