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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
// Route::get('{path}', 'HomeController@index')->where( 'path', '([A-z\d-\/_.]+)?');

Route::get('/forbidden', function(){
    return view('403');
})->name('forbidden');

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
    Route::get('/developer', function(){
        return view('developer');
    });
});


Route::get('/berita/{vue_capture?}', function () {
    return view('vue_app');
})->where('vue_capture', '[\/\w\.-]*');
// Route::get('{path}', 'HomeController@index')->where( 'path', '([A-z\d-\/_.]+)?');