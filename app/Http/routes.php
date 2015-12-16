<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\User;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view("index");
});

Route::get('/admin', ['middleware' => 'auth', function() {
    return view("admin");
}]);
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');


Route::get('auth/register_domen', 'BlogController@index');
Route::post('auth/register_domen', 'BlogController@store');

Route::get('/admin/post', function () {
    return view("profile/post");
});

Route::get('/admin/comment', function () {
    return view("profile/comment");
});

Route::get('/admin/photo', function () {
    return view("profile/photo");
});

Route::get('/admin/name', function () {
    return view("profile/name");
});

Route::get('/admin/password', function () {
    return view("profile/password");
});

Route::get('/admin/post_new',  'PostController@index');
Route::post('/admin/post_new', 'PostController@store');
