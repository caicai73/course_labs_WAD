<?php

namespace wp;

/** A class that defines comments */
class Comment{
    // Member variables
    protected $user;
    protected $comments;
    
    function __construct($user, $comment){
        $this->user = $user;
        $this->comments = array();
    }
    
    // Accessors/Getters
    function getComments(){
        return $this->comments;
    }

}

?>