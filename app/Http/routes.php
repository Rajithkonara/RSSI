<?php

//referece : http://www.isiwaranena.com/

Route::get('/', function () {
    return view('site.home');
});

Route::get('/home', 'HomeController@index');

Route::get('/test/{id}', [
//    'middleware' => 'auth',
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



//////////////papers//////////
Route::get('/biology','HomeController@getBioPapers');

Route::get('/biology/{id}','HomeController@getPapers');


