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

Route::get('/admin', [AdminController::class, 'index']);
Route::redirect('/user', '/user/applied');
Route::get('/user/applied', [UserController::class, 'applied']);
Route::get('/user/applied/create', [UserController::class, 'applied_create']);
Route::post('/user/applied/store', [UserController::class, 'applied_store']);