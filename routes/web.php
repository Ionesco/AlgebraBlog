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


Route::get('/', function ()
{
	return view('welcome');
});

// popis svih Items

Route::get ('/items', 'ItemsController@index');

// Dodavanje novog Items

Route::get ('/items/new', 'ItemsController@create');
Route::post ('/items/new', 'ItemsController@store');

// prikaz određenog Items

Route::get ('/items/{id}', 'ItemsController@show');

// Uređivanje (EDIT) postojećeg Items

Route::get ('/item/{id}/edit', 'ItemsController@edit');
Route::post ('/item/{id}/edit', 'ItemsController@update');

//Brisanje Items

Route::delete ('/item/{id}', 'ItemsController@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
