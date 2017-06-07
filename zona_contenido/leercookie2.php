<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php

      if (isset($_COOKIE["prueba"])) {
        echo $_COOKIE["prueba"];
      }else{
        echo "La cookie no se ha creado";
      }
     ?>
  </body>
</html>
