<?php

/** A class that defines products */
class Post{
    // Member variables
    protected $name; // protected variables can only be access from this and it’s parent
    protected $message; // protected variables can only be access from this and it’s parent
    // protected $date; // protected variables can only be access from this and it’s parent
    // // and subclasses
    // private $image; // private variables can only be access from this class
    
    function __construct($name, $message){
        $this->name = $name;
        $this->message = $message;
        // $this->date = $date;
        // $this->image = $image;
    }

    // Accessors/Getters
    function getName(){
        return $this->name;
    }
    
    function getMessage(){
        return $this->message;
    }
    
    // public function getDate(){
    // return $this->date;
    // }
    // function getImage(){ // this is also public
    // return $this->image;
    // }
    // // Mutator or setter
    // function setDate($date){
    // $this->date = $date;
    // }
}
?>