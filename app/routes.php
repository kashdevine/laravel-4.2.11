<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/


Route::get('/', 'PagesController@home');

Route::get('/about', 'PagesController@about');

// Route::get('/users', 'UsersController@allUsers');

// Route::get('/users/{username}', 'UsersController@userDetails');


Route::resource('users', 'UsersController');



Route::get('login', 'SessionController@create');
Route::get('logout', 'SessionController@destroy');
Route::resource('session', 'SessionController');



Route::get('admin', function(){
    return 'Admin Page';
})->before('auth');


