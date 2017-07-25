<?php
    $posts = array();
    $posts[0] = array(
        'user' => 'Cleo',
        'message' => "Meow, wassap",
        'image' => 'images/Cleoo.jpg',
        'date' => '10/2/17'
    );
    $posts[1] = array(
        'user' => 'Memphis',
        'message' => "Mroew, wassap",
        'image' => 'images/Memphis.jpg',
        'date' => '16/5/18'
    );
    $posts[2] = array(
        'user' => 'Liam',
        'message' => "Woof, wassap",
        'image' => 'images/Liam.jpg',
        'date' => '23/7/19'
    );
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
  </body>
</html>