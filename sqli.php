<!DOCTYPE html>
<html>
<title>Reto-nivel 1.1</title>
<script type="text/javascript">//palabra clave: 1'or1='1 </script>
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
		if($fila['id_usuario']==$id and $fila['id_nivel']=="2" ){
			$bandera=true;
		}
	}

	if($bandera==false){
		//echo "consulto1";

		//realizo la insercion en la BD de los datos ingresados por el usuario
		$consulta="INSERT INTO niveles_completos SET id_usuario='$id', id_nivel='2'";
		//para realizar la consutla
		mysqli_query($conexion,$consulta);

		

	}
    ?>





<?php include "barralateral.php"; ?>

<section id="main-content">
	<section class="wrapper">
    <div class="alert alert-success alert-dismissable">
                  <center>Felicitaciones  has pasado al siguiente nivel</center>
          </div>


    
    <form action="sqli.php" method="post">
      Ingrese  la cadena mas comun en sql-injection 
    <input type="text" name="sql" id="sql">
    <button class="btn btn-success"   type="submit">Validar</button>
    </form>

    <?php 
    if(isset($_POST['sql']))
      {
        $cadena=$_POST['sql'];
        $con="SELECT * FROM nivel_keys WHERE id_key='2'";
        $resul=mysqli_query($conexion,$con);
        while($fila=mysqli_fetch_assoc($resul)){
          if ($cadena==$fila['nombre_key']) {
          ?>
          <br><br>
          <form action="cripto.php" method="post">
          <button class="btn btn-success"   type="submit">Siguiente nivel</button>
            
          </form>

          <?php
        }


        }

        
       //para cerrar la conexion BuTecPro
    mysqli_close($conexion); 

      }
?>
    
    

    

    

	</section>
</section>
 

</body>

<?php include "script.php"; ?>
</html>