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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/',['as'=>'home','uses'=>'HomeController@index']);

/*AUTENTICACION */ 
Route::get('/login',['uses'=> 'Auth\AuthController@getLogin','as' => 'login']);
Route::post('/login', ['as' =>'auth/login', 'uses' => 'Auth\AuthController@postLogin']);
Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);
 

// Registro
Route::get('register',['uses'=>'Auth\AuthController@getRegister',
	'as'=>'register']);
Route::post('auth/register', ['as' => 'auth/register', 'uses' => 'Auth\AuthController@postRegister']);
