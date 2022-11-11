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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['namespace' => 'App\Http\controllers\frontend'], function () {
    Route::get('home', 'FrontendController@index')->name('home');
    Route::get('services', 'FrontendController@services')->name('services');
    Route::get('doctors', 'FrontendController@doctors')->name('doctors');
    Route::get('gallery', 'FrontendController@gallery')->name('gallery');
    Route::get('blogs', 'FrontendController@blogs')->name('blogs');
    Route::get('contact', 'FrontendController@contact')->name('contact');
});