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
Route::get('/', 'WebsiteController@index');
Route::get('/reg', 'WebsiteController@register');
Route::get('/about', 'WebsiteController@about');

Route::post('/authenticate', 'Auth\LoginController@authenticate');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/pdf', 'HomeController@pdf');

// Permission
Route::group(['prefix' => 'scheme', 'middleware' => ['role:admin']], function() {
	Route::get('/edit/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'SchemeController@edit']);
	Route::post('/update/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'SchemeController@update']);
	Route::group(['prefix' => 'pt', 'middleware' => ['role:admin']], function() {
		Route::get('/', ['middleware' => ['permission:user-manager'], 'uses' => 'PtController@index']);
		Route::get('/create', ['middleware' => ['permission:user-manager'], 'uses' => 'PtController@create']);
		Route::post('/store', ['middleware' => ['permission:user-manager'], 'uses' => 'PtController@store']);
		Route::get('/edit/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PtController@edit']);
		Route::post('/update/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PtController@update']);
		Route::get('/destroy/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PtController@destroy']);
		
		Route::get('/detail/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PtDetailController@index']);
		Route::get('/detail/create/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PtDetailController@create']);
		Route::post('/detail/store', ['middleware' => ['permission:user-manager'], 'uses' => 'PtDetailController@store']);
		Route::get('/detail/edit/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PtDetailController@edit']);
		Route::post('/detail/update/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PtDetailController@update']);
		Route::get('/detail/destroy/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PtDetailController@destroy']);

	});

	Route::group(['prefix' => 'pm', 'middleware' => ['role:admin']], function() {
		Route::get('/', ['middleware' => ['permission:user-manager'], 'uses' => 'PmController@index']);
		Route::get('/create', ['middleware' => ['permission:user-manager'], 'uses' => 'PmController@create']);
		Route::post('/store', ['middleware' => ['permission:user-manager'], 'uses' => 'PmController@store']);
		Route::get('/edit/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PmController@edit']);
		Route::post('/update/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PmController@update']);
		Route::get('/destroy/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PmController@destroy']);
		
		Route::get('/detail/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PmDetailController@index']);
		Route::get('/detail/create/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PmDetailController@create']);
		Route::post('/detail/store', ['middleware' => ['permission:user-manager'], 'uses' => 'PmDetailController@store']);
		Route::get('/detail/edit/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PmDetailController@edit']);
		Route::post('/detail/update/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PmDetailController@update']);
		Route::get('/detail/destroy/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PmDetailController@destroy']);
		
	});
});
// Permission
Route::group(['prefix' => 'permission', 'middleware' => ['role:admin']], function() {
	Route::get('/', ['middleware' => ['permission:user-manager'], 'uses' => 'PermissionController@index']);
	Route::get('/create', ['middleware' => ['permission:user-manager'], 'uses' => 'PermissionController@create']);
	Route::post('/store', ['middleware' => ['permission:user-manager'], 'uses' => 'PermissionController@store']);
	Route::get('/edit/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PermissionController@edit']);
	Route::post('/update/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PermissionController@update']);
	Route::get('/destroy/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'PermissionController@destroy']);
});
// Role
Route::group(['prefix' => 'role', 'middleware' => ['role:admin']], function() {
	Route::get('/', ['middleware' => ['permission:user-manager'], 'uses' => 'RoleController@index']);
	Route::get('/create', ['middleware' => ['permission:user-manager'], 'uses' => 'RoleController@create']);
	Route::post('/store', ['middleware' => ['permission:user-manager'], 'uses' => 'RoleController@store']);
	Route::get('/edit/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'RoleController@edit']);
	Route::post('/update/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'RoleController@update']);
	Route::get('/destroy/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'RoleController@destroy']);
});
// Role
Route::group(['prefix' => 'user', 'middleware' => ['role:admin']], function() {
	Route::get('/', ['middleware' => ['permission:user-manager'], 'uses' => 'UserController@index']);
	Route::get('/create', ['middleware' => ['permission:user-manager'], 'uses' => 'UserController@create']);
	Route::post('/store', ['middleware' => ['permission:user-manager'], 'uses' => 'UserController@store']);
	Route::get('/edit/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'UserController@edit']);
	Route::post('/update/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'UserController@update']);
	Route::get('/destroy/{id}', ['middleware' => ['permission:user-manager'], 'uses' => 'UserController@destroy']);
});