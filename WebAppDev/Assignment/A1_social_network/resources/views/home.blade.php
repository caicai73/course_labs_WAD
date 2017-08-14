@extends('layouts.master')

@section('title')
    Skilti :: Speaks 
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
          <div class="col-md-4">
            <a href="../public"><img src="images/skilti_speaks.png" height="50px" alt="Skilti::Speaks logo" style="padding:5px"></a>
          </div>
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="../navbar/" class="navFont">Photos</a></li>
            <li><a href="../navbar-static-top/" class="navFont">Friends</a></li>
            <li class="active"><a href="./" class="navFont">Login <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container basicFontStyle">
      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="row basicFontStyle" id="content" >
          <div class="col-md-3" style="text-align:left">
            <label>Name: </label><br><input type="text" placeholder="Name of post..."><br><br>
            <label>Message:</label><br>
            <textarea name="message" rows=5 cols=19 placeholder="Post a message..."></textarea><br><br>
          </div>
          <div class="col-md-9" id="left">
            <h2>Caila Ancheta</h2>
            <hr><br>
            <div class="row" >
              <div class="col-md-5" id="post">
                <img src="images/Cleoo.jpg" width="300px" height="300px" alt="Cleo, my cat."><br><hr>
                <strong id="caption2">Post 1</strong><br>
                <strong id="caption">07/08/17 3:35 PM</strong>
                <p id="caption">This is my 2 year old cat, Cleo.</p>
              </div>
              <div class="col-md-2"></div>
              <div class="col-md-5" id="post">
                <img src="images/Memphis.jpg" width="260px" height="300px" alt="Memphis, my other cat."><br><hr>
                <strong id="caption2">Post 2</strong><br>
                <strong id="caption">08/08/17 1:15 PM</strong>
                <p id="caption">This is my other 2 year old cat, Memphis.</p>
              </div>
            </div>
            <hl><br>
            <div class="row">
              <div class="col-md-5" id="post">
                <img src="images/Liam.jpg" width="280px" height="300px"alt="Liam, my dog."><br><hr>
                <strong id="caption2">Post 3</strong><br>
                <strong id="caption">13/08/17 3:35 PM</strong>
                <p id="caption">This is my 5 year old dog, Liam.</p>
              </div>
              <div class="col-md-2"></div>
              <div class="col-md-5"></div>
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