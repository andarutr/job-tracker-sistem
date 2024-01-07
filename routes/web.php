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
Route::middleware('isAdmin')->prefix('admin')->group(function(){
	Route::get('/', [AdminController::class, 'index']);
	Route::get('/settings/profile', [AdminController::class, 'profile']);
	Route::post('/settings/profile', [AdminController::class, 'profile_backend']);
	Route::get('/settings/change-password', [AdminController::class, 'change_password']);
	Route::post('/settings/change-password', [AdminController::class, 'change_password_backend']);
	Route::get('/account', [AdminController::class, 'account']);
	Route::get('/account/create', [AdminController::class, 'account_create']);
	Route::post('/account/create', [AdminController::class, 'account_create_backend']);
	Route::get('/account/edit/{id}', [AdminController::class, 'account_edit']);
	Route::post('/account/edit/{id}', [AdminController::class, 'account_edit_backend']);
	Route::get('/account/pass/{id}', [AdminController::class, 'account_pass']);
	Route::post('/account/pass/{id}', [AdminController::class, 'account_pass_backend']);
	Route::get('/account/destroy/{id}', [AdminController::class, 'account_destroy']);
});

// User
Route::middleware('isUser')->prefix('user')->group(function(){
	Route::get('/', [UserController::class, 'index']);
	Route::get('/settings/profile', [UserController::class, 'profile']);
	Route::post('/settings/profile', [UserController::class, 'profile_backend']);
	Route::get('/settings/change-password', [UserController::class, 'change_password']);
	Route::post('/settings/change-password', [UserController::class, 'change_password_backend']);
	Route::get('/applied', [UserController::class, 'applied']);
	Route::get('/applied/pencarian', [UserController::class, 'applied_search']);
	Route::get('/applied/create', [UserController::class, 'applied_create']);
	Route::post('/applied/store', [UserController::class, 'applied_store']);
	Route::get('/applied/show/{id}', [UserController::class, 'applied_show']);
	Route::get('/applied/edit/{id}', [UserController::class, 'applied_edit']);
	Route::put('/applied/update/{id}', [UserController::class, 'applied_update']);
	Route::get('/applied/destroy/{id}', [UserController::class, 'applied_destroy']);
});