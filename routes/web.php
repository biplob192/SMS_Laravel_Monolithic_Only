<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });



// Central domains
foreach (config('tenancy.central_domains') as $domain) {
    Route::domain($domain)->group(function () {
        Route::get('/', function () {
            return view('welcome'); // central app
        });

        Route::get('/login', function () {
            return view('login');
        })->name('login');

        Route::get('/register', function () {
            // return view('login');
            return 'Register page';
        })->name('register');
    });
}
