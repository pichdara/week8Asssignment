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
    return view('theme.index');
});
Route::get('/about', function () {
    return view('theme.about');
});
Route::get('/post', function () {
    return view('theme.post');
});
Route::get('/contact', function () {
    return view('theme.contact');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
