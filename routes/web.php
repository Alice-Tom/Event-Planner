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
    Route::get('/{event:token}', 'Client\EventController@index')->name('client.event.index');
    Route::post('/{event:token}', 'EventLoginController')->name('client.event.login');
    Route::get('/{event:token}/logout', 'Client\EventController@logout')->name('client.event.logout');
    Route::get('/show/{event}', 'Client\EventController@show')->name('client.event.show');
    Route::get('/media/download-single/{media}', 'Client\EventController@downloadSingle')->name('client.event.media.download.single');
    Route::get('/media/download-all/{media}', 'Client\EventController@downloadAll')->name('client.event.media.download.all');
    Route::get('/media/download-all-zip/{event}', 'Client\EventController@downloadAllZip')->name('client.event.media.download.all.zip');
});


Route::prefix('admin/event')->group(function () {
    Route::get('/dashboard', 'Admin\EventController@adminIndex');
    Route::get('/add', 'Admin\EventController@create')->name('event.create');
    Route::post('/add', 'Admin\EventController@store')->name('admin.event.store');
    // Route::post('/dashboard', 'EventController@create')->name('event.create');
    Route::get('/show/{event}', 'Admin\EventController@show')->name('admin.event.show');
    Route::post('/show/{event}', 'Admin\EventController@update')->name('admin.event.update');
    Route::delete('/media/delete-single/{media}', 'Admin\EventController@deleteSingle')->name('admin.event.media.delete.single');
    Route::delete('/media/delete-multiple/{event}', 'Admin\EventController@deleteAll')->name('admin.event.media.delete.all');
});

Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

