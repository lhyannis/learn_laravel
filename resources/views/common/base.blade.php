<!DOCTYPE html>
<html>
  <head>
    <title>@yield('title', 'laravel学习')</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
  	@include('common._header')
    <div class="container">
		@include('common._messages')
       	@yield('content')
       	@include('common._footer')
    </div> 

    <script src="/js/app.js"></script>   
  </body>
</html>