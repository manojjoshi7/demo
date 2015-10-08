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
/*
Route::get('/', function()
{
	return View::make('hello');
});
*/
Route::model('user','User');

Route::get('/displayevent/{event}','UsersController@displayevent');
Route::get('/addevent/{event}','UsersController@addevent');
Route::post('/addevent','UsersController@addevent');
Route::get('/','UsersController@index');
Route::get('/evento_lista','UsersController@evento_lista');
Route::get('/evento_fechado','UsersController@evento_fechado');
Route::get('/evento','UsersController@evento');
Route::post('/evento','UsersController@evento');
//Route::get('/','UsersController@home');
//Route::post('/home','UsersController@home');
//Route::get('/filedownload','UsersController@filedownload');
//Route::post('/singup','UsersController@singup');
