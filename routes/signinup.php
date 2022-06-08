<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignUpController;

Route::prefix('create-business-account')->group(function () {
    Route::name('signup.')->group(function () {
        Route::controller(SignUpController::class)->group(function () {
            Route::get('/', 'index')->name('businessAccount');
            Route::get('/signup-process', 'index')->name('businessAccount.process');
            Route::post('/email-checking', 'emailChecking')->name('businessAccount.emailChecking');
        });
    });
});
