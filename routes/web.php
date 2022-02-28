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

Route::get('/faceki-pre-sign-up', function () {
    return view('faceki-pre-sign-up');
});

Route::get('/faceki-sign-up', function () {
    return view('faceki-sign-up');
});

Route::get('/faceki-sign-in', function () {
    return view('faceki-sign-in');
});

Route::get('/faceki-sign-in-list', function () {
    return view('faceki-sign-in-list');
});

Route::get('/faceki-sign-in-complete', function () {
    return view('faceki-sign-in-complete');
});

Route::get('/error', function () {
    return view('error');
});

Route::get('/loginfailed', function () {
    return view('loginfailed');
});

Route::get('/lowquality', function () {
    return view('lowquality');
});

Route::get('/faceki-request-a-sign-in-pending', function () {
    return view('faceki-request-a-sign-in-pending');
});









