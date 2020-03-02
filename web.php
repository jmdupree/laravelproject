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

Route::get('/', function(){
 return '/hotels route';
});

Route::group([‘prefix’ => ‘reservations’], function(){
    Route::get('/', function(){
	return 'Showing users homepage'; });
    Route::get('reservations', function(){
	return 'Showing users reservations'; });
    Route::get('reservations/new', function(){
	return 'Showing form to create reservations'; });
    Route::get('reservations/{id}', function($id){
	return 'Showing reservation id' .$id; });
    Route::get('reservations/{id}/edit', function($id){
	return 'Showing edit form for reservation id' .$id; });
    Route::post('reservations', function(){
	return 'Creating reservation'; });
    Route::put('reservations/{id}', function($id){
	return 'Updating reservation id' .$id });
    Route::delete('reservations/{id}', function($id){
	return 'Deleting reservation id' .$id });
});