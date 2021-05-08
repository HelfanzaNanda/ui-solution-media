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
});

Route::view('/our-process', 'our-process');
Route::view('/case-studies', 'case-studies');
Route::view('/philosophy', 'philosophy');
Route::view('/contact-us', 'contact-us');
Route::view('/privacy-policy', 'privacy-policy');
Route::view('/terms-and-conditions', 'terms-and-conditions');
Route::view('/opportunities', 'opportunities');
Route::view('/capabilities', 'capabilities');
Route::view('/careers', 'careers');
Route::view('/desktop-50', 'desktop-50');
Route::view('/test', 'try-conic-gradient');
Route::view('/see-more', 'see-more');
