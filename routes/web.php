<?php
 require_once __DIR__.'/../vendor/autoload.php';
//  require_once __DIR__.'/../helpers.php';
 
 use Pecee\SimpleRouter\SimpleRouter as Route;

 Route::setDefaultNamespace('App\Http\Controllers');
  

//  Route::get('/', function () {
//     return "Hamid1ganeh2st";
// });

Route::get('/', 'TestController@index')->name('home');

 


Route::start();