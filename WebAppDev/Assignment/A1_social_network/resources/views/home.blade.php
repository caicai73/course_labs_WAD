@extends('layouts.master')

@section('title')
    Skilti :: Speaks 
@endsection

@section('content')
  <div class="container basicFontStyle">
    <!-- Main content section -->
    <div class="jumbotron basicFontStyle">
      <div class="row basicFontStyle" >
        
        <!-- Form to add a new post -->
        <div class="col-md-4">
          <label class="headings">Create a new post!</label>
          <hr>
          <form method="post" action="{{create_post}}">
            <div class="form-group">
              <input name="username" type="text" class="form-control post_form" placeholder="Username">
            </div>
            <div class="form-group">
              <input name="title_post" type="text" class="form-control post_form" placeholder="Title of post">
            </div>
            <div class="form-group">
              <textarea name="message" class="form-control post_form" rows=5 placeholder="Type your message"></textarea>
            </div>
            <button type="submit" class="btn darkgrey">Post</button>
          </form>  
        </div>
        
        <!-- Posts -->
        <div class="col-md-8">
            <div class="col-md-12 post">
              <div class="col-md-12">
                <!--post icon-->
                <img src="images/S_S_logo.png" alt="Skilti::Speaks icon" class="logo" style="height:35px;width:32px">
                <!--post title-->
                {{ $post->Title }}
              </div>
              {{ $post->username}}
              {{ $post->Message}}
              
               <!--buttons to edit, delete or view comments -->
              <table>
                <tr>
                  <th><a href="../navbar/" class="links">View comments</a></th>
                  <th><a href="../navbar-static-top/" class="links">Edit</a></th>
                  <th><a href="./" class="links_delete">Delete</a></th>
                </tr>
              </table>
            </div>
        </div>
        
      </div>
    </div>
  </div>

      <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection