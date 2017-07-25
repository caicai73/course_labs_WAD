<?php
    include 'classes/postSeeder.php';
    $posts = PostSeeder::seed();
    var_dump($posts);
    exit;
    
    // use wp\PostSeeder;
    // require 'classes/postSeeder.php';
    
    
    
    // include 'classes/post.php';
    
    // $post = new Post("Cleo", "I love myself");

    // Create product objects
    // $p1 = new Post('Cleo', 'I love myself');
    // // $p2 = new Post('Cutting Edge', '6ft softboard', '169.00', 'img/ce.jpg');-->

   

    // // Access object’s variables-->
    // $name = $p1->name;-->
    // $message = $p1->message;-->

    // // Call object’s functions-->
    // $date = $p1->getDate();-->
    // $p1->setDate('17/9/16');-->

    
    // // Constructor (note: there are 2 under scrolls before construct)-->
    // function __construct($name, $message, $date, $image){-->
    // $this->name = $name;-->
    // $this->message = $message;-->
    // $this->date = $date;-->
    // $this->image = $image;-->
    // }-->
    
    // function getImage(){ // this is also public-->
    // return $this->image;-->
    // }-->

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Social Media</title>
  
    <link rel="stylesheet" href="css/style.css">
  </head>
  
  <body>
    <h1>Social Media</h1>
    <?php foreach ($posts as $post){?>
    <div id="post">
        <img src="<?= $post['image'] ?>" alt="User image" width="100px" height="100px"><br>
        Username: <?= $post['user'] ?><br>
        Message: <?= $post['message'] ?><br>
        Date: <?= $post['date'] ?><br>
    </div>
    <?php } ?>
    
    <div id="post">
        <img src="<?= $post['image'] ?>" alt="User image" width="100px" height="100px"><br>
        Username: <?= $post['user'] ?><br>
        Message: <?= $post['message'] ?><br>
        Date: <?= $post['date'] ?><br>
    </div>
    
  </body>
</html>