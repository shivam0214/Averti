<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
	<link rel="stylesheet" href="{{asset('assets/css/vendors_css.css')}}">
	<!-- Style-->  
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/skin_color.css')}}">
    <link rel="icon" href="https://www.multipurposethemes.com/admin/florence-admin-template/images/favicon.ico">	
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    
    <style>
.loader {
border: 6px solid #f3f3f3;
    border-radius: 50%;
    border-top: 6px solid #001640;
    border-bottom: 6px solid #001640;
    width: 50px;
    height: 50px;
  -webkit-animation: spin 2s linear infinite;
  animation: spin 2s linear infinite;
}
.backloader{
    background: #222e4cb0;
    position: absolute;
    width: 93%;
    z-index: 9;
    height: 100%;
    display:none;
    text-align: -webkit-center;
}

@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>
</head>
<body class="hold-transition dark-skin sidebar-mini theme-primary">

@include('main.header')
@include('main.sidebar') 
        <main class="py-4">
            @yield('content')
        </main>
@include('main.footer') 
</body>
</html>
