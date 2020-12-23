<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LARAVEL - CRUD</title>

    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

  </head>
  <body>
    <div class="container">
      {{-- <h1 class="title">
        CRUD COMPLETA !
      </h1> --}}
      @include('partials.header')
      @yield('content')
      {{-- @include('partials.footer') --}}
      @include('partials.footer')
    </div>
  </body>
</html>
