<?php


Route::get('/', function () {
    return view('site.home');
});

Route::get('/home', 'HomeController@index');

Route::get('/test/{id}', [
    'as' => 'test', 'uses' => 'TestController@index'
]);

Route::post('/answers/{paper}', [
    'as' => 'answers', 'uses' => 'TestController@test'
]);
Route::auth();

Route::get('/papers', [
    'middleware' => 'auth',
    'uses' => 'HomeController@index'
]);




