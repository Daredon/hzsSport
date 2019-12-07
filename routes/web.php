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

Route::get('/', 'BaseController@indexPage')->name('index');
Route::get('/register', 'BaseController@registerPage')->name('register');
Route::get('/login', 'BaseController@loginPage')->name('login');

Route::post('/users/loginUser', 'UsersController@loginUser')->name('users.loginUser');
Route::post('/users/addUser', 'UsersController@addUser')->name('users.addUser');
Route::get('/logout', 'UsersController@logout')->name('logout');
