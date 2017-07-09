<!DOCTYPE html>
<html lang="en">
<!--INCLUIMOS EL HEAD-->
<title>Perfil de Usuario</title>
<?php include ("head.php"); ?>
<?php include ("control_sesion.php");
include ("controladmin.php");
include ("datos_usuario.php");
?>


<body id="page-top">

    <!--INCLUIMOS EL nav-->
  <?php include "nav_a.php"; ?>
  
  <!--Query para editar la finca-->
<?php
  if(isset($_GET['id_usuario']) and $_GET['id_usuario']>0){
    //consultamos los datos del id_finca y los alamacenamos en vairables
    $id_usuario=$_GET['id_usuario'];

    $consulta_usuario="SELECT * FROM usuario WHERE id_usuario='$id_usuario'";
    $resutlado_usuario=mysqli_query($conexion,$consulta_usuario);
    $fila_usuario=mysqli_fetch_assoc($resutlado_usuario);

    $nombre=$fila_usuario['nombre'];
    $apellido=$fila_usuario['apellido'];
    
    $tipo=$fila_usuario['tipo'];
    $password_r=$fila_usuario['password'];
    $password="";
  }
 ?>

<?php include "barralateral_a.php"; ?>


  <!-- Modal content no 1-->
<section id="main-content">
<section class="wrapper">
  

    
      
        <h2 class="modal-title text-center form-title">Modificar Usuario</h2>
        <?php //cuadro
              if(isset($_GET['status']) and $_GET['status']==2){
        ?>
              <div class="alert alert-danger alert-dismissable">
                      <center>Campos vacios</center>
              </div>
          <?php }  ?>

            <!--formulario de inicio de sesión-->
            <form method="post" accept-charset="utf-8" action="Script_guarda_perfil_u.php">
              <!-- username -->
               <div class="form-group has-feedback">Nombre
                    <input class="form-control" placeholder="Nombre" name="nombre" id="loginid" type="text"
                    value= "<?php echo $nombre; ?>" />

                </div>
                <div class="form-group has-feedback">Apellido
                    <input class="form-control" placeholder="Apellidos" name="apellido" id="loginid" type="text"
                    value= "<?php echo $apellido; ?>" />

                </div>

                <div class="form-group has-feedback">Usuario
                    <input class="form-control" placeholder="user" name="user" id="loginid" type="text"
                    value= "<?php echo $usuario; ?>" />

                </div>

                
                <div class="form-group has-feedback">password
                    <input class="form-control" placeholder="password" name="password" id="loginid" type="text"
                    value= "<?php echo $password; ?>" />

                </div>
                <?php
                $tipo_a;
                if ($tipo==2) {
                   $tipo_a="USUARIO RETADO";
                 }else{
                  $tipo_a="ADMINISTRADOR";
                 } 
                ?>
                <div class="form-group has-feedback">Tipo
                    <input class="form-control" placeholder="Tipo" name="tipo1" id="loginid" type="text"
                    value= "<?php echo $tipo_a; ?>" disabled/>

                </div>
                
                
                <!--Boton-->
                <!--Boton oculto -->
                <input type="hidden" name="id_usuario" value="<?php echo$id_usuario;?>">
                <input type="hidden" name="password_r" value="<?php echo$password_r;?>">
                <div class="row">
                    <div class="col-xs-12">
                        <center><button class="btn btn-success" type="submit">Editar perfil</button></center>
                    </div>
                </div>
            </form>
      
  
</section></section>

  <br>
  <br>
  <br>

    <!--INCLUIMOS EL FOOTER-->
    <div class="container">
      <div class="row">
      </div>
    </div>

  </body>
  <?php include "script.php"; ?>
</html>
