<!DOCTYPE html>
<html>
<title>Reto-nivel 2.1</title>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="6" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='6'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>

<!-- si desencriptas esta cadena por  conversorhex.php y luego por encriptar.php  
pasaras al siguente nivel 

495847786f57763336324f3735414c50395a5834586c6a55765655434b386b574a636f4174506c6e5334724a6f74636f464869307a35676f425a51397a54507572475459486a6b4c6145674b6843567a4b4653656d513d3d20

 -->



<?php include "barralateral.php"; ?>

<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>un nivel mas nivel <br> Que bien este camino es más rapido !</center>
          </div>


    

    


    

	</section>
</section>
 

</body>

<?php include "script.php"; ?>
</html>