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

use Illuminate\Support\Facades\Route;

Route::get('/', 'Controller@index');

Route::post('/auth', 'UserController@auth');

Route::post('/logout','UserController@logout')->name('logout');

Route::get('/create_movie', 'MovieController@index');

Route::post('/create_movie', 'MovieController@create');
