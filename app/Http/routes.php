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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', 'HomeController@index');

Route::get('/test/{id}', [
    'as' => 'test', 'uses' => 'TestController@index'
]);

Route::post('/answers/{paper}', [
    'as' => 'answers', 'uses' => 'TestController@test'
]);

Route::auth();

