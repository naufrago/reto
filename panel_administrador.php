<!DOCTYPE html>
<html lang="en">
<!--INCLUIMOS EL HEAD-->
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
            
   
    
  

  

  
                  <header class="panel-heading">
                      Usuarios del sistema
                  </header>
                  <div class="panel-body">
                        <div class="adv-table">
                            <table cellpadding="0" cellspacing="0" border="0" class="display table table-bordered" id="hidden-table-info">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nombre </th>
                                    <th class="hidden-phone">Apellido</th>
                                    <th class="hidden-phone">Usuario</th>
                                    <th class="hidden-phone">Rol</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php 
                                $consultavistas ="SELECT * FROM usuario";
                                $consulta1=mysqli_query($conexion,$consultavistas);
                                while(@$resultados_fac=mysqli_fetch_assoc($consulta1)){
                                  $tip="Retado";
                                  if($resultados_fac['tipo']==1){
                                    $tip="Administrador";
                                  }
                  
                       ?>
                <tr class="gradA">
                  <td><?php echo $resultados_fac['id_usuario'];?></td>
                  <td><?php echo $resultados_fac['nombre'];?></td>
                  <td class="hidden-phone"><?php echo $resultados_fac['apellido'];?></td>
                  <td class="center hidden-phone"><?php echo $resultados_fac['user'];?></td>
                  <td class="center hidden-phone"><?php echo $tip;?></td>
                </tr>
                      <?php
                
              }?> 
                                
                                
                                
                                </tbody>
                            </table>

                        </div>
                  </div>
  

    

  


          </section>
          </section>



          
    <!--INCLUIMOS EL FOOTER-->
    
      <div class="row">
      </div>
    </div>

  </body>
  <?php include "script.php"; ?>
  

</html>
