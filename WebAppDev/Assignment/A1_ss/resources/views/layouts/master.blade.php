<!DOCTYPE html>
<html>
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <meta name="description" content="">
      <meta name="author" content="">
      <title>@yield('title')</title>
      
      <!-- tab icon -->
      <!--==========-->
      <link rel="shortcut icon" href="{{ URL::to('/') }}/images/S_S_logo.png">
      
      <!-- Bootstrap core CSS -->
      <!--====================-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
      <!-- Custom styles for this template -->
      <link href="navbar-fixed-top.css" rel="stylesheet">
      <!--=====-->
      <!-- CSS -->
      <!--=====-->
      <link rel="stylesheet" type="text/css" href="{{secure_asset('css/styles.css')}}">
      <link href="https://fonts.googleapis.com/css?family=Playfair+Display%7CRaleway" rel="stylesheet">
    </head>
    <body>
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
              <a href="/"><img src="{{ URL::asset("images/skilti_speaks.png") }}" alt="Skilti::Speaks logo" style="margin:5px 5px 5px 20px;height:40px"></img></a>
            </div>
            
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right" >
                <li><a href="{{ secure_url("/") }}" class="navFont">Home <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle navFont" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#373C88">Documentation <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="ER_diagram">ER Diagram</a></li>
                    <li><a href="assignment_doc">Assignment Document</a></li>
                  </ul>
                </li>
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
        
        @yield('content')
        
        <footer class="footer">
          <div class="container">
            <p class="text-muted basicFontStyle"><strong>© Skilti :: Speaks</strong> | Caila Ancheta s2944547 | 2703ICT Web Application Development - Assignment 1 | 2017</p>
          </div>
        </footer>
      
        {{-- Bootstrap core JavaScript --}}
        {{-- Placed at the end of the document so the pages load faster --}}
        {{--================================================== --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        {{-- for hover function--}}
        <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
        </script>
    </body>
</html>