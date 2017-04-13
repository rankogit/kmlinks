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

Route::get('/', function () {
    return view('welcome');
});

Route::get('navbar', function () {
    return view('navbar');
});

Route::get('navbarflex', function () {
    return view('navbarflex');
});

Route::get('home', function () {
    return view('home');
});

Route::get('oldversion', function () {
    return view('oldversion');
});

Route::get('blogsample', function () {
    return view('blogsample');
});