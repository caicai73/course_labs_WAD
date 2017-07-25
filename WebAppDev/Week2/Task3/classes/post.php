<?php

namespace wp;

use wp\Comment;
require 'classes/comment.php';


/** A class that defines products */
class Post{
    // Member variables
    protected $user; // protected variables can only be access from this and it’s parent
    protected $message;
    protected $date;
    protected $image;
    protected $comments;
    
    function __construct($user, $message, $date, $image){
        $this->user = $user;
        $this->message = $message;
        $this->date = $date;
        $this->image = $image;
        $this->comments = array();
    }

    // Accessors/Getters
    function getUser(){
        return $this->user;
    }
    
    function getMessage(){
        return $this->message;
    }
    
    function getDate(){
        return $this->date;
    }
    
    function getImage(){
        return $this->image;
    }
    
    function getComments(){
        return $this->comments;
    }
    
    function addComment($user, $comment){
        
        // $posts[0]->addComment('Liam', 'testing task 3');
        // $test = array('Liam', "comment14215431515141551ssdf");
        // $test->addComment;
        
        $test = new comment('liam', 'meow');
        
        $this->comments[] = array('user' => $user, 'comment' => $comment);
    }
    
}

?>