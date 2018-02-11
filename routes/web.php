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

Route::get('', 'HomeController@index');

Route::post('chat', 'ChatController@store')->name('chat.store');
Route::post('chat/join', 'ChatController@join')->name('chat.join');