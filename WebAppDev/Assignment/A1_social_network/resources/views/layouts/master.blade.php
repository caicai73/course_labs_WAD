<!DOCTYPE html>
<html>
    <head>
        <title>@yield('title')</title>
        <meta charset="utf-8">
        
        <!-- tab icon -->
        <!--==========-->
        <!--<link rel="shortcut icon" href="{{ URL::to('/') }}/images/S_S_logo.png">-->
        <link rel="shortcut icon" src="images/S_S_logo.png">
        
        <!-- Bootstrap core CSS -->
        <!--====================-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
         
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
        
        @yield('content')
        
        <!--<footer class="footer">-->
        <!--  <div class="container">-->
        <!--    <p class="text-muted basicFontStyle"><strong>© Skilti :: Speaks</strong> | Caila Ancheta | 2703ICT Web Application Development | 2017</p>-->
        <!--  </div>-->
        <!--</footer>-->
    </body>
</html>