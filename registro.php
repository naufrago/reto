<!DOCTYPE html>
<html lang="en">
<title>Inicio-Registro</title>

<?php include "head.php"; ?>
<?php include ("noindex.php");?>

  <body class="login-body">
  

    <div class="container">
    <div class="form-group">

      <form class="form-signin"  id="sign-up" method="post" action="crearuser.php">
      <?php //cuadro de ERROR
                  if(isset($_GET['status']) and $_GET['status']==3){
            ?>
                  <div class="alert alert-danger alert-dismissable">
                          Campos vacios datos no validos!
                  </div>
              <?php }  ?>
        <h2 class="form-signin-heading">Registrarce ahora</h2>
        <div class="login-wrap">
            <p>Ingrese sus datos personales</p>
            Nombre(s)
            <div class="form-group has-feedback">
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="nombre" autofocus></div>
            Apellido(s)
            <div class="form-group has-feedback">
            <input type="text" class="form-control" id="apellido" name="apellido" placeholder="apellido" autofocus></div>
            

            <p> Ingrese sus datos de cuenta</p>
            Usuario
            <div class="form-group has-feedback">
            <input type="text" class="form-control" id="usuario" name="usuario" placeholder="usuario" autofocus></div>
            Password
            <div class="form-group has-feedback">
            <input class="form-control" placeholder="password" name="password" id="loginpsw1" type="password" autocomplete="off" />
            </div>
            Repita password
            <input type="password" class="form-control" name="password_again" id="loginpsw2" placeholder="confirmar Password">
            <label class="checkbox">
                <input type="checkbox" value="agree this condition"> Acepto las politicas de privacidad y terminos de servicio.
            </label>
            <button class="btn btn-lg btn-login btn-block" type="submit">Registrar</button>

            <div class="registration">
                Ya estoy reguistrado.
                <a class="" href="login.php">
                    Ingresar 
                </a>
                <CENTER><a class="" href="index.php">
                    "INICIO"
                </a></CENTER>
            </div>

        </div>

      </form>
    </div>

    </div>


  </body>
</html>
