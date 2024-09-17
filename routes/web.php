<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('pages.frontend.index');
});

Route::get('about-us', function () {
    return view('pages.frontend.about-us');
});

Route::get('our-services', function () {
    return view('pages.frontend.our-services');
});

Route::get('service-details', function () {
    return view('pages.frontend.services-details');
});

Route::get('contact-us', function () {
    return view('pages.frontend.contact-us');
});
