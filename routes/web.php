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

Route::get('/', 'HomeController@index');
Route::get('/dashboard', 'DashboardController@index');
Route::get('/dashboard/about', 'Dashboard\AboutController@index');
Route::get('/dashboard/contacts', 'Dashboard\ContactsController@index');

Route::put('/dashboard/contacts', 'Dashboard\ContactsController@store')
	->name('contacts.store');

Auth::routes();

Route::post('/dashboard/about', 'Dashboard\AboutController@store');

Route::resource('/dashboard/works', 'Dashboard\WorksController');
Route::resource('/dashboard/services', 'Dashboard\ServiceController');

Route::put(
	'/dashboard/service/header', 
	'Dashboard\ServiceController@header'
)->name('serviceheader.update');

Route::post('/contacts/send', 'HomeController@email')
	->name('email.send');