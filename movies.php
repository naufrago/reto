<!DOCTYPE html>
<html>
<title>Reto-nivel 3.1</title>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="9" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='9'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>





<?php include "barralateral.php"; ?>
<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>Bueno poco a poco se avanza en estos niveles</center>
          </div>

           
		    <section class="panel">
		    <div class="panel-body">
                      <ul class="grid cs-style-3">
                          <li>
                              <figure>
                                  <img src="img/matrix.JPG" width="201" height="156">
                                  <figcaption>
                                      <h3>Matrix recargado </h3>
                                      <span>Reto-nivel 3.1 </span>
                                      <a class="fancybox" rel="group" href="img/matrix.JPG">ver imagen</a>
                                  </figcaption>
                              </figure>
                          </li>

                          <li>
                              <figure>
                                  <img src="img/snowden.JPG" width="201" height="156">
                                  <figcaption>
                                      <h3>Snowden </h3>
                                      <span>Reto-nivel 3.1 </span>
                                      <a class="fancybox" rel="group" href="img/snowden.JPG">ver imagen</a>
                                  </figcaption>
                              </figure>
                          </li>

                          <li>
                              <figure>
                                  <img src="img/dredd.JPG" width="201" height="156">
                                  <figcaption>
                                      <h3>Dredd </h3>
                                      <span>Reto-nivel 3.1 </span>
                                      <a class="fancybox" rel="group" href="img/dredd.JPG">ver imagen</a>
                                  </figcaption>
                              </figure>
                          </li>

                          <li>
                              <figure>
                                  <img src="img/elysium.JPG" width="201" height="156">
                                  <figcaption>
                                      <h3>Elysium </h3>
                                      <span>Reto-nivel 3.1 </span>
                                      <a class="fancybox" rel="group" href="img/elysium.JPG">ver imagen</a>
                                  </figcaption>
                              </figure>
                          </li>

                          <li>
                              <figure>
                                  <img src="img/Who.JPG" width="201" height="156">
                                  <figcaption>
                                      <h3>Who Am I—No System Is Safe </h3>
                                      <span>Reto-nivel 3.1 </span>
                                      <a class="fancybox" rel="group" href="img/Who.JPG">ver imagen</a>
                                  </figcaption>
                              </figure>
                          </li>

                          <li>
                              <figure>
                                  <img src="img/game.JPG" width="201" height="156">
                                  <figcaption>
                                      <h3>Game of Death </h3>
                                      <span>Reto-nivel 3.1 </span>
                                      <a class="fancybox" rel="group" href="img/game.JPG">ver imagen</a>
                                  </figcaption>
                              </figure>
                          </li>
                        </ul>
                </div>
                </section>

                <form action="movies.php" method="post"><center>
		      <h1>te gustaron las imágenes anteriores!!!</h1>
          <h2>son películas famosas por su contenido tecnológico y sobre todo aparición de un programa para </h2>
          <h2>HAKERS</h2> 
          <h2> que tienen en común todas estas imágenes</h2>

        en minúsculas y sin espacios:

		    <input type="text" name="val" id="val">
		    <button class="btn btn-success"   type="submit">validar</button></center>
		    </form>

		    <?php 
		    if(isset($_POST['val']) and $_POST['val']== "nmap"){ ?>
		    	<div class="alert alert-success alert-dismissable"><h1>
                  <center>esta prueba estaba muy facil  recuerda la palabra clave </center><br><br><CENTER><a class="" href="deep.php">
                    "nmap"
                </a>

                </CENTER></h1>
          		</div>

          		

		    <?php }else{
		    	if (isset($_POST['val'])) {
		    			session_start();
						session_unset();
						session_destroy();
		    			
		    			echo '<script type="text/javascript">alert("que pasa esta muy facil ...!");
		    				location.href ="index.php?status=2"
		    			</script>';
		    		

		    	 
		    	}
		    }


		    ?>
		    

	</section>
</section>
 

</body>

<?php include "script.php"; ?>

</html>


