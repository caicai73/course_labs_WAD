@extends('layouts.master')

@section('title')
    Skilti :: Speaks: Edit post 
@endsection

@section('content')
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top basicFontStyle">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="../public"><img src="images/skilti_speaks.png" alt="Skilti::Speaks logo" style="margin:5px 5px 5px 20px;height:40px"></a>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="../public" class="navFont">Home <span class="sr-only">(current)</span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle navFont" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#F0C305">Caila Ancheta <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="">Edit Profile</a></li>
                <li><a href="">See Photos</a></li>
                <li><a href="">See Friends</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="">Settings</a></li>
                <li><a href="">Logout</a></li>
              </ul>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container basicFontStyle">
      <!-- Main content section -->
      <div class="jumbotron">
        <div class="row basicFontStyle" >
          
          <!-- Form to add a new post -->
          <div class="col-md-5 post_section" style="text-align:left">
            <label class="headings">Edit your post!</label>
            <hr>
            <input class="post_form" type="text" placeholder="Username"><br>
            <input class="post_form" type="text" placeholder="Title of post"><br>
            <textarea class="post_message"name="message" rows=5 cols=48 placeholder="Post a message..."></textarea><br><br>
            <div>
              <button class="btn darkgrey" type="submit">Post</button>
            </div>
          </div>
          
          <!-- TIMELINE CONTENT -->
          <div class="col-md-7" id="left">
            <div class="row" >
              <div class="col-md-12 post">
                <div class="col-md-12">
                  <!--post icon-->
                  <img src="images/S_S_logo.png" alt="Skilti::Speaks icon" class="logo" style="height:35px;width:32px">
                  <!--post title-->
                  <strong id="caption2">Post 1</strong>
                </div>
                <img src="images/Cleoo.jpg" width="300px" height="300px" alt="Cleo, my cat."><br><hr>
                <strong id="caption">07/08/17 3:35 PM</strong>
                <p id="caption">This is my 2 year old cat, Cleo.</p>
                
                <!-- buttons to edit, delete or view comments -->
                <table>
                  <tr>
                    <th><a href="../navbar/" class="links">View comments</a></th>
                    <th><a href="../navbar-static-top/" class="links">Edit</a></th>
                    <th><a href="./" class="links_delete">Delete</a></th>
                  </tr>
                </table>
              </div>
              
              
              <div class="col-md-12"><br></div>
              
              <div class="col-md-12 post">
                <div class="col-md-12">
                  <img src="images/S_S_logo.png" alt="Skilti::Speaks icon" class="logo" style="height:35px;width:32px">
                  <strong id="caption2">Post 2</strong>
                </div>
                <img src="images/Memphis.jpg" width="260px" height="300px" alt="Memphis, my other cat."><br><hr>
                <strong id="caption">08/08/17 1:15 PM</strong>
                <p id="caption">This is my other 2 year old cat, Memphis.</p>
              </div>
              
              <div class="col-md-12"><br></div>
              
              <div class="col-md-12 post">
                <div>
                  <img src="images/S_S_logo.png" alt="Skilti::Speaks icon" class="logo" style="height:35px;width:32px">
                  <strong id="caption2">Post 3</strong>
                </div>
                <img src="images/Liam.jpg" width="280px" height="300px"alt="Liam, my dog."><br><hr>
                <strong id="caption">13/08/17 3:35 PM</strong>
                <p id="caption">This is my 5 year old dog, Liam.</p>
              </div>
              
            </div>
          </div>
          
        </div>
      </div>
    </div>
    
    <footer class="footer">
      <div class="container">
        <p class="text-muted basicFontStyle"><strong>© Skilti :: Speaks</strong> | Caila Ancheta | 2703ICT Web Application Development | 2017</p>
      </div>
    </footer>

        <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
@endsection