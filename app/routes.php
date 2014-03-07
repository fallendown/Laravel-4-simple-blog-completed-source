<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	$posts = Post::orderBy('created_at', 'DESC')->paginate(3);

	return View::make('site.index')->with('posts', $posts);
});

Route::get('register', 'AuthController@getRegister');
Route::post('register', 'AuthController@postRegister');
Route::get('login', 'AuthController@getLogin');
Route::post('login', 'AuthController@postLogin');
Route::post('search', 'HomeController@search');

Route::get('blog/{slug}', function($slug){

	$post = Post::where('slug', $slug)->first();

	$date = $post->created_at;
	setlocale(LC_TIME, 'America/New_York');
	$date = $date->formatlocalized('%A %d %B %Y');

	return View::make('site.post')->with('post', $post)->with('date', $date);
});


Route::group(array('before' => 'auth'), function(){

	Route::get('admin', 'AdminController@index');
	Route::get('logout', 'AuthController@logout');
	Route::resource('posts', "PostController");

});