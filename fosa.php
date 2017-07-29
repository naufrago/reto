<!DOCTYPE html>
<html>
<title>Reto-nivel 3.3</title>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="11" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='11'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>





<?php include "barralateral.php"; ?>
<section id="main-content">
<!-- 
n->6 
-->
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>hace tan poco que iniciaste los niveles y saber que ya casi vas por la primera tercera parte!!</center>
          </div>


           <!-- 
              palabra clave x0
            <input type="text" id ="tengalo " name="encuenta" placeholder="70617361206573746120636164656e6120706f7220656e637269707461722e706870206347467359574a795953746a624746325a53557a51553168636d6c68626d467a4b31646c5969733d20">
           -->
		    

                <form action="fosa.php" method="post"><center>
		       <h1>A este nivel se suele llamar <input type="text" name="fosa" id="fosa">, comparándolo con la fosa marina de más de 11 kilómetros de profundidad, y es donde se supone que están todas las redes gubernamentales restringidas. También se dice que aquí se alojan Sion y La Liberté,
           dos webs que son más mito que realidad en las que se dice que no
          existe la censura, y donde también se dice que se cuelga el
          contenido gore más bestia y que incluso se pueden presenciar
          muertes en vivo.

				sabes cuál es el seudónimo y el nivel del que estamos hablando?
        <br>Nivel:

        <input type="number" name="nivel" id="nivel"></h1>
		    
		    <button class="btn btn-success"   type="submit"><h1>Validar</h1></button></center>
		    </form>

		    <?php 
		    if(isset($_POST['fosa']) and isset($_POST['nivel']) and $_POST['fosa']== "Marianas Web" and $_POST['nivel']== "6"){ ?>
		    	<div class="alert alert-success alert-dismissable"><h1>
                  <center> El 6 nivel no se sabe a ciencia
cierta qué contiene, y a día de hoy nadie ha
podido probar que exista Sion ni La Liberté<a class="" href="tool.php"><br>
                    Nivel superado, uno más para la lista ...</center><br><br><CENTER>
                </a>


                </CENTER></h1>
          		</div>

          		

		    <?php }else{
		    	if (isset($_POST['fosa']) or isset($_POST['nivel'])) {
		    			
		    			
		    			echo '<script type="text/javascript">

		    				location.href ="500.php";
		    			</script>';
		    		

		    	 
		    	}
		    }


		    ?>
		    

	</section>
</section>
 

</body>

<?php include "script.php"; ?>

</html>


