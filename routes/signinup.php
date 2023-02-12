<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignUpController;

Route::prefix('auth')->group(function () {
    Route::prefix('social/signinup')->group(function () {
        Route::name('social.signinup.')->group(function () {
            Route::controller(SignUpController::class)->group(function () {
                Route::get('/{provider_name}', 'socialSigninup')->name('redirect');
                Route::get('/{provider_name}/callback', 'socialSigninupCallback')->name('callback');
            });
        });
    });
    Route::prefix('create-business-account')->group(function () {
        Route::name('signup.')->group(function () {
            Route::controller(SignUpController::class)->group(function () {
                Route::get('/', 'index')->name('businessAccount');
                Route::post('/signup-process', 'signup')->name('businessAccount.process');
                Route::post('/email-checking', 'emailChecking')->name('businessAccount.emailChecking');
                Route::post('/signup-partial', 'signupPartial')->name('businessAccount.signupPartial');
            });
        });
    });
});
