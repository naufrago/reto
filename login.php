<!DOCTYPE html>
<html lang="en">
<title>Inicio-Login</title>
<?php include "head.php"; ?>
<?php include ("noindex.php");?>


  <body class="login-body">
  <?php //cuadro de ERROR
                  if(isset($_GET['status']) and $_GET['status']==1){
            ?>
                  <div class="alert alert-danger alert-dismissable">
                          DATOS DE LOGIN INCORRECTOS
                  </div>
              <?php }  ?>

    <div class="container">

      <form class="form-signin" method="post" action="ingresar.php">
        <h2 class="form-signin-heading">Ingrese ahora</h2>
        <div class="login-wrap">
            <input type="text" class="form-control" id="user" name="user" placeholder="usuario" autofocus>
            <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            
            <button class="btn btn-lg btn-login btn-block" type="submit">Ingresar</button>
            
            <div class="registration">
                aun no tienen una cuenta?
                <a class="" href="registro.php">
                    crear cuenta nueva
                </a>
                <CENTER><a class="" href="index.php">
                    "INICIO"
                </a></CENTER>
            </div>

        </div>

          

      </form>

    </div>



    <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>


  </body>
</html>
