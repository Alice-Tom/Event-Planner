<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', 'IndexController@index')->name('home');

Route::prefix('event')->group(function () {
    Route::get('/{event:token}', 'EventController@index');
    Route::post('/{event:token}', 'EventLoginController');

    // Route::get('/', 'EventController@index');

});

Route::get('/event/show/{event}', 'EventController@showEvent')->name('event.showEvent');



Route::prefix('admin/event')->group(function () {
    Route::get('/dashboard', 'EventController@adminIndex');
    Route::get('/add', 'EventController@create')->name('event.create');
    Route::post('/add', 'EventController@store')->name('event.store');
    // Route::post('/dashboard', 'EventController@create')->name('event.create');
    Route::get('/show/{event}', 'EventController@show')->name('event.show');
    Route::post('/show/{event}', 'EventController@update')->name('event.update');
});

Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

