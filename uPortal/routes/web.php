<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'HomeController@userlogin')->name('user_login');


Auth::routes();

Route::get('/home/mydata', 'HomeController@retrieve')->name('home')->middleware('auth');
Route::get('/home/mydata/{create_personal_details}', 'HomeController@makedata')->name('create_personal_details')->middleware('auth');

Route::get('/home/mydata/create_details/update', 'HomeController@editdata')->name('editdetails')->middleware('auth');

Route::post('/home/mydata/create_details/update', 'HomeController@updatedata')->name('updatedetails')->middleware('auth');

Route::post('/home/mydata', 'HomeController@createdata')->name('createdata')->middleware('auth');





   