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

5a4756695a584d725932397362324e686369746c6269747359537431636d7772626d6c325a5778664d6c38794c6e426f63413d3d20

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