<!DOCTYPE html>
<html>
<title>Reto-nivel 5</title>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="14" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='14'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>





<?php include "barralateral.php"; ?>
<section id="main-content">
	<section class="wrapper">

    <div class="alert alert-success alert-dismissable">
                  <center>¿Una imagen peculiar que podrá ocultar...?
                  <!--
                  <form action="nivel_5_1.php" method="post" >
    <h2>me detecto</h2>
    <button class="btn btn-success"   type="submit">como vamos vamos bien</button>
  </form> --></center>
          </div>
          

          <center>
          <section class="panel" >
		    <div class="panel-body" >
                      <ul class="grid cs-style-3" >
                          <li>
                              <figure>
                                  <img src="img/panorama.jpg"  height="256">
                                  <figcaption>
                                      <h3>¿Que hay oculto lo sabes? </h3>
                                      <span>no dejes de intentarlo...</span>
                                      <a class="fancybox" rel="group" href="img/panorama.jpg">ver imagen</a>
                                  </figcaption>
                              </figure>
                          </li>
                       </ul>
            </div>
          </section></center>

          <center><label><b><h2>analiza muy bien esta imagen y recuerda nada es lo que parece.</h2></b></label></center>


           
          
		    

                

	</section>
	<div><div><div><div><div><div><div><div> <!--para ver el key mire mas adentro de la imagen --></div></div><!--salte a nivel5_1.php --></div></div></div></div></div></div>
</section>


 

</body>

<?php include "script.php"; ?>

</html>


