<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

use App\Models\Post;

use App\Http\Controller\PostController;
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

Route::get('guls', function() {
    return "home";
});

Route::get('guls', function() {
    return "gulsana";
});

Route::get('guls', function() {
    return "duisenbek";
});

Route::get('guls', function() {
    return "good";
});

Route::get('guls', function() {
    return "good";
});

Route::get('guls', function() {
    return "sana";
});

Route::get('post/add', function() {
DB::table('post')->insert([
'id'=>190103099,
'title'=>'labfourth',
'body'=>'female',
   ]);
});

Route::get('post', [PostController::class, 'index']);


