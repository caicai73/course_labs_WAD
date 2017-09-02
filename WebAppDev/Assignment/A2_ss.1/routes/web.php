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

// Routes to homepage
Route::get('/', 'PostController@index');

// Post controller route
Route::resource('/home', 'PostController');

// Comment contoller routes
Route::resource('/home/view_comments', 'CommentController');

// // Routes to the ER diagram page
// Route::get('ER_diagram', function(){
//     return view("posts.ER_diagram");
// });

// // Routes to the ER diagram page
// Route::get('assignment_doc', function(){
//     return view("posts.assignment_doc");
// });

// // Routes to this page when the link selected has not been implemented yet. 
// Route::get('extra', function(){
//     return view("posts.extra");
// });

// // Displays the edit form page, calls the id so it knows which item to update
// Route::get('edit_post/{id}/edit', function($id){ 
//     $post = get_post($id);
//     return view("posts.edit_post")->with('post', $post);
// });

// // Calls the edit_post_action to edit the post details
// Route::post('/edit_post_action', function(){ 
//     $username = request('username');
//     $title_post = request('title_post');
//     $message = request('message');
//     $id = request('id');
    
//     get_post($id);
//     $sql = "select * from post, comment where post.id = ? and post.id = comment.postId";
//     DB::select($sql, array($id));
//     edit_post($id, $username, $title_post, $message);
    
//     return redirect("view_comments/$id");
// });

// // Calls the comments page for that post
// Route::get('view_comments/{id}', function($id){
//     // $comments = get_comment($id);
//     $sql = "select * from post, comment where post.id = ? and post.id = comment.postId";
//     $comments = DB::select($sql, array($id));
//     $post = get_post($id);
//     return view("posts.view_comments")->with('comments', $comments)->with('post', $post);
// });

// // calls the count_comment() function to get number of comments for a post
// Route::get('count_comment', function($postId){
//     count_comment($postId);
// });

// // Creates a comment, gets the post.id the comment was made with, and then adds comment to that post
// Route::post('/view_comments_action', function(){
//     $username = request('username');
//     $message = request('message');
//     $postId = request('id');
  
//     $sql = "insert into comment (postId, username, message) values (?, ?, ?)";
//     DB::insert($sql, array($postId, $username, $message));
//     $id = DB::getPdo()->lastInsertId(); //returns the last id that was added to the database
//     $sql2 = "select * from post, comment where post.id = ? and post.id = comment.postId";
//     DB::select($sql2, array($id));
    
//     // call view to display posts
//     return redirect("view_comments/$postId");

// });

// // Deletes the post and its comments with the selected id, then returns to the home page
// Route::get('delete_post_action/{id}', function($id){
//     delete_post($id);
//     return redirect("/");
// });

// // Deletes the comment with the selected id, stays on the comments page
// Route::get('delete_comment_action/{id}', function($id){
//     delete_comment($id);
//     return back();
// });

//     /*===========*/
//     /* FUNCTIONS */
//     /*===========*/
    
// // create a post with $username, $title_post and $message from form.
// function create_post($username, $title_post, $message) {
//     $sql = "insert into post (username, title_post, message) values (?, ?, ?)";
//     DB::insert($sql, array($username, $title_post, $message));
//     $id = DB::getPdo()->lastInsertId(); //returns the last id that was added to the database
//     return($id);
// }

// // counts the comments for a post
// function count_comment($postId) {
//     $sql = 'select count(*) as total from comment, post where post.id = comment.postId and postId = ?';
//     return DB::select($sql, array($postId))[0]->total;
// }

// // Function to get the post from the database
// function get_post($id){
//     $sql = "select * from post where id=?";
//     $posts = DB::select($sql, array($id));
    
//     if (count($posts) != 1){
//         die("Something has gone wrong, invalid query or result: $sql");
//     }
    
//     $post = $posts[0];
//     return $post;
// }

// // Function to edit the post details, gets the variables using the id from the database so it can be edited
// function edit_post($id, $username, $title_post, $message) {
//     $sql = "update post set username = ?, title_post = ?, message = ? where id = ?"; 
//     DB::update($sql, array($username, $title_post, $message, $id));
// }

// // Function to delete the post from the database. Just needs the id to know which one to delete
// function delete_post($id) {
//     $deleteComment = "delete from comment where postId = ?";
//     DB::delete($deleteComment, array($id));
    
//     $sql = "delete from post where id = ?"; 
//     DB::delete($sql, array($id));
// }

// // Function to delete the comment from the database
// function delete_comment($id) {
//     $sql = "delete from comment where id = ?";
//     DB::delete($sql, array($id));
// }