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

Route::view('/menu', 'menu'); //belum
Route::view('/desktop-14', 'desktop-14');
Route::view('/see-more', 'see-more');
Route::view('/philosophy', 'philosophy');
Route::view('/case-studies', 'case-studies');
Route::view('/desktop-50', 'desktop-50');
Route::view('/capabilities', 'capabilities');
Route::view('/careers', 'careers');
Route::view('/blogs', 'blogs/blogs');
Route::view('/contact-us', 'contact-us');
Route::view('/privacy-policy', 'privacy-policy');
Route::view('/terms-and-conditions', 'terms-and-conditions');
Route::view('/opportunities', 'opportunities');
Route::view('/blog-details', 'blog-details'); //belum
Route::view('/terms-and-conditions-2', 'terms-and-conditions-2'); //belum
Route::view('/test', 'try-conic-gradient');
