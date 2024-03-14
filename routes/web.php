<?php

use Livewire\Volt\Volt;
use Illuminate\Support\Facades\Route;
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
Volt::route('/login', 'auth/login');

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
Route::middleware('isUser')->group(function(){
	Route::prefix('user')->group(function(){
		Route::redirect('/', '/user/dashboard');
		Volt::route('/dashboard', 'user/dashboard');
		// Route::get('/settings/profile', [UserController::class, 'profile']);
		// Route::post('/settings/profile', [UserController::class, 'profile_backend']);
		// Route::get('/settings/change-password', [UserController::class, 'change_password']);
		// Route::post('/settings/change-password', [UserController::class, 'change_password_backend']);
		Volt::route('/applied', 'user/applied/index');
		Volt::route('/applied/create', 'user/applied/create');
		Volt::route('/applied/show/{id}', 'user/applied/show');
		Volt::route('/applied/edit/{id}', 'user/applied/update');
	});
});