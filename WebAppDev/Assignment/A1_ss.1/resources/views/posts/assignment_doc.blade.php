@extends('layouts.master')

@section('title')
    Assignment Document
@endsection

@section('content')
    <div class="container">
      <div class="row jumbotron basicFontStyle" style="box-shadow: 1px 5px 15px #C3C3C3">
        <div class="col-md-12 docos">
          <p style="color:#373C88;text-align:center"><strong>Assignment Document</strong></p>
          <hr>
          <p id="assig">
            <p style="margin-left:19px;font-size:15px">
              <strong style="color:#373C88">Purpose:</strong> A short document describing what you were able to complete,
              what you were not able to complete, any interesting approaches you took, and any extra that was implemented.<br>
            </p>
            <hr id="thinYellow">
            <div class="col-md-12">
              <br>
              <strong style="color:#373C88;margin-left:26px"><u>Completed:</u></strong><br>
              <ol>
                <li>This assignment is implemented using Laravel and the DB class.</li>
                <li>I created an ER diagram for the database, which can be found when you click the 'Documentation' tab in the navbar, 
                then 'ER Diagram'.</li><br>
                <li style="color:#373C88"><strong>There is a navigation menu on all pages.</strong></li>
                  <ul>
                    <li>Navigation menu is at the top of the page. I used a boostrap navigation bar. </li>
                    <li>The code for this navbar is in the master file in the layouts folder. I put it there because it's easier to edit
                    all pages at once, and it makes the other page files cleaner to read.</li>
                    <li>There is the website logo in the navbar which links to the home page. The 'Home' link also goes to the homepage.</li>
                    <li>The 'Documentation' link opens a dropdown where you can find the ER diagram and this document.</li>
                  </ul>
                <br>  
                <li style="color:#373C88"><strong>The home page</strong></li>
                  <ul>
                    <li>It displays all posts in order of most recent posts in the right column.</li>
                    <li>It also has a form to add a new post in the right column.</li>
                    <li>The post form has input validation. There needs to be input in the username, title and message.</li>
                    <li>When the new post form is submitted, it redirects back to the home page with the new post added.</li>
                  </ul>
                <br>  
                <li style="color:#373C88"><strong>Posts</strong></li>
                  <ul>
                    <li>All posts have the logo icon in the top-left corner.</li>
                    <li>Each post has the Title at the top, the user it was written by underneath, and the message underneath that.</li>
                    <li>There is a link where they can view the comments at the bottom of each post. If there are no comments on the
                    post, it will show 'no comments yet, add one', and then if there is a comment it will show the number of comments, or comment. </li>
                    <li>In the top-right corner of each post, there is a post options dropdown where you can delete and edit the post.</li>
                    <li>When the delete button is pressed, it deletes the post as well as all the comments on that post, if any.</li>
                    <li>Pressing the edit button takes you to the edit post page where the post can be edited. If the cancel button is pressed
                    it will not update the post, and just redirect back to the homepage. If the save button is pressed, it updates the posts
                    with the new edits and goes to the view comments page for that post.</li>
                  </ul>
                <br>  
                <li style="color:#373C88"><strong>Comments</strong></li>
                  <ul>
                    <li>The view comments page has the post at the top, and the comments (if any) underneath.</li>
                    <li>A comment can be added using the form under the post. When the form submits it stays on the same page.</li>
                    <li>The comment form has input validation. There needs to be input in the username, title and message.</li>                
                    <li>Each comment has the username, then the message next to it.</li>
                    <li>The delete comment button is at the end of the comment, and when pressed, the comment is deleted, then redirects
                    to the view comments page.</li>
                    <li>Similar to the posts on the homepage, the post on the view comments page has a dropdown where u can edit the 
                    post or delete it. Deleting the post redirects to the homepage after deleting the post and its comments from the database.</li>
                  </ul>
                <li style="color:#373C88">Database</li>
                  <ul>
                    <li>I created two tables, one for posts and one for comments.</li>
                    <li>The post table has an primary key id, username, title and a message.</li>
                    <li>The comment table has an primary key id, a foreign key for the post id, a username and a message.</li>
                    <li>I also inserted some initial data into both the post and comment tables.</li>
                  </ul>
              </ol>
              <br>
              <strong style="color:#373C88;margin-left:26px"><u>Not completed:</u></strong><br>
              <p id="assig" style="margin-left:26px">I believe that I have completed all requirements for this assignment.</p>
              <strong style="color:#373C88;margin-left:26px"><u>Extra:</u></strong><br>
              <ul>
                <li class="listing">The website name 'Skilti :: Speaks' is a play on the name Scilti which means legendary messenger of Arthur in Irish.
                I found it an interesting name to call this social media website. </li>
                <li class="listing">I added a footer at the bottom of each page by putting the code into the master.blade file. The footer
                just contains the website name, my name, my student id, and the course details.</li>
                <li class="listing">I added a favicon to each page, which is similar to my website logo.</li>
                <li class="listing">The theme for my site is yellow, purple and grey.</li>
                <li class="listing">On the view comments page, when you hover over the delete button on each comment, it says delete.
                I implemented this by using a bootstrap tooltip plugin.</li>
                <li class="listing">In the navigation menu, clicking my name (Caila Ancheta) will open a dropdown that has the 'profile' options 
                which are not implemented. I just wanted to have it there because it looked nice. I assume we may be implementing 
                multiple users into the second assignment, so I just left it there in case.<br>
                While the links' purpose don't work, when you click the link they redirect to a page that has a message. When you hover over the 
                message, there's another message.</li>
                
                
              </ul>
            </div>
          </p>
          
        </div>
      </div>
    </div>
@endsection