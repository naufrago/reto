<!DOCTYPE html>
<html>
<title>Reto-nivel 2</title>
<script type="text/javascript">

</script>


<?php include "head.php"; ?>
<!-- 
talves solo tal ves en encriptar.php

ZXN0ZStudW1lcm8rZXMrbXV5K2ludGVyZXNhbnRlKzY1NTM1Kw== 

-->
<?php include ("control_sesion.php");

include ("datos_usuario.php");
?>
<body>
<?php include "nav.php"; ?>

<?php
	$estado=0;

	if(isset($_POST['nivel_2'])){
		$estado=1;
		$bandera=false;
		$consulta_usuario="SELECT * FROM niveles_completos";
		$resultado=mysqli_query($conexion,$consulta_usuario);
		while($fila=mysqli_fetch_assoc($resultado)){
			//echo "consulto";
			if($fila['id_usuario']==$id and $fila['id_nivel']=="5" ){
				$bandera=true;
			}
		}

		if($bandera==false ){
			//echo "consulto1";

			//realizo la insercion en la BD de los datos ingresados por el usuario
			$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='5'";
			//para realizar la consutla
			mysqli_query($conexion,$consulta);


			

			

		}
		

	}
    
    ?>




<!--encriptar.php -->



<?php include "barralateral.php"; ?>

<section id="main-content">
	<section class="wrapper">
	<?php 
	if ($estado==1) {?>
		<div class="alert alert-success alert-dismissable">
                 <center>que bien ya está en el nivel 2 ya paso la primera etapa ahora las cosas serán mas fáciles... o tal vez no!! </center>
          </div>
          <form action="nivel2.php" method="post" >
          <h1>El Internet y las redes de computadora transmiten su<br>
          comunicación e información a través de puertos, <br>
          son como unos túneles por donde pasa la información, <br>
          la cual se le conoce como puertos, <br>
          ¿cuantos puertos existen? te doy una ayuda son más de 65000 y menos de 66000.   </h1>


    <input type="number" name="port"/>
    <button class="btn btn-success"   type="submit">Validar</button>
  </form>
  <!-- son  16 bits-->

		
	<?php
	}else{
		
		if(isset($_POST['port'])){
			$puerto=$_POST['port'];
			if($puerto==65535){
				?>

			<div class="alert alert-success alert-dismissable">
			<CENTER><a class="" href="trojan.php">
                    "BUENO QUE TAL VAS, TE CUENTO VAS POR BUEN CAMINO..."
                </a></CENTER></div>

			<?php

			}else{
			?>

			<div class="alert alert-success alert-dismissable">
			<CENTER><a class="" href="nivel_2_1.php">
                    "QUE FACIL FUE PASAR ESTE NIVEL NO CREES... "
                </a></CENTER></div>

			<?php
			} 
			}else{?>

		<div class="alert alert-danger alert-dismissable">
                  <center>"la forma como acabas de llegar a este nivel no es la correcta! pero te doy una pista debiste hacer un post en el nivel anterior..." 

                  </center>


          </div>
          <center><img src="img/wazzap.jpg"></center>

		<?php

		}
	}

	?>
	</section>
</section>
 

</body>

<?php include "script.php"; ?>
<!--palabra clave :puertos -->
</html>