<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BP Website - @yield('title')</title>

    <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.css">
  </head>
  <body>
    @include('include.navbar')

    <div class="container">

      @yield('content')

    </div>

  </body>
</html>
