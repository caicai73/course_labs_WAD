<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!--The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags-->
  <meta name="description" content="">
  <meta name="author" content="Caila Ancheta">
  
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
 
  <!--favicon-->
  <!--==========-->
  <link rel="icon" href="../../S_S_logo.png">
  <title>@yield('title')</title>
  
  <!--Bootstrap core CSS-->
  <!--====================-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <!--Custom styles for this template-->
  <link href="navbar-fixed-top.css" rel="stylesheet">
  <!--=====-->
  <!-- CSS -->
  <!--=====-->
  <link rel="stylesheet" type="text/css" href="{{secure_asset('css/styles.css')}}">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display%7CRaleway" rel="stylesheet">
</head>
<body>
    {{-- Fixed navbar --}}
    <nav class="navbar navbar-default navbar-fixed-top basicFontStyle">
      <div class="container">
        <div class="navbar-header">
          
          <!-- Collapsed Hamburger -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
          <!-- Branding Image -->
          @if (Auth::guest())
              <a href="/"><img src="{{ URL::asset("images/skilti_speaks.png") }}" alt="Skilti::Speaks logo" style="margin:5px 5px 5px 20px;height:40px"></img></a>
          @else
              <a href="/userHome"><img src="{{ URL::asset("images/skilti_speaks.png") }}" alt="Skilti::Speaks logo" style="margin:5px 5px 5px 20px;height:40px"></img></a>
          @endif
          
        </div>
        
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li class="dropdown">
                  <a href="/" class="dropdown-toggle navFont" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#373C88">Documentation <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/ER_diagram">ER Diagram</a></li>
                    <li><a href="/assignment_doc">Assignment Document</a></li>
                  </ul>
                </li>
                <li><a href="{{ route('login') }}" style="color:#373C88">Login</a></li>
                <li><a href="{{ route('register') }}" style="color:#373C88">Register</a></li>
            @else
                <li class="dropdown">
                  <a href="/" class="dropdown-toggle navFont" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color:#373C88">Documentation <span class="caret"></span></a>
                  <ul class="dropdown-menu">
                    <li><a href="/ER_diagram">ER Diagram</a></li>
                    <li><a href="/assignment_doc">Assignment Document</a></li>
                  </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" style="color:#F0C305;text-align:center">
                        <img src="images/profile/{{ Auth::user()->profImg }}" style="width:23px; height:23px; border-radius:50%; margin-right:5px">
                        Welcome, {{ Auth::user()->fullname }}! <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu" role="menu">
                        <li><a href="/profile/{{ Auth::user()->id }}">My Profile</a></li>
                        <li><a href="/friends/{{ Auth::user()->id }}">Friends List</a></li>
                        <li role="separator" class="divider"></li>
                        <li>
                            <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            @endif
          </ul>
        </div>{{--/.nav-collapse --}}
      </div>
    </nav>
    
    @yield('content')
    
    <footer class="footer">
      <div class="container">
        <p class="text-muted basicFontStyle"><strong>© Skilti :: Speaks</strong> | Caila Ancheta s2944547 | 2703ICT Web Application Development - Assignment 2 | 2017</p>
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