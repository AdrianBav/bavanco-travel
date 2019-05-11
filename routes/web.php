<?php

use AdrianBav\Traffic\Middlewares\RecordVisits;

/*
|--------------------------------------------------------------------------
| Frontend routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Front')->group(function () {
    Route::get('/', 'PagesController@index')->middleware(RecordVisits::class)->name('home');
    Route::get('/cameras', 'PagesController@cameras')->name('cameras');
});


/*
|--------------------------------------------------------------------------
| Backend routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Back')->group(function () {
    Auth::routes();

    Route::get('/dashboard', 'DashboardController@index');
});
