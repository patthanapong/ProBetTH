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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('index');
});

Route::get('/login','AuthController@getlogin');
Route::get('/register', 'AuthController@register');
Route::post('addregister', 'AuthController@store');
Route::post('/login','AuthController@postlogin');
Route::get('logout','AuthController@logout');

Route::get('/user/index', 'UserController@index');