<?php

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
    Route::get('/', 'FrontendController@index');
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

    Route::get('/home', 'BackendController@index');
});
