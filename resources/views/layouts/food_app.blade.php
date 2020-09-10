<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="#">
    <title>Starter Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/foodassets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/foodassets/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/foodassets/css/animsition.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/foodassets/css/animate.css')}}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{asset('assets/foodassets/css/style.css')}}" rel="stylesheet"> </head>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
<body class="home">
@include('main.food_header')
        <main class="py-4">
    @yield('food_content')
        </main>
@include('main.food_footer') 
</body>
</html>
