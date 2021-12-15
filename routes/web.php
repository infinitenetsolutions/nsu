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
    return view('index');
});
Route::get('about-us', function () {
    return view('about-us');
});
Route::get('blog-detail', function () {
    return view('blog-detail');
});
Route::get('blog-listing', function () {
    return view('blog-listing');
});
Route::get('contact-us', function () {
    return view('contact-us');
});
Route::get('course-detail-v1', function () {
    return view('course-detail-v1');
});
Route::get('course-detail-v2', function () {
    return view('course-detail-v2');
});
Route::get('course-detail-v3', function () {
    return view('course-detail-v3');
});
Route::get('course-landing-page', function () {
    return view('course-landing-page');
});
Route::get('course-listing', function () {
    return view('course-listing');
});
Route::get('course-listing-images', function () {
    return view('course-listing-images');
});
Route::get('event-calendar', function () {
    return view('event-calendar');

});


Route::get('event-grid', function () {
    return view('event-grid');
});

Route::get('event-listing', function () {
    return view('event-listing');
});

Route::get('event-listing-images', function () {
    return view('event-listing-images');
});

Route::get('full-width', function () {
    return view('full-width');
});

Route::get('homepage-courses', function () {
    return view('homepage-courses');
});

Route::get('homepage-events', function () {
    return view('homepage-events');
});

Route::get('left-sidebar', function () {
    return view('left-sidebar');
});

Route::get('member-detail', function () {
    return view('member-detail');
});

Route::get('members', function () {
    return view('members');
});
Route::get('microsite', function () {
    return view('microsite');
});
Route::get('my-account', function () {
    return view('my-account');
});
Route::get('register-sign-in', function () {
    return view('register-sign-in');
});
Route::get('right-sidebar', function () {
    return view('right-sidebar');
});
Route::get('shortcodes', function () {
    return view('shortcodes');
});

