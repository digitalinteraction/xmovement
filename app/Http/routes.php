<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PageController@home');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {

    // Auth routes
	Route::auth();

    Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');
    Route::get('auth/facebook/callback', 'Auth\AuthController@handleProviderCallback');

    // User routes
    Route::get('/profile/{user}', 'UserController@profile');
    Route::get('/profile', 'UserController@profile');
    Route::match(['get', 'post'], '/details', 'UserController@details');

    // Page routes
    Route::get('/', 'PageController@home');
    Route::get('/about', 'PageController@about');
    Route::get('/contact', 'PageController@contact');
    Route::get('/terms', 'PageController@terms');

    // Idea routes
    Route::get('/explore', 'IdeaController@index');
    Route::get('/create', 'IdeaController@add');
    Route::post('/idea', 'IdeaController@store');
    Route::get('/idea/{idea}', 'IdeaController@view');

});