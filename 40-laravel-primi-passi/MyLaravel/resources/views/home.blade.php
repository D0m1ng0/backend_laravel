<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>My First Blade Page</title>

    <style media="screen">
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    body {
      width: 100vw;
      height: 100vh;
      background: purple;
      color: white;
    }
    .container {
      display: flex;
      width: 100%;
      height: 100%;
    }
    .container > * {
      margin: auto;
    }
    </style>
  </head>

  <body>
    <div class="container">
      <h1>

        Hello World
        <?php echo "ciao dentro h1"; ?>
      </h1>

      <?php echo "ciao fuori da h1"; ?>

      <!-- PROBLEMA -->
      @php
      {{$hello}}
      @endphp

    </div>
  </body>
</html>
