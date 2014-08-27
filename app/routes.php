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

Route::get('/', 'SystemController@index');
Route::get('register', 'UsersController@register');
Route::post('register', 'UsersController@saveRegister');
Route::get('login', 'UsersController@login');
Route::post('login', 'UsersController@saveLogin');
Route::post('search', 'SystemController@search');
Route::get('api/CarRentalDetail/{id}', 'CarRentalDetailsController@apiCarRentalDetails');
Route::get('api/TaxiDetail/{id}', 'TaxiDetailsController@apiTaxiDetails');
Route::get('book/{type}/single/{id}', 'SystemController@bookingSingle');