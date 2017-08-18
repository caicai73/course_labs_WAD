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

// Route::get('/test', function() {
//     $sql = "select * from post";
//     $posts = DB::select($sql);
//     dd($posts);
// });

Route::get('/', function(){
    $sql = "select * from post order by id desc";
    $posts = DB::select($sql);
    return view('posts.home')->with('posts', $posts);
});

// Calls the create_post() function to add posts to the page
Route::post('/create_post_action', function(){
    //   Fetch form data
    $username = request('username');
    $title_post = request('title_post');
    $message = request('message');
    // call create_post() function to perform new post addition
    create_post($username, $title_post, $message);
    
    // call view to display posts
    return redirect("/");
});

// Displays the edit form page, calls the id so it knows which item to update
Route::get('edit_post/{id}', function($id){ 
    $post = get_post($id);
    return view("posts.edit_post")->with('post', $post);
});

// Calls the edit_post_action to edit the post details
Route::post('/edit_post_action', function(){ 
    $username = request('username');
    $title_post = request('title_post');
    $message = request('message');
    $id = request('id');
    
    $post = get_post($id);
    $sql = "select * from post, comment where post.id = ? and post.id = comment.postId";
    $comments = DB::select($sql, array($id));
    $posts = edit_post($id, $username, $title_post, $message);
    
    
    // return redirect('/comments/$id');
    return View::make("posts.comments")->withId($id)->with('posts', $posts)->with('post', $post)->with('comments', $comments);
});

// Calls the comments page for that post
Route::get('comments/{id}', function($id){
    // $comments = get_comment($id);
    $sql = "select * from post, comment where post.id = ? and post.id = comment.postId";
    $comments = DB::select($sql, array($id));
    $post = get_post($id);
    return view("posts.comments")->with('comments', $comments)->with('post', $post);
});

// Calls the create_comment() function to add comments to the post
Route::post('/comments_action', function(){
    $username = request('username');
    $message = request('message');
    $postId = request('id');
  
    $sql = "insert into comment (postId, username, message) values (?, ?, ?)";
    $comment = DB::insert($sql, array($postId, $username, $message));
    $id = DB::getPdo()->lastInsertId(); //returns the last id that was added to the database
    // return $id;
    
    
    $sql2 = "select * from post, comment where post.id = ? and post.id = comment.postId";
    $comments = DB::select($sql2, array($id));
    

    // call view to display posts
    return redirect("comments/$postId");
    // return view("posts.comments")->with('comments', $comments)->with('post', $post);
    // return view("posts.comments")->withId($id)->with('comment', $comment)->with('comments', $comments)->with('posts', $posts);
    // return redirect("/");

});

// Deletes the post with the selected id, then returns to the home page
Route::get('delete_post_action/{id}', function($id){
    $id = delete_post($id);
    return redirect("/");
});

    /*===========*/
    /* FUNCTIONS */
    /*===========*/
    
// create a post with $username, $title_post and $message from form.
function create_post($username, $title_post, $message) {
    $sql = "insert into post (username, title_post, message) values (?, ?, ?)";
    DB::insert($sql, array($username, $title_post, $message));
    $id = DB::getPdo()->lastInsertId(); //returns the last id that was added to the database
    return($id);
}

// create a comment in a post using $postId 
function create_comment($username, $message) {
    $sql = "insert into comment (postId, username, message) values (?, ?, ?)";
    DB::insert($sql, array($postId, $username, $message));
    $id = DB::getPdo()->lastInsertId(); //returns the last id that was added to the database
    return($id);
}

// Function to get the post from the database
function get_post($id){
    $sql = "select * from post where id=?";
    $posts = DB::select($sql, array($id));
    
    if (count($posts) != 1){
        die("Something has gone wrong, invalid query or result: $sql");
    }
    
    $post = $posts[0];
    return $post;
}

// Function to get the post comment from the database
// function get_comment($id){
//     $sql = "select * from comment where id = ?";
//     $comments = DB::select($sql, array($id));
    
//     if (count($comments) != 1){
//         die("Something has gone wrong, invalid query or result: $sql");
//     }
    
//     $comment = $comments[0];
//     return $comment;
// }

// Function to edit the post details, gets the variables using the id from the database so it can be edited
function edit_post($id, $username, $title_post, $message) {
    $sql = "update post set username = ?, title_post = ?, message = ? where id = ?"; 
    DB::update($sql, array($username, $title_post, $message, $id));
}

// Function to delete the post from the database. Just needs the id to know which one to delete
function delete_post($id) {
    $sql = "delete from post where id = ?"; 
    DB::delete($sql, array($id));
}