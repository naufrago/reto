<!DOCTYPE html>
<html>
<title>reto-nivel 2.2</title>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="7" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='7'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>





<?php include "barralateral.php"; ?>

<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>nivel 2.1<br> que bueno es saber que la gente sube de nivel pero quiero decirte algo...<br>
                  estas seguro que no te desviaste del camino ?</center>
          </div>

         <center><img src="img/jodido.jpg"></center>


    

    


    

	</section>
</section>
 

</body>

<?php include "script.php"; ?>
<!--estas seguro que la cantidad de puertos que que colocaste son los correctos -->
</html>