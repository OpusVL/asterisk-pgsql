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

Route::get('/', 'EndpointController@index')->middleware('auth');

Route::resource('endpoints', 'EndpointController')->middleware('auth');
Route::get('/contexts', 'ContextController@show')->middleware('auth');
//Route::resource('contexts','ContextController'); //unused at the moment, meant to replace the "get" above


Auth::routes();
//Route::get('/home', 'EndpointController@index')->middleware('auth');

Route::get('/home', 'HomeController@index')->name('home');
