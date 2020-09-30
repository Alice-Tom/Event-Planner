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

Route::get('/', 'IndexController@index');

Route::prefix('event')->group(function () {
    Route::get('/', 'EventController@index');
});

Route::prefix('admin/event')->group(function () {
    Route::get('/', 'EventController@adminIndex');
    Route::get('/add', 'EventController@create')->name('event.create');
    Route::post('/add', 'EventController@store')->name('event.store');
});

Route::get('/upload', 'UploadEventController@index');

Route::get('/dashboard', 'DashboardController@index');

Route::get('/viewevents', 'UploadEventController@create');

Auth::routes();

// Route::get('/event', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
