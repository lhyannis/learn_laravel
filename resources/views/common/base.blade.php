<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'laravel学习')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
  	@include('common._header')
    <div class="container">
      @yield('content')
       @include('common._footer')
    </div>    
  </body>
</html>