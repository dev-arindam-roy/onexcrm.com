<?php

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

Route::get('/', function () {
    return view('welcome');
})->name('site.root');


/** Force redirect to create business account */
Route::get('/login', function () {
    return redirect()->route('signup.businessAccount');
});
Route::get('/signup', function () {
    return redirect()->route('signup.businessAccount');
});
Route::get('/create-account', function () {
    return redirect()->route('signup.businessAccount');
});
Route::get('/free-account', function () {
    return redirect()->route('signup.businessAccount');
});