<?php

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('sign-in');
});
Route::get('/sign-in', function () {
    return view('sign-in');
});
Route::get('/forgot-password', function () {
    return view('forgot-password');
});
Route::get('/sign-up', function () {
    return view('sign-up');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/404', function () {
    return view('pages.error/404');
});
Route::get('/basic-form-elements', function () {
    return view('pages.basic-form-elements');
});
Route::get('/form-examples', function () {
    return view('pages.form-examples');
});
Route::get('/form-wizard', function () {
    return view('pages.form-wizard');
});
Route::get('/form-validation', function () {
    return view('pages.form-validation');
});