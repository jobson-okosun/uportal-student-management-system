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

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home/{mydata}', 'HomeController@retrieve')->name('mydata');
Route::get('/home/{mydata}/{create_personal_details}', 'HomeController@makedata')->name('create_personal_details');

Route::get('/home/{mydata}/{create_personal_details}/{update}', 'HomeController@editdata')->name('edit_personal_details');

Route::post('/home/{mydata}', 'HomeController@createdata')->name('createdata');





   