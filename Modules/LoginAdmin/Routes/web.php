<?php

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

Route::prefix('loginadmin')->group(function() {
    Route::get('/', 'LoginAdminController@index');
});

Route::post('/login_act', 'LoginAdminController@login')->name('masuk');
