<!DOCTYPE html>
<html lang="es">

  <head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1"> <!–Con esto garantizamos que se vea bien en dispositivos móviles–>
    <title>Mi primer proyecto con Booststrap</title>
    <link href="css/general.min.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen"> <!–Llamamos al archivo CSS –>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> <!– Importante llamar antes a jQuery para que funcione bootstrap.min.js   –>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-3.2.1.js"></script>
  </head>

    <body>

        <div class="topbar">
            <div class="topmenu">
            <div class="menuoptions">
            <a href="#" class="a1" style="color:white; text-decoration:none;">Nosotros</a>
            <a href="#" class="a2" style="color:white; text-decoration:none;">Beneficios</a>
            <a href="{{url('confirm_email')}}" class="a3" style="color:white; text-decoration:none;">Crear Cuenta</a>
            <a href="{{url('login')}}" class="a4" style="color:white; text-decoration:none;">Login</a>
            </div>
            </div>
        </div>

        <div class="div">
        <center><div class="info">

        <img src="img/Recurso%202.png">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing <br> elit, sed diam nonummy nibh euismod tincidunt laoreet</p>

        </div></center>
        </div>

  </body>
</html>
