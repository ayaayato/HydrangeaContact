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

Route::get('/', 'ContactController@index')->name('contact.index');

Route::post('/confirm', 'ContactController@confirm')->name('contact.confirm');

Route::post('/thanks', 'ContactController@sent')->name('contact.sent');