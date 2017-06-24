<!DOCTYPE html>
<html>
<title>reto-nivel 1.3</title>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="4" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='4'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>

<!--encriptar.php -->



<?php include "barralateral.php"; ?>

<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>que tanto sabes de ataques XSS de esto depende que pases a la siguiente  nivel </center>
          </div>


    <h1>bueno  aca en este punto debe hacer la forma de  crear un formulario  el cual debe tener un input que envie por post la palabra clave "full-xss-test" y  debe tener este input  un name="nivel_2"  y un id="nivel_2" y debe redireccionar a  la pagina nivel2.php </h1> <br><br>    
<center>
    <form action="xssdatatest.php" >
    <h2>cual es tu nombre: </h2><input type="text" name="name"/>
    <button class="btn btn-success"   type="submit">enviar</button>
  </form>
  <?php if(isset($_GET['name'])) echo "<h2>hola, " . $_GET['name'] . ", como te va con los niveles del reto?</h2>" ?></center>
    

    


    

	</section>
</section>
 

</body>

<?php include "script.php"; ?>
</html>