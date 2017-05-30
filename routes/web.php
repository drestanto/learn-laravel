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

Route::get('/', function () {
	return view('choose');
});

Route::get('home', function () {
    return view('welcome');
});

//Retrieve
Route::get('link/{id}', 'LinkController@showLink');
Route::get('links', 'LinkController@showAllLinks');
Route::get('link2/{id}', 'LinkController@showLink');
Route::get('links2', 'LinkController@showAllLinks2');

//Create
Route::get('/create', function () {
    return view('crud.create');
});
Route::post('/submit', 'LinkController@saveLink2');

//Update
Route::get('/edit/{id}', 'LinkController@startEditLink');
Route::post('/edit/{id}', 'LinkController@editLink2');

//Delete
Route::get('/delete/{id}', 'LinkController@startDeleteLink');
Route::post('/delete/{id}', 'LinkController@deleteLink2');

Auth::routes();