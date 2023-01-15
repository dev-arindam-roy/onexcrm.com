<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocalizationController;

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

/** Localization / Change language */
Route::get('locale/{lang}', [LocalizationController::class, 'index'])->name('localization');

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