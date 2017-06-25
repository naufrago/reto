<!DOCTYPE html>
<html>
<title>Ganadores</title>
<script type="text/javascript">

</script>


<?php include "head.php"; ?>
<?php include ("control_sesion.php");
include ("datos_usuario.php");
?>
<body>
<?php include "nav.php"; ?>
<?php
    $bandera=false;
	$consulta_usuario="SELECT * FROM niveles_completos";
	$resultado=mysqli_query($conexion,$consulta_usuario);
	while($fila=mysqli_fetch_assoc($resultado)){
		//echo "consulto";
		if($fila['id_usuario']==$id and $fila['id_nivel']=="15" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		header("location: cerrar_sesion.php?id_usuario= $id ");

		

	}
    ?>





<?php include "barralateral.php"; ?>
<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>felicitaciones  has terminado el reto  y esta es la lista que ya lo han logrado. </center>
          </div>
          
          <table class="table table-striped">
    <thead>
      <tr>
        <th>Num de ganador</th>
        <th>Usuario</th>
        <th>Fecha</th>
      </tr>
    </thead>
    <tbody>
    <!--FILAS DINAMICAS-->
    <?php

                    $CantidadMostrar=5;
              $compag =(int)(!isset($_GET['pag'])) ? 1 : $_GET['pag'];
              $consulta_fac="SELECT * FROM ganadores ";

                $resultado_fac=mysqli_query($conexion,$consulta_fac);
                //para encontrar cuantas facturas hay, es decir cuantas filas tiene el array $resutlado_fac
              $numregistros=mysqli_num_rows($resultado_fac);
              $TotalRegistro  =ceil($numregistros/$CantidadMostrar);
              echo "<b>La cantidad de ganadores registrados  son ".$numregistros."</b><br>";

              $consultavistas ="SELECT * FROM ganadores  ORDER BY id_ganador ASC LIMIT ".(($compag-1)*$CantidadMostrar)." , ".$CantidadMostrar;

              $consulta1=mysqli_query($conexion,$consultavistas);
                @$num_facturas=mysqli_num_rows($consulta1);

                if($num_facturas==0){
          ?>
                <tr>
                    <td colspan="5" align="center">NO SE ENCONTRARON GANADORES AUN!</td>
                </tr>

             <?php
                }
                $con=0;
                while(@$resultados_fac=mysqli_fetch_assoc($consulta1)){
                  $con++;
                       ?>
                <tr>
                  <td><?php echo $resultados_fac['id_ganador'];?></td>
                  <td><?php echo $resultados_fac['usuario_g'];?></td>
                  <td><?php echo $resultados_fac['time_stamp'];?></td>
                </tr>
                      <?php
                
              }?>
    </tbody>
  </table>
  <?php
/*Sector de Paginacion */

    //Operacion matematica para botón siguiente y atrás
  $IncrimentNum =(($compag +1)<=$TotalRegistro)?($compag +1):1;
  $DecrementNum =(($compag -1))<1?1:($compag -1);

  echo "<center><ul class=\"paginacion\"><li class=\"btn\"><a href=\"?pag=".$DecrementNum."\">◀</a></li>";
    //Se resta y suma con el numero de pag actual con el cantidad de
    //números  a mostrar
     $Desde=$compag-(ceil($CantidadMostrar/2)-1);
     $Hasta=$compag+(ceil($CantidadMostrar/2)-1);

     //Se valida
     $Desde=($Desde<1)?1: $Desde;
     $Hasta=($Hasta<$CantidadMostrar)?$CantidadMostrar:$Hasta;
     //Se muestra los números de paginas
     for($i=$Desde; $i<=$Hasta;$i++){
      //Se valida la paginacion total
      //de registros
      if($i<=$TotalRegistro){
        //Validamos la pag activo
        if($i==$compag){
           echo "<li class=\"active\"><a href=\"?pag=".$i."\">".$i."</a></li>";
        }else {
          echo "<li><a href=\"?pag=".$i."\">".$i."</a></li>";
        }
      }
     }
  echo "<li class=\"btn\"><a href=\"?pag=".$IncrimentNum."\">▶</a></li></ul></center>";

 ?>


           
          
		    

                

	</section>
	<div><div><div><div><div><div><div><div> </div></div></div></div></div></div></div></div>
</section>


 

</body>

<?php include "script.php"; ?>
<style type="text/css">
     .paginacion>.active > a{
      background: rgb(255,116,0);
     }
    .paginacion{
      margin-left: 0px;
      padding: 0px;
    }
      .paginacion > li{
        list-style: none;
        display: inline-block;
        margin-right:7px;
      }
      .paginacion > li > a {
        color: #FFFFFF;
        text-decoration: none;
        padding: 5px 10px 5px 10px;
        display: block;
    background: #5FCF80; /* Old browsers */
    border-radius: 20px;
      }



  </style>

</html>


