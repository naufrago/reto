<!DOCTYPE html>
<html>
<title>reto-nivel 3</title>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="8" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='8'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>





<?php include "barralateral.php"; ?>
<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>nivel 3 huy  ya casi vamos a mitad del camino. ¡vamos animo!</center>
          </div>

           <form action="trojan.php" method="post"><center>
		      <h1>Que tanto sabe de virus y que puertos o backdoors utilizan</h1><br><br>
		      <h2>tengo estos virus y tienen  un puerto en comun cual es</h2><br>
		      <h2>Subseven.100, SubSeven.110, SubSeven.180, SubSeven.190,
				Subseven.200</h2> 

				puerto: 
		    <input type="number" name="trojan" id="trojan">
		    <button class="btn btn-success"   type="submit">validar</button></center>
		    </form>


		    <?php 
		    if(isset($_POST['trojan']) and $_POST['trojan']== 1243){ ?>
		    	<div class="alert alert-success alert-dismissable"><h1>
                  <center>exelente  recuerda  esta palabra clave "1243"</center><br><br><CENTER><a class="" href="movies.php">
                    "BUENO QUE TAL VAS, TE CUENTO VAS POR BUEN CAMINO..."
                </a></CENTER></h1>
          		</div>

          		

		    <?php }else{
		    	if (isset($_POST['trojan'])) {
		    		for ($i=0; $i <1 ; $i++) {
		    			?> 
		    			<script type="text/javascript">redireccionar(3);</script>
		    		

		    	<?php }
		    	}
		    }


		    ?>


    

    


    

	</section>
</section>
 

</body>

<?php include "script.php"; ?>

</html>