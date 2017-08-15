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
        @yield('content')
    </body>
</html>