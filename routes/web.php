<?php

use App\Http\Controllers\Web\Auth\EmailVerificationController;
use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\Auth\LogoutController;
use App\Http\Controllers\Web\Auth\PasswordController;
use App\Http\Controllers\Web\Auth\RegisterController;
use Illuminate\Support\Facades\Route;


// Central domains
foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('/', function () {
            return view('welcome'); // central app
        });

        require __DIR__ . '/authRoutes.php';

        // Route::get('/login', function () {
        //     return view('login');
        // })->name('login');

        // Route::get('/register', function () {
        //     // return view('login');
        //     return 'Register page';
        // })->name('register');
    });


    // Route::prefix('auth')->name('auth.')->group(function () {

    //     Route::middleware('guest')->group(function () {
    //         Route::get('/login', [LoginController::class, 'loginForm'])->name('login.form');
    //         Route::post('/login', [LoginController::class, 'login'])->name('login');
    //         Route::get('/register', [RegisterController::class, 'registerForm'])->name('register.form');
    //         Route::post('/register', [RegisterController::class, 'register'])->name('register');
    //         Route::get('/forgot-password', [PasswordController::class, 'forgotPasswordForm'])->name('password.request');
    //         Route::post('/forgot-password', [PasswordController::class, 'sendResetLink'])->name('password.email');
    //         Route::get('/reset-password/{token}', [PasswordController::class, 'resetPasswordForm'])->name('password.reset');
    //         Route::post('/reset-password', [PasswordController::class, 'resetPassword'])->name('password.update');
    //     });

    //     Route::middleware('auth')->group(function () {
    //         Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
    //         Route::get('/email/verify', [EmailVerificationController::class, 'verifyNotice'])->name('verification.notice');
    //         Route::get('/email/verify/{id}/{hash}', [EmailVerificationController::class, 'verify'])->middleware('signed')->name('verification.verify');
    //         Route::post('/email/resend', [EmailVerificationController::class, 'resendVerification'])->name('verification.resend');
    //     });
    // });
}
