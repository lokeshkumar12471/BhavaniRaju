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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__ . '/auth.php';

Route::group(['namespace' => 'App\Http\controllers\frontend'], function () {
    Route::get('', 'FrontendController@index')->name('home');
    Route::get('aboutus', 'FrontendController@aboutus')->name('aboutus');
    Route::get('services', 'FrontendController@services')->name('services');
    Route::get('doctors', 'FrontendController@doctors')->name('doctors');
    Route::get('gallery', 'FrontendController@gallery')->name('gallery');
    Route::get('contact', 'FrontendController@contact')->name('contact');
    Route::get('bookappointment', 'FrontendController@bookappointment')->name('bookappointment');
});
Route::group(['prefix' => 'admin', 'middleware' => 'auth', 'namespace' => 'App\Http\controllers\backend'], function () {
    Route::get('home', 'BackendController@index')->name('admin.home');
    // Route::get('aboutus', 'FrontendController@aboutus')->name('aboutus');
    // Route::get('services', 'FrontendController@services')->name('services');
    // Route::get('doctors', 'FrontendController@doctors')->name('doctors');
    // Route::get('gallery', 'FrontendController@gallery')->name('gallery');
    // Route::get('contact', 'FrontendController@contact')->name('contact');
    // Route::get('bookappointment', 'FrontendController@bookappointment')->name('bookappointment');

});