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

Route::get('/', 'HomeController@index');

Route::post('sendEmail', 
  ['as' => 'send_email', 'uses' => 'MailController@send']);
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'web'], function () {
 //Auth::loginUsingId(118);
	Route::auth();
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
	Route::get('/cms', 'CMSController@index');

    Route::get('article/add', 'CMSController@create');
    Route::post('article/store', 'CMSController@store');
	Route::post('article/update/{id}', 'CMSController@update');
	Route::get('article/{id}/edit', 'CMSController@edit');
	Route::get('article/{id}/destroy', 'CMSController@destroy');

	Route::get('articles', 'ArticleController@index');
    Route::get('article/{id}', 'ArticleController@show');
});