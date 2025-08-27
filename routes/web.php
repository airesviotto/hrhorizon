<?php

use Illuminate\Support\Facades\Route;

//MIDDLEWARE GUEST
Route::middleware(['guest'])->group(function() {
    Route::view('/', 'guest.landing-page')->name('landing-page');
     Route::view('/login', 'auth.login')->name('login');
    // Route::view('/login', 'auth.login')->name('login');

    // //Sending email confirmation and password definition
    // Route::get('/confirm-account/{token}', [ConfirmAccountController::class, 'confirmAccount'])->name('confirm-account');
    // Route::post('/confirm-account', [ConfirmAccountController::class, 'confirmAccountSubmit'])->name('confirm-account-submit');
});
