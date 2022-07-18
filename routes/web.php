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
    return view('contact_us');
});

Route::get('privacy', function () {
    return view('privacy');
});

Route::get('term-conditions', function () {
    return view('terms_conditions');
});

Route::get('about', function () {
    return view('about');
});


Route::post('save', [App\Http\Controllers\PetitionController::class, "store"]);
Route::post('save-newsletter', [App\Http\Controllers\NewsletterController::class, "store"]);