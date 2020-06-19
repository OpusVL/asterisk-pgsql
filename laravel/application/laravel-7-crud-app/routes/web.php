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

Route::get('/', 'EndpointController@index');

Route::resource('endpoints', 'EndpointController');
Route::get('/contexts', 'ContextController@show'); 
//Route::resource('contexts','ContextController'); //unused at the moment, meant to replace the "get" above

