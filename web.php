<?php

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

Route::get('/', function(){
 return '/ route';
});

Route::get('/hotels', 'HotelController@index');{
 return '/hotels route';
};

Route::group(['prefix' => 'reservations'], function(){
    Route::get('/', function(){
	return 'Showing users homepage'; });
    Route::get('reservations/create/{id}', 'ReservationController@create'); {
	return 'Showing form to create reservations'; };
    Route::reservation('reservations', function(){
	return 'Creating reservation'; });
});
