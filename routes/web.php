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

Route::get('user', function() {
    return view('user');
});

Route::get('user', function() {
    return "home";
});

Route::get('user', function() {
    return "gulsana";
});

Route::get('user', function() {
    return "duisenbek";
});

Route::get('user', function() {
    return "good";
});