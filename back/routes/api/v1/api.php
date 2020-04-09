<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/login','api\v1\ApiController@login');

Route::group(['middleware' => ['auth:api']], function () {
    Route::get('/getCategories','api\v1\ApiController@getCategories');
    Route::get('/getElements/{category_id}','api\v1\ApiController@getElements');
});
