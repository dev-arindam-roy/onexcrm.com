<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignUpController;

Route::prefix('create-business-account')->group(function () {
    Route::name('signup.')->group(function () {
        Route::controller(SignUpController::class)->group(function () {
            Route::get('/', 'index')->name('step1');
            Route::get('/signup', 'index')->name('start');
        });
    });
});
