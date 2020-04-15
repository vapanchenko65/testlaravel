<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('register', 'API\RegisterController@register');

Route::middleware('auth:api')->group( function () {
    Route::get('users/getAllwithFriends', 'API\UserController@getAllwithFriends');
    Route::post('users/sendFriendshipInvite/{friend}', 'API\UserController@sendFriendshipInvite');
    Route::put('users/acceptFriendshipInvite/{friend}', 'API\UserController@acceptFriendshipInvite');
    Route::put('users/blockFriendshipInvite/{friend}', 'API\UserController@blockFriendshipInvite');
    Route::get('users/getInvites', 'API\UserController@getInvites');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
