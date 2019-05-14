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

// Route::prefix('role')->group(function() {
//     Route::get('/', 'RoleController@index');
// });

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function(){
	Route::get('/roles', [
		'as' => 'role.index',
		'uses' => 'RoleController@index'
	]);
	
	
	Route::get('/role/{id}/edit', [
		'as'	=> 'role.edit',
		'uses'	=> 'RoleController@edit'
	]);
	
	
	Route::post('/role/store', [
		'as'	=> 'role.store',
		'uses'	=> 'RoleController@store'
	]);
	
	Route::post('/role/update/{id}', [
		'as'	=> 'role.update',
		'uses'	=> 'RoleController@update'
	]);
	
	Route::post('/role/delete/{id}', [
		'as'	=> 'role.delete',
		'uses'	=> 'RoleController@destroy'
	]);
	
	
	Route::get('/roles/grupmenu/{id}', [
		'as' => 'grupmenu.index',
		'uses'	=> 'RoleController@groupmenu'
	]);
	
	
	// Route::post('/role/updategrupmenu/{id}', [
	// 	'as' => 'role.updategrupmenu',
	// 	'uses'	=> 'RoleController@update_groupmenu'
	// ]);
	
	Route::post('/role/updategrupmenu/{id}', [
		'as'	=> 'role.updategrupmenu',
		'uses'	=> 'RoleController@update_groupmenu'
	]);
});
