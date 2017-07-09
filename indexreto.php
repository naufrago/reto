<!DOCTYPE html>
<html>
<title>Reto-nivel 1</title>
<?php include "head.php"; ?>
<div><div><div>
      <!-- esto es una llave  que tal ves necesite mas adelante 
      "0UXzwu/h40Y4i8FOFsz+aMPbunE1kmVuHcpGxf2HgW8="
     -->
    </div></div></div>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="1" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='1'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		//para cerrar la conexion BuTecPro
		mysqli_close($conexion);

	}
    ?>





<?php include "barralateral.php"; ?>

<section id="main-content">
	<section class="wrapper">
<?php //cuadro de CIERRE DE SESION
          if(isset($_GET['status']) and $_GET['status']==6){
    ?>
          <div class="alert alert-success alert-dismissable">
                  <center>REGISTRO EXITOSO - INICIO DE SESIÓN EXITOSO </center>
          </div>
      <?php }  ?>
      <?php //cuadro
        if(isset($_GET['status']) and $_GET['status']==8){
  ?>
        <div class="alert alert-success alert-dismissable">
                <center>Usuario editado Exitosamente</center>
        </div>
    <?php }  ?><!-- conversorhex.php -->

    <div><div><div><!-- HEXA  = 70616c6162726120636c6176653a68657861646563696d616c --><DIV><div><div><div>
    	<!-- si quieres llegar a el siguiente nivel solo debes pasar por base16
    el siguiente codigo 7175652070756564657320686163657220636f6e2065737461202075726c3a2073716c692e706870203f

     -->
    </div></div></div></DIV></div></div></div>

    <center>
      <h1>verifica que no pases por alto nada muchas veces en los comentarios puedes encontrar información muy útil no solo para este nivel sino para los que vienen más adelante, además de encontrar palabras key que se requieren para el ultimo nivel no desprecies nada por insignificante que parezca. <br><br> Le recomendamos que utilice navegadores como Firefox u Opera. </h1>
    </center>

    

    

	</section>
</section>
 

</body>

<?php include "script.php"; ?>
</html>