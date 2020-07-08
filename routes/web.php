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


Route::get('/', 'AuthController@home')->name('home');

Route::get('/auth/login', 'AuthController@login');
Route::post('/auth/login', 'AuthController@loginCheck')->name('login');
Route::get('/auth/register', 'AuthController@register');
Route::post('/auth/register', 'AuthController@registerCheck')->name('register');

Route::group(['prefix'=> 'admin', 'namespace'=> 'Admin'], function(){
	Route::get('/home', 'AdminController@home')->name('admin_home');
	Route::get('/logout', 'AdminController@logout')->name('admin_logout');
	Route::get('/user-list', 'UserController@user_list')->name('user_list');
	Route::get('/user-lock/{id}','UserController@user_lock')->name('user_lock');
	Route::get('/user-unlock/{id}','UserController@user_unlock')->name('user_unlock');
	Route::post('/user-edit','UserController@user_edit')->name('user_edit');
	Route::get('/user-message', 'MessageController@user_message')->name('user_message');
	Route::get('/post/{post_id}', 'UserController@show_post')->name('admin_show_post');
	Route::get('/setting', 'UserController@setting')->name('admin_setting');
	Route::post('/setting', 'UserController@setting_check')->name('admin_setting_check');
});

Route::group(['prefix'=> 'user', 'namespace'=> 'User', 'middleware'=> 'user.status'], function(){
	Route::get('/home', 'UserController@home')->name('user_home');
	Route::get('/logout', 'UserController@logout')->name('user_logout');
	Route::get('/message', 'UserController@message')->name('message');
	Route::post('/news-feed','UserController@newsfeed')->name('newsfeed');
	Route::post('/news-feed-content','UserController@newsfeed_content')->name('newsfeed_content');
	Route::get('/remove-news/{post_id}','UserController@remove_post')->name('remove_post');
	Route::get('/post/{post_id}', 'UserController@show_post')->name('show_post');
	Route::post('/post/{post_id}', 'UserController@create_comment')->name('create_comment');
	Route::get('/setting', 'UserController@setting')->name('user_setting');
});


