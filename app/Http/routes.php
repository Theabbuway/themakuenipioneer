<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::auth();

Route::get('/', 'HomeController@index');

Route::resource('articles', 'ArticleController');

Route::resource('image', 'ImageController');

Route::resource('contacts', 'ContactController');

Route::get('/blog/{id}','WelcomeController@showArticle');

Route::get('/about', 'WelcomeController@getAbout');

Route::get('/gallery', 'WelcomeController@getGallery');

Route::get('/contact', 'WelcomeController@getContact');