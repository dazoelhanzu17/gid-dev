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

// Route::prefix('profilepage')->group(function() {
//     Route::get('/', 'ProfilePageController@index');
// });


// Route::get('/account/{vue_capture?}', )->where('vue_capture', '[\/\w\.-]*');

Route::get('/account/{vue_capture?}', '\Modules\Homepage\Http\Controllers\HomepageController@index')->where('vue_capture', '[\/\w\.-]*');