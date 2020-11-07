<?php

use App\Http\Controllers\ForgotPasswordController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/home', [UsersController::class, 'home'])->name('home')->middleware('auth');


Route::get('/', [UsersController::class, 'register'])->name('register');

Route::post('/register', [UsersController::class, 'userRegister'])->name('user.register');

Route::get('/login', [UsersController::class, 'login'])->name('login');

Route::post('/login', [UsersController::class, 'userLogin'])->name('user.login');

Route::get('/logout', [UsersController::class, 'userLogout'])->name('user.logout');

Route::get('/forgotpassword', [ForgotPasswordController::class, 'forgotPassword']);
Route::post('/resetlink', [ForgotPasswordController::class, 'sendResetLink']);
Route::get('/reset/password/{token}', [ForgotPasswordController::class, 'showResetPasswordForm']);
Route::post('/reset/password', [ForgotPasswordController::class, 'resetPassword']);
