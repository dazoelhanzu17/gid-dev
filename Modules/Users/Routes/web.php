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

// Route::prefix('users')->group(function() {
//     Route::get('/', 'UsersController@index');
// });


// Route::resource('users', 'UsersController');




Route::prefix('admin',  ['middleware' => 'auth'])->group(function (){
    
    Route::get('/users', 'UsersController@index')->name('user.index');
    Route::get('/user/{id}/edit', 'UsersController@edit')->name('user.edit');
    Route::post('/user/store', 'UsersController@store')->name('user.store');
    Route::post('/user/update/{id}', 'UsersController@update')->name('user.update');
    Route::post('/user/delete/{id}', 'UsersController@destroy')->name('user.delete');
    
});

