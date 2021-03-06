<!DOCTYPE html>
<html >
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
  <style>
  html{
    background-color: #333333;
    font-family: "Nexa-Regular";
  }
.btn-logout{
        color: black;
        font-size: 24px;
        text-decoration: none;
        float: right;
  }

  @font-face {
    font-family: 'Nexa-Bold';
    src: url('../../resources/fonts/Nexa-Bold.otf');
  }
  @font-face {
    font-family: 'Nexa-Regular';
    src: url('../../resources/fonts/Nexa-Light.otf');
  }
  .table{
    width: 100%;
    text-align: center;
    margin-top: 10px;
   border-color: rgba(0,0,0,0.5);
   border-style: solid;
  }
  </style>

    <title></title>

    <!-- Scripts -->


    <!-- Fonts -->

</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">

        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
