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
    'as' => 'product.single'
]);

Route::group(['middleware' => 'guest'], function(){
    Route::get('/signup', [
        'uses' => 'UserController@getSignup',
        'as' => 'user.signup'
    ]);

    Route::post('/signup', [
        'uses' => 'UserController@postSignup',
        'as' => 'user.signup'
    ]);

    Route::post('/signin', [
        'uses' => 'UserController@postSignin',
        'as' => 'user.signin'
    ]);
    // Route::post('/login/custom', [
    //     'uses' => 'loginController@login',
    //     'as' => 'login.custom'
    // ]);
});


Route::group(['middleware' => 'auth'], function(){
    Route::get('/user/logout', [
        'uses' => 'UserController@getLogout',
        'as' => 'user.logout'
    ]);

    Route::resource('products','ProductController');

});


Route::post('/cart/add', [
    'uses' => 'ShoppingController@add_to_cart',
    'as' => 'cart.add'
]);

Route::get('/cart', [
    'uses' => 'ShoppingController@cart',
    'as' => 'cart'
]);

Route::get('/cart/delete/{id}', [
    'uses' => 'ShoppingController@cart_delete',
    'as' => 'cart.delete'
]);

Route::get('/cart/incr/{id}/{qty}', [
    'uses' => 'ShoppingController@incr',
    'as' => 'cart.incr'
]);

Route::get('/cart/decr/{id}/{qty}', [
    'uses' => 'ShoppingController@decr',
    'as' => 'cart.decr'
]);

Route::get('/cart/rapid/add/{id}', [
    'uses' => 'ShoppingController@rapid_add',
    'as' => 'cart.rapid.add'
]);

Route::get('/cart/checkout', [
    'uses' => 'CheckoutController@index',
    'as' => 'cart.checkout'
]);


Route::get('/upload', function () {
    return view('upload');
})->name('upload');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');
