<?php

declare(strict_types=1);

use App\Http\Controllers\Web\Auth\LoginController;
use App\Http\Controllers\Web\Auth\PasswordController;
use App\Http\Controllers\Web\Auth\RegisterController;
use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {
    // Landing page
    // Route::get('/', fn() => view('landing_page_tenant'))->name('tenant.home');
    Route::get('/apply', fn () => view('landing_page_tenant'))->name('tenant.apply');
    Route::get('/', function () {

        $school = (object) [
            'name' => 'Green Valley High School',
            'logo' => 'https://via.placeholder.com/150',
            'cover_image' => 'https://via.placeholder.com/1200x400',
            'description' => 'A leading institution focused on academic excellence and character building.',
            'address' => '123 Main Street, City, Country',
            'phone' => '+1234567890',
            'email' => 'info@greenvalley.edu',
            'website' => 'https://greenvalley.edu',
            'established_year' => 1998,
            'principal_name' => 'John Doe',
            'features' => [
                'Modern classrooms',
                'Science labs',
                'Sports facilities',
                'Library',
            ],
            'stats' => [
                'students' => 1200,
                'teachers' => 75,
                'classes' => 40,
            ],
            'social_links' => [
                'facebook' => 'https://facebook.com/greenvalley',
                'twitter' => 'https://twitter.com/greenvalley',
                'linkedin' => 'https://linkedin.com/school/greenvalley',
            ],
        ];

        return view('landing_page_tenant', compact('school'));
    })->name('tenant.home');

    Route::get('/login', [LoginController::class, 'loginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');
    Route::get('/register', [RegisterController::class, 'registerForm'])->name('register.form');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
    Route::get('/forgot-password', [PasswordController::class, 'forgotPasswordForm'])->name('password.request');
    Route::post('/forgot-password', [PasswordController::class, 'sendResetLink'])->name('password.email');
    Route::get('/reset-password/{token}', [PasswordController::class, 'resetPasswordForm'])->name('password.reset');
    Route::post('/reset-password', [PasswordController::class, 'resetPassword'])->name('password.update');
});
