<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/login');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'login_backend']);
Route::get('/logout', [AuthController::class, 'logout']);

// Admin
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/settings/profile', [AdminController::class, 'profile']);
Route::post('/admin/settings/profile', [AdminController::class, 'profile_backend']);
Route::get('/admin/settings/change-password', [AdminController::class, 'change_password']);
Route::post('/admin/settings/change-password', [AdminController::class, 'change_password_backend']);
// User
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/settings/profile', [UserController::class, 'profile']);
Route::post('/user/settings/profile', [UserController::class, 'profile_backend']);
Route::get('/user/settings/change-password', [UserController::class, 'change_password']);
Route::post('/user/settings/change-password', [UserController::class, 'change_password_backend']);
Route::get('/user/applied', [UserController::class, 'applied']);
Route::get('/user/applied/create', [UserController::class, 'applied_create']);
Route::post('/user/applied/store', [UserController::class, 'applied_store']);
Route::get('/user/applied/show/{id}', [UserController::class, 'applied_show']);
Route::get('/user/applied/edit/{id}', [UserController::class, 'applied_edit']);
Route::put('/user/applied/update/{id}', [UserController::class, 'applied_update']);
Route::get('/user/applied/destroy/{id}', [UserController::class, 'applied_destroy']);