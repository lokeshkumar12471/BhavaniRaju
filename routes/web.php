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

Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
    Route::get('', 'FrontendController@index')->name('home');
    Route::get('about', 'FrontendController@aboutus')->name('aboutus');
    Route::get('services', 'FrontendController@services')->name('services');
    Route::get('doctors', 'FrontendController@doctors')->name('doctors');
    Route::get('gallery', 'FrontendController@gallery')->name('gallery');
    Route::get('contact', 'FrontendController@contact')->name('contact');
    Route::get('bookappointment', 'FrontendController@bookappointment')->name('bookappointment');
});
Route::group(['prefix' => 'admin', 'namespace' => 'App\Http\Controllers\Backend'], function () {

    //home page
    Route::get('home', 'HomeController@index')->name('admin.home');
    Route::get('home/create', 'HomeController@create')->name('admin.home.create');
    Route::post('home/store', 'HomeController@store')->name('admin.home.store');

    //about page
    Route::get('about', 'AboutController@index')->name('admin.about');
    Route::get('about/create', 'AboutController@create')->name('admin.about.create');
    Route::get('about/store', 'AboutController@store')->name('admin.about.store');

    //services page
    Route::get('services', 'ServiceController@index')->name('admin.service');
    Route::get('services/create', 'ServiceController@create')->name('admin.service.create');
    Route::get('services/store', 'ServiceController@store')->name('admin.service.store');

    //Doctors Page
    Route::get('doctors', 'DoctorController@index')->name('admin.doctor');
    Route::get('doctors/create', 'DoctorController@create')->name('admin.doctor.create');
    Route::get('doctors/store', 'DoctorController@store')->name('admin.doctor.store');

    //gallery Page
    Route::get('gallery', 'GalleryController@index')->name('admin.gallery');
    Route::get('gallery/create', 'GalleryController@create')->name('admin.gallery.create');
    Route::get('gallery/store', 'GalleryController@store')->name('admin.gallery.store');

    //Contact Page
    Route::get('contact', 'ContactController@index')->name('admin.contact');
    Route::get('contact/create', 'ContactController@create')->name('admin.contact.create');
    Route::get('contact/store', 'ContactController@store')->name('admin.contact.store');

//BookAppointment Page
    Route::get('bookappointment', 'BookAppointmentController@index')->name('admin.bookappointment');
    Route::get('bookappointment/create', 'BookApppointmentController@create')->name('admin.bookappointment.create');
    Route::get('bookappointment/store', 'BookApppointmentController@store')->name('admin.contact.store');

});