<!DOCTYPE html>
<html lang="en">
<!--INCLUIMOS EL HEAD-->
<title>Palabras claves</title>
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
                  
                    
                    

                    <h2>Lista de palabras claves</h2>
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>ID </th>
                          <th>Palabra Clave</th>
                          <th>Ubicacion</th>
                        </tr>
                      </thead>
                      <tbody>
                    <?php
                    $consulta="SELECT * FROM nivel_keys ";
                    $resutlado=mysqli_query($conexion,$consulta);
                    while ($fila=mysqli_fetch_assoc($resutlado)) {
                      $ide=$fila['id_key'];
                      $nombre_key=$fila['nombre_key'];
                      $ub=$fila['ubicacion'];
                      
                      ?>
                      <tr>
                        <td><?php echo $ide;?></td>
                        <td><?php echo $nombre_key;?></td>
                        <td><?php echo $ub;?></td>
                      </tr>

                      <?php



                    }?>
                    </tbody>
                    </table>
                    <?php



                    


            
                  
                ?>


          </section>
          </section>



          
    <!--INCLUIMOS EL FOOTER-->
    
      <div class="row">
      </div>
    </div>

  </body>
  <?php include "script.php"; ?>
</html>
