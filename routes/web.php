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

Route::get('/', [
    'uses' => 'FrontEndController@index',
    'as' => 'index'
]);

Route::get('/product/{id}', [
    'uses' => 'FrontEndController@singleProduct',
    'as' => 'product.single',
]);

Route::group(['middleware' => 'guest'], function(){
    Route::get('/signup', [
        'uses' => 'UserController@getSignup',
        'as' => 'user.signup',
    ]);

    Route::post('/signup', [
        'uses' => 'UserController@postSignup',
        'as' => 'user.signup',
    ]);

    Route::post('/signin', [
        'uses' => 'UserController@postSignin',
        'as' => 'user.signin',
    ]);
});
Route::group(['middleware' => 'auth'], function(){
    Route::get('/user/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'user.logout',
    ]);
});
