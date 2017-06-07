<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
  <body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$user=$_POST['usuario'];
$pass=$_POST['contraseña'];
try {
  $base = new PDO("mysql:host=$servername;dbname=prueba", $username, $password);
  $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql="SELECT * FROM USUARIOS_PASS WHERE USUARIOS = '$user' AND PASSWORD= '$pass'";
  $resultado=$base->prepare($sql);
  $resultado->execute();
  $numero_registro=$resultado->rowCount();

  if($numero_registro!=0){
    session_start();
    $_SESSION["usuario"]=$user; 
    header("Location:usuarios_registrados1.php");
  }else {
    header("Location:login.php");
  }
} catch (Exception $e) {
  die ("Error: ".$e->getMessage());
}
 ?>
</body>
</html>
