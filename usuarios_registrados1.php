<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">

  </head>
  <body>
    <?php
    session_start();
    if (!isset($_SESSION["usuario"])) {
      header("Location:login.php");
    }
     ?>
    <h1> Bienvenidos usuarios</h1>
    <?php
        echo "Hola ".$_SESSION["usuario"] ."</br>" ;

     ?>
    <p>Esto es informacion solo para usuarios registrados</p>
      <a href="cierre.php"><p>Cierra Sesion</p></a>
</body>
</html>
