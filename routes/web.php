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

Route::get('/', 'BeatsController@index');
Route::get('/home', 'BeatsController@index');
Route::get('/beat/{slug?}', 'BeatsController@show');
// Route::get('/users/register', 'Auth\RegisterController@showRegistrationForm');
Route::get('/users/logout', 'Auth\LoginController@logout');
Route::get('/users/login', 'Auth\LoginController@showLoginForm')->name('login');

Route::get('/tags/{name?}', 'TagsController@serve');

Route::get('/search', 'BeatsController@search');

Route::get('/about', 'PagesController@about');

Route::group(array('prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'manager'), function () {
	Route::get('/', 'PagesController@home');
    
	// Users
    Route::get('users', 'UsersController@index');
    Route::get('users/{id?}/edit', 'UsersController@edit');
    Route::post('users/{id?}/edit', 'UsersController@update');

    // Roles
    Route::get('roles/create', 'RolesController@create');
    Route::get('roles', 'RolesController@index');
    Route::post('roles/create', 'RolesController@store');

    // Beats
    Route::get('beats/', 'BeatsController@index');
    Route::get('beats/create', 'BeatsController@create');
	Route::post('beats/create', 'BeatsController@store');
	Route::get('beats/{id?}/edit', 'BeatsController@edit');
	Route::post('beats/{id?}/edit','BeatsController@update');

    // Setups
    Route::get('setups/create', 'SetupController@create');
    Route::post('setups/create', 'SetupController@store');
});

// Route::post('/users/register', 'Auth\RegisterController@register');
Route::post('/users/login', 'Auth\LoginController@login');