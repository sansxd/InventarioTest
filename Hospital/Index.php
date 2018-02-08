<?php
include('login.php'); // Includes el sript de login

if(isset($_SESSION['login_user_sys'])){
header("location: administracion.php");
}
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <meta name="viewport" content="initial-scale=1.0">
    <meta charset="utf-8">
    <!-- Link para llamar los distintos estilos -->
    <link rel="stylesheet" href="css/bootstrap.min.css">


  </head>

  <body>

    <div class="container">  <!--Div principal va a contener a todos los demas en una clase contenedora-->
      <h1>Login</h1>
      <form class="form-horizontal" action="#" method="post" > <!--ejecuta los div que se encuentran dentro del form por medio del metodo 'post' solicitando datos-->
        <div class="form-group"> <!--separa a los Div por grupos-->
          <label for="inputusername" class="col-sm-2 control-label">Usuario</label> <!--Label que muestra el nombre del campo solicitado-->
          <div class="col-sm-10">
            <input type="text" class="form-control" name="username" id="inputusername" placeholder="usuario" required> <!--Caja de texto donde se solicita el usuario-->
          </div>
        </div>
        <div class="form-group">
          <label for="inputcontraseña" class="col-sm-2 control-label">Contraseña</label>
          <div class="col-sm-10">
            <input type="password" class="form-control" name="password" id="inputcontraseña" placeholder="contraseña" required>
          </div>
        </div>
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
            <input name="submit" type="submit" value="Ingresar" class="btn btn-primary btn-success">
          </div>
        </div>
        <div class="clear"> </div>
  				<span><?php echo $error; ?></span>
  			</div>
      </form>
    </div>
  </body>
</html>
