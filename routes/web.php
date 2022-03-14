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

Route::group(['middleware' => ['auth']], function(){

Route::get('/food/top','TopController@top');

Route::get('/food/first','ManagementController@first');

Route::get('/food/blog/create/{id}','BlogController@create');

Route::post('/food/blog/post','BlogController@store');

Route::get('/food/blog/index/{id}','BlogController@index');

Route::get('/food/blog/show/{id}','BlogController@show');

Route::get('/food/template/detail/{id}','TemplateController@show_detail');

Route::get('/food/management/create/{id}','ManagementController@create');

Route::post('/food/management/create/{id}','ManagementController@update');

Route::get('/food/management/template/{id}','TemplateController@show');

Route::post('/food/management/template/edit/{id}','TemplateController@edit');

Route::delete('/food/management/template/edit/{id}','TemplateController@delete');

Route::get('/food/management/template/index/{id}','TemplateController@index');

Route::get('/food/management/template/create/{id}','TemplateController@create');

Route::post('/food/management/template/create/{id}','TemplateController@store');

Route::get('/food/management/template','TemplateController@top');

Route::get('/food/management/updated','ManagementController@updated');

Route::get('/food/management','ManagementController@top');

Route::get('/food/menu/template/detail/{id}','TemplateController@show_detail_menu');

Route::get('/food/menu/detail/template/{id}','MenuController@show_template');

Route::get('/food/menu/detail/{id}','MenuController@show');

Route::get('/food/menu/search/template/id/{id}','MenuController@search_template');

Route::get('/food/menu/search/management/{id}','MenuController@search_management');

Route::get('/food/menu/search/template/{id}','MenuController@index_template');

Route::get('/food/menu/search/top','MenuController@top');

Route::post('/food/menu/post/{id}','MenuController@store');

Route::get('/food/menu/post','MenuController@post');

Route::get('/', 'HomeController@index')->name('home');

});

Auth::routes();