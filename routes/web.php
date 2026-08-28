<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web & API Routes
|--------------------------------------------------------------------------
*/

// Auth Routes
Route::redirect('/', '/login')->name('login');
Route::get('/login', [AuthController::class, 'showLogin']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout']);
Route::get('/logout', [AuthController::class, 'logout']);

// Protected Web Routes
Route::middleware('auth')->group(function () {

    // Admin Group
    Route::middleware('isAdmin')->prefix('admin')->group(function () {
        Route::get('/', [AdminController::class, 'index']);
        Route::get('/account', [AccountController::class, 'index']);
        Route::get('/account/create', [AccountController::class, 'create']);
        Route::get('/account/edit/{id}', [AccountController::class, 'edit']);
        Route::get('/account/pass/{id}', [AccountController::class, 'password']);
        Route::get('/settings/profile', [ProfileController::class, 'showProfile']);
        Route::get('/settings/change-password', [ProfileController::class, 'showChangePassword']);
    });

    // User Group
    Route::middleware('isUser')->prefix('user')->group(function () {
        Route::redirect('/', '/user/dashboard');
        Route::get('/dashboard', [ApplicationController::class, 'dashboard']);
        Route::get('/applied', [ApplicationController::class, 'index']);
        Route::get('/applied/create', [ApplicationController::class, 'create']);
        Route::get('/applied/show/{id}', [ApplicationController::class, 'show']);
        Route::get('/applied/edit/{id}', [ApplicationController::class, 'edit']);
        Route::get('/settings/profile', [ProfileController::class, 'showProfile']);
        Route::get('/settings/change-password', [ProfileController::class, 'showChangePassword']);
    });

    // AngularJS REST API Endpoints
    Route::prefix('api')->group(function () {
        // Profile API
        Route::post('/profile', [ProfileController::class, 'updateProfile']);
        Route::post('/profile/password', [ProfileController::class, 'updatePassword']);

        // Account API (Admin)
        Route::get('/accounts', [AccountController::class, 'apiIndex']);
        Route::post('/accounts', [AccountController::class, 'apiStore']);
        Route::put('/accounts/{id}', [AccountController::class, 'apiUpdate']);
        Route::post('/accounts/{id}/password', [AccountController::class, 'apiUpdatePassword']);
        Route::delete('/accounts/{id}', [AccountController::class, 'apiDestroy']);

        // Applications API (User)
        Route::get('/applications', [ApplicationController::class, 'apiIndex']);
        Route::get('/applications/stats', [ApplicationController::class, 'apiStats']);
        Route::get('/applications/{id}', [ApplicationController::class, 'apiShow']);
        Route::post('/applications', [ApplicationController::class, 'apiStore']);
        Route::put('/applications/{id}', [ApplicationController::class, 'apiUpdate']);
        Route::delete('/applications/{id}', [ApplicationController::class, 'apiDestroy']);
    });
});