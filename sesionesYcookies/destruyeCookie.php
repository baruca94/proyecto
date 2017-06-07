<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
// hay que poner el timpo negativo para destruir una cookie
    setcookie("prueba","Esta es la informacion de nuestra primera cookie",time()-1, "/pruebas/cursophp/zona_contenido/");

     ?>
  </body>
</html>
