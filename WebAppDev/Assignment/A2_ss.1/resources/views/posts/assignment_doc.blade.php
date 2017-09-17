@extends('layouts.master')

@section('title')
    Assignment Document
@endsection

@section('content')
    <div class="container basicFontStyle">
      <div class="row">
        
         <div class="panel panel-default" style="box-shadow: 1px 5px 15px #C3C3C3">
            <div class="panel-heading" style="background-color:#F7E287">
              <h3 style="text-align:center;color:#373C88"><strong>Assignment Document</strong></h3>
            </div>
            {{-- For: Public Posts --}}
            <div class="panel-body">
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
                    <li>This assignment is implemented using Laravel, migrations, seeders, models, controllers and the Validator class.</li>
                    <li>I created an ER diagram for the database, which can be found when you click the 'Documentation' tab in the navbar, 
                    then 'ER Diagram'.</li>
                    <li>All user input has been validated</li>
                    <li>I used Laravel’s migration for database table creation</li>
                    <li>I used Laravel’s seeder to insert default test data into the database. I was able to seed in everything in the 
                    appendix except for the friendships.</li>
                    <li>I have used Laravel’s ORM/Eloquent to perform CRUD operations</li>
                    <li>I used HTML and SQL sanitisation.</li><br>
                  
                    <li style="color:#373C88"><strong>There is a navigation menu on all pages.</strong></li>
                      <ul>
                        <li>Navigation menu is at the top of the page. I used a boostrap navigation bar. </li>
                        <li>The code for this navbar is in the master file in the layouts folder. I put it there because it's easier to edit
                        all pages at once, and it makes the other page files cleaner to read.</li>
                        <li>There is the website logo in the navbar which links to the home page.</li>
                        <li>The 'Documentation' link opens a dropdown where you can find the ER diagram and this document.</li>
                      </ul>
                    <br>  
                    <li style="color:#373C88"><strong>The home page when not logged in</strong></li>
                      <ul>
                        <li>It displays all public posts in order of most recent posts. </li>
                        <li>They will be able to see the comments of the post</li>
                        <li>they cannot delete or edit posts, or delete comments</li>
                        <li>There is a login and register link that non logged in users can access</li>
                      </ul>
                    <br>
                    <li style="color:#373C88"><strong>The home page when logged in</strong></li>
                      <ul>
                        <li>It has a form to add a new post in the right column.</li>
                        <li>It shows all posts </li>
                        <li>The post form has input validation. There needs to be input in the title and message.</li>
                        <li>When the new post form is submitted, it redirects back to the home page with the new post added.</li>
                        <li>I have added support for user accounts, and privacy setting for posts.</li>
                      </ul>
                    <br>
                    <li style="color:#373C88"><strong>Posts</strong></li>
                      <ul>
                        <li>All posts have the profile picture in the top-left corner.</li>
                        <li>Each post has the Title at the top, the user it was written by underneath, and the message underneath that.</li>
                        <li>There is a link where they can view the comments at the bottom of each post </li>
                        <li>In the top-right corner of each post, there is a post options dropdown where you can delete and edit the post.</li>
                        <li>When the delete button is pressed, it deletes the post as well as all the comments on that post, if any.</li>
                        <li>Pressing the edit button takes you to the edit post page where the post can be edited. If the cancel button is pressed
                        it will not update the post, and just redirect back to the homepage. If the save button is pressed, it updates the posts
                        with the new edits and goes to the view comments page for that post.</li>
                      </ul>
                    <br>
                    <li style="color:#373C88"><strong>Users</strong></li>
                      <ul>
                        <li>Users can log in with email and password</li>
                        <li>they can register with email, fullname, password, birthday, and upload an image</li>
                        <li></li>
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
                        <li>Comments have pagination implemented to 6 comments per page</li>
                      </ul>
                    <li style="color:#373C88">Database</li>
                      <ul>
                        <li>I created five tables, user, posts, comments, privacies and friends (friendships were not implemented).</li>
                        <li>The post migration table has a primary key id, foreign user id, foreign privacy id, foreign comment id, fullname, title and a message and timestamps.</li>
                        <li>The comment migration table has an primary key id, a foreign key for the post id, a foreign user id, a fullname and a message and timestamps.</li>
                        <li>The user migration table has an primary key for id, fullname, email, dob, password, profile image and timestamps.</li>
                        
                        <li>I inserted the required initial data into the required table seeders, except for the friendship types.</li>
                      </ul>
                  </ol>
                  <br>
                  <strong style="color:#373C88;margin-left:26px"><u>Not completed:</u></strong><br>
                  <ul>
                    <li>When a post is deleted, comments aren't deleted, even if the comments are made by other users</li>
                    <li>In home page, Posts shown for logged in users are retrieved by using a single Model/Eloquent query</li>
                    <li>I wasn't able to put the correct comments for each post, currently all posts have the same comments</li>
                    <li>I wasn't able to put the age of the user on the profile page</li>
                    <li>I wasn't able to implement a search for users</li>
                    <li>Uploaded images were not routing to the correct path</li> 
                    <li>Users cannot add friends, everyone is currently friends with everyone</li>
                    <li>I wasn't able to add a post, something was wrong with the routes</li>
                    <li>Comments also cannot be added, something was wrong with the routes</li>
                    <li>The friend list is available, but there was an issue trying to route to it</li>
                    <li>I attempted to have an image upload when the user is logged in, however it didn't work.</li>
                    <li>Ultimately, I ran out of time..</li>
                  </ul>
                  <p id="assig" style="margin-left:26px"></p>
                  <strong style="color:#373C88;margin-left:26px"><u>Extra:</u></strong><br>
                  <ul>
                    <li class="listing">The website name 'Skilti :: Speaks' is a play on the name Scilti which means legendary messenger of Arthur in Irish.
                    I found it an interesting name to call this social media website. </li>
                    <li class="listing">I added a footer at the bottom of each page by putting the code into the master.blade file. The footer
                    just contains the website name, my name, my student id, and the course details.</li>
                    <li class="listing">I added a favicon to each page, which is similar to my website logo.</li>
                    <li class="listing">The theme for my site is yellow, purple and grey.</li>
                  </ul>
                </div>
              </p>
            </div>
          </div>
          
      </div>
    </div>
@endsection