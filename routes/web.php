<?php

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Headers: *');

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
//Route::group(['middleware' => ['web']], function () {
//    
//});
//Route::get('/', 'Web\Home@index');
Route::get('/', function() {
    echo "<h1><center>Welcome </center></h1>";
});

Route::group(['prefix' => 'delicious'], function() {
    Route::get('/', 'Delicious@index');
	Route::get('/gallery', 'Delicious@gallery');
	Route::get('/about', 'Delicious@about');
	Route::get('/contact', 'Delicious@contact');
	Route::get('/location', 'Delicious@location');
	Route::get('/menu', 'Delicious@menu');
	Route::get('/table', 'Delicious@table');
});
