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

////////////HOME////////////
Route::get('/', function () {
    return view('choose');
});
Route::get('home', function () {
	return view('choose');
});

////////////////////LOGIN////////////////////

//Login
Route::get('login', function() {
	return view('auth.login');
});
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

////////////////////CRUD////////////////////

//Retrieve
Route::get('link/{id}', 'LinkController@showLink');
Route::get('links', 'LinkController@showAllLinks');
Route::get('link2/{id}', 'LinkController@showLink2');
Route::get('links2', 'LinkController@showAllLinks2');

//Create
Route::get('/create', function () {
    return view('crud.create');
});
Route::post('/submit', 'LinkController@saveLink2');

//Update
Route::get('edit', function () {
	return view('crud.edit');
});
Route::post('/editsubmit', 'LinkController@startEdit');
Route::get('/edit/{id}', 'LinkController@startEditLink');
Route::post('/edit/{id}', 'LinkController@editLink2');

//Delete
Route::get('delete', function () {
	return view('crud.delete');
});
Route::post('/deletesubmit', 'LinkController@startDelete');
Route::get('/delete/{id}', 'LinkController@startDeleteLink');
Route::post('/delete/{id}', 'LinkController@deleteLink2');


////////////////////FITUR////////////////////

//Search
Route::get('search', function () {
	return view('fitur.searchpag');
});
Route::post('/searchsubmit', 'LinkController@startSearch');
Route::get('search/{keyword}', 'LinkController@searchPag');

//Paginating
Route::get('somelink', 'LinkController@showPaginatedLinks2');

Auth::routes();