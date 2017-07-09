<!DOCTYPE html>
<html>
<title>Reto-nivel 3.2</title>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="10" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='10'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>





<?php include "barralateral.php"; ?>
<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>MIENTRAS QUE UNOS SUBEN OTROS VAN A LA PROFUNDIDAD, QUE SABES DE LA DEEP WEB?</center>
          </div>

           
		    

                <form action="deep.php" method="post"><center>
		      <h2>bueno este nivel es muy simple  y seguramente lo pasaras como si nada pero si fallas se bloqueara la pagina te recomiendo que asegures todo...! </h2>

				<h2>A la hora de catalogar los distintos niveles de Internet, entre los 
        internautas y los especialistas se ha llegado al consenso más o
menos generalizado de que existen varios  niveles en los que se puede
dividir la red, del más superficial al más profundo.</h2>

<h2>cuantos niveles son:</h2>
 
		    <input type="number" name="val" id="val">
		    <button class="btn btn-success"   type="submit">Validar</button></center>
        <!-- palabra clave : 6_niveles-->
		    </form>

		    <?php 
		    if(isset($_POST['val']) and $_POST['val']== 6){ 
		    	echo '<script>location.href ="fosa.php"</script>';

          		

		     }else{
           if (isset($_POST['val'])) {

              $bandera1=false;
              $consulta_usuario="SELECT * FROM locked where id_usuario='$id' and url='deep.php'";
              $resultado=mysqli_query($conexion,$consulta_usuario);
              while($fila=mysqli_fetch_assoc($resultado)){
                //echo "consulto";
                if($fila['id_usuario']==$id and $fila['url']=="deep.php" ){
                $bandera1=true;
                }
              }

              if($bandera1==false){
                  $consulta="INSERT INTO locked SET id_usuario='$id', url='deep.php'";
                    //para realizar la consutla
                    mysqli_query($conexion,$consulta);
                    
                    //header('location: lock_screen.php');

              

            }
            echo '<script>location.href ="lock_screen.php"</script>';

           }
        }


      		    ?>
		    

	</section>
</section>
 

</body>

<?php include "script.php"; ?>

</html>


