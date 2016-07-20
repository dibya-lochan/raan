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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', 'HomeController@show');

Route::auth();

Route::get('/home', 'HomeController@show');

Route::get('admin/hotels/create', 'Admin\AdminController@create');
Route::get('/comment/{id}', 'HomeController@show_comments');


Route::post('admin/hotels/create_hotel', 'Admin\AdminController@create_hotel');
