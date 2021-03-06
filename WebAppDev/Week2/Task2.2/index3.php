<?php
    use wp\PostSeeder;
    include 'classes/postSeeder.php';
    $posts = PostSeeder::seed();
    
    // post1 comments
    $posts[0]->addComment('Liam', 'fatty');
    $posts[0]->addComment('Memphis', 'so cute');
    $posts[0]->addComment('Cleo', 'Whatever Liam');
    
    // post2 comments
    $posts[1]->addComment('Liam', 'nice');
    $posts[1]->addComment('Memphis', 'ikr thx');
    
    // post3 comments
    $posts[2]->addComment('Cleo', 'aww');
    $posts[2]->addComment('Liam', 'hehe');
    // var_dump($posts[0]);
    // exit;
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Social Media</title>
    <link rel="stylesheet" href="css/style.css">
  </head>
  
  <body>
    <!--page content-->
    <h1>Social Media</h1>
    <?php foreach ($posts as $post){?>
    <div id="post">
      <img src="<?= $post->getImage() ?>" alt="User image" width="100px" height="100px"><br>
      <?= $post->getUser() ?><br>
      <?= $post->getMessage() ?><br>
      <?= $post->getDate() ?><br>
      <hr>
      <b>Comment:</b><br> 
      <?php $comments = $post->getComments(); ?>
      <?php foreach ($comments as $comment){ ?>
        <?= $comment['user'] ?> said: <?= $comment['comment'] ?> <br>
      <?php } ?>
    </div>
    <?php } ?>
  </body>
</html>