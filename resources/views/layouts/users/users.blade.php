<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KAOSAN &mdash; Mock up</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @stack('head')

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="{{asset('extension/fonts/icomoon/style.css')}}">
    <link rel="stylesheet" href="{{asset('extension/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('extension/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('extension/css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('extension/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('extension/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('extension/css/aos.css')}}">    
    <link rel="stylesheet" href="{{asset('extension/css/style.css')}}">
    
  </head>
  <body>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

    @include('layouts.users.header_')

    
    @yield('content')
    

    @include('layouts.users.footer_')
  </div>

  
  <script src="{{asset('extension/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('extension/js/jquery-ui.js')}}"></script>
  <script src="{{asset('extension/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('extension/js/popper.min.js')}}"></script>
  <script src="{{asset('extension/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('extension/js/jquery.magnific-popup.min.js')}}"></script>
  <script src="{{asset('extension/js/aos.js')}}"></script>
  <script src="{{asset('extension/js/main.js')}}"></script>

  @stack('scripts')
    
  </body>
</html>