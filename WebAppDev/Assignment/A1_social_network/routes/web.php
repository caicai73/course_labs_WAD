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
    return view('home');
});

// To do: Creates a new post and displays
Route::post('create_post', function()
{
//   Fetch form data
  $username = request('username');
  $title_post = request('title_post');
  $message = request('message');
  
  // call create_post() to perform search
  create_post($username, $title_post, $message);
  
  // call view to display posts
  return view('home')->with('username', $username)->with('title_post', $title_post)->with('message', $message);
});

/* create a post with $username, $title_post and $message from form. */
// function create_post($username, $title_post, $message){
//   $this->username = $username;
//   $this->title_post = $title_post;
//   $this->message = $message;
// //   $this->comments = array();
// }