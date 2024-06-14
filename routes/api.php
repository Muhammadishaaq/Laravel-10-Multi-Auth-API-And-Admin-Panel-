<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\Auth\{
   ForgotPasswordController,
   UserController,
};

Route::post('/user/register', [UserController::class, 'register'])->name('user.register');
Route::post('/user/login',    [UserController::class, 'login'])->name('user.login');

Route::post('forgot-password', [ForgotPasswordController::class, 'sendResetLink']);
Route::post('verify-otp', [ForgotPasswordController::class, 'verifyOTP']);
Route::post('reset-password', [ForgotPasswordController::class, 'resetPassword']);

Route::middleware(['auth:sanctum'])->prefix('user')->group( function () {

    Route::post('/update/profile',  [UserController::class, 'update_profile']);
    Route::post('/update/password', [UserController::class, 'update_password']);

 




    
});