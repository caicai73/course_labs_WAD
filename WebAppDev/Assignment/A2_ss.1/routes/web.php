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

// Post controller routes
Route::resource('/home', 'PostController');

// Routes to homepage timeline
Route::get('/', 'PostController@index');

// deletes a post
Route::delete('/profile/delete/{id}', 'PostController@destroy');

// edits a post
Route::get('/profiles/{id}', 'PostController@edit');


// Register controller routes
Route::resource('/userHome', 'Auth\RegisterController');

// Comment contoller routes
Route::resource('/userHome/view_comments', 'CommentController');

// deletes a comment
Route::delete('/userHome/view_comments/delete/{id}', 'CommentController@destroy');

// routes to the view comments page
Route::get('/userHome/view_comments', 'UserController@index');

// For authenticated routes
Auth::routes();

// routes to user home page when the user logs in
// Route::get('/userHome', 'HomeController@index');

// UserController routes //
Route::resource('/profile/', 'UserController');

// friends list page when logged in
Route::get('/friends/{id}', 'UserController@friends');

// home page when user logs in
Route::get('/userHome', 'UserController@index');

// profile page of user when logged in
Route::get('/profile/{id}', 'UserController@profile');

// Route::get('/profile/{id}', 'UserController@update_profile');



// Routes to the documentation pages (ER and doc)
Route::get('/ER_diagram', 'HomeController@diagram');
Route::get('/assignment_doc', 'HomeController@document');


// Route::get('/userHome', 'Auth\RegisterController@create');
// Route::get('/', 'App\Http\Controllers\HomeController@index');
// Route::resource('/', 'HomeController');
