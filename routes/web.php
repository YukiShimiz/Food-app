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

Route::get('/food/top','TopController@top');

Route::get('/food/first','ManagementController@first');

Route::get('/food/management/create/{id}','ManagementController@create');

Route::post('/food/management/create/{id}','ManagementController@update');

Route::get('/food/management/template/create/{id}','TemplateController@create');

Route::post('/food/management/template/create/{id}','TemplateController@store');

Route::get('/food/management/template','TemplateController@top');

Route::get('/food/management/updated','ManagementController@updated');

Route::get('/food/management','ManagementController@top');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
