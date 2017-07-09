<!DOCTYPE html>
<html lang="en">
<!--INCLUIMOS EL HEAD-->
<title>Datos de usuario</title>
<?php include ("head.php"); ?>
<?php include ("control_sesion.php");
include ("controladmin.php");
include ("datos_usuario.php");

?>


<body id="page-top">

    <!--INCLUIMOS EL nav-->
  <?php include "nav_a.php"; ?>
  <?php include "barralateral_a.php"; ?>

  
          <section id="main-content">
          <section class="wrapper">
          <?php //cuadro de ERROR
                  if(isset($_GET['id'])){
                    $identi=$_GET['id'];
                    $consulta="SELECT * FROM usuario WHERE id_usuario='$identi' ";
                    $resutlado=mysqli_query($conexion,$consulta);
                    $fila=mysqli_fetch_assoc($resutlado);
                    $nom=$fila['nombre'];
                    $ape=$fila['apellido'];
                    $us=$fila['user']; 
                    $tip=$fila['tipo'];
                    if ($tip==1) {
                      $tip="Administrador";
                      # code...
                    }else{
                        $tip="Retado";
                      }?>
                    <center><h1>Datos del Usuario</h1>
                    <label><?php echo "<h2>Usuario: $nom "." $ape ". "<br>UserName: $us<br> Tipo Usuario: $tip</h2>"; ?></label></center>
                    

                    <h2>Niveles completos a la fecha</h2>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Nombre de Nivel</th>
                          <th>URL</th>
                          <th>Fecha</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                    $consulta="SELECT * FROM niveles_completos WHERE id_usuario='$identi' ";
                    $resutlado=mysqli_query($conexion,$consulta);
                    while ($fila=mysqli_fetch_assoc($resutlado)) {
                      $fecha=$fila['time_stamp'];
                      $id_niv=$fila['id_nivel'];
                      $consulta1="SELECT * FROM niveles WHERE id_nivel='$id_niv' ";
                      $resutlado1=mysqli_query($conexion,$consulta1);
                      $fila1=mysqli_fetch_assoc($resutlado1);
                      $nombre_n=$fila1['nombre_nivel'];
                      $url1=$fila1['url'];
                      ?>
                      <tr>
                        <td><?php echo $nombre_n;?></td>
                        <td><?php echo $url1;?></td>
                        <td><?php echo $fecha;?></td>
                      </tr>

                      <?php



                    }?>
                    </tbody>
                    </table>
                    <?php



                    


            
                  
               }  ?>


          </section>
          </section>



          
    <!--INCLUIMOS EL FOOTER-->
    
      <div class="row">
      </div>
    </div>

  </body>
  <?php include "script.php"; ?>
</html>
