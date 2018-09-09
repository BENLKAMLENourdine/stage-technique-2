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

Route::get('/',[
    'uses'=> 'FrontController@getHomePage',
    'as'=> 'home'
]);

Route::post('/signin',[
    'uses'=> 'FrontController@postSignin',
    'as'=> 'all.signin'
]);

Route::group(['prefix' => '/compte/part/'],function(){
    Route::group(['middleware' => 'guest:particuliers'],function(){

        // Route::get('/creation', [
        // 'uses'=> 'UsersController@getSignin',
        // 'as'=> 'user.signin'
        // ]);

        Route::post('/signin', [
            'uses'=> 'UsersController@postSignin',
            'as'=> 'part.signin'
        ]);

        Route::get('/creation', [
            'uses'=> 'PartController@getSignup',
            'as'=> 'part.signup'
        ]);

        Route::post('/creation', [
            'uses'=> 'PartController@postSignup',
            'as'=> 'part.signup'
        ]);
    });

Route::group(['middleware' => 'auth:particuliers'],function(){

        Route::get('/profile', [
            'uses'=> 'PartController@getProfile',
            'as'=> 'part.profile'
        ]);

        Route::get('/logout', [
            'uses'=> 'PartController@getLogout',
            'as'=> 'part.logout'
        ]);
    });
});

Route::group(['prefix' => '/compte/pro/'],function(){
    Route::group(['middleware' => 'guest:professionnels'],function(){

        // Route::get('/creation', [
        // 'uses'=> 'UsersController@getSignin',
        // 'as'=> 'user.signin'
        // ]);

        // Route::post('/signin', [
        //     'uses'=> 'ProController@postSignin',
        //     'as'=> 'pro.signin'
        // ]);

        Route::get('/creation', [
            'uses'=> 'ProController@getSignup',
            'as'=> 'pro.signup'
        ]);

        Route::post('/creation', [
            'uses'=> 'ProController@postSignup',
            'as'=> 'pro.signup'
        ]);
    });

Route::group(['middleware' => 'auth:professionnels'],function(){

        Route::get('/profile', [
            'uses'=> 'ProController@getProfile',
            'as'=> 'pro.profile'
        ]);

        Route::get('/logout', [
            'uses'=> 'ProController@getLogout',
            'as'=> 'pro.logout'
        ]);
    });
});
