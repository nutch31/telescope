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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/select', 'TestController@select');
Route::get('/insert', 'TestController@insert');
Route::get('/update', 'TestController@update');
Route::get('/delete', 'TestController@delete');

Route::post('/profile/insert', 'ProfileController@insert');
Route::get('/profile/select/{id}', 'ProfileController@select');
Route::put('/profile/update', 'ProfileController@update');
Route::delete('/profile/delete', 'ProfileController@delete');
