<!DOCTYPE html>
<html>
<title>Reto-nivel 4</title>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="13" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='13'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>





<?php include "barralateral.php"; ?>
<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>Poco a poco se va sumando puntos a este reto.</center>
          </div>
           <?php 
		    if(isset($_POST['a'])  and $_POST['a']== "5" and $_POST['b']== "5" and $_POST['c']== "1" and $_POST['d']== "1" and $_POST['e']== "4"  and $_POST['orden']== "4,1,3,5,2"){
		    	?>
		    	
                 <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                      <div class="modal-content">
                                          <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                              <h4 class="modal-title">Felicitaciones!!!</h4>
                                          </div>
                                          <div class="modal-body">

                                              Muy pocos han llegado hasta este punto ... <br>
                                              estas a un clic del siguiente nivel.


                                          </div>
                                          <form action="pintoresco.php">
                                          	<div class="modal-footer" >
                                              <button class="btn btn-danger" type="submit"> Ok</button>
                                          </div>
                                          </form>
                                          
                                      </div>
                                  </div>
                              </div>

                              <center><a class="btn btn-success" data-toggle="modal" href="#myModal3" >
                                  oooh!
                              </a></center> <br><br>


		    	<?php 
		    		
		     }


		    ?>

          <center><h1><b>Hablaremos sobre el ciclo del hacking que debes tenerlo muy claro debido a que será el ciclo que debes utilizar para realizar el Penetration Testing</b></h1></center>

          <form action="ciclo.php" method="post">
          

          <br>
          <h2>1). Esta etapa trata de conseguir que puertos tiene abiertos, recursos, servicios, tiene un
sistema. Puedes hacer un Network Discovery, para saber cuál es el hardware de la empresa</h2><br>

          <center>
          	<select class="form-control" name="b"  id="b"   style="width:390px">

                        <option selected="selected" value="0">Seleccione su respuesta </option>

                        <option class="opt" value="1">Mantener Acceso</option>
                        <option class="opt" value="2">Reconocimiento</option>
                        <option class="opt" value="3">Borrar Huellas</option>
                        <option class="opt" value="4">Ganar Acceso</option>
                        <option class="opt" value="5">Escaneo</option>
           </select>
          </center>

          
          <br>
          <h2>2). En esta etapa se trata de borrar todo tipo  rastros que se dejan en el sistema como que alguien se conectó. Por ejemplo, borrar los Logs del sistema o restaurar registros del sistema..</h2><br>

          <center>
          	<select class="form-control" name="e"  id="e"   style="width:390px">

                        <option selected="selected" value="0">Seleccione su respuesta </option>
                        <option class="opt" value="1">Reconocimiento</option>
                        <option class="opt" value="2">Escaneo</option>
                        <option class="opt" value="3">Mantener Acceso</option><option class="opt" value="4">Borrar Huellas</option>
                        <option class="opt" value="5">Ganar Acceso</option>

                        
                        
                        
           </select>
          </center>

          <br>
          <h2>3). Esta etapa tiene como propósito entrar al sistema y conseguir algún tipo de
información. Puede lograrse verificando los recursos compartidos en un network, servidores sin
passwords, verificando los fallos del mismo, escalamiento de privilegios u otros aspectos.</h2><br>

          <center>
          	<select class="form-control" name="c"  id="c"   style="width:390px">

                        <option selected="selected" value="0">Seleccione su respuesta </option>
                        <option class="opt" value="1">Ganar Acceso</option>
                        <option class="opt" value="2">Reconocimiento</option>
                        <option class="opt" value="3">Mantener Acceso</option>
                        <option class="opt" value="4">Escaneo</option>
                        <option class="opt" value="5">Borrar Huellas</option>
                        
                        
           </select>
          </center>

          <h2>4). Esta etapa trata de conseguir toda la información posible sobre el objetivo</h2><br>
          <center>
          	<select class="form-control" name="a"  id="a"   style="width:390px">

                        <option selected="selected" value="0">Seleccione su respuesta </option>
                        <option class="opt" value="1">Ganar Acceso</option>
                        <option class="opt" value="2">Escaneo</option>
                        <option class="opt" value="3">Mantener Acceso</option>
                        <option class="opt" value="4">Borrar Huellas</option>
                        <option class="opt" value="5">Reconocimiento</option>
           </select>
          </center>

          <br>
          <h2>5). En esta etapa , el  hacker puede  entrar y
salir del sistema cuando desee, por ejemplo usando: Cuentas de usuarios, passwords backdoors,
troyanos y fallos de seguridad.</h2><br>

          <center>
          	<select class="form-control" name="d"  id="d"   style="width:390px">

                        <option selected="selected" value="0">Seleccione su respuesta </option>
                        <option class="opt" value="1">Mantener Acceso</option>
                        <option class="opt" value="2">Escaneo</option>
                        <option class="opt" value="3">Borrar Huellas</option>
                        <option class="opt" value="4">Ganar Acceso</option>
                        <option class="opt" value="5">Reconocimiento</option>
                        
                        
                        
           </select>
          </center>

          

          <label><h1>las preguntas anteriores muy faciles... pero ahora debe colocar el orden de las etapas de la primera a la ultima en el ciclo del hacking separados por comas y sin espacios <br> ejem: 1,2,3,4,5 </h1></label>
          
          <center><h2>orden: </h2>
          <input type="text" name="orden" id="orden" class="form-control" style="width:390px"> <br><br>
           
          	
          	

           <button class="btn btn-success"   type="submit">validar para pasar al siguiente nivel</button> </center>
          </form>
           
          
		    

                

	</section>
	<div><div><div><div><div><div><div><div> <!-- CnxQ/BRSHJTYbdNX4LSPP5cpT7Yzjyz/wijHs0AVZ5Y= palabra clave la pagina sin .php --></div></div></div></div></div></div></div></div>
</section>


 

</body>

<?php include "script.php"; ?>

</html>


