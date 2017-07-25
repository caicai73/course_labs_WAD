<?php

include_once('post.php');

// Create product objects-->
class PostSeeder{
    public static function seed() {
        $posts =[];
        $posts[] = new Post("Cleo", "I love myself");
        $posts[] = new Post("Memphis", "I love me");
        $posts[] = new Post("Liam", "I love you");
        return $posts;
    }
}

?>
 