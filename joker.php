<!DOCTYPE html>
<html>
<title>reto-nivel 6</title>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="15" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='15'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>





<?php include "barralateral.php"; ?>
<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>Bueno ya es hora de registrar las palabras claves que encontró en algunos niveles, estas palabras son 13 </center>
          </div>
          <h1>Palabras claves:</h1>
          <form action="validar.php" method="post">
            <h2>#1</h2>
            <input type="text" name="1" id="1" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#2</h2>
            <input type="text" name="2" id="2" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#3</h2>
            <input type="text" name="3" id="3" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#4</h2>
            <input type="text" name="4" id="4" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#5</h2>
            <input type="text" name="5" id="5" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#6</h2>
            <input type="text" name="6" id="6" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#7</h2>
            <input type="text" name="7" id="7" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#8</h2>
            <input type="text" name="8" id="8" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#9</h2>
            <input type="text" name="9" id="9" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#10</h2>
            <input type="text" name="10" id="10" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#11</h2>
            <input type="text" name="11" id="11" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#12</h2>
            <input type="text" name="12" id="12" class="form-control" style="width:390px" placeholder="palabra clave encontrada">

            <h2>#13</h2>
            <input type="text" name="13" id="13" class="form-control" style="width:390px" placeholder="palabra clave encontrada"> <br><br>

              <button class="btn btn-success"   type="submit">Validar  key's</button> </center>

          </form>
          

          


           
          
		    

                

	</section>
	<div><div><div><div><div><div><div><div><!-- palabra clave : keys --> </div></div></div></div></div></div></div></div>
</section>


 

</body>

<?php include "script.php"; ?>

</html>


