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

Route::get('/', function () {
    return view('welcome');
});

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

	/**
     * Authentication Routes
     */
	Route::auth();

    /**
     * Show Home Page
     */
    Route::get('/', function () {
        
        return view('home');
    });

    /**
     * List All Users
     */
    Route::get('/users', function () {
        
        return view('users/index');
    });

    /**
     * Add New User
     */
    Route::post('/user', function (Request $request) {
        //
    });

    /**
     * Delete User
     */
    Route::delete('/user/{user}', function (User $user) {
        //
    });

});