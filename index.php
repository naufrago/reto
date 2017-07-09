<!DOCTYPE html>
<html>
<title>Inicio</title>
<?php include "head.php"; ?>
<?php include ("noindex.php");?>

<body>

<?php //cuadro de CIERRE DE SESION
          if(isset($_GET['status']) and $_GET['status']==2){
    ?>
          <div class="alert alert-success alert-dismissable">
                  <center>sesión cerrada con éxito ...</center>
          </div>
      <?php }  ?>

	
	<div class="container">
		<div class="header-section text-center"><br><br><br>
            <h1>BIENVENIDO AL RETO </h2>
            <h2><p>Esperamos que sea de su agrado,<br> y se desarrolle aún más su lógica y perspectiva</p></h2>
            <br><br><p><h3>El reto consiste en realizar una serie de niveles y completar cada una de las pruebas, sabemos que algunos serán muy simples, otros talvez algo complejas, pero recuerde NADA ES LO QUE PARECE y la idea es que se divierta aprenda cosas nuevas y que se esfuerce por ser el número 1. <br><br>Le recomendamos que utilice navegadores como Firefox u Opera.  </h3></p>

            <hr class="bottom-line">
          </div>
    </div>
	<br><center>
	<div class="panel-body">
		<button class="btn btn-success"  onclick="redireccionar(1)" type="submit">Ingresar</button>
		<button class="btn btn-success" onclick="redireccionar(2)" type="submit">Crear cuenta</button>
	 </div>
	</center>

</body>
</html>