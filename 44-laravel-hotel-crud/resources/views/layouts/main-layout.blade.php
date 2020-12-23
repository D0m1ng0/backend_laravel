<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LARAVEL - INDEX : SHOW : CREATE : STORE</title>

    <link rel="stylesheet" href="{{asset('/css/app.css')}}">

  </head>

  <body>
    <div class="container">
      <h1>
        ESERCIZIO - STAMPA PAGANTI !
      </h1>
      <br><br>


      @include('partials.header')
      @yield('section')
      @include('partials.footer')


    </div>

  </body>
</html>
