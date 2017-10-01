<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link rel="shortcut icon" href="img/kaikoi" />
    <link href="{{ asset('css/general.min.css')}}" rel="stylesheet" media="screen">
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen"> <!–Llamamos al archivo CSS –>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> <!– Importante llamar antes a jQuery para que funcione bootstrap.min.js   –>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/jquery-3.2.1.js')}}"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> <!– Importante llamar antes a jQuery para que funcione bootstrap.min.js   –>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
</head>
<body>
      <div class="second">
      @include('partials.messages')
      @yield('content')
      </div>



        <div class="lateral-bar">
            <img class="fish" src="img/fish.png">
        </div>
        @include('sweet::alert')

</body>

</html>
