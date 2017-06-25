<!DOCTYPE html>
<html>
<title>reto-nivel 3.4</title>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="12" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='12'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>





<?php include "barralateral.php"; ?>
<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>Ya estas cansado de  los niveles? ,   pues apenas estamos empezando </center>
          </div>


           
		    

                <form action="tool.php" method="post"><center>
		       <h1>Es por un lado un
navegador de Internet basado en Firefox, y por otro lado una red de
servidores que redirigen constantemente cualquier conexión
entrante, de forma que no se pueda saber de dónde proviene y
manteniendo el anonimato del cliente que realiza la petición ademas de ser el navegador auque un poco lento el mas utilizado para incurcionar en  la profundida de la DEEP WEB.

				sabes cual es el seudonimo  y el nivel del que estamos hablando?
        <br>nivel:
        <input type="text" name="X" id="X"></h1>
		    
		    <button class="btn btn-success"   type="submit"><h1>validar</h1></button></center>
		    </form>

		    <?php 
		    if(isset($_POST['X'])  and $_POST['X']== "ToR" ){ 
		    		echo '<script type="text/javascript">

		    				location.href ="ciclo.php";
		    			</script>';
		     }else{
		    	if (isset($_POST['X'])) {
		    		$bandera1=false;
              $consulta_usuario="SELECT * FROM locked where id_usuario='$id' and url='tool.php'";
              $resultado=mysqli_query($conexion,$consulta_usuario);
              while($fila=mysqli_fetch_assoc($resultado)){
                //echo "consulto";
                if($fila['id_usuario']==$id and $fila['url']=="tool.php" ){
                $bandera1=true;
                }
              }

              if($bandera1==false){
                  $consulta="INSERT INTO locked SET id_usuario='$id', url='tool.php'";
                    //para realizar la consutla
                    mysqli_query($conexion,$consulta);

              

            }
		    			
		    			
		    			echo '<script type="text/javascript">

		    				location.href ="game/index.php";
		    			</script>';
		    		

		    	 
		    	}
		    }


		    ?>
		    

	</section>
</section>
 

</body>

<?php include "script.php"; ?>

</html>


