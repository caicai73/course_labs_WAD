<?php

namespace wp;
use wp\Post;
// use wp\Comment;

include_once('post.php');

// Create product objects-->
class PostSeeder{
    public static function seed() {
        $posts =[];
        $posts[] = new Post("Cleo", "I love food", "12/4/15", "images/Cleoo.jpg");
        $posts[] = new Post("Memphis", "I love me", "12/4/15","images/Memphis.jpg");
        $posts[] = new Post("Liam", "I love birds", "12/4/15", "images/Liam.jpg");
        return $posts;
    }
}
?>
 