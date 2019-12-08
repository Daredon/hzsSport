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

Route::get('/', 'BaseController@indexPage')->name('page.index');
Route::get('/register', 'BaseController@registerPage')->name('page.register');
Route::get('/login', 'BaseController@loginPage')->name('page.login');
Route::get('/logout', 'UsersController@logout')->name('page.logout');
Route::get('/groups', 'BaseController@groupsPage')->name('page.groups');

Route::post('/users/loginUser', 'UsersController@loginUser')->name('user.loginUser');
Route::post('/users/addUser', 'UsersController@addUser')->name('user.addUser');
Route::get('/user/{username}', 'UsersController@showUser')->name('user.showcase');


Route::get('/addEvent', 'BaseController@addEventPage')->name('page.addEvent');
Route::post('/events/create', 'EventsController@createEvent')->name('event.create');

Route::get('/api', 'BaseController@api');