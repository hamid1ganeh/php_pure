<?php
 require_once __DIR__.'/../vendor/autoload.php';
//  require_once __DIR__.'/../helpers.php';
 
 use Pecee\SimpleRouter\SimpleRouter as Route;

 Route::setDefaultNamespace('App\Http\Controllers');


 Route::group(['prefix' => '/test','name' => 'test.'],function () {
    Route::get('/', 'TestController@index')->name('home');
    Route::get('/create', 'TestController@create')->name('create');
    Route::post('/store', 'TestController@store')->name('store');
});


 

Route::start();