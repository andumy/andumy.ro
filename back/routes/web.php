<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes();



Route::group(['middleware' => 'auth'], function () {
	Route::get('/', 'HomeController@index')->name('home');
	Route::resource('/category','CategoryController')->except(['show']);
	Route::resource('/element','ElementController')->except(['show']);
	Route::resource('/jobtype','JobtypeController')->except(['show']);
	Route::resource('/client','ClientController')->except(['show']);
	Route::resource('/user', 'UserController')->except(['show']);
    Route::resource('/studio', 'StudioController')->except(['create','update','show','edit','destroy']);
    
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
});

