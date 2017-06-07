<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
  </head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <form action="comprueba_login.php" method="post">
              <input type="text" name="usuario" placeholder=" Username"style = "width:100%;position: relative;height: auto;padding: 10px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;box-sizing: border-box; z-index: 2;font-size: 16px;     border-bottom-left-radius: 0;border-bottom-right-radius: 0;"; required autofocus />
                <input type="password" name="contraseña" placeholder="Password"style = "width:100%;margin-top:2%;	osition: relative;height: auto;padding: 10px; -webkit-box-sizing: border-box; -moz-box-sizing: border-box;box-sizing: border-box; z-index: 2;font-size: 16px;" required />
                <button  class="btn btn-lg btn-primary btn-block " style="margin-top:20px;" type="submit" >Login</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
